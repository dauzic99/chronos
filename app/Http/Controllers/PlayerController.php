<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Player;
use App\Models\SocialMedia;
use App\Models\Team;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use File;

class PlayerController extends Controller
{
    public $backUrl = 'Player';
    public function index()
    {
        $teams = Team::all();
        $countries = Country::all();
        return view('admin.pages.' . $this->backUrl . '.index', [
            'backUrl' => $this->backUrl,
            'teams' => $teams,
            'countries' => $countries,
        ]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Player::all();
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
                ->addColumn('team', function ($row) {
                    return $row->team->division->name . ' - ' . $row->team->name;
                })
                ->rawColumns(['cover', 'team', 'action'])
                ->make(true);
        }
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_id' => 'required',
            'name' => 'required',
            'ign' => 'required',
            'role' => 'required',
            'player_role' => 'nullable',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
            'contracted_date' => 'required|date',
            'is_active' => 'required',
            'country_id' => 'required|array',
            'social_site' => 'required|array',
            'social_url' => 'required|array',
            'social_name' => 'required|array',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if (!$validator->passes()) {
            return response()
                ->json([
                    'error' => $validator->messages()
                ]);
        }

        $data = new Player();
        $data->name = $request->name;
        $data->ign = $request->ign;
        $data->role = $request->role;
        $data->player_role = $request->player_role;
        $data->birth_place = $request->birth_place;
        $data->birth_date = $request->birth_date;
        $data->contracted_date = $request->contracted_date;
        $data->is_active = $request->is_active;
        $data->team_id = $request->team_id;
        $data->save();

        // pindah file gambar
        $imageName = $this->backUrl . '-' . $data->slug . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/' . $this->backUrl), $imageName);
        $data->image = $imageName;

        // get description if image summernote
        $description = $request->description;
        $data->description = summerUpload($description, '/images/' . $this->backUrl . '/' . 'uploads/' . $data->slug);
        $data->update();



        $social_name = $request->social_name;
        $social_site = $request->social_site;
        $social_url = $request->social_url;
        $arraySocial = array();
        foreach ($social_name as $key => $name) {
            $array = [
                'name' => $name,
                'url' => $social_url[$key],
                'site' => $social_site[$key]
            ];
            array_push($arraySocial, $array);
        }

        $data->social_media()->createMany(
            $arraySocial
        );
        $data->country()->attach($request->country_id);
        return response()->json([
            'success' => $this->backUrl . ' Created',
        ]);
    }

    public function detail($id)
    {
        $data = Player::with('team.division', 'country', 'social_media')->findOrFail($id);
        return response()->json(['data' => $data]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'division_id' => 'required',
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

        $data = Team::findOrFail($request->id);

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
        $data->division_id = $request->division_id;

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
        $data = Player::findOrFail($request->id);

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
