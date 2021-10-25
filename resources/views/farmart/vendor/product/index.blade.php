@extends('farmart.layouts.main')
@section('content')

<div class="ps-breadcrumb">
    <div class="container">
        <ul class="ps-breadcrumb__list">
            <li class="active"><a href="{{ route('index')}}">Home</a></li>
            <li class="active"><a href="#">Shop</a></li>
            <li><a href="javascript:void(0);">vendor Product</a></li>
        </ul>
    </div>
</div>
<section class="section--wishlist">
    <div class="container">
        <h2 class="page__title">Vendor Product</h2>
        <div class="row">
        	<div class="col-12 col-lg-3">
                <div class="widget--block unblock">
                    @include('farmart.layouts.side-bar')
                </div>
            </div>
            <div class="col-12 col-lg-6">
		        <div class="wishlist__content">
		            <div class="wishlist__product">
		                <div class="wishlist__product--mobile">
		                    <div class="row m-0">
		                        <div class="col-6 col-md-4 p-0">
		                            <div class="ps-product--standard"><a class="ps-product__trash" href="javascript:void(0);"><i class="icon-trash2"></i></a><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
		                                <div class="ps-product__content">
		                                    <p class="ps-product__instock">In stock</p><a href="product-default.html">
		                                        <h5 class="ps-product__name">Extreme Budweiser Light Can</h5>
		                                    </a>
		                                    <p class="ps-product__unit">500g</p>
		                                    <p class="ps-product__meta"><span class="ps-product__price">$3.90</span></p>
		                                </div>
		                                <div class="ps-product__footer">
		                                    <button class="ps-product__addcart">Add to cart</button>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="col-6 col-md-4 p-0">
		                            <div class="ps-product--standard"><a class="ps-product__trash" href="javascript:void(0);"><i class="icon-trash2"></i></a><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_31a.jpg" alt="alt" /></a>
		                                <div class="ps-product__content">
		                                    <p class="ps-product__instock">In stock</p><a href="product-default.html">
		                                        <h5 class="ps-product__name">Honest Organic Still Lemonade</h5>
		                                    </a>
		                                    <p class="ps-product__unit">100g</p>
		                                    <p class="ps-product__meta"><span class="ps-product__price-sale">$5.99</span><span class="ps-product__is-sale">$8.99</span></p>
		                                </div>
		                                <div class="ps-product__footer">
		                                    <button class="ps-product__addcart">Add to cart</button>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="col-6 col-md-4 p-0">
		                            <div class="ps-product--standard"><a class="ps-product__trash" href="javascript:void(0);"><i class="icon-trash2"></i></a><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
		                                <div class="ps-product__content">
		                                    <p class="ps-product__instock">In stock</p><a href="product-default.html">
		                                        <h5 class="ps-product__name">Matures Own 100% Wheat</h5>
		                                    </a>
		                                    <p class="ps-product__unit">1.5L</p>
		                                    <p class="ps-product__meta"><span class="ps-product__price">$12.90</span></p>
		                                </div>
		                                <div class="ps-product__footer">
		                                    <button class="ps-product__addcart">Add to cart</button>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="col-6 col-md-4 p-0">
		                            <div class="ps-product--standard"><a class="ps-product__trash" href="javascript:void(0);"><i class="icon-trash2"></i></a><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_1a.jpg" alt="alt" /></a>
		                                <div class="ps-product__content">
		                                    <p class="ps-product__ofstock">Out of stock</p><a href="product-default.html">
		                                        <h5 class="ps-product__name">Corn, Yellow Sweet</h5>
		                                    </a>
		                                    <p class="ps-product__unit">500g</p>
		                                    <p class="ps-product__meta"><span class="ps-product__price">$3.90</span></p>
		                                </div>
		                                <div class="ps-product__footer">
		                                    <button class="wishlist__readmore">Read more</button>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="wishlist__product--desktop">
		                    <table class="table">
		                        <thead class="wishlist__thead">
		                            <tr>
		                                <th scope="col"></th>
		                                <th scope="col">Product Name</th>
		                                <th scope="col">Unit Price</th>
		                                <th scope="col">Stock Status</th>
		                                <th scope="col"></th>
		                            </tr>
		                        </thead>
		                        <tbody class="wishlist__tbody">
		                            <tr>
		                                <td>
		                                    <div class="wishlist__trash"><i class="icon-trash2"></i></div>
		                                </td>
		                                <td>
		                                    <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{ asset('html/farmart/img/products/01_31a.jpg') }}" alt="alt" /></a>
		                                        <div class="ps-product__content">
		                                            <h5><a class="ps-product__name" href="product-default.html">Honest Organic Still Lemonade</a></h5>
		                                            <p class="ps-product__unit">100g</p>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td><span class="ps-product__price-sale">$5.99</span><span class="ps-product__is-sale">$8.99</span>
		                                </td>
		                                <td><span class="ps-product__instock">In stock</span>
		                                </td>
		                                <td>
		                                    <button class="btn wishlist__btn add-cart"><i class="icon-cart"></i>Add to cart</button>
		                                </td>
		                            </tr>
		                            <tr>
		                                <td>
		                                    <div class="wishlist__trash"><i class="icon-trash2"></i></div>
		                                </td>
		                                <td>
		                                    <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{ asset('html/farmart/img/products/01_1a.jpg') }}" alt="alt" /></a>
		                                        <div class="ps-product__content">
		                                            <h5><a class="ps-product__name" href="product-default.html">Corn, Yellow Sweet</a></h5>
		                                            <p class="ps-product__unit">500g</p>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td><span class="ps-product__price">$3.90</span>
		                                </td>
		                                <td><span class="ps-product__ofstock">Out of stock</span>
		                                </td>
		                                <td>
		                                    <button class="btn wishlist__btn readmore">Read more</button>
		                                </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </div>
		            </div>
		            <div class="wishlist__share">
		                <p>Share on: <a class="icon_social facebook" href="#"><i class="fa fa-facebook-f"></i></a><a class="icon_social twitter" href="#"><i class="fa fa-twitter"></i></a><a class="icon_social google" href="#"><i class="fa fa-google-plus"></i></a><a class="icon_social pinterest" href="#"><i class="fa fa-pinterest-p"></i></a><a class="icon_social wifi" href="#"><i class="fa fa-wifi"></i></a></p>
		            </div>
		        </div>
		    </div>
		    <div class="col-12 col-lg-3">
	            <div class="bg-side text-center">
	                <img src="https://dev.itejarh.com/assets/images/ic_list.png" class="img-fluid">
	                <p class="add-product">Add your first product to your shop and start earning straight away.</p>
	                <a type="submit" href="{{ route('product.create') }}" class="add-new-product btn22">Start Listing</a>
	            </div>
	        </div>
		</div>
    </div>
</section>

@endsection
    