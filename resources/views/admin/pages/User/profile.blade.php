@extends('admin.layouts.template')
@section('title')
    Profile
@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
        integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">Profile</div>
                </div>
            </div>
            <div class="section-body">


                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">
                                <img alt="image" src="{{ asset('stisla-master/assets/img/avatar/avatar-1.png') }}"
                                    class="rounded-circle profile-widget-picture">
                            </div>
                            <div class="profile-widget-description">
                                <div class="profile-widget-name">
                                    <div class="d-inline font-weight-bold" id="profile-name">
                                        {{ Auth()->user()->name }}
                                    </div>

                                    <div class="text-muted d-inline font-weight-normal">
                                        <div class="slash"></div> {{ Auth()->user()->role }}
                                    </div>
                                </div>
                                <hr>
                                <h4
                                    style="font-size: 16px;line-height: 28px;color: #6777ef;padding-right: 10px;margin-bottom: 0;">
                                    Edit Profile</h4>
                                <hr>

                                <form class="" novalidate method=" POST" action="{{ route('Profile.changeProfile') }}"
                                    id="form-profile">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control form-profile" required="" name="name"
                                            id="form-name">
                                        <div class="invalid-feedback" id="error-name">
                                            Nama Anda Harus Diisi
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control form-profile" required="" name="username"
                                            id="form-username">
                                        <div class="invalid-feedback" id="error-username">
                                            Username Anda Harus Diisi
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Update Profile</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7" style="margin-top: 34px">
                        <div class="card">
                            <form method="post" novalidate id="form-password-change">
                                @csrf
                                <div class="card-header">
                                    <h4>Edit Password</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <div class="input-group show_hide_password">
                                            <input type="password" class="form-control form-password" value=""
                                                placeholder="Enter Current Password" autocomplete="current_password"
                                                name="current_password" id="form-current_password" />
                                            <a href="javascript:;" class="input-group-text bg-transparent">
                                                <i class='fa fa-eye-slash'></i>
                                            </a>
                                        </div>
                                        <div class="invalid-feedback" id="error-current_password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <div class="input-group show_hide_password">
                                            <input type="password" class="form-control form-password" value=""
                                                placeholder="Enter New Password" autocomplete="new-password" name="password"
                                                id="form-password" />
                                            <a href="javascript:;" class="input-group-text bg-transparent">
                                                <i class='fa fa-eye-slash'></i>
                                            </a>
                                        </div>
                                        <div class="invalid-feedback" id="error-password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <div class="input-group show_hide_password">
                                            <input type="password" class="form-control form-password" value=""
                                                placeholder="Confirm New Password" autocomplete="new-password"
                                                name="password_confirmation" id="form-password_confirmation" />
                                            <a href="javascript:;" class="input-group-text bg-transparent">
                                                <i class='fa fa-eye-slash'></i>
                                            </a>
                                        </div>
                                        <div class="invalid-feedback" id="error-password_confirmation">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Update Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            ProfileSubmit();
            PasswordSubmit();
            toggle_password();
        });

        function toggle_password() {
            $(".show_hide_password > a").on('click', function(event) {
                // console.log($(this).closest('.show_hide_password').find('input').attr("type"));
                event.preventDefault();
                if ($(this).closest('.show_hide_password').find('input').attr("type") == "text") {

                    $(this).closest('.show_hide_password').find('input').attr('type', 'password');
                    $(this).closest('.show_hide_password').find('i').addClass("fa-eye-slash");
                    $(this).closest('.show_hide_password').find('i').removeClass("fa-eye");
                } else if ($(this).closest('.show_hide_password').find('input').attr("type") ==
                    "password") {
                    $(this).closest('.show_hide_password').find('input').attr('type', 'text');
                    $(this).closest('.show_hide_password').find('i').removeClass("fa-eye-slash");
                    $(this).closest('.show_hide_password').find('i').addClass("fa-eye");
                }
            });
        }



        function ProfileSubmit() {
            $('#form-profile').submit(function(e) {
                e.preventDefault();
                var $form = $(this);
                $('.invalid-feedback').each(function(i, obj) {
                    $(obj).hide();
                });
                $.ajax({
                    type: 'POST',
                    url: "{{ route('Profile.changeProfile') }}",
                    data: $('#form-profile').serialize(),
                    success: function(response) {
                        $('.form-profile').each(function(i, obj) {
                            $(obj).css({
                                "border-color": "#28a745",
                            });
                        });
                        jQuery.each(response.error, function(key, val) {
                            $("#form-" + key).css({
                                "border-color": "#dc3545",

                            });
                            $('#error-' + key).html(val);
                            $('#error-' + key).show();
                        });
                        if (response.hasOwnProperty('success')) {
                            iziToast.success({
                                title: 'Success!',
                                message: response.success,
                                position: 'topRight'
                            });
                            $('#profile-name').html(response.name);
                            $('#navbar-name').html('Hi, ' + response.name);
                        } else {
                            iziToast.error({
                                title: 'Error!',
                                message: 'Silahkan cek kembali input anda',
                                position: 'topRight'
                            });
                        }
                    },
                });
            });
        }

        function PasswordSubmit() {
            $('#form-password-change').submit(function(e) {
                e.preventDefault();
                var $form = $(this);
                $('.invalid-feedback').each(function(i, obj) {
                    $(obj).hide();
                });
                $.ajax({
                    type: 'POST',
                    url: "{{ route('Profile.changePassword') }}",
                    data: $('#form-password-change').serialize(),
                    success: function(response) {
                        $('.form-password').each(function(i, obj) {
                            $(obj).css({
                                "border-color": "#28a745",
                            });
                        });
                        jQuery.each(response.error, function(key, val) {
                            $("#form-" + key).css({
                                "border-color": "#dc3545",

                            });
                            $('#error-' + key).html(val);
                            $('#error-' + key).show();
                        });
                        if (response.hasOwnProperty('success')) {
                            iziToast.success({
                                title: 'Success!',
                                message: response.success,
                                position: 'topRight'
                            });
                        } else {
                            iziToast.error({
                                title: 'Error!',
                                message: 'Silahkan cek kembali input anda',
                                position: 'topRight'
                            });
                        }
                    },
                });
            });
        }
    </script>

@endsection
