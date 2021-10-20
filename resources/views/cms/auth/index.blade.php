<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>CMS - LOGIN</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/cms/assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/cms/assets/bundles/bootstrap-social/bootstrap-social.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/cms/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/cms/assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/cms/assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/cms/assets/img/favicon.ico')}}' />

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <br><br><br><br><br><br>
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" id="formLogin" class="needs-validation" novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                            required autofocus>
                                        <div class="invalid-feedback">
                                            Mohon isi email anda !
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            {{-- <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div> --}}
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            Mohon isi password anda !
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember_me" class="custom-control-input"
                                                tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" id="buttonLogin"
                                            tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/cms/assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ asset('assets/cms/assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/cms/assets/js/custom.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            function reset() {
                $("input").val('');
            }

            $("#formLogin").on('submit', function (e) {
                e.preventDefault();
                let form = $("#formLogin").serialize();
                $.ajax({
                    type: "post",
                    url: `{{ url('cms/postLogin') }}`,
                    data: form,
                    dataType: "json",
                    beforeSend: function () {
                        $('#buttonLogin').html("Memproses....");
                        $('#buttonLogin').attr('disabled', true);
                    },
                    success: function (response) {
                        $('#buttonLogin').html("Log In");
                        $('#buttonLogin').removeAttr('disabled');
                        if (response.message == 1) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: 'Berhasil Login CMS!',
                            });
                            window.location.href = `{{url('cms/dashboard')}}`;
                        } else if (response.message == 2) {
                            Toast.fire({
                                icon: 'warning',
                                title: 'Username Atau Password Salah !'
                            })
                        }

                    },
                    complete: function () {
                        reset();
                        $('#buttonLogin').removeAttr('disabled');
                        $('#buttonLogin').html("Log In");
                    }
                });
            });
        });

    </script>

</body>

</html>
