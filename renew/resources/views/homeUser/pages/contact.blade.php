@extends('user_layout')
@section('content')
@include('homeUser.partial_user.slider', ['name'=>'Home','key'=>'Liên hệ với chúng tôi'])

<section class="ftco-section contact-section">
    <div class="container mt-5">
        <div class="row block-9">
            <div class="col-md-4 contact-info ftco-animate">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h2 class="h4">Liên hệ với chúng tôi</h2>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Phone:</span> <a href="tel://0392261811">+84 392 261 811</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Email:</span> <a href="mailto:tvhieu.20it1@vku.udn.vn">tvhieu.20it1@vku.udn.vn</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
                <form action="{{ route('home.sendcontact') }}" method="post" class="contact-form">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Tên của bạn">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Tiêu đề">
                    </div>
                    <div class="form-group">
                        <input name="content" cols="30" rows="7" class="form-control" placeholder="Nội dung"></input>
                    </div>
                    <div class="form-group">
                        <input type="submit" onclick="return confirm('Xác nhận gửi')" value="Gửi"
                            class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection