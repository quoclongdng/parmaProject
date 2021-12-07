@extends('master-homepage')

@section('content')
<div class="contact-area d-flex align-items-center">
    <div class="container-fluid">
        <div class="row" style="margin-top: 100px">
            <div class="col-md-12 text-center mt-4 mb-3">
                <h2>Chỉnh Sửa Thông Tin</h2>
            </div>
            <div class="col-md-6">
                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-3">
                      <input type="email" class="form-control" name="email" placeholder="Email">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="description" placeholder="Description">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                              <option selected>Choose...</option>
                              <option value="1">Mở</option>
                              <option value="2">Đóng</option>
                            </select>
                          </div>
                    </div>
                    <div>
                        <button class="btn btn-primary" >Update</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center mb-2">Thông Tin Cá Nhân</h5>
                        <span>Name: </span>
                        <br>
                        <span>Email : </span>
                        <br>
                        <span>Phone : </span>
                        <br>
                        <span>Address : </span>
                        <br>
                        <span>Description : </span>
                        <br>
                        <span>Status : </span>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
