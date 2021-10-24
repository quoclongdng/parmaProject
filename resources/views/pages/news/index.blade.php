@extends('master')

@section('title')
    Danh Sách Tin Tức
@endsection

@section('content')
    <div class="row">
        @foreach ($data as $key=>$value)


        <div class="col-md-12">
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <span class="username"><em>Nguoi dang: </em><a href="#">{{ $value->user_id }}</a></span>
                </div>

                <div class="card-tools">
                    <em>{{ $value->created_at }}</em>
                </div>
              </div>
              <div class="card-body" style="display: block;">
                <h4><a href="">{{ $value->name }}</a> </h4>
                <p>{{ $value->description }}</p>
                <div class="attachment-block clearfix">
                  <img class="attachment-img" src="{{ $value->avatar }}" alt="Ảnh">
                 </div>
                <div>
                    <em>keyword: <span>{{ $value->keyword }}</span></em>
                </div>
                <a  href="/news/edit/{{ $value->id }}" class="btn btn-default">Sửa</a>
                <a href="/news/delete/{{ $value->id }}" class="btn btn-danger">Xoá</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
