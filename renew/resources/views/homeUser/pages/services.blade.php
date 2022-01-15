@extends('user_layout')
@section('content')
@include('homeUser.partial_user.slider', ['name'=>'Home','key'=>'Services'])
<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-choices"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Đặt hàng dễ dàng</h3>
                        <p>Thao tác đặt hàng tiện lợi và dễ dàng.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-delivery-truck"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Giao hàng nhanh chóng</h3>
                        <p>Vẫn chuyển sức nóng khi đi tới tay khách hàng không hề giảm.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-coffee-bean"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Cà phê chất lượng cao</h3>
                        <p>Chất lượng khỏi bàn cãi tuyệt vời ông mặt trời.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection