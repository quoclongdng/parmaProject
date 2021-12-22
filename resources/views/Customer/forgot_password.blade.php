<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/assets_login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/assets_login/css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- END: Custom CSS-->
    @toastr_css
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="/assets_login/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link" style="color: forestgreen">Login</a>
                    </div>

                    <div class="signin-form">
                        <p style="font-size: 30px; color: black ; margin-bottom: 20px" ><b>Confirm Password</b></p>
                        {{-- <h2 class="form-title"></h2> --}}
                        <form  class="register-form" action="/forgot-password" method="post" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label ><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Nhập Email"/>
                            </div>
                            <div class="form-group">
                                <label ><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password"  placeholder="Nhập mật khẩu mới"/>
                            </div>
                            <div class="form-group">
                                <label ><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="re-password"  placeholder="Nhập lại mật khẩu mới"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit"  class="form-submit" value="Lấy Lại Mật Khẩu"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
    @jquery
    @toastr_js
    @toastr_render
    <!-- JS -->
    <script src="/assets_login/vendor/jquery/jquery.min.js"></script>
    <script src="/assets_login/js/main.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        @if(count($errors) > 0)
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
</body>
</html>
