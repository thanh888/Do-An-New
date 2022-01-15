@extends('user_layout')
@section('content')
@include('homeUser.partial_user.slider', ['name'=>'Home','key'=>'Blog'])
<section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('frontend/images/image_1.jpg') }});">
            </a>
            <div class="text py-4 d-block">
                <div class="meta">
                <div><a href="#">Sept 28, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('frontend/images/image_1.jpg') }});">
            </a>
            <div class="text py-4 d-block">
                <div class="meta">
                <div><a href="#">Sept 28, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('frontend/images/image_1.jpg') }});">
            </a>
            <div class="text py-4 d-block">
                <div class="meta">
                <div><a href="#">Sept 28, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('frontend/images/image_1.jpg') }});">
            </a>
            <div class="text py-4 d-block">
                <div class="meta">
                <div><a href="#">Sept 28, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('frontend/images/image_1.jpg') }});">
            </a>
            <div class="text py-4 d-block">
                <div class="meta">
                <div><a href="#">Sept 28, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('frontend/images/image_1.jpg') }});">
            </a>
            <div class="text py-4 d-block">
                <div class="meta">
                <div><a href="#">Sept 28, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('frontend/images/image_1.jpg') }});">
            </a>
            <div class="text py-4 d-block">
                <div class="meta">
                <div><a href="#">Sept 28, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection