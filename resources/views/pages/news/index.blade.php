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
                    <span class="username"><em>Người Đăng: </em><a href="#">{{ $value->firstname }} {{$value->lastname }}</a></span>
                    </div>

                    <div class="card-tools">
                        <em>{{ $value->created_at }}</em>
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <h4><a href="">{{ $value->name }}</a> </h4>
                    <p>{{ $value->description }}</p>
                    <div class="attachment-block clearfix ">
                    <img class="attachment-img" style="max-width:100%;" src="{{ $value->avatar }}" class="mw-100" alt="Ảnh">
                    </div>
                    <div>
                        <em>keyword: <span>{{ $value->keyword }}</span></em>
                    </div>
                    <a  href="/admin/news/edit/{{ $value->id }}" class="btn btn-default">Sửa</a>
                    <a href="/admin/news/delete/{{ $value->id }}" class="btn btn-danger">Xoá</a>
                </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
