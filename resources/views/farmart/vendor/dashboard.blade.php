@extends('farmart.layouts.main')
@section('content')

<div class="ps-breadcrumb">
    <div class="container">
        <ul class="ps-breadcrumb__list">
            <li class="active"><a href="{{ route('index')}}">Home</a></li>
            <li class="active"><a href="#">Shop</a></li>
            <li><a href="javascript:void(0);">Vendor Dashboard</a></li>
        </ul>
    </div>
</div>
<section class="section--wishlist">
    <div class="container">
        <h2 class="page__title">Vendor Dashboard</h2>
        <div class="row">
        	<div class="col-12 col-lg-3">
                <div class="widget--block unblock">
                    @include('farmart.layouts.side-bar')
                </div>
            </div>
            <div class="col-12 col-lg-9">
		        <div class="main-bg row m-0 text-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 mx-auto d-block">
                        <img src="https://dev.itejarh.com/assets/images/ic_list.png" class="img-fluid pt-2 pb-2">
                        <p class="dash-pera">Add your first product to your shop and start earning straight away.</p>
                        <a href="{{ route('product.create')}}" type="button" class="btn2 w-auto pl-5 pr-5 mt-3 mb-2">Start Listing</a>
                    </div>
                </div>
                <hr>
                <div class="main-bg row m-0 ">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-6 ">
                        <div class="outer-clr">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-sm-3 col-3">
                                    <img src="https://dev.itejarh.com/assets/images/box.png" class="img-fluid">
                                </div>
                                <div class="col-md-8 col-sm-9 col-9">
                                    <h4 class="total-product">0</h4>
                                    <p class="total-product2">TOTAL PRODUCT SALE</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-6 ">
                        <div class="outer-clr">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-sm-3 col-3">
                                    <img src="https://dev.itejarh.com/assets/images/alarm.png" class="img-fluid">
                                </div>
                                <div class="col-md-8 col-sm-9 col-9">
                                    <h4 class="total-product">0</h4>
                                    <p class="total-product2">TOTAL BIDS RECEIVED</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-6 ">
                        <div class="outer-clr">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-sm-3 col-3">
                                    <img src="https://dev.itejarh.com/assets/images/money.png" class="img-fluid">
                                </div>
                                <div class="col-md-8 col-sm-9 col-9">
                                    <h4 class="total-product">SAR 0.00</h4>
                                    <p class="total-product2">TOTAL EARNINGS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
    </div>
</section>

@endsection
    