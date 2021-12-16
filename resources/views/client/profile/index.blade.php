@extends('master-homepage')
@section('title')
<div class="row" style="margin-top: 50px">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets_homepage/css/profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&display=swap" rel="stylesheet">

    <div class="container emp-profile">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: 25px">
                    <div class="profile-head">
                                <h2>
                                    {{$data->name}}
                                </h2>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <form action="/user/profile/update" method="post">
                        @csrf
                        <div >
                            <h5 class="text-center mt-2">Chỉnh sửa thông tin</h5>
                            <div class="mt-1 ml-3 ">
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <div class="col-md-12">
                                    <label for="">Full name</label>
                                    <br>
                                    <input name="name" type="text" value="{{$data->name}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Email</label>
                                    <br>
                                    <input name="email" type="text" value="{{$data->email}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Phone Number</label>
                                    <br>
                                    <input name="phone" type="text" value="{{$data->phone}}">
                                </div >
                                <div class="col-md-12 mt-2">
                                    <label for="">Address</label>
                                    <br>
                                    <input name="address" type="text" value="{{$data->address}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <button type="submit" class="btn btn-primary" >Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8" style="font-size: 20px" >
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label style="font-family: 'Bakbak One', cursive;">Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$data->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label style="font-family: 'Bakbak One', cursive;">Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$data->email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label style="font-family: 'Bakbak One', cursive;">Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$data->phone}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label style="font-family: 'Bakbak One', cursive;">Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$data->address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
