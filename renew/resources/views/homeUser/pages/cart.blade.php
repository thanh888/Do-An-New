@extends('user_layout')

@section('content')
@include('homeUser.partial_user.slider', ['name'=>'Home','key'=>'Cart'])
		
@if ($products!= null)

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr class="text-center">
                                        <td class="product-remove">
                                            <a href="" data-url=""><span class="icon-close"></span></a>
                                        </td>
                                        <td class="image-prod"><div class="img" style="background-image:url({{asset('uploads/products/'.$product->image.'')}});"></div></td>
                                        
                                        
                                        <td class="product-name">
                                            <h3>{{ $product->name }}</h3>
                                        </td>
                                        <td id="" class="price">$ <span id="price">{{ $product->price }}</span> </td>
                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <span class="input-group-btn mr-2">
                                                    <button type="button" data-url="{{ route('home.cart',['id'=>$product->id]) }}" class="quantity-left-minus btn" data-type="minus" data-field="">
                                                        <i class="icon-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity" id="quantity" class="quantity form-control input-number" value="{{ $product->quantity }}" min="1" max="100">
                                                <span class="input-group-btn ml-2">
                                                    <button type="button" data-url="{{ route('home.cart',['id'=>$product->id]) }}" class="quantity-right-plus btn" data-type="plus" data-field="">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </td>
                                    
                                        <td  class="total">$ <span id="total_product">{{ $product->price * $product->quantity }}</span></td>
                                    </tr><!-- END TR-->
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <div class="row justify-content-end">
            <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>$20.60</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>$3.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>$17.60</span>
                    </p>
                </div>
                <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>
        </div>
        </div>
    </section>
@else

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                <h2>Không có sản phẩm nào được thêm vào</h2>
                </div>
            </div>
        
        </div>
    </section>
@endif

<section class="ftco-section">
<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
  <div class="col-md-7 heading-section ftco-animate text-center">
      <span class="subheading">Discover</span>
    <h2 class="mb-4">Related products</h2>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
  </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="menu-entry">
                <a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
                <div class="text text-center pt-4">
                    <h3><a href="#">Coffee Capuccino</a></h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <p class="price"><span>$5.90</span></p>
                    <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                </div>
            </div>
    </div>
    <div class="col-md-3">
        <div class="menu-entry">
                <a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
                <div class="text text-center pt-4">
                    <h3><a href="#">Coffee Capuccino</a></h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <p class="price"><span>$5.90</span></p>
                    <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                </div>
            </div>
    </div>
    <div class="col-md-3">
        <div class="menu-entry">
                <a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
                <div class="text text-center pt-4">
                    <h3><a href="#">Coffee Capuccino</a></h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <p class="price"><span>$5.90</span></p>
                    <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                </div>
            </div>
    </div>
    <div class="col-md-3">
        <div class="menu-entry">
                <a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
                <div class="text text-center pt-4">
                    <h3><a href="#">Coffee Capuccino</a></h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <p class="price"><span>$5.90</span></p>
                    <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                </div>
            </div>
    </div>
</div>
</div>
</section>



@endsection
@section('js')
    <script src="{{ asset('frontend/cart/totalprice.js') }}"></script>
@endsection