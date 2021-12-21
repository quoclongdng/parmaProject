@extends('master-homepage')
@section('content')

    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(/assets_homepage/img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Tin tức</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="blog-wrapper section-padding-80">
        <div class="container">
            <div class="row">
                @foreach ( $data as $key=>$value )
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="{{ $value->avatar}}" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="#">{{$value->name}}</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="#">{{$value->name}}</a>
                            </div>
                            <p>{{$value->description}}</p>
                            <a href="/user/news/detail/{{$value->id}}">Tiếp tục <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Single Blog Area -->
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
 @endsection
