<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Farmart</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('html/farmart/fonts/Linearicons/Font/demo-files/demo.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Dogfalo/materialize@master/extras/noUiSlider/nouislider.css">
    <link rel="stylesheet" href="{{ asset('html/farmart/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('html/farmart/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('html/farmart/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('html/farmart/plugins/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('html/farmart/plugins/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('html/farmart/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('html/farmart/plugins/lightGallery/dist/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('html/farmart/css/style.css') }}">
</head>

<body>
    <header class="header">
        <div class="ps-top-bar">
            <div class="container">
                <div class="top-bar">
                    <div class="top-bar__left">
                        <ul class="nav-top">
                            <li class="nav-top-item"><a class="nav-top-link" href="#">Sell on Famart.</a></li>
                            <li class="nav-top-item"><a class="nav-top-link text-success" href="#">Register Now</a></li>
                        </ul>
                    </div>
                    <div class="top-bar__right">
                        <ul class="nav-top">
                            <li class="nav-top-item contact"><a class="nav-top-link" href="tel:970978-6290"> <i class="icon-telephone"></i><span>Hotline:</span><span class="text-success font-bold">970 978-6290</span></a></li>
                            <li class="nav-top-item"><a class="nav-top-link" href="order-tracking.html">Order Tracking</a></li>
                            <li class="nav-top-item languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>
                                <div class="select--dropdown">
                                    <ul class="select-languages">
                                        <li class="active language-item" data-value="English"><a href="javascript:void(0);">English</a></li>
                                        <li class="language-item" data-value="Brunei"><a href="javascript:void(0);">Brunei</a></li>
                                        <li class="language-item" data-value="Armenia"><a href="javascript:void(0);">Armenia</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-top-item currency"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-currency">USD</span><i class="icon-chevron-down"></i></a>
                                <div class="select--dropdown">
                                    <ul class="select-currency">
                                        <li class="active currency-item" data-value="USD"><a href="javascript:void(0);">USD</a></li>
                                        <li class="currency-item" data-value="VND"><a href="javascript:void(0);">VND</a></li>
                                        <li class="currency-item" data-value="EUR"><a href="javascript:void(0);">EUR</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-top-item account"><a class="nav-top-link" href="javascript:void(0);"> <i class="icon-user"></i>Hi! <span class="font-bold">Jonhnathan</span></a>
                                <div class="account--dropdown">
                                    <div class="account-anchor">
                                        <div class="triangle"></div>
                                    </div>
                                    <div class="account__content">
                                        <ul class="account-list">
                                            <li class="title-item"><a href="javascript:void(0);">My Account</a></li>
                                            <li><a href="#">Dasdboard</a></li>
                                            <li><a href="#">Account Setting</a></li>
                                            <li><a href="shopping-cart.html">Orders</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="#">Shipping Address</a></li>
                                        </ul>
                                        <hr>
                                        <ul class="account-list">
                                            <li class="title-item"><a href="javascript:void(0);">Vendor Settings</a></li>
                                            <li><a href="#">Dasdboard</a></li>
                                            <li><a href="#">Products</a></li>
                                            <li><a href="shopping-cart.html">Orders</a></li>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="vendor-store.html">View Store</a></li>
                                        </ul>
                                        <hr><a class="account-logout" href="#"><i class="icon-exit-left"></i>Log out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-header--center header--mobile">
            <div class="container">
                <div class="header-inner">
                    <div class="header-inner__left">
                        <button class="navbar-toggler"><i class="icon-menu"></i></button>
                    </div>
                    <div class="header-inner__center"><a class="logo open" href="index.html">Farm<span class="text-black">art.</span></a></div>
                    <div class="header-inner__right">
                        <button class="button-icon icon-sm search-mobile"><i class="icon-magnifier"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <section class="ps-header--center header-desktop">
            <div class="container">
                <div class="header-inner">
                    <div class="header-inner__left"><a class="logo" href="index.html">Farm<span class="text-black">art.</span></a>
                        <ul class="menu">
                            <li class="menu-item-has-children has-mega-menu">
                                <button class="category-toggler"><i class="icon-menu"></i></button>
                                <div class="mega-menu mega-menu-category">
                                    <ul class="menu--mobile menu--horizontal">
                                        <li class="daily-deals category-item"><a href="flash-sale.html">Daily Deals</a></li>
                                        <li class="category-item"><a href="shop-categories.html">Top Promotions</a></li>
                                        <li class="category-item"><a class="active" href="shop-categories.html">New Arrivals</a></li>
                                        <li class="has-mega-menu category-item"><a href="javascript:void(0);">Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <div class="mega-menu">
                                                <div class="mega-anchor"></div>
                                                <div class="mega-menu__column">
                                                    <h4>Fruit<span class="sub-toggle"></span></h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="shop-view-grid.html">Apples</a></li>
                                                        <li><a href="shop-view-grid.html">Bananas</a></li>
                                                        <li><a href="shop-view-grid.html">Berries</a></li>
                                                        <li><a href="shop-view-grid.html">Oranges & Easy Peelers</a></li>
                                                        <li><a href="shop-view-grid.html">Grapes</a></li>
                                                        <li><a href="shop-view-grid.html">Lemons & Limes</a></li>
                                                        <li><a href="shop-view-grid.html">Peaches & Nectarines</a></li>
                                                        <li><a href="shop-view-grid.html">Pears</a></li>
                                                        <li><a href="shop-view-grid.html">Melon</a></li>
                                                        <li><a href="shop-view-grid.html">Avocados</a></li>
                                                        <li><a href="shop-view-grid.html">Plums & Apricots</a></li>
                                                        <li class="see-all"><a href="shop-view-grid.html">See all products <i class='icon-chevron-right'></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega-menu__column">
                                                    <h4>Vegetables<span class="sub-toggle"></span></h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="shop-view-grid.html">Potatoes</a></li>
                                                        <li><a href="shop-view-grid.html">Carrots & Root Vegetables</a></li>
                                                        <li><a href="shop-view-grid.html">Broccoli & Cauliflower</a></li>
                                                        <li><a href="shop-view-grid.html">Cabbage, Spinach & Greens</a></li>
                                                        <li><a href="shop-view-grid.html">Onions, Leeks & Garlic</a></li>
                                                        <li><a href="shop-view-grid.html">Mushrooms</a></li>
                                                        <li><a href="shop-view-grid.html">Tomatoes</a></li>
                                                        <li><a href="shop-view-grid.html">Beans, Peas & Sweetcom</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has-mega-menu category-item"><a href="javascript:void(0);">Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <div class="mega-menu">
                                                <div class="mega-anchor"></div>
                                                <div class="mega-menu__column">
                                                    <h4>Crisps, Snacks &amp; Nuts<span class="sub-toggle"></span></h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="shop-view-grid.html">Crisps & Popcorn</a></li>
                                                        <li><a href="shop-view-grid.html">Nuts & Seeds</a></li>
                                                        <li><a href="shop-view-grid.html">Lighter Options</a></li>
                                                        <li><a href="shop-view-grid.html">Cereal Bars</a></li>
                                                        <li><a href="shop-view-grid.html">Breadsticks & Pretzels</a></li>
                                                        <li><a href="shop-view-grid.html">Fruit Snacking</a></li>
                                                        <li><a href="shop-view-grid.html">Rice & Corn Cakes</a></li>
                                                        <li><a href="shop-view-grid.html">Protein & Energy Snacks</a></li>
                                                        <li><a href="shop-view-grid.html">Toddler Snacks</a></li>
                                                        <li><a href="shop-view-grid.html">Meat Snacks</a></li>
                                                        <li><a href="shop-view-grid.html">Beans</a></li>
                                                        <li><a href="shop-view-grid.html">Lentils</a></li>
                                                        <li><a href="shop-view-grid.html">Chickpeas</a></li>
                                                        <li class="see-all"><a href="shop-view-grid.html">See all products <i class='icon-chevron-right'></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega-menu__column">
                                                    <h4>Tins &amp; Cans<span class="sub-toggle"></span></h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="shop-view-grid.html">Tomatoes</a></li>
                                                        <li><a href="shop-view-grid.html">Baked Beans, Spaghetti</a></li>
                                                        <li><a href="shop-view-grid.html">Fish</a></li>
                                                        <li><a href="shop-view-grid.html">Beans & Pulses</a></li>
                                                        <li><a href="shop-view-grid.html">Fruit</a></li>
                                                        <li><a href="shop-view-grid.html">Caconut Milk & Cream</a></li>
                                                        <li><a href="shop-view-grid.html">Lighter Options</a></li>
                                                        <li><a href="shop-view-grid.html">Olives</a></li>
                                                        <li><a href="shop-view-grid.html">Sweetcorn</a></li>
                                                        <li><a href="shop-view-grid.html">Carrots</a></li>
                                                        <li><a href="shop-view-grid.html">Peas</a></li>
                                                        <li><a href="shop-view-grid.html">Mixed Vegetables</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega-menu__column"><a class="mega-menu__thumbnail" href="flash-sale.html"><img src="http://nouthemes.net/html/farmart/img/promotion/mega_food.jpg" alt="alt" /></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item"><a href="shop-categories.html">Bakery</a></li>
                                        <li class="category-item"><a href="shop-categories.html">Frozen Foods</a></li>
                                        <li class="has-mega-menu category-item"><a href="javascript:void(0);">Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <div class="mega-menu">
                                                <div class="mega-anchor"></div>
                                                <div class="mega-menu__column">
                                                    <h4>Ready Meals<span class="sub-toggle"></span></h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="#">Meals for 1</a></li>
                                                        <li><a href="#">Meals for 2</a></li>
                                                        <li><a href="#">Indian</a></li>
                                                        <li><a href="#">Italian</a></li>
                                                        <li><a href="#">Chinese</a></li>
                                                        <li><a href="#">Traditional British</a></li>
                                                        <li><a href="#">Thai & Oriental</a></li>
                                                        <li><a href="#">Mediterrancan & Moroccan</a></li>
                                                        <li><a href="#">Mexican & Caribbean</a></li>
                                                        <li><a href="#">Lighter Meals</a></li>
                                                        <li><a href="#">Lunch & Veg Pots</a></li>
                                                        <li class="see-all"><a href="#">See all products <i class='icon-chevron-right'></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega-menu__column">
                                                    <h4>Salad &amp; Herbs<span class="sub-toggle"></span></h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="#">Salad Bags</a></li>
                                                        <li><a href="#">Cucumber</a></li>
                                                        <li><a href="#">Tomatoes</a></li>
                                                        <li><a href="#">Lettuce</a></li>
                                                        <li><a href="#">Lunch Salad Bowls</a></li>
                                                        <li><a href="#">Fresh Herbs</a></li>
                                                        <li><a href="#">Avccados</a></li>
                                                        <li><a href="#">Peppers</a></li>
                                                        <li><a href="#">Coleslaw & Potato Salad</a></li>
                                                        <li><a href="#">Spring Onions</a></li>
                                                        <li><a href="#">Chili, Ginger & Ganic</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mega-menu__column"><a class="mega-menu__thumbnail" href="flash-sale.html"><img src="http://nouthemes.net/html/farmart/img/promotion/mega_ready.jpg" alt="alt" /></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item"><a href="shop-categories.html">Drinks, Tea & Coffee</a></li>
                                        <li class="category-item"><a href="shop-categories.html">Beer, Wine & Spirits</a></li>
                                        <li class="category-item"><a href="shop-categories.html">Baby & Child</a></li>
                                        <li class="category-item"><a href="shop-categories.html">Kitchen & Dining</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="header-inner__center">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="header-search-select"><span class="current">All<i class="icon-chevron-down"></i></span>
                                    <ul class="list">
                                        <li class="category-option active" data-value="option"><a href="javascript:void(0);">All</a></li>
                                        <li class="category-option"><a>Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul>
                                                <li><a href="#">Meat & Poultry</a></li>
                                                <li><a href="#">Fruit</a></li>
                                                <li><a href="#">Vegetables</a></li>
                                                <li><a href="#">Milks, Butter & Eggs</a></li>
                                                <li><a href="#">Fish</a></li>
                                                <li><a href="#">Frozen</a></li>
                                                <li><a href="#">Cheese</a></li>
                                                <li><a href="#">Pasta & Sauce</a></li>
                                            </ul>
                                        </li>
                                        <li class="category-option"><a>Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul>
                                                <li><a href="#">Crisps, Snacks & Nuts</a></li>
                                                <li><a href="#">Breakfast Cereals</a></li>
                                                <li><a href="#">Tins & Cans</a></li>
                                                <li><a href="#">Chocolate & Sweets</a></li>
                                            </ul>
                                        </li>
                                        <li class="category-option" data-value="Bakery"><a href="javascript:void(0);">Bakery</a></li>
                                        <li class="category-option" data-value="Drinks, Tea &amp; Coffee"><a href="javascript:void(0);">Drinks, Tea &amp; Coffee</a></li>
                                        <li class="category-option" data-value="Frozen Foods"><a href="javascript:void(0);">Frozen Foods</a></li>
                                        <li class="category-option"><a>Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul>
                                                <li><a href="#">Traditional British</a></li>
                                                <li><a href="#">Indian</a></li>
                                                <li><a href="#">Italian</a></li>
                                                <li><a href="#">Chinese</a></li>
                                            </ul>
                                        </li>
                                        <li class="category-option" data-value="Beer, Wine &amp; Spirits"><a href="javascript:void(0);">Beer, Wine &amp; Spirits</a></li>
                                        <li class="category-option" data-value="Baby &amp; Child"><a href="javascript:void(0);">Baby &amp; Child</a></li>
                                        <li class="category-option" data-value="Kitchen &amp; Dining"><a href="javascript:void(0);">Kitchen &amp; Dining</a></li>
                                    </ul>
                                </div><i class="icon-magnifier search"></i>
                            </div>
                            <input class="form-control input-search" placeholder="I'm searchching for...">
                            <div class="input-group-append">
                                <button class="btn">Search</button>
                            </div>
                        </div>
                        <div class="trending-search">
                            <ul class="list-trending">
                                <li class="title"><a>Trending search: </a></li>
                                <li class="trending-item"><a href="#">meat</a></li>
                                <li class="trending-item"><a href="#">fruit</a></li>
                                <li class="trending-item"><a href="#">vegetables</a></li>
                                <li class="trending-item"><a href="#">salad</a></li>
                                <li class="trending-item"><a href="#">yoghurts</a></li>
                                <li class="trending-item"><a href="#">apple</a></li>
                            </ul>
                        </div>
                        <div class="result-search">
                            <ul class="list-result">
                                <li class="cart-item">
                                    <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
                                        <div class="ps-product__content"><a class="ps-product__name" href="product-default.html"><u>Organic</u> Large Green Bell Pepper</a>
                                            <p class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected="selected">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(5)</span>
                                            </p>
                                            <p class="ps-product__meta"> <span class="ps-product__price">$6.90</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                                        <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Avocado <u>Organic</u> Hass Large</a>
                                            <p class="ps-product__meta"> <span class="ps-product__price">$12.90</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_32a.jpg" alt="alt" /></a>
                                        <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Tailgater Ham <u>Organic</u> Sandwich</a>
                                            <p class="ps-product__meta"> <span class="ps-product__price">$33.49</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_6a.jpg" alt="alt" /></a>
                                        <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Extreme <u>Organic</u> Light Can</a>
                                            <p class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(16)</span>
                                            </p>
                                            <p class="ps-product__meta"> <span class="ps-product__price-sale">$4.99</span><span class="ps-product__is-sale">$8.99</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_22a.jpg" alt="alt" /></a>
                                        <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Extreme <u>Organic</u> Light Can</a>
                                            <p class="ps-product__meta"> <span class="ps-product__price">$12.99</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-inner__right">
                        <button class="button-icon icon-md"><i class="icon-repeat"></i></button><a class="button-icon icon-md" href="wishlist.html"><i class="icon-heart"></i><span class="badge bg-warning">2</span></a>
                        <div class="button-icon btn-cart-header"><i class="icon-cart icon-shop5"></i><span class="badge bg-warning">3</span>
                            <div class="mini-cart">
                                <div class="mini-cart--content">
                                    <div class="mini-cart--overlay"></div>
                                    <div class="mini-cart--slidebar cart--box">
                                        <div class="mini-cart__header">
                                            <div class="cart-header-title">
                                                <h5>Shopping Cart(3)</h5><a class="close-cart" href="javascript:void(0);"><i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="mini-cart__products">
                                            <div class="out-box-cart">
                                                <div class="triangle-box">
                                                    <div class="triangle"></div>
                                                </div>
                                            </div>
                                            <ul class="list-cart">
                                                <li class="cart-item">
                                                    <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
                                                        <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Extreme Budweiser Light Can</a>
                                                            <p class="ps-product__unit">500g</p>
                                                            <p class="ps-product__meta"> <span class="ps-product__price">$3.90</span><span class="ps-product__quantity">(x1)</span>
                                                            </p>
                                                        </div>
                                                        <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                    </div>
                                                </li>
                                                <li class="cart-item">
                                                    <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a>
                                                        <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Honest Organic Still Lemonade</a>
                                                            <p class="ps-product__unit">100g</p>
                                                            <p class="ps-product__meta"> <span class="ps-product__price-sale">$5.99</span><span class="ps-product__is-sale">$8.99</span><span class="quantity">(x1)</span>
                                                            </p>
                                                        </div>
                                                        <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                    </div>
                                                </li>
                                                <li class="cart-item">
                                                    <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                                                        <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Matures Own 100% Wheat</a>
                                                            <p class="ps-product__unit">1.5L</p>
                                                            <p class="ps-product__meta"> <span class="ps-product__price">$12.90</span><span class="ps-product__quantity">(x1)</span>
                                                            </p>
                                                        </div>
                                                        <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mini-cart__footer row">
                                            <div class="col-6 title">TOTAL</div>
                                            <div class="col-6 text-right total">$29.98</div>
                                            <div class="col-12 d-flex"><a class="view-cart" href="shopping-cart.html">View cart</a><a class="checkout" href="checkout.html">Checkout</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav class="navigation">
            <div class="container">
                <ul class="menu">
                    <li class="menu-item-has-children has-mega-menu active"><a class="nav-link active" href="javascript:void(0);">Home</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                        <div class="mega-menu">
                            <div class="mega-anchor"></div>
                            <div class="mega-menu__column">
                                <h4>Home Pages<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li class="active"><a class="active" href="index.html">Home Supermarket</a></li>
                                    <li><a href="home-full-width.html">Home Supermarket Full Width</a></li>
                                    <li><a href="home-local-store.html">Home Local Store</a></li>
                                    <li><a href="home-sidebar.html">Home Sidebar</a></li>
                                    <li><a href="home-business.html">Home Business</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">Shop</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                        <div class="mega-menu mega-shop">
                            <div class="mega-anchor"></div>
                            <div class="mega-menu__column">
                                <h4>Shop Pages<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li><a href="shop-view-grid.html">Shop Default View Grid</a></li>
                                    <li><a href="shop-view-listing.html">Shop Default View Listing</a></li>
                                    <li><a href="shop-view-extended.html">Shop Default View Products</a></li>
                                    <li><a href="shop-categories.html">Shop Categories</a></li>
                                    <li><a href="shop-with-banner.html">Shop With Banner</a></li>
                                    <li><a href="shop-all-brands.html">Shop All Brands</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Product Layouts<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li><a href="product-default.html">Shop Default</a></li>
                                    <li><a href="product-extended.html">Shop Extended</a></li>
                                    <li><a href="product-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="product-full-width.html">Shop Full Width</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Product Types<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li><a href="product-simple.html">Simple</a></li>
                                    <li><a href="product-variable.html">Variable</a></li>
                                    <li><a href="product-attribute.html">Attribute (Size)</a></li>
                                    <li><a href="product-image-swatches.html">Images Swatches</a></li>
                                    <li><a href="product-on-sale.html">On Sale</a></li>
                                    <li><a href="product-out-of-stock.html">Out of Stock</a></li>
                                    <li><a href="product-groupped.html">Groupped</a></li>
                                    <li><a href="product-countdown-timer.html">Countdown Timer</a></li>
                                    <li><a href="product-coupon-code.html">Coupon Code</a></li>
                                    <li><a href="product-price-list-compare.html">Price List Compare</a></li>
                                    <li><a href="product-instagram-feed.html">Instagram Feed</a></li>
                                    <li><a href="product-video-featured.html">Video Featured</a></li>
                                    <li><a href="product-with-button-buy-now.html">With button Buy Now</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Woo Pages<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="index.html">Compare</a></li>
                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                    <li><a href="login-register.html">Login & Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">Pages</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                        <div class="mega-menu">
                            <div class="mega-anchor"></div>
                            <div class="mega-menu__column">
                                <h4>Page all<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li><a href="vendor-registration.html">Vendor Register</a></li>
                                    <li><a href="become-a-vendor.html">Become a Vendor</a></li>
                                    <li><a href="store-list.html">Dokan Store List</a></li>
                                    <li><a href="vendor-store.html">Dokan Vendor Store</a></li>
                                    <li><a href="flash-sale.html">Flash Sale</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404-not-found.html">404 Not Found</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">Blog</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                        <div class="mega-menu">
                            <div class="mega-anchor"></div>
                            <div class="mega-menu__column">
                                <h4>Blog Type<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li><a href="blog-default.html">01 Blog-Default</a></li>
                                    <li><a href="blog-thumbnail.html">Blog Small Thumbnail</a></li>
                                    <li><a href="blog-gird.html">Blog Gird</a></li>
                                    <li><a href="blog-list.html">Blog Listing</a></li>
                                    <li><a href="single-post.html">Single Post without Sidebar</a></li>
                                    <li><a href="single-post-sidebar.html">Single Post with Sidebar</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu menu-item-branch"><a class="nav-link" href="javascript:void(0);">Brand</a>
                        <div class="mega-menu mega-brand">
                            <div class="mega-anchor"></div>
                            <div class="brand-box">
                                <div class="brand__title">FEATURED BRAND</div>
                                <div class="row">
                                    <div class="col-4"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/brand/brand_themeforest.jpg" alt="alt" /></a></div>
                                    <div class="col-4"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/brand/brand_envato.jpg" alt="alt" /></a></div>
                                    <div class="col-4"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/brand/brand_codecanyon.jpg" alt="alt" /></a></div>
                                    <div class="col-4"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/brand/brand_cudicjungle.jpg" alt="alt" /></a></div>
                                    <div class="col-4"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/brand/brand_videohive.jpg" alt="alt" /></a></div>
                                    <div class="col-4"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/brand/brand_photodune.jpg" alt="alt" /></a></div>
                                    <div class="col-4"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/brand/brand_evatotuts.jpg" alt="alt" /></a></div>
                                    <div class="col-4"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/brand/brand_3docean.jpg" alt="alt" /></a></div>
                                    <div class="col-4"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/brand/microlancer.jpg" alt="alt" /></a></div>
                                </div><a class="brand__link" href="shop-all-brands.html">See all brands<i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="brand__promotion"><a href="flash-sale.html"><img src="http://nouthemes.net/html/farmart/img/brand/brand_01.jpg" alt="alt" /></a></div>
                            <div class="brand__promotion"><a href="flash-sale.html"><img src="http://nouthemes.net/html/farmart/img/brand/brand_02.jpg" alt="alt" /></a></div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="flash-sale.html">Flash Sale</a></li>
                </ul>
                <div class="navigation-text">
                    <ul class="menu">
                        <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">Your Recent Viewed</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <div class="mega-menu recent-view">
                                <div class="mega-anchor"></div>
                                <div class="container">
                                    <div class="slick-many-item"><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_1a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_2a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_30a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_10a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_28b.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_15a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_5a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_32a.jpg" alt="alt" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mobile-search--slidebar">
            <div class="mobile-search--content">
                <div class="mobile-search__header">
                    <div class="mobile-search-box">
                        <div class="input-group">
                            <input class="form-control" placeholder="I'm shopping for..." id="inputSearchMobile">
                            <div class="input-group-append">
                                <button class="btn"> <i class="icon-magnifier"></i></button>
                            </div>
                        </div>
                        <button class="cancel-search"><i class="icon-cross"></i></button>
                    </div>
                </div>
                <div class="mobile-search__trendding">
                    <h5> <i class="icon-power"></i>Trending search</h5>
                    <div class="trending-content">
                        <ul class="mobile-list-trending">
                            <li class="title"><a>Trending search: </a></li>
                            <li class="trending-item"><a href="#">meat</a></li>
                            <li class="trending-item"><a href="#">fruit</a></li>
                            <li class="trending-item"><a href="#">vegetables</a></li>
                            <li class="trending-item"><a href="#">salad</a></li>
                            <li class="trending-item"><a href="#">yoghurts</a></li>
                            <li class="trending-item"><a href="#">apple</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-search__history">
                    <h5> <i class="icon-history2"></i>History<a href="javascript:void(0);">Clear all</a></h5>
                    <div class="history-content">
                        <ul class="history-list">
                            <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>apple</span><i class="icon-cross2"></i></a></li>
                            <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>organic fruit</span><i class="icon-cross2"></i></a></li>
                            <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>meat beef</span><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-search__result">
                    <h5> <span class="number-result">5</span>search result</h5>
                    <ul class="list-result">
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html"><u>Organic</u> Large Green Bell Pepper</a>
                                    <p class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected="selected">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select><span>(5)</span>
                                    </p>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$6.90</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Avocado <u>Organic</u> Hass Large</a>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$12.90</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_32a.jpg" alt="alt" /></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Tailgater Ham <u>Organic</u> Sandwich</a>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$33.49</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_6a.jpg" alt="alt" /></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Extreme <u>Organic</u> Light Can</a>
                                    <p class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected="selected">4</option>
                                            <option value="5">5</option>
                                        </select><span>(16)</span>
                                    </p>
                                    <p class="ps-product__meta"> <span class="ps-product__price-sale">$4.99</span><span class="ps-product__is-sale">$8.99</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_22a.jpg" alt="alt" /></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Extreme <u>Organic</u> Light Can</a>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$12.99</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="no-main">
        <div class="section-slide--default">
            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                <div class="ps-banner"><img class="mobile-only" src="http://nouthemes.net/html/farmart/img/slider/home-1/slide_01_mobile.png" alt="alt" /><img class="desktop-only" src="http://nouthemes.net/html/farmart/img/slider/home-1/slide_01.png" alt="alt" />
                    <div class="ps-content">
                        <div class="container">
                            <div class="ps-content-box">
                                <div class="ps-title">Farmart Organic Fruit & Vegetable Delivery <br/> <span class='text-danger'>Daily Offers.</span></div>
                                <div class="ps-subtitle">With our deverse range of <span class='text-success'>100% fresh</span> foods.</div>
                                <div class="ps-shopnow"> <a href="shop-view-grid.html">Shop Now<i class="icon-chevron-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-banner"><img class="mobile-only" src="http://nouthemes.net/html/farmart/img/slider/home-1/slide_02_mobile.png" alt="alt" /><img class="desktop-only" src="http://nouthemes.net/html/farmart/img/slider/home-1/slide_02.png" alt="alt" />
                    <div class="ps-content">
                        <div class="container">
                            <div class="ps-content-box">
                                <div class="ps-node"><span class='text-success'>NEW ARRIVALS</span></div>
                                <div class="ps-title">Whole Earth Organic Sparkling Lemonade.</div>
                                <div class="ps-subtitle">Made with nuatural ingredients</div>
                                <div class="ps-shopnow"> <a href="shop-view-grid.html">Shop Now<i class="icon-chevron-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-banner"><img class="mobile-only" src="http://nouthemes.net/html/farmart/img/slider/home-1/slide_03_mobile.png" alt="alt" /><img class="desktop-only" src="http://nouthemes.net/html/farmart/img/slider/home-1/slide_03.png" alt="alt" />
                    <div class="ps-content">
                        <div class="container">
                            <div class="ps-content-box">
                                <div class="ps-node"><span class='text-danger'>SALE UP TO 30%</span></div>
                                <div class="ps-title">Whole Earth Maple Frosted Organic Corn Flakes.</div>
                                <div class="ps-subtitle">Only from <br/> <span class='price'>$5.99</span></div>
                                <div class="ps-shopnow"> <a href="shop-view-grid.html">Shop Now<i class="icon-chevron-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-slide__footer">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-4">
                            <p><b>Offers: Farmart Organic Fruit & Vegies</b></p>
                        </div>
                        <div class="col-4">
                            <p>Whole Earth Organic Sparkling Lemonade</p>
                        </div>
                        <div class="col-4">
                            <p>Whole Earth Maple Frasted Organic Corn Flakes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-promotion--default">
            <div class="container">
                <div class="row m-0">
                    <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/promotion/promotion_01.jpg" alt="alt" /></a></div>
                    <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/promotion/promotion_02.jpg" alt="alt" /></a></div>
                    <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/promotion/promotion_03.jpg" alt="alt" /></a></div>
                    <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="http://nouthemes.net/html/farmart/img/promotion/promotion_04.jpg" alt="alt" /></a></div>
                </div>
            </div>
        </div>
        <section class="section-featured--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title">Featured Categories</h3><a class="ps-block__view" href="shop-categories.html">View all<i class="icon-chevron-right"></i></a>
                </div>
                <div class="featured--content">
                    <div class="featured__first">
                        <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                            <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Fresh</a>
                                <p class="ps-product__quantity">135 items</p>
                            </div>
                        </div>
                    </div>
                    <div class="featured__group">
                        <div class="row m-0">
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_19a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Food Cupboard</a>
                                        <p class="ps-product__quantity">34 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/03-Bakery/03_6a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Barkery</a>
                                        <p class="ps-product__quantity">27 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_2a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Ready Meals</a>
                                        <p class="ps-product__quantity">13 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_9a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Drinks, Tea & Coffee</a>
                                        <p class="ps-product__quantity">42 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/07-Beer-WineSpirits/07_1a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Beer, Wine & Spirits</a>
                                        <p class="ps-product__quantity">54 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/08-BabyChild/08_5a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Baby & Child</a>
                                        <p class="ps-product__quantity">48 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/04-FrozenFoods/04_2a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Frozen Foods</a>
                                        <p class="ps-product__quantity">44 items</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/09-KitchenDining/09_11a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Kitchen & Dining</a>
                                        <p class="ps-product__quantity">23 items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured--content-mobile">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="product-slide"><a class="ps-product--vertical item-first" href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_16a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Fresh</h5>
                                    <p class="ps-product__quantity">135 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_19a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Food Cupboard</h5>
                                    <p class="ps-product__quantity">34 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/03-Bakery/03_6a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Barkery</h5>
                                    <p class="ps-product__quantity">27 items</p>
                                </div>
                            </a>
                        </div>
                        <div class="product-slide"><a class="ps-product--vertical" href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_2a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Ready Meals</h5>
                                    <p class="ps-product__quantity">13 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_9a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Drinks, Tea & Coffee</h5>
                                    <p class="ps-product__quantity">42 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/07-Beer-WineSpirits/07_1a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Beer, Wine & Spirits</h5>
                                    <p class="ps-product__quantity">54 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/08-BabyChild/08_5a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Baby & Child</h5>
                                    <p class="ps-product__quantity">48 items</p>
                                </div>
                            </a>
                        </div>
                        <div class="product-slide"><a class="ps-product--vertical" href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/04-FrozenFoods/04_2a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Frozen Foods</h5>
                                    <p class="ps-product__quantity">44 items</p>
                                </div>
                            </a><a class="ps-product--vertical" href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/09-KitchenDining/09_11a.jpg" alt="alt" />
                                <div class="ps-product__content">
                                    <h5 class="ps-product__name">Kitchen & Dining</h5>
                                    <p class="ps-product__quantity">23 items</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-flashdeal--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title"><i class="icon-power"></i>Flash Deals<span class="ps-countdown"><span class="ps-countdown-end">Ends in : </span><span class="ps-countdown"><b class="hours">00</b> hours : <b class="minutes">12</b> mins : <b class="seconds">45</b> secs</span><span class="ps-countdown mobile"><b class="hours">00</b> h : <b class="minutes">12</b> m : <b class="seconds">45</b> s</span></span></h3><a class="ps-block__view" href="flash-sale.html">View all<i class="icon-chevron-right"></i></a>
                </div>
                <div class="flashdeal--content">
                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="false" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="6" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
                            <div class="ps-product__content">
                                <p class="ps-product-price-block"><span class="ps-product__sale">$2.90</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">25% Off</span></p>
                                <p class="ps-product__type"><i class="icon-store"></i>Farmart</p><a href="product-default.html">
                                    <h5 class="ps-product__name">Cornboat Holders</h5>
                                </a>
                                <p class="ps-product__unit">4 per pack</p>
                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><span>(0) </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="ps-product__sold">Sold: 0/40</p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>$2.90</span>
                                </div>
                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                            </div>
                        </div>
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_20a.jpg" alt="alt" /></a>
                            <div class="ps-product__content">
                                <p class="ps-product-price-block"><span class="ps-product__sale">$1.49</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">9% Off</span></p>
                                <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p><a href="product-default.html">
                                    <h5 class="ps-product__name">Saute Pan Silver</h5>
                                </a>
                                <p class="ps-product__unit">500ml</p>
                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3" selected="selected">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><span>(7) </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="ps-product__sold">Sold: 9/10</p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>$1.49</span>
                                </div>
                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                            </div>
                        </div>
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/07-Beer-WineSpirits/07_10a.jpg" alt="alt" /></a>
                            <div class="ps-product__content">
                                <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">26% Off</span></p>
                                <p class="ps-product__type"><i class="icon-store"></i>Nesco</p><a href="product-default.html">
                                    <h5 class="ps-product__name">Crock Pot Slow Cooker</h5>
                                </a>
                                <p class="ps-product__unit">$ per pack</p>
                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><span>(0) </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="ps-product__sold">Sold: 20/40</p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>$3.99</span>
                                </div>
                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                            </div>
                        </div>
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_25a.jpg" alt="alt" /></a>
                            <div class="ps-product__content">
                                <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$6.90</span><span class="ps-product__off">55% Off</span></p>
                                <p class="ps-product__type"><i class="icon-store"></i>Karery</p><a href="product-default.html">
                                    <h5 class="ps-product__name">Emoticon Cookie</h5>
                                </a>
                                <p class="ps-product__unit">330ml</p>
                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5" selected="selected">5</option>
                                    </select><span>(13) </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="ps-product__sold">Sold: 5/20</p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>$5.99</span>
                                </div>
                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                            </div>
                        </div>
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_2a.jpg" alt="alt" /></a>
                            <div class="ps-product__content">
                                <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">30% Off</span></p>
                                <p class="ps-product__type"><i class="icon-store"></i>Karey Store</p><a href="product-default.html">
                                    <h5 class="ps-product__name">Broccoli Crowns</h5>
                                </a>
                                <p class="ps-product__unit">4 per pack</p>
                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5" selected="selected">5</option>
                                    </select><span>(15) </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="ps-product__sold">Sold: 0/10</p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>$3.99</span>
                                </div>
                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                            </div>
                        </div>
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_11a.jpg" alt="alt" /></a>
                            <div class="ps-product__content">
                                <p class="ps-product-price-block"><span class="ps-product__sale">$3.39</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">15% Off</span></p>
                                <p class="ps-product__type"><i class="icon-store"></i>Farmart</p><a href="product-default.html">
                                    <h5 class="ps-product__name">Arla Organic Free Range Milk</h5>
                                </a>
                                <p class="ps-product__unit">1 per pack</p>
                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><span>(0) </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="ps-product__sold">Sold: 1/10</p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>$3.39</span>
                                </div>
                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                            </div>
                        </div>
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_20a.jpg" alt="alt" /></a>
                            <div class="ps-product__content">
                                <p class="ps-product-price-block"><span class="ps-product__sale">$1.49</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">9% Off</span></p>
                                <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p><a href="product-default.html">
                                    <h5 class="ps-product__name">Saute Pan Silver</h5>
                                </a>
                                <p class="ps-product__unit">500ml</p>
                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3" selected="selected">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><span>(7) </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="ps-product__sold">Sold: 9/10</p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>$1.49</span>
                                </div>
                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-categories--default">
            <div class="container">
                <div class="categories--floating"><a class="floating-item" href="#freshFoodBlock"><i class="icon-apple"></i></a><a class="floating-item" href="#foodCupboardBlock"><i class="icon-ice-cream2"></i></a><a class="floating-item" href="#readyMealBlock"><i class="icon-platter"></i></a><a class="floating-item" href="#drinkTeaBlock"><i class="icon-glass2"></i></a><a class="floating-item" href="#kitchenBlock"><i class="icon-dinner"></i></a>
                </div>
                <div class="categories--block">
                    <h3><a class="categories__title" id="freshFoodBlock">Fresh Foods</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/kitchen_01.jpg" alt="alt" /></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/kitchen_02.jpg" alt="alt" /></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/kitchen_03.jpg" alt="alt" /></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#"><b>Best Seller</b></a></div>
                                    <div class="categories__list-item"><a href="#">Meat & Poultry</a></div>
                                    <div class="categories__list-item"><a href="#">Fruit</a></div>
                                    <div class="categories__list-item"><a href="#">Vegetables</a></div>
                                    <div class="categories__list-item"><a href="#">Milk, Butter & Eggs</a></div>
                                    <div class="categories__list-item"><a href="#">Fish</a></div>
                                    <div class="categories__list-item"><a href="#">Frozen</a></div>
                                    <div class="categories__list-item"><a href="#">Cheese</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Desserts</a></div>
                                    <div class="categories__list-item"><a href="#">Pasta & Sauce</a></div>
                                    <div class="categories__list-item"><a href="#">Ham, Deli & Dips</a></div>
                                    <div class="categories__list-item"><a href="#">Pizza</a></div>
                                    <div class="categories__list-item"><a href="#">Soups</a></div>
                                    <div class="categories__list-item"><a href="#">Accompaniments</a></div>
                                    <div class="categories__list-item"><a href="#">Vegetarian Foods</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Corn, Yellow Sweet</a></h5>
                                            <p class="ps-product__unit">4 per pack</p>
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
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_2a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Oranges, Valencia</a></h5>
                                            <p class="ps-product__unit">5 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">15% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_13a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Celery</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_4a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Watermelon, Seedless</a></h5>
                                            <p class="ps-product__unit">450g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">35% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.90</span><span class="ps-product__price">$9.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_17a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Tomato Nature Sweet Glor</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Oniins, Green</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Pork Steak Jumbo Pack</a></h5>
                                            <p class="ps-product__unit">1kg</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
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
                <div class="categories--block">
                    <h3><a class="categories__title" id="foodCupboardBlock">Food Cupboard</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/food_cupboard_01.jpg" alt="alt" /></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/food_cupboard_02.jpg" alt="alt" /></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/food_cupboard_02.jpg" alt="alt" /></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Crisps, Snacks & Nuts</a></div>
                                    <div class="categories__list-item"><a href="#">Breakfast</a></div>
                                    <div class="categories__list-item"><a href="#">Tins & Cans</a></div>
                                    <div class="categories__list-item"><a href="#">Chocolate & Sweets</a></div>
                                    <div class="categories__list-item"><a href="#">Biscuits</a></div>
                                    <div class="categories__list-item"><a href="#">Rice</a></div>
                                    <div class="categories__list-item"><a href="#">Pasta & Pulses</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Cooking Sauces</a></div>
                                    <div class="categories__list-item"><a href="#">Cooking Ingredients</a></div>
                                    <div class="categories__list-item"><a href="#">Honey & Spreads</a></div>
                                    <div class="categories__list-item"><a href="#">Savoury Snacks</a></div>
                                    <div class="categories__list-item"><a href="#">Crackers</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Assorted Donuts Each</a></h5>
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
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_2a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">15% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Bunny Round White</a></h5>
                                            <p class="ps-product__unit">150g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_3a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">30% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">French Bread</a></h5>
                                            <p class="ps-product__unit">150g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$4.99</span><span class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_14a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Bunny Hmburger Buns</a></h5>
                                            <p class="ps-product__unit">300ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_5a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Dozen Donut Holes</a></h5>
                                            <p class="ps-product__unit">180g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_11a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Natures Own 100% Wheat</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_12a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">$ Ct Pills Twirls</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(34)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_19a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">50% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Ball Park Hot Dog Buns</a></h5>
                                            <p class="ps-product__unit">90lbs</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$4.99</span><span class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
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
                <div class="categories--block">
                    <h3><a class="categories__title" id="readyMealBlock">Ready Meals</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/ready_meal_01.jpg" alt="alt" /></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/ready_meal_02.jpg" alt="alt" /></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/ready_meal_02.jpg" alt="alt" /></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#"><span class='text-danger'>On Sales</span></a></div>
                                    <div class="categories__list-item"><a href="#">Meals for 1</a></div>
                                    <div class="categories__list-item"><a href="#">Meals for 2</a></div>
                                    <div class="categories__list-item"><a href="#">Traditional British</a></div>
                                    <div class="categories__list-item"><a href="#">Indian</a></div>
                                    <div class="categories__list-item"><a href="#">Italian</a></div>
                                    <div class="categories__list-item"><a href="#">Chinese</a></div>
                                    <div class="categories__list-item"><a href="#">Thai & Oriental</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Moroccan</a></div>
                                    <div class="categories__list-item"><a href="#">Mexican</a></div>
                                    <div class="categories__list-item"><a href="#">Lighter Meals</a></div>
                                    <div class="categories__list-item"><a href="#">Lunch & Veg Pots</a></div>
                                    <div class="categories__list-item"><a href="#">Kids' Meals</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Fried Chicken Tenders</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_2a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Hot Mashed Potatoes</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span><span class="ps-product__off"></span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_3a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">90% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Mac & Cheese</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$4.99</span><span class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_4a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Fried piece Chicken</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_5a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Resers Cole Slaw</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_6a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Tailgater Ham Sandwich Pack</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_8a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Rsr Potato Salad</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/05-ReadyMeals/05_9a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Kret Ham Off The Bone</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
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
                <div class="categories--block">
                    <h3><a class="categories__title" id="drinkTeaBlock">Drinks, Tea & Coffee</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/drink_tea_01.jpg" alt="alt" /></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/drink_tea_02.jpg" alt="alt" /></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/drink_tea_03.jpg" alt="alt" /></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Tea & Coffee</a></div>
                                    <div class="categories__list-item"><a href="#">Hot Drinks</a></div>
                                    <div class="categories__list-item"><a href="#">Fizzy Drinks</a></div>
                                    <div class="categories__list-item"><a href="#">Water</a></div>
                                    <div class="categories__list-item"><a href="#">Squash</a></div>
                                    <div class="categories__list-item"><a href="#">Juices</a></div>
                                    <div class="categories__list-item"><a href="#">Mixers</a></div>
                                    <div class="categories__list-item"><a href="#">Still & Sparkling</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">No Added Sugar</a></div>
                                    <div class="categories__list-item"><a href="#">Still & Sparkling</a></div>
                                    <div class="categories__list-item"><a href="#">Cordials</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Apple Rasp Juice</a></h5>
                                            <p class="ps-product__unit">300g</p>
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
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_3a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Kevita Kom Ginger</a></h5>
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
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_5a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">30% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Hs Grape Juice</a></h5>
                                            <p class="ps-product__unit">550ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$4.99</span><span class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_12a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Mn Lemonade</a></h5>
                                            <p class="ps-product__unit">1.5L</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_11a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">1 box</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$9.99</span><span class="ps-product__price">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$9.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_2a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Always Save Frozen Lemonade</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_9a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Onions, Green</a></h5>
                                            <p class="ps-product__unit">1.5L</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_8a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Kevita Pineapple Peach</a></h5>
                                            <p class="ps-product__unit">330ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
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
                <div class="categories--block">
                    <h3><a class="categories__title" id="kitchenBlock">Kitchen & Dining</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/kitchen_01.jpg" alt="alt" /></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/kitchen_02.jpg" alt="alt" /></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/promotion/kitchen_03.jpg" alt="alt" /></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#"><b>Most Popular</b></a></div>
                                    <div class="categories__list-item"><a href="#">Dining</a></div>
                                    <div class="categories__list-item"><a href="#">Outdoor Dining</a></div>
                                    <div class="categories__list-item"><a href="#">Party Tableware</a></div>
                                    <div class="categories__list-item"><a href="#">Food Storage</a></div>
                                    <div class="categories__list-item"><a href="#">Utensils</a></div>
                                    <div class="categories__list-item"><a href="#">Food Preparation</a></div>
                                    <div class="categories__list-item"><a href="#">Water Filters</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Pots, Pans & Prep</a></div>
                                    <div class="categories__list-item"><a href="#">Baking & Preserving</a></div>
                                    <div class="categories__list-item"><a href="#">Glassware</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/09-KitchenDining/09_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Cornboat Holders</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/09-KitchenDining/09_2a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Saute Pan Silver</a></h5>
                                            <p class="ps-product__unit">2 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">15% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/09-KitchenDining/09_3a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Crock Pot Slow Cooker</a></h5>
                                            <p class="ps-product__unit">4 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/09-KitchenDining/09_4a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">49% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Emoticon Cookie</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/09-KitchenDining/09_5a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/09-KitchenDining/09_10a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">30% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Arla Organic Free Range Milk</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/09-KitchenDining/09_11a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Dinamond Pan</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/09-KitchenDining/09_13a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Pork Steak Jumbo Pack</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
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
        </section>
        <section class="section-recommendations--default ps-home--block">
            <div class="container">
                <div class="ps-block__header mobile">
                    <h3 class="ps-block__title">Recommendations</h3>
                    <div class="ps-block__list">
                        <ul>
                            <li class="menu-item"><a href="shop-categories.html">New Arrivals</a></li>
                            <li class="menu-item"><a href="shop-categories.html">Best Selling</a></li>
                            <li class="menu-item"><a href="shop-categories.html">Most Popular</a></li>
                            <li class="menu-item"><a href="shop-categories.html">On Sales</a></li>
                            <li class="menu-item"><a href="shop-categories.html">All</a></li>
                        </ul>
                    </div>
                </div>
                <div class="recommendations__content">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="3" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="3" data-owl-item-xl="3" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="recommendation-carousel">
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Chicken Drums Jumbo Pk</a></h5>
                                    <p class="ps-product__unit">1kg</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$13.99</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Grapes, Red Seedless</a></h5>
                                    <p class="ps-product__unit">100g</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">20% Off</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/07-Beer-WineSpirits/07_11a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Honest Organic Still Beer</a></h5>
                                    <p class="ps-product__unit">4 per pack</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$39.90</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="recommendation-carousel">
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_27a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">British Organic Meat</a></h5>
                                    <p class="ps-product__unit">500g</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">60% Off</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_7a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Duchy Lemonade</a></h5>
                                    <p class="ps-product__unit">100g</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/07-Beer-WineSpirits/07_8a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Jacks Original Pepperoni</a></h5>
                                    <p class="ps-product__unit">750ml</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">15% Off</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="recommendation-carousel">
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_1a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Corn Yellow Sweet</a></h5>
                                    <p class="ps-product__unit">4 per pack</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/07-Beer-WineSpirits/07_2a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Extreme Budweiser Light Can</a></h5>
                                    <p class="ps-product__unit">330ml</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">45% Off</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/02-FoodCupboard/02_3a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Large Green Bell Snack</a></h5>
                                    <p class="ps-product__unit">180g</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$9.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">16% Off</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="recommendation-carousel">
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Chicken Drums Jumbo Pk</a></h5>
                                    <p class="ps-product__unit">1kg</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$13.99</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Grapes, Red Seedless</a></h5>
                                    <p class="ps-product__unit">100g</p>
                                    <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$11.90</span><span class="ps-product__off">20% Off</span>
                                    </p>
                                </div>
                            </div>
                            <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/07-Beer-WineSpirits/07_11a.jpg" alt="alt" /></a>
                                <div class="ps-product__content">
                                    <h5><a class="ps-product__name" href="product-default.html">Honest Organic Still Beer</a></h5>
                                    <p class="ps-product__unit">4 per pack</p>
                                    <p class="ps-product-price-block"><span class="ps-product__price-default">$39.90</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-recent--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title">Your Recent Viewed</h3><a class="ps-block__view" href="shop-categories.html">View all <i class="icon-chevron-right"></i></a>
                </div>
                <div class="recent__content">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="5" data-owl-item-lg="8" data-owl-item-xl="8" data-owl-duration="1000" data-owl-mousedrag="on"><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_1a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_2a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_30a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_10a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_18a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_28b.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_31a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_15a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_5a.jpg" alt="alt" /></a><a class="recent-item" href="index.html"><img src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_32a.jpg" alt="alt" /></a>
                    </div>
                </div>
            </div>
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
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_1a.jpg" alt="alt" /></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_2a.jpg" alt="alt" /></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_4a.jpg" alt="alt" /></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_9a.jpg" alt="alt" /></div>
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
                                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_35a.jpg" alt="alt" /></a>
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
                                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_16a.jpg" alt="alt" /></a>
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
                                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_12a.jpg" alt="alt" /></a>
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
                                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/01-Fresh/01_15a.jpg" alt="alt" /></a>
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
                                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="http://nouthemes.net/html/farmart/img/products/06-SoftDrinks-TeaCoffee/06_3a.jpg" alt="alt" /></a>
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
    </main>
    <footer class="ps-footer">
        <div class="container">
            <div class="ps-footer--contact">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <p class="contact__title">Contact Us</p>
                        <p><b><i class="icon-telephone"> </i>Hotline: </b><span>(7:00 - 21:30)</span></p>
                        <p class="telephone">097 978-6290<br>097 343-8888</p>
                        <p> <b>Head office: </b>8049 High Ridge St. Saint Joseph, MI 49085</p>
                        <p> <b>Email us: </b><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8cbcdc8c8d7caccf8ded9cad5d9cacc96dbd7d5">[email&#160;protected]</a></p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <p class="contact__title">Help & Info<span class="footer-toggle"><i class="icon-chevron-down"></i></span></p>
                                <ul class="footer-list">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Sore Locations</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Flash Sale</a></li>
                                    <li><a href="#">FAQs</a></li>
                                </ul>
                                <hr>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p class="contact__title">Corporate<span class="footer-toggle"><i class="icon-chevron-down"></i></span></p>
                                <ul class="footer-list">
                                    <li><a href="#">Become a Vendor</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Farm Business</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Our Suppliers</a></li>
                                    <li><a href="#">Accessibility</a></li>
                                </ul>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <p class="contact__title">Newsletter Subscription</p>
                        <p>Join our email subscription now to get updates on <b>promotions </b>and <b>coupons.</b></p>
                        <div class="input-group">
                            <div class="input-group-prepend"><i class="icon-envelope"></i></div>
                            <input class="form-control" type="text" placeholder="Enter your email...">
                            <div class="input-group-append">
                                <button class="btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-footer--service">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="service__payment"><img src="http://nouthemes.net/html/farmart/img/promotion/payment_paypal.jpg" alt><img src="http://nouthemes.net/html/farmart/img/promotion/payment_visa.jpg" alt><img src="http://nouthemes.net/html/farmart/img/promotion/payment_mastercart.jpg" alt><img src="http://nouthemes.net/html/farmart/img/promotion/payment_electron.jpg" alt><img src="http://nouthemes.net/html/farmart/img/promotion/payment_skrill.jpg" alt></div>
                        <p class="service__app">Get Farmart App to <span class="text-success">get $15 coupon</span></p>
                        <div class="service__download"><a href="contact.html"><img src="http://nouthemes.net/html/farmart/img/promotion/appStore.jpg" alt></a><a href="contact.html"><img src="http://nouthemes.net/html/farmart/img/promotion/googlePlay.jpg" alt></a></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <table class="table table-bordered">
                            <tr>
                                <td><a href="contact.html"><img src="http://nouthemes.net/html/farmart/img/promotion/badges_01.jpg" alt></a></td>
                                <td><a href="contact.html"><img src="http://nouthemes.net/html/farmart/img/promotion/badges_02.jpg" alt></a></td>
                                <td><a href="contact.html"><img src="http://nouthemes.net/html/farmart/img/promotion/badges_03.jpg" alt></a></td>
                            </tr>
                            <tr>
                                <td><a href="contact.html"><img src="http://nouthemes.net/html/farmart/img/promotion/badges_04.jpg" alt></a></td>
                                <td><a href="contact.html"><img src="http://nouthemes.net/html/farmart/img/promotion/badges_05.jpg" alt></a></td>
                                <td><a href="contact.html"><img src="http://nouthemes.net/html/farmart/img/promotion/badges_06.jpg" alt></a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="service--block">
                            <p class="service__item"> <i class="icon-speed-fast"></i><span> <b>Fast Delivery </b>& Shipping</span></p>
                            <p class="service__item"> <i class="icon-color-sampler"></i><span>Top <b>Offers</b></span></p>
                            <p class="service__item"> <i class="icon-wallet"></i><span>Money <b>Cashback</b></span></p>
                            <p class="service__item"> <i class="icon-bubble-user"></i><span>Friendly <b>Support 24/7</b></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-footer--categories">
                <div class="categories__list"><b>Fresh: </b>
                    <ul class="menu--vertical">
                        <li class="menu-item"><a href="shop-categories.html">Meat & Poultry</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Fruit</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Vegetables</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Salad & Herbs</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Yoghurts</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Milk, Butter & Eggs</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Ham, Deli & Dips</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Cheese</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Fish</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Pizza & Garlic Bread</a></li>
                    </ul>
                </div>
                <div class="categories__list"><b>Food Cupboard: </b>
                    <ul class="menu--vertical">
                        <li class="menu-item"><a href="shop-categories.html">Crisps, Snacks & Nuts</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Breakfast Cereals</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Tins & Cans</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Chocolate & Sweets</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Biscuits</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Rice, Pasta & Pulses</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Cooking Ingredients</a></li>
                    </ul>
                </div>
                <div class="categories__list"><b>Bakery: </b>
                    <ul class="menu--vertical">
                        <li class="menu-item"><a href="shop-categories.html">Bread</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Rolls, Bagels & Thins</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Cakes & Treats</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Wraps, Pitta & Naan Bread</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Crumpets, Muffins & Pancakes</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Croissants & Brioche</a></li>
                    </ul>
                </div>
                <div class="categories__list"><b>Frozen Foods: </b>
                    <ul class="menu--vertical">
                        <li class="menu-item"><a href="shop-categories.html">Ice Cream</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Fruit, Vegetables & Herbs</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Chips, Potatoes & Rice</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Fish</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Vegetarian</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Meat & Poultry</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Ready Meals & Party Food</a></li>
                    </ul>
                </div>
                <div class="categories__list"><b>Ready Meals: </b>
                    <ul class="menu--vertical">
                        <li class="menu-item"><a href="shop-categories.html">Meals for 1</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Indian</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Italian</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Chinese</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Traditional British</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Thai & Oriental</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Mediterranean & Moroccan</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Mexican & Caribbean</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Kids' Meals</a></li>
                    </ul>
                </div>
                <div class="categories__list"><b>Soft Drinks, Tea & Coffee: </b>
                    <ul class="menu--vertical">
                        <li class="menu-item"><a href="shop-categories.html">Fizzy Drinks</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Water</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Tea, Coffee & Hot Drinks</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Squash</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Juices</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Mixers</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Diet & No Added Sugar</a></li>
                        <li class="menu-item"><a href="shop-categories.html">Still & Sparkling</a></li>
                    </ul>
                </div>
            </div>
            <div class="row ps-footer__copyright">
                <div class="col-12 col-lg-6 ps-footer__text">&copy; 2020 Farmart Marhetplace. All Rights Reversed.</div>
                <div class="col-12 col-lg-6 ps-footer__social"> <a class="icon_social facebook" href="#"><i class="fa fa-facebook-f"></i></a><a class="icon_social twitter" href="#"><i class="fa fa-twitter"></i></a><a class="icon_social google" href="#"><i class="fa fa-google-plus"></i></a><a class="icon_social youtube" href="#"><i class="fa fa-youtube"></i></a><a class="icon_social wifi" href="#"><i class="fa fa-wifi"></i></a></div>
            </div>
        </div>
    </footer>
    <div class="ps-footer-mobile">
        <div class="menu__content">
            <ul class="menu--footer">
                <li class="nav-item"><a class="nav-link" href="index.html"><i class="icon-home3"></i><span>Home</span></a></li>
                <li class="nav-item"><a class="nav-link footer-category" href="javascript:void(0);"><i class="icon-list"></i><span>Category</span></a></li>
                <li class="nav-item"><a class="nav-link footer-cart" href="shopping-cart.html"><i class="icon-cart"></i><span class="badge bg-warning">3</span><span>Cart</span></a></li>
                <li class="nav-item"><a class="nav-link" href="wishlist.html"><i class="icon-heart"></i><span>Wishlist</span></a></li>
                <li class="nav-item"><a class="nav-link" href="login-register.html"><i class="icon-user"></i><span>Account</span></a></li>
            </ul>
        </div>
    </div>
    <button class="btn scroll-top"><i class="icon-chevron-up"></i></button>
    <div class="ps-preloader" id="preloader">
        <div class="ps-preloader-section ps-preloader-left"></div>
        <div class="ps-preloader-section ps-preloader-right"></div>
    </div>
    <div class="ps-category--mobile">
        <div class="category__header">
            <div class="category__title">All Departments</div><span class="category__close"><i class="icon-cross"></i></span>
        </div>
        <div class="category__content">
            <ul class="menu--mobile">
                <li class="daily-deals category-item"><a href="flash-sale.html">Daily Deals</a></li>
                <li class="category-item"><a href="shop-categories.html">Top Promotions</a></li>
                <li class="category-item"><a href="shop-categories.html">New Arrivals</a></li>
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
                <li class="menu-item-has-children category-item"><a href="shop-categories.html">Drinks, Tea &amp; Coffee</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="shop-view-grid.html">Tea & Coffee</a></li>
                        <li><a href="shop-view-grid.html">Hot Drinks</a></li>
                        <li><a href="shop-view-grid.html">Fizzy Drinks</a></li>
                        <li><a href="shop-view-grid.html">Water</a></li>
                    </ul>
                </li>
                <li class="category-item"><a href="shop-categories.html">Beer, Wine & Spirits</a></li>
                <li class="category-item"><a href="shop-categories.html">Baby & Child</a></li>
                <li class="category-item"><a href="shop-categories.html">Kitchen & Dining</a></li>
            </ul>
        </div>
    </div>
    <nav class="navigation--mobile">
        <div class="navigation__header">
            <div class="navigation__select">
                <div class="languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>
                    <div class="select--dropdown">
                        <ul class="select-languages">
                            <li class="active language-item" data-value="English"><a href="javascript:void(0);">English</a></li>
                            <li class="language-item" data-value="Brunei"><a href="javascript:void(0);">Brunei</a></li>
                            <li class="language-item" data-value="Armenia"><a href="javascript:void(0);">Armenia</a></li>
                        </ul>
                    </div>
                </div>
                <div class="currency"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-currency">USD</span><i class="icon-chevron-down"></i></a>
                    <div class="select--dropdown">
                        <ul class="select-currency">
                            <li class="active currency-item" data-value="USD"><a href="javascript:void(0);">USD</a></li>
                            <li class="currency-item" data-value="VND"><a href="javascript:void(0);">VND</a></li>
                            <li class="currency-item" data-value="EUR"><a href="javascript:void(0);">EUR</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navigation-title">
                <button class="close-navbar-slide"><i class="icon-arrow-left"></i></button>
                <div><span> <i class="icon-user"></i>Hi, </span><span class="account">Morgan Averill</span><a class="dropdown-user" href="#" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-chevron-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAccount"><a class="dropdown-item" href="#"><b>My Account</b></a><a class="dropdown-item" href="#">Dashboard</a><a class="dropdown-item" href="#">Account Setting</a><a class="dropdown-item" href="shopping-cart.html">Orders</a><a class="dropdown-item" href="wishlist.html">Wishlist</a><a class="dropdown-item" href="#">Shipping Address</a><a class="dropdown-divider"></a><a class="dropdown-item" href="#"><b>Vendor Setting</b></a><a class="dropdown-item" href="#">Dashboard</a><a class="dropdown-item" href="#">Products</a><a class="dropdown-item" href="shopping-cart.html">Orders</a><a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="vendor-store.html">View Store</a><a class="dropdown-divider"></a><a class="dropdown-item" href="#"><i class="icon-exit-left"></i>Log out</a></div>
                </div>
            </div>
        </div>
        <div class="navigation__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children"><a href="">Home</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home Supermarket</a></li>
                        <li><a href="home-full-width.html">Home Supermarket Full Width</a></li>
                        <li><a href="home-local-store.html">Home Local Store</a></li>
                        <li><a href="home-sidebar.html">Home Sidebar</a></li>
                        <li><a href="home-business.html">Home Business</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="">Shop</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="shop-view-grid.html">Shop Default View Grid</a></li>
                        <li><a href="shop-view-listing.html">Shop Default View Listing</a></li>
                        <li><a href="shop-view-extended.html">Shop Default View Products</a></li>
                        <li><a href="shop-categories.html">Shop Categories</a></li>
                        <li><a href="shop-with-banner.html">Shop With Banner</a></li>
                        <li><a href="shop-all-brands.html">Shop All Brands</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="">Pages</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="vendor-registration.html">Vendor Register</a></li>
                        <li><a href="become-a-vendor.html">Become a Vendor</a></li>
                        <li><a href="store-list.html">Dokan Store List</a></li>
                        <li><a href="vendor-store.html">Dokan Vendor Store</a></li>
                        <li><a href="flash-sale.html">Flash Sale</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="404-not-found.html">404 Not Found</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="">Blog</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="blog-default.html">01 Blog-Default</a></li>
                        <li><a href="blog-thumbnail.html">Blog Small Thumbnail</a></li>
                        <li><a href="blog-gird.html">Blog Gird</a></li>
                        <li><a href="blog-list.html">Blog Listing</a></li>
                        <li><a href="single-post.html">Single Post without Sidebar</a></li>
                        <li><a href="single-post-sidebar.html">Single Post with Sidebar</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="product-default.html">Brand</a></li>
                <li class="menu-item-has-children"><a href="flash-sale.html">Flash Sale</a></li>
            </ul>
            <ul class="menu--mobile">
                <li class="daily-deals"><a>daily deals</a></li>
            </ul>
        </div>
        <div class="navigation__footer">
            <ul class="menu--icon">
                <li class="footer-item"><a class="footer-link" href="#"><i class="icon-history2"></i><span>Recent viewed product</span></a></li>
                <li class="footer-item"><a class="footer-link" href="#"><i class="icon-cube"></i><span>Become a vendor</span></a></li>
                <li class="footer-item"><a class="footer-link" href="#"><i class="icon-question-circle"></i><span>Help & Contact</span></a></li>
                <li class="footer-item"><a class="footer-link" href="#"><i class="icon-telephone"></i><span>HOTLINE: <span class='text-success'>(+1) 970 978-6290</span> (Free)</span></a></li>
            </ul>
        </div>
    </nav>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="http://nouthemes.net/html/farmart/plugins/jquery.min.js"></script>
    <script src="http://nouthemes.net/html/farmart/plugins/popper.min.js"></script>
    <script src="http://nouthemes.net/html/farmart/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://nouthemes.net/html/farmart/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="http://nouthemes.net/html/farmart/plugins/jquery.matchHeight-min.js"></script>
    <script src="http://nouthemes.net/html/farmart/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="http://nouthemes.net/html/farmart/plugins/select2/dist/js/select2.min.js"></script>
    <script src="http://nouthemes.net/html/farmart/plugins/slick/slick.js"></script>
    <script src="http://nouthemes.net/html/farmart/plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
    <script src="http://nouthemes.net/html/farmart/plugins/nouislider.min.js"></script>
    <!-- custom code-->
    <script src="http://nouthemes.net/html/farmart/js/main.js"></script>
</body>

</html>