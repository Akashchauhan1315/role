@extends('farmart.layouts.main')
@section('content')
<div class="ps-breadcrumb">
    <div class="container">
        <ul class="ps-breadcrumb__list">
            <li class="active"><a href="index.html">Home</a></li>
            <li class="active"><a href="store-list.html">Store List</a></li>
            <li><a href="javascript:void(0);">{{ $store->name}}</a></li>
        </ul>
    </div>
</div>
<section class="section--vendorStore">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="widget--block">
                    <h5 class="widget__title">ALL CATEGORIES</h5>
                    <ul class="menu--mobile widget__list">
                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="shop-view-grid.html">Meat & Poultry</a></li>
                                <li><a href="shop-view-grid.html">Fruit</a></li>
                                <li><a href="shop-view-grid.html">Vegetables</a></li>
                                <li><a href="shop-view-grid.html">Milks, Butter & Eggs</a></li>
                                <li><a href="shop-view-grid.html">Fish</a></li>
                                <li><a href="shop-view-grid.html">Frozen</a></li>
                                <li><a href="shop-view-grid.html">Cheese</a></li>
                                <li><a href="shop-view-grid.html">Pasta & Sauce</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="shop-view-grid.html">Crisps, Snacks & Nuts</a></li>
                                <li><a href="shop-view-grid.html">Breakfast Cereals</a></li>
                                <li><a href="shop-view-grid.html">Tins & Cans</a></li>
                                <li><a href="shop-view-grid.html">Chocolate & Sweets</a></li>
                            </ul>
                        </li>
                        <li class="category-item"><a href="shop-categories.html">Bakery</a></li>
                        <li class="category-item"><a href="shop-categories.html">Frozen Foods</a></li>
                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="shop-view-grid.html">Traditional British</a></li>
                                <li><a href="shop-view-grid.html">Indian</a></li>
                                <li><a href="shop-view-grid.html">Italian</a></li>
                                <li><a href="shop-view-grid.html">Chinese</a></li>
                            </ul>
                        </li>
                        <li class="category-item"><a href="shop-categories.html">Drinks, Tea & Coffee</a></li>
                        <li class="category-item"><a href="shop-categories.html">Beer, Wine & Spirits</a></li>
                        <li class="category-item"><a href="shop-categories.html">Baby & Child</a></li>
                        <li class="category-item"><a href="shop-categories.html">Kitchen & Dining</a></li>
                    </ul>
                </div>
                <div class="store__location">
                    <h5 class="widget__title">STORE LOCATIONS</h5><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.8797653679753!2d18.51275431506027!3d-33.89275028064959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5c05506e12e1%3A0x320621e7723622b4!2sCentury%20Blvd%2C%20Century%20City%2C%20Cape%20Town%2C%207441%2C%20South%20Africa!5e0!3m2!1sen!2s!4v1598504554049!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="contact__vendor">
                    <h5 class="widget__title">CONTACT VENDOR</h5>
                    <form method="post" action="{{ route('store.store')}}">
                    	@csrf
                        <div class="form-row">
                            <div class="col-12 form-group--block">
                                <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Your Name" name="name" value="{{ old('name')}}">
                                @error('name')
                                <div class="invalid-feedback error-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 form-group--block">
                                <input class="form-control @error('email') is-invalid @enderror" type="text" placeholder="Your Email" name="email" value="{{ old('email')}}">
                                @error('email')
                                <div class="invalid-feedback error-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 form-group--block">
                                <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Type your message..."  name="message" value="{{ old('message')}}"></textarea>
                                @error('message')
                                <div class="invalid-feedback error-block" name="message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 form-group--block">
                                <button class="btn ps-button" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="store__header">
                    <div class="row m-0">
                        <div class="col-12 col-lg-4 p-0">
                            <div class="store__avatar"><img src="{{ asset('html/farmart/img/pages/vendor_store_avatar.jpg') }}" alt></div>
                        </div>
                        <div class="col-12 col-lg-8 p-0">
                            <div class="store__detail">
                                <h3 class="store__name">{{ $store->name}}</h3>
                                <p class="store__address">{{ $store->store->address}}</p>
                                <p class="store__phone">{{ $store->phone }}</p>
                                <p class="store__email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6211030f11170c053d0503160a071022050f030b0e4c010d0f">[email&#160;protected]</a></p>
                                <div class="store__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select><span>(43 ratings)</span>
                                </div>
                                <div class="store__social"><a class="icon_social facebook" href="#"><i class="fa fa-facebook-f"></i></a><a class="icon_social twitter" href="#"><i class="fa fa-twitter"></i></a><a class="icon_social google" href="#"><i class="fa fa-google-plus"></i></a><a class="icon_social youtube" href="#"><i class="fa fa-youtube"></i></a><a class="icon_social wifi" href="#"><i class="fa fa-wifi"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="store__perpage">
                    <p class="result"> <span>11</span>Products Found</p>
                    <p class="text-right">page
                        <input type="text" value="1">of 3
                    </p>
                </div>
                <div class="viewtype--block">
                    <div class="viewtype__sortby">
                        <div class="select">
                            <select class="single-select2" name="state">
                                <option value="popularity">Sort by popularity</option>
                                <option value="price">Sort by price</option>
                                <option value="sale">Sort by sale of</option>
                            </select>
                        </div>
                    </div>
                    <div class="viewtype__select"> <span class="text">View: </span>
                        <div class="select">
                            <select class="single-select2" name="state">
                                <option value="25">25 per page</option>
                                <option value="12">12 per page</option>
                                <option value="5">5 per page</option>
                            </select>
                        </div>
                        <div class="type"><span class="active"><i class="icon-icons"></i></span><span><i class="icon-icons2"></i></span><span><i class="icon-list4"></i></span></div>
                    </div>
                </div>
                <div class="store__product">
                    <div class="row m-0">
                        <div class="col-6 col-md-4 col-lg-3 p-0">
                            <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{ asset('html/farmart/img/products/03_1a.jpg') }}" alt="alt" /></a>
                            	<a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                            	<span class="ps-badge ps-product__new">New </span>
                            	<!-- <span class="ps-badge ps-product__stock">Out of stock </span>
                            	<span class="ps-badge ps-product__offbadge">35% Off </span> -->
                                <div class="ps-product__content">
                                    <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                    <h5><a class="ps-product__name" href="product-default.html">Large Green Bell Pepper</a></h5>
                                    <p class="ps-product__unit">250g</p>
                                    <div class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected="selected">4</option>
                                            <option value="5">5</option>
                                        </select><span>(2)</span>
                                    </div>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$15.90</span>
                                    </p>
                                </div>
                                <div class="ps-product__footer">
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                    </div>
                                    <div class="ps-product__total">Total: <span>$15.90</span>
                                    </div>
                                    <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-recent--default ps-home--block">
        <div class="container">
            <div class="ps-block__header">
                <h3 class="ps-block__title">Your Recent Viewed</h3><a class="ps-block__view" href="shop-categories.html">View all <i class="icon-chevron-right"></i></a>
            </div>
            <div class="recent__content">
                <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="5" data-owl-item-lg="8" data-owl-item-xl="8" data-owl-duration="1000" data-owl-mousedrag="on"><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_1a.jpg') }}" alt="alt" /></a><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_2a.jpg') }}" alt="alt" /></a><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_30a.jpg') }}" alt="alt" /></a><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_10a.jpg') }}" alt="alt" /></a><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_18a.jpg') }}" alt="alt" /></a><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_28b.jpg') }}" alt="alt" /></a><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_16a.jpg') }}" alt="alt" /></a><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_31a.jpg') }}" alt="alt" /></a><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_15a.jpg') }}" alt="alt" /></a><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_5a.jpg') }}" alt="alt" /></a><a class="recent-item" href="index.html"><img src="{{ asset('html/farmart/img/products/01_32a.jpg') }}" alt="alt" /></a>
                </div>
            </div>
        </div>
    </section>
