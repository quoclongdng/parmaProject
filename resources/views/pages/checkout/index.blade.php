@extends('master')


@section('content')
    <div class="container">

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Giỏ hàng</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Tên sản phẩm</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <div>
                        <h6 class="my-0">Số lượng</h6>
                        <small class="text-muted">2</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Tên sản phẩm</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <div>
                        <h6 class="my-0">Số lượng</h6>
                        <small class="text-muted">2</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Tên sản phẩm</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <div>
                        <h6 class="my-0">Số lượng</h6>
                        <small class="text-muted">2</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (VNĐ)</span>
                    <strong>$20</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Thông tin người mua</h4>
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Họ</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" disabled>

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Tên</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" disabled>

                    </div>
                </div>
                <div class="mb-3">
                    <label for="username">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input disabled type="text" class="form-control" id="username" placeholder="Username" required="">

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Thành phố</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback"> Please select a valid country. </div>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <hr class="mb-4">

                <hr class="mb-4">
                <h4 class="mb-3">Phương thức thanh toán</h4>
                <div class="d-block my-3">
                    <br>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">Thanh toán bằng ví momo</label>
                        <br><img style="width:20%;width:20%" src="https://lh6.googleusercontent.com/PtReS6qd4uexoYVTUAPYRddijCp6mW-GVrtLFklFQdQpHEQbyIfrhI3n_ZW043s3OWTsOYmqIuMzi-Muc0edwfcgesOD-OuwDPKeskVJRD1_ytQ0nfkwvOsVHtVDX3IgubQoZo9q" alt="">
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">Trả tiền sau khi nhận được sản phẩm</label>
                        <br>
                        <img style="width:20%;width:20%" src="data:image/jpeg;base64,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" alt="">
                    </div>
                </div>


                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Thanh toán</button>
            </form>
        </div>
    </div>

</div>
@endsection
