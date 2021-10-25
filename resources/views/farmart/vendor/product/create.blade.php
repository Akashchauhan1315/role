@extends('farmart.layouts.main')
@section('content')
<div class="ps-breadcrumb">
    <div class="container">
        <ul class="ps-breadcrumb__list">
            <li class="active"><a href="index.html">Home</a></li>
            <li class="active"><a href="store-list.html">Store List</a></li>
            <li><a href="javascript:void(0);">Create Product</a></li>
        </ul>
    </div>
</div>
<section class="section--vendorStore">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="widget--block unblock">
                    @include('farmart.layouts.side-bar')
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="registration__info">
                    <!-- <h3 class="registration__title">Create Product</h3> -->
                    <form method="post" action="{{  route('product.store')}}">
                        @csrf
                        <div class="form-row">
                        	<div class="col-12 col-lg-12 form-group--block">
                        		<div class="heading-first">
                                    <p>Product Listing Details</p>
                                </div>
                        	</div>
                        	
                        	<div class="col-12 col-lg-6 form-group--block">
                                <label>Product category<span>*</span></label>
                                <select class="form-control">
                                	<option value="">Select product category</option>
                                    @foreach($category as $key => $categoryInfo)
                                        <option value="{{ $categoryInfo->id }}">{{ $categoryInfo->name }}</option>
                                    @endforeach    
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 form-group--block">
                                <label>Sub-product Category<span>*</span></label>
                                <select class="form-control">
                                	<option value="">Select sub-product category</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-12 form-group--block">
                                <div class="heading-first">
                                    <p >Product Details</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 form-group--block">
                                <label>Product Name: <span>*</span></label>
                                <input class="form-control" type="text" required="" autocomplete="off" placeholder="Product Name">
                            </div>
                            <div class="col-12 col-lg-12 form-group--block">
                                <label>Product Description<span>*</span></label>
                                <textarea class="form-control height-100" placeholder="Enter Product Description" rows="5" name="description" autocomplete="off"></textarea>
                            </div>

                            <div class="col-12 col-lg-12 form-group--block">
                                <div class="heading-first">
                                    <p>Product Images</p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-12 form-group--block product-img">
                                <ul class="nav pt-3 pb-3">
                                    @for($i=1;$i<=4;$i++) 
                                    <li class="braws-img"><a> <img style="width: 100px"
                                        src="{{ asset('html/farmart/add.png') }}" data-id="{{ $i }}"
                                        id="image_{{ $i }}" class="image"><input type="file" name="myfile[]"
                                        class="brows-btn inputImage_{{ $i }}"></a><i id="remove" data-id="{{ $i }}"
                                    class="fa fa-times close-pos2 remove_{{ $i }}"
                                    style="cursor: pointer;visibility: hidden;"></i>
                                	</li>
                                	@endfor
                                </ul>
                            </div>

                            <div class="col-12 col-lg-12 form-group--block">
                                <div class="heading-first">
                                    <p>Product Pricing</p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-12 form-group--block">
                                <label></label>
                                <input class="form-control" type="number" required="" autocomplete="off" placeholder="Product Pricing">
                            </div>

                            <div class="col-12 col-lg-12 form-group--block">
                                <div class="heading-first">
                                    <p>Product Quantity</p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-12 form-group--block">
                                <label></label>
                                <select class="form-control" id="sel1" name="product_qty">
                                    <option value="">Select Product Quantity</option>
                                    @for($i=1;$i<=19;$i++) 
                                    <option value="{{ $i }}" @if($i ==1) selected="selected" @endif>{{ $i }}</option>
                                    @endfor                                                                
                                </select>
                            </div>
                            <div class="col-12 col-lg-4 form-group--block">
                                <button  class=" other-items" name="save_type" value="add_new">LIST ANOTHER ITEM</button>
                                
                            </div>
                            <div class="col-12 col-lg-4 form-group--block">
                                <button type="submit" class=" other-items" name="save_type" value="save">SAVE AND CONTINUE</button>
                                
                            </div>
                            <div class="col-12 col-lg-4 form-group--block">
                                <button type="reset" class="btn-cancel cancel-wid text-center" type="submit">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection