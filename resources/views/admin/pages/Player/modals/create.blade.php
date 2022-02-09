<!-- Modal Add -->
<div class="modal fade" role="dialog" id="modalCreate">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New {{ $backUrl }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="createForm" novalidate method="POST" action="{{ route($backUrl . '.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <label for="form-team_id" class="form-label">Team</label>
                                        <select name="team_id" id="form-team_id"
                                            class="form-control form-input select2">
                                            @forelse ($teams as $team)
                                                <option value="{{ $team->id }}"
                                                    data-image="{{ asset('images/Team/' . $team->image) }}">
                                                    {{ $team->name }}</option>
                                            @empty
                                                <option disabled>Team not Found</option>
                                            @endforelse
                                        </select>
                                        <div class="invalid-feedback" id="error-team_id">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control form-input" id="form-name"
                                            required>
                                        <div class="invalid-feedback" id="error-name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-ign" class="form-label">IGN</label>
                                        <input type="text" name="ign" class="form-control form-input" id="form-ign"
                                            required>
                                        <div class="invalid-feedback" id="error-ign">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-role" class="form-label">Role</label>
                                        <select name="role" id="form-role" class="form-control form-input select2">
                                            <option value="Player">Player</option>
                                            <option value="Coach">Coach</option>
                                            <option value="Standin">Standin</option>
                                            <option value="Ambassador">Ambassador</option>
                                            <option value="Streamer">Streamer</option>
                                        </select>
                                        <div class="invalid-feedback" id="error-role">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-player_role" class="form-label">Player Role</label>
                                        <input type="text" name="player_role" class="form-control form-input"
                                            id="form-player_role" placeholder="Kosongkan jika Bukan Pemain">
                                        <div class="invalid-feedback" id="error-player_role">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-birth_place" class="form-label">Birth Place</label>
                                        <input type="text" name="birth_place" class="form-control form-input"
                                            id="form-birth_place" required>
                                        <div class="invalid-feedback" id="error-birth_place">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-birth_date" class="form-label">Birth Date</label>
                                        <input type="date" name="birth_date" class="form-control form-input"
                                            id="form-birth_date" required>
                                        <div class="invalid-feedback" id="error-birth_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-contracted_date" class="form-label">Contracted Date</label>
                                        <input type="date" name="contracted_date" class="form-control form-input"
                                            id="form-contracted_date" required>
                                        <div class="invalid-feedback" id="error-contracted_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-is_active" class="form-label">Status</label>
                                        <select name="is_active" id="form-is_active"
                                            class="form-control form-input select2">
                                            <option value="1">Aktif</option>
                                            <option value="0">Non Aktif</option>
                                        </select>
                                        <div class="invalid-feedback" id="error-is_active">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="form-country_id" class="form-label">Nationality</label>
                                        <select name="country_id[]" id="form-country_id"
                                            class="form-control form-input select2" multiple="multiple">
                                            @forelse ($countries as $country)
                                                <option value="{{ $country->id }}" data-icon="{{ $country->code }}">
                                                    {{ $country->name }}</option>
                                            @empty
                                                <option disabled>Country not Found</option>
                                            @endforelse
                                        </select>
                                        <div class="invalid-feedback" id="error-country_id">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <label for="form-social-site" class="form-label">Social Media</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select name="social_site[]"
                                                    class="form-control form-social-site form-input">
                                                    <option value="Instagram" data-icon="instagram"></option>
                                                    <option value="Facebook" data-icon="facebook"></option>
                                                    <option value="Youtube" data-icon="youtube"></option>
                                                    <option value="Twitter" data-icon="twitter"></option>
                                                    <option value="Twitch" data-icon="twitch"></option>
                                                </select>
                                            </div>
                                            <input type="text" name="social_url[]"
                                                class="form-control form-input form-social-url" required
                                                placeholder="Your Social Media URL here">
                                            <input type="text" name="social_name[]"
                                                class="form-control form-input form-social-name" required
                                                placeholder="Your Social Media username here">
                                        </div>
                                        <div class="invalid-feedback" class="error-social">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">

                                    <div class="form-group">
                                        <label for="" class="form-label">Action</label><br>
                                        <button class="btn btn-outline-primary buttonSocialAdd">+</button>
                                    </div>

                                </div>
                            </div>
                            <div id="extraSocialRow">

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="form-description" class="form-label">Description</label>
                                        <textarea id="form-description" name="description"></textarea>
                                        <div class="invalid-feedback" id="error-description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group mt-3">
                                <div class="col-12">
                                    <label for="image" class="form-label">Image</label>
                                </div>
                                <div class="col-12">
                                    <input type="file" name="image" placeholder="Choose image" id="image"
                                        class="mb-2">
                                    <div class="invalid-feedback" id="error-image">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <img id="preview-image-before-upload"
                                        src="{{ asset('stisla-master/assets/img/news/img01.jpg') }}"
                                        alt="preview image" style="max-height: 250px;" class="img-fluid form-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btn-tambah">Tambah Data</button>
                </div>
            </form>

        </div>
    </div>
</div>
