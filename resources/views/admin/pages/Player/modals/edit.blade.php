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
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <label for="form-team_id-edit" class="form-label">Team</label>
                                        <select name="team_id" id="form-team_id-edit"
                                            class="form-control form-input-edit select2">
                                            @forelse ($teams as $team)
                                                <option value="{{ $team->id }}"
                                                    data-image="{{ asset('images/Team/' . $team->image) }}">
                                                    {{ $team->name }}</option>
                                            @empty
                                                <option disabled>Team not Found</option>
                                            @endforelse
                                        </select>
                                        <div class="invalid-feedback" id="error-team_id-edit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-name-edit" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control form-input-edit"
                                            id="form-name-edit" required>
                                        <div class="invalid-feedback" id="error-name-edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-ign-edit" class="form-label">IGN</label>
                                        <input type="text" name="ign" class="form-control form-input-edit"
                                            id="form-ign-edit" required>
                                        <div class="invalid-feedback" id="error-ign-edit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-role-edit" class="form-label">Role</label>
                                        <select name="role" id="form-role-edit"
                                            class="form-control form-input-edit select2">
                                            <option value="Player">Player</option>
                                            <option value="Coach">Coach</option>
                                            <option value="Standin">Standin</option>
                                            <option value="Ambassador">Ambassador</option>
                                            <option value="Streamer">Streamer</option>
                                        </select>
                                        <div class="invalid-feedback" id="error-role-edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-player_role-edit" class="form-label">Player Role</label>
                                        <input type="text" name="player_role" class="form-control form-input-edit"
                                            id="form-player_role-edit" placeholder="Kosongkan jika Bukan Pemain">
                                        <div class="invalid-feedback" id="error-player_role-edit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-birth_place-edit" class="form-label">Birth Place</label>
                                        <input type="text" name="birth_place" class="form-control form-input-edit"
                                            id="form-birth_place-edit" required>
                                        <div class="invalid-feedback" id="error-birth_place-edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-birth_date-edit" class="form-label">Birth Date</label>
                                        <input type="date" name="birth_date" class="form-control form-input-edit"
                                            id="form-birth_date-edit" required>
                                        <div class="invalid-feedback" id="error-birth_date-edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-contracted_date-edit" class="form-label">Contracted
                                            Date</label>
                                        <input type="date" name="contracted_date" class="form-control form-input-edit"
                                            id="form-contracted_date-edit" required>
                                        <div class="invalid-feedback" id="error-contracted_date-edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-is_active-edit" class="form-label">Status</label>
                                        <select name="is_active" id="form-is_active-edit"
                                            class="form-control form-input-edit select2">
                                            <option value="1">Aktif</option>
                                            <option value="0">Non Aktif</option>
                                        </select>
                                        <div class="invalid-feedback" id="error-is_active-edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="form-country_id-edit" class="form-label">Nationality</label>
                                        <select name="country_id[]" id="form-country_id-edit"
                                            class="form-control form-input-edit select2" multiple="multiple">
                                            @forelse ($countries as $country)
                                                <option value="{{ $country->id }}" data-icon="{{ $country->code }}">
                                                    {{ $country->name }}</option>
                                            @empty
                                                <option disabled>Country not Found</option>
                                            @endforelse
                                        </select>
                                        <div class="invalid-feedback" id="error-country_id-edit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <label for="form-social-site-edit" class="form-label">Social Media</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select name="social_site[]" id="social-site-edit"
                                                    class="form-control form-social-site-edit form-input-edit">
                                                    <option value="Instagram" data-icon="instagram"></option>
                                                    <option value="Facebook" data-icon="facebook"></option>
                                                    <option value="Youtube" data-icon="youtube"></option>
                                                    <option value="Twitter" data-icon="twitter"></option>
                                                    <option value="Twitch" data-icon="twitch"></option>
                                                </select>
                                            </div>
                                            <input type="text" name="social_url[]" id="social-url-edit"
                                                class="form-control form-input-edit form-social-url-edit" required
                                                placeholder="Your Social Media URL here">
                                            <input type="text" name="social_name[]" id="social-name-edit"
                                                class="form-control form-input-edit form-social-name-edit" required
                                                placeholder="Your Social Media username here">
                                        </div>
                                        <div class="invalid-feedback" class="error-social-edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">

                                    <div class="form-group">
                                        <label for="" class="form-label">Action</label><br>
                                        <button class="btn btn-outline-primary buttonSocialAddEdit">+</button>
                                    </div>

                                </div>
                            </div>
                            <div id="extraSocialRowEdit">

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="form-description-edit" class="form-label">Description</label>
                                        <textarea id="form-description-edit" name="description"
                                            class="summer"></textarea>
                                        <div class="invalid-feedback" id="error-description-edit">
                                        </div>
                                    </div>
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
                                    <div class="invalid-feedback" id="error-image-edit">
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