</section>
<div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl ps-quickview">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid quickview-body">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="img/products/01-Fresh/01_1a.jpg" alt="alt" /></div>
                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="img/products/01-Fresh/01_2a.jpg" alt="alt" /></div>
                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="img/products/01-Fresh/01_4a.jpg" alt="alt" /></div>
                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="img/products/01-Fresh/01_9a.jpg" alt="alt" /></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="quickview__product">
                                <div class="product__header">
                                    <div class="product__title">Hovis Farmhouse Soft White Bread</div>
                                    <div class="product__meta">
                                        <div class="product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select><span>4 customer reviews</span>
                                        </div>
                                        <div class="product__code"><span>SKU: </span>#VEG20938</div>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <div class="product__price"><span class="sale">$5.49</span><span class="price">$6.90</span><span class="off">25% Off</span></div>
                                    <p class="product__unit">300g</p>
                                    <div class="alert__success">Availability: <span>34 in stock</span></div>
                                    <ul>
                                        <li>Type: Organic</li>
                                        <li>MFG: Jun 4, 2020</li>
                                        <li>LIFE: 30 days</li>
                                    </ul>
                                </div>
                                <div class="product__action">
                                    <label>Quantity: </label>
                                    <div class="def-number-input number-input safari_only">
                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                    </div>
                                    <button class="btn product__addcart"> <i class="icon-cart"></i>Add to cart</button>
                                    <button class="btn button-icon icon-md"><i class="icon-repeat"></i></button>
                                    <button class="btn button-icon icon-md"><i class="icon-heart"></i></button>
                                </div>
                                <div class="product__footer">
                                    <div class="ps-social--share"><a class="ps-social__icon facebook" href="#"><i class="fa fa-thumbs-up"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon facebook" href="#"><i class="fa fa-facebook-square"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon twitter" href="#"><i class="fa fa-twitter"></i><span>Like</span></a><a class="ps-social__icon" href="#"><i class="fa fa-plus-square"></i><span>Like</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popupAddToCart" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl ps-addcart">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="alert__success"><i class="icon-checkmark-circle"></i> "Morrisons The Best Beef Topside" successfully added to you cart. <a href="shopping-cart.html">View cart(3)</a></div>
                    <hr>
                    <h3 class="cart__title">CUSTOMERS WHO BOUGHT THIS ALSO BOUGHT:</h3>
                    <div class="cart__content">
                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="cart-item">
                                <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_35a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__type"><i class="icon-store"></i>Farmart</p><a href="product-default.html">
                                            <h5 class="ps-product__name">Extreme Budweiser Light Can</h5>
                                        </a>
                                        <p class="ps-product__unit">500g</p>
                                        <div class="ps-product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select><span>(4)</span>
                                        </div>
                                        <p class="ps-product-price-block"><span class="ps-product__sale">$8.90</span><span class="ps-product__price">$9.90</span><span class="ps-product__off">15% Off</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p><a href="product-default.html">
                                            <h5 class="ps-product__name">Honest Organic Still Lemonade</h5>
                                        </a>
                                        <p class="ps-product__unit">100g</p>
                                        <div class="ps-product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select><span>(14)</span>
                                        </div>
                                        <p class="ps-product-price-block"><span class="ps-product__price-default">$1.99</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_12a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__type"><i class="icon-store"></i>John Farm</p><a href="product-default.html">
                                            <h5 class="ps-product__name">Natures Own 100% Wheat</h5>
                                        </a>
                                        <p class="ps-product__unit">100g</p>
                                        <div class="ps-product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><span>(0)</span>
                                        </div>
                                        <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_15a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__type"><i class="icon-store"></i>Farmart</p><a href="product-default.html">
                                            <h5 class="ps-product__name">Avocado, Hass Large</h5>
                                        </a>
                                        <p class="ps-product__unit">300g</p>
                                        <div class="ps-product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3" selected="selected">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><span>(6)</span>
                                        </div>
                                        <p class="ps-product-price-block"><span class="ps-product__sale">$6.99</span><span class="ps-product__price">$9.90</span><span class="ps-product__off">25% Off</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/06-SoftDrinks-TeaCoffee/06_3a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p><a href="product-default.html">
                                            <h5 class="ps-product__name">Kevita Kom Ginger</h5>
                                        </a>
                                        <p class="ps-product__unit">200g</p>
                                        <div class="ps-product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select><span>(6)</span>
                                        </div>
                                        <p class="ps-product-price-block"><span class="ps-product__sale">$4.90</span><span class="ps-product__price">$3.99</span><span class="ps-product__off">15% Off</span>
                                        </p>
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
@endsection