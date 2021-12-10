<!-- Modal Add -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalCreate">
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
                            <div class="form-group mt-3">
                                <label for="form-name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control form-input" id="form-name" required>
                                <div class="invalid-feedback" id="error-name">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="form-description" class="form-label">Description</label>
                                <textarea id="form-description" name="description"></textarea>
                                <div class="invalid-feedback" id="error-description">
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
