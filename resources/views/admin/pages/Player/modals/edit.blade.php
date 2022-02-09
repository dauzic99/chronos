<!-- Modal Add -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEdit">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data {{ $backUrl }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editForm" novalidate method="POST" action="{{ route($backUrl . '.update') }}"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="form-id-edit" value="" name="id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="form-group mt-3">
                                <label for="form-team_id-edit" class="form-label">team</label>
                                <select name="team_id" id="form-team_id-edit" class="form-control form-input select2">
                                    @forelse ($teams as $team)
                                        <option value="{{ $team->id }}"
                                            data-image="{{ asset('images/team/' . $team->image) }}">
                                            {{ $team->name }}</option>
                                    @empty
                                        <option disabled>team not Found</option>
                                    @endforelse
                                </select>
                                <div class="invalid-feedback" id="error-team_id-edit">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="form-name-edit" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control form-input-edit" id="form-name-edit"
                                    required>
                                <div class="invalid-feedback" id="error-name-edit">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="form-description-edit" class="form-label">Description</label>
                                <textarea id="form-description-edit" name="description"
                                    class="summer"></textarea>
                                <div class="invalid-feedback" id="error-description-edit">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group mt-3">
                                <div class="col-12">
                                    <label for="image-edit" class="form-label">Image</label>
                                </div>
                                <div class="col-12">
                                    <input type="file" name="image" placeholder="Choose image" id="image-edit"
                                        class="mb-2">
                                    <div class="invalid-feedback" id="error-image">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <img id="form-image-edit"
                                        src="{{ asset('stisla-master/assets/img/news/img01.jpg') }}"
                                        alt="preview image" style="max-height: 250px;"
                                        class="img-fluid form-input-edit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btn-ubah">Ubah Data</button>
                </div>
            </form>

        </div>
    </div>
</div>
