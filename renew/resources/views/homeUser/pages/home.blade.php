@extends('user_layout')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{asset('frontend/images/bg_1.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Chào mừng</span>
                    <h1 class="mb-4">Những trải nghiệm về hương vị cà phê hảo hạng nhất </h1>
                    <p class="mb-4 mb-md-5">Cà phê ngon cũng giống như tình bạn: đậm đà, nồng ấm và bền chặt.</p>
                    <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt hàng ngay</a> <a href="#"
                            class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"> Menu</a></p>
                </div>

            </div>
        </div>
    </div>
    <div class="slider-item" style="background-image: url({{asset('frontend/images/bg_2.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Chào mừng</span>
                    <h1 class="mb-4">Hương vị tuyệt vời &amp; Chỗ ngồi lý tưởng</h1>
                    <p class="mb-4 mb-md-5">Cà phê ngon cũng giống như tình bạn: đậm đà, nồng ấm và bền chặt.</p>
                    <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt hàng ngay</a> <a href="#"
                            class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"> Menu</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url({{asset('frontend/images/bg_3.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Chào mừng</span>
                    <h1 class="mb-4">Thơm ngon, nóng hổi và luôn sẵn sàng phục vụ</h1>
                    <p class="mb-4 mb-md-5">Cà phê ngon cũng giống như tình bạn: đậm đà, nồng ấm và bền chặt.</p>
                    <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt hàng ngay</a> <a href="#"
                            class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"> Menu</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>000 (123) 456 7890</h3>
                            <p>Cà phê ngon cũng giống như tình bạn: đậm đà, nồng ấm và bền chặt.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>243 Hùng Vương</h3>
                            <p> 47, Đại Học Công Nghệ Thông Tin Việt hàn</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Mở cửa : Thứ 2 - Thứ 6</h3>
                            <p>8:00am - 9:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book p-4">
                <h3>Đặt bàn trước</h3>
                <form action="{{ route('home.setappointment') }}" class="appointment-form">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Họ và Tên">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" name="date" class="form-control appointment_date"
                                    placeholder="Ngày đặt">
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input type="text" name="time" class="form-control appointment_time"
                                    placeholder="Thời gian">
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" name="phone" class="form-control" placeholder="SDT">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <textarea name="descript" cols="30" rows="2" class="form-control"
                                placeholder="Yêu cầu đi kèm"></textarea>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="submit" value="Đặt Bàn" class="btn btn-white py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url({{asset('frontend/images/about.jpg')}});"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate ">
                <span class="subheading">Tìm Hiểu</span>
                <h2 class="mb-4">Our Story</h2>
            </div>
            <div>
                <p>{{ $pt->content }}</p>
            </div>
        </div>
    </div>
</section>

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

<section class="ftco-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
                    <span class="subheading">Tìm hiểu</span>
                    <h2 class="mb-4"> Menu</h2>
                    <p class="mb-4">Thức uống được chế biến từ cà phê. Về chất lượng được tuyển chọn khắt khe từ khâu thu hoạch, phơi khô, rang sấy cũng như giai đoạn pha chế. Khách hàng có thể yên tâm để gửi gắm niềm tin vào thương hiệu thức uống từ Cà phê của chúng tôi. Bên cạnh các thức uống từ Cà phê quán còn phục vụ thêm bánh ngọt, kem.. ..</p>
                    <p><a href="{{ route('Menu.index') }}" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img"
                                style="background-image: url({{asset('frontend/images/menu-1.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img"
                                style="background-image: url({{asset('frontend/images/menu-2.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img"
                                style="background-image: url({{asset('frontend/images/menu-3.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img"
                                style="background-image: url({{asset('frontend/images/menu-4.jpg')}});"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter ftco-bg-dark img" id="section-counter"
    style="background-image: url({{asset('frontend/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="100">0</strong>
                                <span>Tổng chi nhánh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="85">0</strong>
                                <span>Giải thưởng đạt được</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="10567">0</strong>
                                <span>Khách hàng hài lòng</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="900">0</strong>
                                <span>Nhân sự</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Tìm hiểu</span>
                <h2 class="mb-4">Các món bán chạy nhất</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img"
                        style="background-image: url({{asset('frontend/images/menu-1.jpg')}});"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ hàng</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img"
                        style="background-image: url({{asset('frontend/images/menu-2.jpg')}});"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ hàng</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img"
                        style="background-image: url({{asset('frontend/images/menu-3.jpg')}});"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ hàng</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img"
                        style="background-image: url({{asset('frontend/images/menu-4.jpg')}});"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ hàng</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center"
                    style="background-image: url({{asset('frontend/images/gallery-1.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center"
                    style="background-image: url({{asset('frontend/images/gallery-2.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center"
                    style="background-image: url({{asset('frontend/images/gallery-3.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center"
                    style="background-image: url({{asset('frontend/images/gallery-4.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-menu">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Tìm hiểu</span>
                <h2 class="mb-4">Những thành phẩm của chúng tôi</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts.</p>
            </div>
        </div>
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                role="tab" aria-controls="v-pills-1" aria-selected="true">Main Dish</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                aria-controls="v-pills-2" aria-selected="false">Drinks</a>

                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                aria-controls="v-pills-3" aria-selected="false">Desserts</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('frontend/images/dish-1.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Grilled Beef</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ
                                                        hàng
                                                    </a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('frontend/images/dish-2.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Grilled Beef</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ
                                                        hàng
                                                    </a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('frontend/images/dish-3.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Grilled Beef</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ
                                                        hàng
                                                    </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('frontend/images/drink-1.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Lemonade Juice</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ
                                                        hàng
                                                    </a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('frontend/images/drink-2.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Pineapple Juice</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ
                                                        hàng
                                                    </a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('frontend/images/drink-3.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Soda Drinks</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('frontend/images/dessert-1.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Hot Cake Honey</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('frontend/images/dessert-2.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Hot Cake Honey</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{asset('frontend/images/dessert-3.jpg')}});"></a>
                                            <div class="text">
                                                <h3><a href="#">Hot Cake Honey</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section img" id="ftco-testimony"
    style="background-image: url({{asset('frontend/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Tìm hiểu</span>
                <h2 class="mb-4">Customers Says</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts.</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row d-flex no-gutters">
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Đã từng làm việc với nhiều bên kinh doanh và phát triển web.&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="{{asset('images/person_1.jpg')}}" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end">
                <div class="testimony overlay">
                    <blockquote>
                        <p>&ldquo;Đối với một công ty kinh doanh trong thời kỳ công nghệ số như hiện nay thì website đóng một vai trò hết sức quan trọng. Và bài toán đặt ra khi bạn bắt đầu cho một website chính là lựa chọn đơn vị thiết kế.&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="{{asset('images/person_2.jpg')}}" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Các mẫu thiết kế rất độc đáo và ấn tượng. Dịch vụ chăm sóc khách hàng tuyệt vời, tận tâm. Mình sẽ còn hợp tác lâu dài cùng Tất Thành. Chúc các bạn phát triển mạnh hơn nữa trong thời gian tới..
                            &rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="{{asset('images/person_3.jpg')}}" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end">
                <div class="testimony overlay">
                    <blockquote>
                        <p>&ldquo;Các bạn có phong cách trẻ trung, năng động và có ý thức cầu tiến rất cao, chính vì vậy tôi hoàn toàn yên tâm khi giao các ý tưởng phát triển.&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="{{asset('images/person_2.jpg')}}" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Nhân viên nhiệt tình và chuyên nghiệp. Tất Thành luôn đề xuất những ý tưởng và đưa ra những tư vấn tốt nhất cho doanh nghiệp. Đội ngũ chăm sóc khách hàng luôn can thiệp kịp thời để giải quyết các sự cố mà chúng tôi gặp phải..
                            &rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="{{asset('images/person_3.jpg')}}" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<section class="ftco-appointment">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-12 d-flex align-self-stretch">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.736468488049!2d108.25128751438706!3d15.975132788939103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314211f3bb84f4db%3A0xd06b5de33a4a6157!2zxJDhuqBJIEjhu4xDIEPDlE5HIE5HSOG7hiBUSMOUTkcgVElOIFbDgCBUUlVZ4buATiBUSMOUTkcgVknhu4ZUIEjDgE4gLSDEkOG6oEkgSOG7jEMgxJDDgCBO4bq0Tkc!5e0!3m2!1svi!2s!4v1642251815502!5m2!1svi!2s"  allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

</script>
@endsection