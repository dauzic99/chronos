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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('flag-icons/css/flag-icons.css') }}">
    {{-- <style>
        select {
            font-family: 'FontAwesome', 'Second Font name'
        }

    </style> --}}
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
                                            <th>Team</th>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('stisla-master/assets/js/page/modules-datatables.js') }}"></script>
    <script src="{{ asset('stisla-master/assets/js/page/bootstrap-modal.js') }}"></script>
    <script src="{{ asset('js/crud-index.js') }}"></script>

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
                        data: 'team',
                        name: 'team',
                        orderable: true,
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
                        targets: 5,
                        className: 'dt-body-center'
                    },
                ],
            });
            createData();
            editData();
            deleteData();
            detailData("{{ route($backUrl . '.detail', '') }}", "{{ asset('images/' . $backUrl) }}",
                '#modalDetail');

            $("#form-team_id").select2({
                templateResult: formatState,
                templateSelection: formatState
            });
            $("#form-country_id").select2({
                templateResult: formatStateIcon,
                templateSelection: formatStateIcon
            });

            $('.form-social-site').select2({
                templateResult: formatStateBrand,
                templateSelection: formatStateBrand
            });
            addSocial();
            removeSocial();

        });

        function addSocial() {
            var html = '<div class="row">' +
                '<div class="col-10 extraSocialCol">' +
                '<div class="form-group">' +
                '<label for="form-social-site" class="form-label">Social Media</label>' +
                '<div class="input-group">' +
                '<div class="input-group-prepend">' +
                '<select name="social_site[]"' +
                ' class="form-control form-social-site form-input">' +
                '<option value="Instagram" data-icon="instagram"></option>' +
                '<option value="Facebook" data-icon="facebook"></option>' +
                '<option value="Youtube" data-icon="youtube"></option>' +
                '<option value="Twitter" data-icon="twitter"></option>' +
                '<option value="Twitch" data-icon="twitch"></option>' +
                '</select>' +
                '</div>' +
                '<input type="text" name="social_url[]" class="form-control form-input form-social-url"' +
                '  required placeholder="Your Social Media URL here">' +
                '<input type="text" name="social_name[]" class="form-control form-input form-social-name"' +
                '  required' +
                ' placeholder="Your Social Media username here">' +
                '</div>' +
                '<div class="invalid-feedback" class="error-social">' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="col-2">' +
                '<div class="form-group">' +
                '<label for="" class="form-label">Action</label><br>' +
                '<button class="btn btn-outline-primary buttonSocialAdd">+</button>&nbsp;&nbsp;&nbsp;' +
                '<button class="btn btn-outline-danger buttonSocialRemove">-</button>' +
                '</div>' +
                '</div>' +
                '</div>';
            $(document).on('click', '.buttonSocialAdd', function(e) {
                e.preventDefault();
                $('#extraSocialRow').append(html);

                $('.form-social-site').each(function(index, element) {
                    if ($(element).data('select2')) {
                        $(element).select2('destroy');
                    }
                    $(element).select2({
                        templateResult: formatStateBrand,
                        templateSelection: formatStateBrand
                    });
                });


            });
        }

        function removeSocial() {

            $(document).on('click', '.buttonSocialRemove', function(e) {
                e.preventDefault();
                var parent_col = $(this).closest('.row').remove();

            });
        }

        function addSocialEdit() {
            var html = '<div class="row">' +
                '<div class="col-10 extraSocialCol">' +
                '<div class="form-group">' +
                '<label for="form-social-site-edit" class="form-label">Social Media</label>' +
                '<div class="input-group">' +
                '<div class="input-group-prepend">' +
                '<select name="social_site[]"' +
                ' class="form-control form-social-site-edit form-input-edit" id="social-site-edit">' +
                '<option value="Instagram" data-icon="instagram"></option>' +
                '<option value="Facebook" data-icon="facebook"></option>' +
                '<option value="Youtube" data-icon="youtube"></option>' +
                '<option value="Twitter" data-icon="twitter"></option>' +
                '<option value="Twitch" data-icon="twitch"></option>' +
                '</select>' +
                '</div>' +
                '<input type="text" name="social_url[]" id="social-url-edit" class="form-control form-input-edit form-social-url-edit"' +
                '  required placeholder="Your Social Media URL here">' +
                '<input type="text" id="social-name-edit" name="social_name[]" class="form-control form-input-edit form-social-name-edit"' +
                '  required' +
                ' placeholder="Your Social Media username here">' +
                '</div>' +
                '<div class="invalid-feedback" class="error-social-edit">' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="col-2">' +
                '<div class="form-group">' +
                '<label for="" class="form-label">Action</label><br>' +
                '<button class="btn btn-outline-primary buttonSocialAddEdit">+</button>&nbsp;&nbsp;&nbsp;' +
                '<button class="btn btn-outline-danger buttonSocialRemoveEdit">-</button>' +
                '</div>' +
                '</div>' +
                '</div>';
            $(document).on('click', '.buttonSocialAddEdit', function(e) {
                e.preventDefault();
                $('#extraSocialRowEdit').append(html);

                $('.form-social-site-edit').each(function(index, element) {
                    if ($(element).data('select2')) {
                        $(element).select2('destroy');
                    }
                    $(element).select2({
                        templateResult: formatStateBrand,
                        templateSelection: formatStateBrand,
                        dropdownParent: $('#modalEdit')

                    });
                });


            });
        }

        function removeSocialEdit() {

            $(document).on('click', '.buttonSocialRemoveEdit', function(e) {
                e.preventDefault();
                var parent_col = $(this).closest('.row').remove();

            });
        }

        function createData() {
            initializeSummer('#form-description', 'Your New Player Description');
            imagePreview('#image', '#preview-image-before-upload');
            modalTrigger('#btnCreate', '#modalCreate');


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
                            clearForm('#createForm', '#preview-image-before-upload',
                                '#form-description',
                                "{{ asset('stisla-master/assets/img/news/img01.jpg') }}");
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
            initializeSummer('#form-description-edit', 'Your New Player Description');
            imagePreview('#image-edit', '#form-image-edit');
            getEditData("{{ route($backUrl . '.detail', '') }}", "{{ asset('images/' . $backUrl) }}", '#modalEdit');

            $("#form-team_id-edit").select2({
                templateResult: formatState,
                templateSelection: formatState,
                dropdownParent: $('#modalEdit')
            });

            $("#form-country_id-edit").select2({
                templateResult: formatStateIcon,
                templateSelection: formatStateIcon,
                dropdownParent: $('#modalEdit')

            });

            $('.form-social-site-edit').select2({
                templateResult: formatStateBrand,
                templateSelection: formatStateBrand,
                dropdownParent: $('#modalEdit')

            });

            $("#form-is_active-edit").select2({
                dropdownParent: $('#modalEdit')
            });

            addSocialEdit();
            removeSocialEdit();

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
                            clearForm('#editForm', '#form-image-edit',
                                '#form-description-edit',
                                "{{ asset('stisla-master/assets/img/news/img01.jpg') }}");
                            $('#index-table').DataTable().ajax
                                .reload();
                        } else {
                            toastError();
                        }
                    },
                });
            });
        }
    </script>

@endsection
