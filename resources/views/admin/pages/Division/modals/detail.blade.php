<!-- Modal Add -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalDetail">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail {{ $backUrl }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="index-table" style="width: 100%">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td id="detail-name"></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>:</td>
                                <td id="detail-description"></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>:</td>
                                <td>
                                    <img src="" alt="preview-image" id="detail-image" style="max-width: 200px;">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
