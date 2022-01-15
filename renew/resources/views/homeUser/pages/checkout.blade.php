@extends('user_layout')
@section('js')

@endsection
@section('content')
@include('homeUser.partial_user.slider', ['name'=>'Home','key'=>'Checkout'])

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <form class="billing-form ftco-bg-dark p-3 p-md-5" action="{{ route('home.orderr') }}" method="post">
            @csrf
            <div class="col-xl-8 ftco-animate">
                <h3 class="mb-4 billing-heading">Billing Details</h3>
                <div class="row align-items-end">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstname">Họ và tên
                        @error('username')
                          <span style="color: red" class="icon-close"></span>
                        
                        @enderror
                      </label>
                      <input type="text" class="form-control @error('username', 'post') is-invalid @enderror" name="username" value="{{ $infor->name ? $infor->name :"" }}">
                    </div>
                    
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastname">Số điện thoại 
                        @error('phone')
                    <span style="color: red" class="icon-close"></span>
                        
                    @enderror</label>
                      <input type="text" name="phone" class="form-control @error('phone', 'post') is-invalid @enderror" value="{{ old('phone') }}">
                    </div>
                    
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="country">Tỉnh/Thành phố
                        @error('city')
                          <span style="color: red" class="icon-close"></span>
                        
                        @enderror
                      </label>
                         <input type="text" name="city" class="form-control @error('city', 'post') is-invalid @enderror" value="Quang Binh" >
                    </div>
                    
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="streetaddress">Quận/ Huyện 
                        @error('district')
                          <span style="color: red" class="icon-close"></span>
                      @enderror
                    </label>
                      <input type="text" name="district" class="form-control @error('district', 'post') is-invalid @enderror" placeholder="">
                    </div>
                    
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="towncity">Phường/Xã/Thị trấn
                         @error('ward')
                            <span style="color: red" class="icon-close"></span>
                         @enderror</label>
                      <input type="text" name="ward" class="form-control @error('ward', 'post') is-invalid @enderror" placeholder="">
                      
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="phone">Ghi chú</label>
                          <textarea class="form-control" name="note" id="" rows="5"></textarea>
                    </div>
                  </div>
                  
                </div>

              <div class="row mt-5 pt-3 d-flex">
                <div class="col-md-6 d-flex">
                  <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                    <h3 class="billing-heading mb-4">Cart Total</h3>
                    <p class="d-flex">
                      <span>Subtotal</span>
                      <span class="d-flex">$ <span class="subtotal">{{ $total }}</span></span>
                    </p>
                    <p class="d-flex">
                      <span>Shipping fee</span>
                      <span class="d-flex">$ <span class="shippingfee">3.00</span></span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                      <input type="hidden" name="price" value="{{ $total + 3.00 }}">
                      <span>Total</span>
                      <span class="d-flex">$ <span class="total"> {{ $total + 3.00 }}</span></span>
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="cart-detail ftco-bg-dark p-3 p-md-4">
                    <h3 class="billing-heading mb-4">Payment Method</h3>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="radio">
                           <label>
                             <input type="checkbox" name="status[]" class="mr-2" value="Direct Bank Tranfer"> Direct Bank Tranfer

                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="radio">
                           <label><input type="checkbox" name="status[]" class="mr-2" value="Check Payment"> Check Payment</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="radio">
                           <label><input type="checkbox" name="status[]" class="mr-2" value="Paypal"> Paypal</label>
                        </div>
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary py-3 px-4">Đặt hàng</button>
                  </div>
                </div>
              </div>
            </div> <!-- .col-md-8 -->

          </form>

          <div class="col-xl-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form class="search-form">
                <div class="form-group">
                	<div class="icon">
	                  <span class="icon-search"></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Tour <span>(12)</span></a></li>
                <li><a href="#">Hotel <span>(22)</span></a></li>
                <li><a href="#">Coffee <span>(37)</span></a></li>
                <li><a href="#">Drinks <span>(42)</span></a></li>
                <li><a href="#">Foods <span>(14)</span></a></li>
                <li><a href="#">Travel <span>(140)</span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->


@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
        alert(123);

    $(document).ready(function(){
        alert(123);
    })
    $(function(){
        let subtotal= $('.subtotal').html();
        alert(subtotal);
        $('.total')
    })

</script>
    {{-- <script src="{{ asset('frontend/cart/totalprice.js') }}"></script> --}}
@endsection