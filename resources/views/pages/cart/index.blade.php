@extends('master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container   clearfix">
    <!-- Shopping cart table -->
            <div class="card">
                <div class="card-header">
                    <h2>Giỏ Hàng</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                        <tr>
                            <th class="text-center py-3 px-4" style="min-width: 400px;">Tên sản phẩm, chi tiết</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Giá</th>
                            <th class="text-center py-3 px-4" style="width: 120px;">Số lượng</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Tiền</th>
                            <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="media align-items-center">
                                    <img style="width: 10%;height:10%" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                                    <div class="media-body">
                                        {{-- link to product --}}
                                    <a href="#" class="d-block text-dark">Product 1</a>


                                    <small>
                                        <span class="text-muted">Color:</span>
                                        <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                                        <span class="text-muted">Size: </span> EU 37 &nbsp;
                                        <span class="text-muted">Ships from: </span> China
                                    </small>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right font-weight-semibold align-middle p-4">$57.55</td>
                            <td class="align-middle p-4">
                                <div class="count-input">
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </td>
                            <td class="text-right font-weight-semibold align-middle p-4">$115.1</td>
                            <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <!-- / Shopping cart table -->

                    <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                    <div class="mt-4">
                    </div>
                    <div class="d-flex">
                        <div class="text-right mt-4">
                            <label class="text-muted font-weight-normal m-0">Thành tiền</label>
                            <div class="text-large">
                                <strong>$1164.65</strong>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="float-right">
                    <a href="/product" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Shop</a>
                    <a href="/checkout" class="btn btn-lg btn-primary mt-2">Thanh toán</a>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
