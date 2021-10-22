@extends('master')

@section('title')
    Danh Sách Tin Tức
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <span class="username"><a href="#">Người đăng</a></span>
                </div>

                <div class="card-tools">
                    <p>Ngày đăng</p>
                </div>
              </div>
              <div class="card-body" style="display: block;">
                <h4><a href="">Tiêu đề</a> </h4>
                <p>Mô tả</p>
                <div class="attachment-block clearfix">
                  <img class="attachment-img" src="../dist/img/photo1.png" alt="Ảnh">
                  <img class="attachment-img" src="../dist/img/photo1.png" alt="Ảnh">
                  <img class="attachment-img" src="../dist/img/photo1.png" alt="Ảnh">
                </div>
                <div>
                    <em>keyword: <span>asd,asd,ád</span></em>
                </div>
                <button type="button" class="btn btn-default">Sửa</button>
                <button type="button" class="btn btn-danger">Xoá</button>
              </div>
              <!-- /.card-body -->

            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <span class="username"><a href="#">Người đăng</a></span>
                </div>
                <div class="card-tools">
                    <p>Ngày đăng</p>
                </div>
              </div>
              <div class="card-body" style="display: block;">
                <h4><a href="">Tiêu đề</a> </h4>
                <p>Mô tả</p>
                <div class="attachment-block clearfix">
                  <img class="attachment-img" src="../dist/img/photo1.png" alt="Ảnh">
                </div>
                <div>
                    <em>keyword: <span>asd,asd,ád</span></em>
                </div>
                <button type="button" class="btn btn-default">Sửa</button>
                <button type="button" class="btn btn-danger">Xoá</button>
              </div>
              <!-- /.card-body -->

            </div>
        </div>
    </div>
@endsection
