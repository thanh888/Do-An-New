@extends('user_layout')
@section('content')
@include('homeUser.partial_user.slider', ['name'=>'Home','key'=>'About us'])
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
<br>
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
@endsection