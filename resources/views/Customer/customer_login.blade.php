<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

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
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form  class="register-form" action="/login" method="post" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label ><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Mail"/>
                            </div>
                            <div class="form-group">
                                <label ><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" id="signin" class="form-submit" value="Login"/>
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
{{-- <script>
    $(document).ready(function (e) {
        $("#signin").click(function (e) {
            console.log("click");
            var email = $("#email").val();
            var password = $("#password").val()
            var payload = {
                'email'         : email,
                'password'      : password,
            };
            $.ajax({
                type: "post",
                url: "/login",
                data: payload,
                success: function ($res) {
                    console.log($res);
                    // if($res){
                    //     toastr.success("Đã Đăng Nhập Thành Công");
                    //     $(window).attr('location','/')
                    // }else{
                    //     toastr.error("Tài khoản đang bị khoá");
                    // }
                },
                error   : function($err){
                        var listError = $err.responseJSON.errors;
                        $.each(listError, function(key, value) {
                            toastr.error(value[0]);
                        });
                    },
            });
        });
    });
</script> --}}
</html>
