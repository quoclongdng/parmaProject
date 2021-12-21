@extends('master-homepage')
@section('title')
<div class="row" style="margin-top: 50px">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets_homepage/css/profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&display=swap" rel="stylesheet">

    <div class="container emp-profile">
        <div class="row" style="margin-left: 30%">
            <div class="card card-outline-secondary">
                <div class="card-header">
                    <h3 class="mb-0">Change Password</h3>
                </div>
                <div class="card-body">
                    <form class="form" action="/user/reset-password" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputPasswordOld">Nhập mật khẩu cũ</label>
                            <input type="password" name="password" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <label for="inputPasswordNew">Nhập Mật Khẩu mới</label>
                            <input type="password" name="new_password" class="form-control"  required>
                            <span class="form-text small text-muted">
                                    The password must be 6-30 characters, and must <em><b> not</b></em> contain spaces.
                                </span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
