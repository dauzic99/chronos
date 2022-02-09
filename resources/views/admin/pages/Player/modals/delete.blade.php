<!-- Modal Add -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Data {{ $backUrl }} ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="deleteForm" novalidate method="DELETE" action="{{ route($backUrl . '.delete') }}" method="post">
                @csrf
                <input type="hidden" id="form-id-delete" value="" name="id">
                <div class="modal-body">
                    <p>Anda tidak dapat mengembalikan data setelah dihapus</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger" id="btn-tambah">Hapus Data</button>
                </div>
            </form>

        </div>
    </div>
</div>
