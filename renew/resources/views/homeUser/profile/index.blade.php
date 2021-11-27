@extends('profile_layout')
@section('profile_content')
<div class="col-sm-12">
    <div class="user-profile__tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"> <a href="#user-profile__shopping-cart" aria-controls="user-profile__shopping-cart" role="tab" data-toggle="tab" aria-expanded="false">Giỏ hàng đã mua</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="user-profile__portfolio">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="portfolio__item">
                            <div class="portfolio-item__img">
                                <a href="portfolio-item.html"> <img src="https://via.placeholder.com/340x210/20B2AA/000000" class="img-responsive" alt="...">
                                    <div class="portfolio-item__mask">
                                        <div class="portfolio-item-mask__content">
                                            <div class="portfolio-item-mask__title"> Image title</div>
                                            <div class="portfolio-item-mask__summary"> Pellentesque metus arcu, placerat nec porta in, ultricies id enim.</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="portfolio__item">
                            <div class="portfolio-item__img">
                                <a href="portfolio-item.html"> <img src="https://via.placeholder.com/340x210/B0C4DE/000000" class="img-responsive" alt="...">
                                    <div class="portfolio-item__mask">
                                        <div class="portfolio-item-mask__content">
                                            <div class="portfolio-item-mask__title"> Image title</div>
                                            <div class="portfolio-item-mask__summary"> Pellentesque metus arcu, placerat nec porta in, ultricies id enim.</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection