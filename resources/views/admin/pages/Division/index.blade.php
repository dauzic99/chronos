@extends('admin.layouts.template')
@section('title')
    {{ $backUrl }}
@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/themes/prism.min.css"
        integrity="sha512-tN7Ec6zAFaVSG3TpNAKtk4DOHNpSwKHxxrsiw4GHKESGPs5njn/0sMCUMl2svV4wo4BK/rCP7juYz+zx+l6oeQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
        integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $backUrl }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">Master</div>
                    <div class="breadcrumb-item"><a href="{{ route($backUrl) }}">{{ $backUrl }}</a></div>
                    <div class="breadcrumb-item">List</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">List</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-outline-primary" id="btnCreate">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    <span>New {{ $backUrl }}</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="index-table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 5%">
                                                #
                                            </th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th style="width: 20%">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection

@section('modal')
    @include('admin.pages.'.$backUrl.'.modals.create')
    @include('admin.pages.'.$backUrl.'.modals.edit')
    @include('admin.pages.'.$backUrl.'.modals.delete')
    @include('admin.pages.'.$backUrl.'.modals.detail')
@endsection


@section('scripts')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/prism.min.js"
        integrity="sha512-hpZ5pDCF2bRCweL5WoA0/N1elet1KYL5mx3LP555Eg/0ZguaHawxNvEjF6O3rufAChs16HVNhEc6blF/rZoowQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="{{ asset('stisla-master/assets/js/page/modules-datatables.js') }}"></script>
    <script src="{{ asset('stisla-master/assets/js/page/bootstrap-modal.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#index-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: "{{ route($backUrl . '.list') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: true,
                    },
                    {
                        data: 'cover',
                        name: 'cover',
                        orderable: false,
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: true,
                    },
                    {
                        data: 'description',
                        name: 'description',
                        render: function(data) {
                            return htmlDecode(data);
                        },
                        orderable: true,
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                    },
                ],
                columnDefs: [{
                        targets: 0,
                        className: 'dt-body-center'
                    },
                    {
                        targets: 4,
                        className: 'dt-body-center'
                    },
                ],
            });
            createData();
            editData();
            deleteData();
            detailData();

        });

        function clearForm(selector) {
            $(':input', selector)
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .prop('checked', false)
                .prop('selected', false)
                .css({
                    "border-color": "",
                });

            $('#preview-image-before-upload').attr('src', "{{ asset('stisla-master/assets/img/news/img01.jpg') }}");
            $('#form-description').summernote('reset');
        }

        function toastSuccess(message) {
            iziToast.success({
                title: 'Success!',
                message: message,
                position: 'topRight'
            });
        }

        function toastError() {
            iziToast.error({
                title: 'Error!',
                message: 'Silahkan cek kembali input anda',
                position: 'topRight'
            });
        }

        function formValidateSuccess(selector) {
            $(selector).each(function(i, obj) {
                $(obj).css({
                    "border-color": "#28a745",
                });
            });
        }

        function formValidateError(error, selector = '') {
            jQuery.each(error, function(key, val) {
                $("#form-" + key + selector).css({
                    "border-color": "#dc3545",
                });
                $('#error-' + key + selector).html(val);
                $('#error-' + key + selector).show();
            });
        }



        function createData() {
            $('#form-description').summernote({
                placeholder: 'Your New Division Description',
                tabsize: 2,
                height: 100,
            });

            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

            $('#btnCreate').click(function(e) {
                e.preventDefault();
                $('#modalCreate').modal('show');

            });

            $('#createForm').submit(function(e) {
                e.preventDefault();
                $('.invalid-feedback').each(function(i, obj) {
                    $(obj).hide();
                });
                $.ajax({
                    type: 'POST',
                    url: $('#createForm').attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        formValidateSuccess('.form-input');
                        formValidateError(response.error);
                        if (response.hasOwnProperty('success')) {
                            $('#modalCreate').modal('hide');
                            toastSuccess(response.success);
                            clearForm('#createForm');
                            $('#index-table').DataTable().ajax
                                .reload();
                        } else {
                            toastError();
                        }
                    },
                });
            });
        }

        function editData() {
            $('#form-description-edit').summernote({
                placeholder: 'Your New Division Description',
                tabsize: 2,
                height: 100,
            });

            $('#image-edit').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#form-image-edit').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
            $(document).on('click', '.edit', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    url: "{{ route($backUrl . '.detail', '') }}" + "/" + id,
                    dataType: "JSON",
                    success: function(response) {
                        jQuery.each(response.data, function(key, val) {

                            if (key == 'image') {
                                $("#form-" + key + '-edit').attr('src',
                                    "{{ asset('images/' . $backUrl) }}" + "/" + val);
                            } else if ($("#form-" + key + '-edit').hasClass('summer')) {
                                $("#form-" + key + '-edit').summernote("code", val);
                            } else {
                                $("#form-" + key + '-edit').val(val);
                            }

                        });
                    }
                });
                $('#modalEdit').modal('show');
            });

            $('#editForm').submit(function(e) {
                e.preventDefault();
                $('.invalid-feedback').each(function(i, obj) {
                    $(obj).hide();
                });
                $.ajax({
                    type: 'POST',
                    url: $('#editForm').attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        formValidateSuccess('.form-input-edit');
                        formValidateError(response.error, '-edit');
                        if (response.hasOwnProperty('success')) {
                            $('#modalEdit').modal('hide');
                            toastSuccess(response.success);
                            clearForm('#editForm');
                            $('#index-table').DataTable().ajax
                                .reload();
                        } else {
                            toastError();
                        }
                    },
                });
            });
        }

        function deleteData() {
            $(document).on('click', '.delete', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $('#form-id-delete').val(id);
                $('#modalDelete').modal('show');
            });

            $('#deleteForm').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'DELETE',
                    url: $('#deleteForm').attr('action'),
                    data: $('#deleteForm').serialize(),
                    success: function(response) {
                        if (response.hasOwnProperty('success')) {
                            $('#modalDelete').modal('hide');
                            toastSuccess(response.success);
                            $('#index-table').DataTable().ajax
                                .reload();
                        } else {
                            toastError();
                        }
                    },
                });
            });
        }

        function detailData() {
            $(document).on('click', '.view', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    url: "{{ route($backUrl . '.detail', '') }}" + "/" + id,
                    dataType: "JSON",
                    success: function(response) {
                        jQuery.each(response.data, function(key, val) {
                            if (key == 'image') {
                                $("#detail-" + key).attr('src',
                                    "{{ asset('images/' . $backUrl) }}" + "/" + val);
                            } else {
                                $("#detail-" + key).html(val);
                            }
                        });
                    }
                });
                $('#modalDetail').modal('show');
            });
        }

        function htmlDecode(data) {
            var txt = document.createElement('textarea');
            txt.innerHTML = data;
            return txt.value
        }
    </script>

@endsection
