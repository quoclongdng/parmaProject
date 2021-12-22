@extends('master-homepage')
@section('content')
    <section class="shop_grid_area section-padding-80">
        <div class="row mt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="/user/product/search" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="search" name="search" class="form-control form-control-lg" placeholder="Nhập từ khóa...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
            <div class="card text-center">
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top: 20px">
                <div class="col-12 ">
                    <div class="shop_grid_product_area">
                        @if(!isset($data) || count($data) == 0)
                            <div class="text-center text-danger font-weight-bold" colspan="100%">KHÔNG CÓ DỮ LIỆU</div>
                        @else
                        <h1 class="text-center">Tất Cả Sản Phẩm Hiện Có</h1>
                        <div class="row">

                            @foreach ( $data as $key=>$value )
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <input type="hidden" name="id" value="{{ $value->id}}">
                                        <a href="/user/product/detail/{{ $value->id}}">
                                            <div class="single-product-wrapper border p-2 rounded ">
                                                <div class="product-img">
                                                    <img style="object-fit: cover; width:300px; height:300px" src="{{ $value->avatar }}">
                                                    <img style="object-fit: cover; width:300px; height:300px" class="hover-img" src="{{ $value->avatar }}">
                                                    <div class="product-favourite">
                                                        <a href="#" class="fas fa-shopping-bag"></a>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <span>{{ $value->name}}</span>
                                                    <h4>{{ $value->description }}</h4>
                                                    <p style="font-size: 20px;" class="product-price">{{ number_format($value->price) }}VNĐ /chai</p>
                                                </div>
                                                <div>
                                                    <div class="row"    >
                                                        <div class="col-md-12">
                                                            <a href="/user/product/detail/{{$value->id}}">
                                                                <button class="btn btn-danger mt-4" style="width: 100%"><span style="color: white ; font-size: 15px;" > Xem Chi Tiết Sản Phẩm</span></button>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <form action="/user/bill/add2" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$value->id}}" >
                                                                <div class="select-box d-flex mt-1">
                                                                    <input type="hidden" name="quantity" id="quantity" value="1" >
                                                                <button class="btn btn-primary" type="submit" style="width: 100%"><span style="color: white ; font-size: 15px; "> Thêm vào giỏ hàng</span></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                            @endforeach
                            @endif

                        </div>
                    </div>
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
@endsection
{{-- @section('js')
<script>
    $(document).ready(function (e) {
        $(".addToCart").click(function(e){
        var id = $(this).data('id');

    const payload = {
        'id'        : id,
        'quantity'  : $("#quantity").val(),
    };
        $.ajax({
        url       :  '/user/bill/add',
        type      :   'post',
        success   :   function (res){
                console.log(res);

            },
        });

    });

    // $(".addToCart").click(function(e){
    //     var id = $(this).data('id');

    //     const payload = {
    //         'product_id'    : id,
    //         'qty'           : $("#qty_" + id).val(),
    //     };

    //     axios
    //         .post('/user/cart/addCart', payload)
    //         .then((res) => {
    //             displayMessage(res);
    //             loadCart();
    //         })
    //         .catch((err) => {
    //             displayErrors(err);
    //         });

    // });
    $(document).ready(function (e) {
            $(".status").click(function () {
               var id = $(this).data('id');
               var self = $(this);
               console.log('cần đổi trạng thái danh mục có id = ' + id);
               $.ajax({
                    url       :  '/admin/danh-muc/changeStatus/' + id,
                    type      :   'get',
                    success   :   function (res){
                        if (res.status){
                            if (res.type){
                                self.removeClass('btn-danger');
                                self.addClass('btn-success');
                                self.text('Enable');
                            } else{
                                self.removeClass('btn-success');
                                self.addClass('btn-danger');
                                self.text('Disable');
                            }
                        } else {
                            alert('k đùa nha ku');
                        }
                    },
               });
            });
        });
});

</script> --}}
{{-- @endsection --}}

