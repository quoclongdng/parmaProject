@extends('master-homepage')

@section('content')
    <div class="row">
            <div class="col-md-12" style="margin-top: 100px">
                <div class="row mb-4 text-center">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1 class="display-6">Nạp Tiền Vào Tài Khoản</h1>
                    </div>
                </div> <!-- End -->
                <div class="row">
                    <div class="col-md-7 ml-3 ">
                        <div class="card ">
                            <div class="card-header">
                                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                    <!-- Credit card form tabs -->
                                    <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                        <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Infomation </a> </li>
                                    </ul>
                                </div> <!-- End -->
                                <!-- Credit card form content -->
                                <div class="tab-content">
                                    <!-- credit card info-->
                                    <div id="credit-card" class="tab-pane fade show active pt-3">
                                        <form role="form" action="/user/bank" method="post">
                                            @csrf
                                            <div class="form-group"> <label >
                                                    <h6>Tên Chủ Tài Khoản</h6>
                                                </label> <input type="text" name="name" placeholder="Nhập Tên Chủ Tài Khoản" required class="form-control "> </div>
                                            <div class="form-group"> <label for="cardNumber">
                                                    <h6>Số Tài Khoản</h6>
                                                </label>
                                                <div class="input-group"> <input type="text" name="soTaiKhoan" placeholder="Số Tài Khoản" class="form-control " required>
                                                    <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label >
                                                    <h6>Ngân Hàng</h6>
                                                </label>
                                                <input type="text" name="bank"  required class="form-control ">
                                            </div>
                                            <div class="form-group">
                                                <label >
                                                    <h6>Số Tiền</h6>
                                                </label>
                                                <input type="text" name="soTien" required class="form-control ">
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group"> <label><span class="hidden-xs">
                                                                <h6>Expiration Date</h6>
                                                            </span></label>
                                                        <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                        </label> <input type="text" required class="form-control"> </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                 <button type="submit"  class="subscribe btn btn-primary btn-block shadow-sm"> Nạp Tiền </button>
                                            </div>
                                        </form>
                                    </div>
                                </div> <!-- End -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-left: 15px">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title btn btn-info" style="width: 100%"><b> Số Dư Tài Khoản</b></h5>
                                <span><b style="margin-right: 40%">Amount :       </b>{{number_format($data->amount)}} <b>VNĐ</b></span>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
