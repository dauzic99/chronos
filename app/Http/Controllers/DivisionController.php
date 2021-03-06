<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use File;

class DivisionController extends Controller
{
    public $backUrl = 'Division';
    public function index()
    {
        return view('admin.pages.' . $this->backUrl . '.index', [
            'backUrl' => $this->backUrl,
        ]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Division::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $button = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="view btn btn-outline-secondary btn-sm mr-2 mb-2" style="">Detail</a>';
                    $button .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="edit btn btn-outline-info btn-sm mr-2 mb-2">Ubah</a>';
                    $button .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="delete btn btn-outline-danger btn-sm mb-2">Hapus</a>';
                    return $button;
                })
                ->addColumn('cover', function ($row) {
                    $url = asset('images/' . $this->backUrl . '/' . $row->image);
                    return '<img src="' . $url . '" border="0" width="200" class="img-fluid" />';
                })
                ->rawColumns(['cover', 'action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if (!$validator->passes()) {
            return response()
                ->json([
                    'error' => $validator->messages()
                ]);
        }

        $data = new Division();
        $data->name = $request->name;
        $data->save();

        // pindah file gambar
        $imageName = $this->backUrl . '-' . $data->slug . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/' . $this->backUrl), $imageName);
        $data->image = $imageName;

        // get description if image summernote
        $description = $request->description;
        $data->description = summerUpload($description, '/images/' . $this->backUrl . '/' . 'uploads/' . $data->slug);
        $data->update();

        return response()->json([
            'success' => $this->backUrl . ' Created',
        ]);
    }



    public function detail($id)
    {
        $data = Division::findOrFail($id);
        return response()->json(['data' => $data]);
    }

    function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if (!$validator->passes()) {
            return response()
                ->json([
                    'error' => $validator->messages()
                ]);
        }

        $data = Division::findOrFail($request->id);

        if ($request->image != null) {
            // pindah file gambar
            $imageName = $this->backUrl . '-' . $request->slug . '.' . $request->image->extension();
            $request->image->move(public_path('images/' . $this->backUrl), $imageName);
            if (File::exists(public_path('images/' . $this->backUrl . '/' . $data->image))) {
                File::delete(public_path('images/' . $this->backUrl . '/' . $data->image));
            }
            $data->image = $imageName;
        }

        if (File::exists(public_path() . '/images/' . $this->backUrl . '/' . 'uploads/' . $data->slug)) {
            File::deleteDirectory(public_path() . '/images/' . $this->backUrl . '/' . 'uploads/' . $data->slug);
        }

        $data->name = $request->name;

        $data->update();

        $description = $request->description;
        $data->description = summerUpload($description, '/images/' . $this->backUrl . '/' . 'uploads/' . $data->slug);
        $data->update();

        return response()->json([
            'success' => $this->backUrl . ' Created',
        ]);
    }

    public function destroy(Request $request)
    {
        $data = Division::findOrFail($request->id);

        if ($data->delete()) {
            if (File::exists(public_path('images/' . $this->backUrl . '/' . $data->image))) {
                File::delete(public_path('images/' . $this->backUrl . '/' . $data->image));
            } else {
            }

            if (File::exists(public_path() . '/images/' . $this->backUrl . '/' . 'uploads/' . $data->slug)) {
                File::deleteDirectory(public_path() . '/images/' . $this->backUrl . '/' . 'uploads/' . $data->slug);
            }
            return response()->json(['success' => $this->backUrl . ' deleted successfully'], 200);
        }
        return response()->json(['errors' => $this->backUrl . ' not found'], 404);
    }
}
