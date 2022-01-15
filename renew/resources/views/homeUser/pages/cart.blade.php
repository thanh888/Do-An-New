@extends('user_layout')

@section('content')
@include('homeUser.partial_user.slider', ['name'=>'Home','key'=>'Cart'])
		
@if ($dem != 0)

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list " id="table_product" style="
                    max-height: 600px;
                    overflow-y: scroll;
                    scroll-behavior: smooth;">
                        <table class="table" id="table">
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
                                    <tr class="text-center product">
                                        <td class="product-remove">
                                            <a class="cart_delete" data-url="{{ route('cart.delete', ['id'=>$product->id]) }}"><span class="icon-close"></span></a>
                                        </td>
                                        <td class="image-prod"><div class="img" style="background-image:url({{asset('uploads/products/'.$product->image.'')}});"></div></td>
                                        
                                        
                                        <td class="product-name">
                                            <h3>{{ $product->name }}</h3>
                                        </td>
                                        <td id="" class="price">$ <span id="price">{{ $product->price }}</span> </td>
                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <span class="input-group-btn mr-2">
                                                    <button type="button" data-url="{{ route('cart.updateQuantity',['id'=>$product->id]) }}" class="quantity-left-minus btn" data-type="minus" data-field="">
                                                        <i class="icon-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity" id="quantity" class="quantity form-control input-number" value="{{ $product->quantity }}" min="1" max="100">
                                                <span class="input-group-btn ml-2">
                                                    <button type="button" data-url="{{ route('cart.updateQuantity',['id'=>$product->id]) }}" class="quantity-right-plus btn" data-type="plus" data-field="">
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
                    
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>$17.60</span>
                    </p>
                </div>
                <p class="text-center"><a href="{{ route('home.checkout') }}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
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


@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('frontend/cart/totalprice.js') }}"></script>
@endsection