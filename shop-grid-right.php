﻿<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Nest - Multipurpose eCommerce HTML Template</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/frontend/assets/imgs/theme/favicon.svg" />
        <!-- Template CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/plugins/slider-range.css" />
        <link rel="stylesheet" href="/frontend/assets/css/main.css?r=<?php echo random_int(0, 5) ?>" />
    </head>

    <body>        
        <!-- Quick view -->
        <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10">
                                            <img src="/frontend/assets/imgs/shop/product-16-2.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="/frontend/assets/imgs/shop/product-16-1.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="/frontend/assets/imgs/shop/product-16-3.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="/frontend/assets/imgs/shop/product-16-4.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="/frontend/assets/imgs/shop/product-16-5.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="/frontend/assets/imgs/shop/product-16-6.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="/frontend/assets/imgs/shop/product-16-7.jpg" alt="product image" />
                                        </figure>
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails">
                                        <div><img src="/frontend/assets/imgs/shop/thumbnail-3.jpg" alt="product image" /></div>
                                        <div><img src="/frontend/assets/imgs/shop/thumbnail-4.jpg" alt="product image" /></div>
                                        <div><img src="/frontend/assets/imgs/shop/thumbnail-5.jpg" alt="product image" /></div>
                                        <div><img src="/frontend/assets/imgs/shop/thumbnail-6.jpg" alt="product image" /></div>
                                        <div><img src="/frontend/assets/imgs/shop/thumbnail-7.jpg" alt="product image" /></div>
                                        <div><img src="/frontend/assets/imgs/shop/thumbnail-8.jpg" alt="product image" /></div>
                                        <div><img src="/frontend/assets/imgs/shop/thumbnail-9.jpg" alt="product image" /></div>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">
                                    <span class="stock-status out-stock"> Sale Off </span>
                                    <h3 class="title-detail"><a href="/frontend/shop-product-right.php" class="text-heading">Seeds of Change Organic Quinoa, Brown</a></h3>
                                    <div class="product-detail-rating">
                                        <div class="product-rate-cover text-end">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price text-brand">$38</span>
                                            <span>
                                                <span class="save-price font-md color3 ml-15">26% Off</span>
                                                <span class="old-price font-md ml-15">$52</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="detail-extralink mb-30">
                                        <div class="detail-qty border radius">
                                            <a href="/frontend/#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">1</span>
                                            <a href="/frontend/#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="font-xs">
                                        <ul>
                                            <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                            <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2021</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="header-area header-style-1 header-height-2">
            <div class="mobile-promotion">
                <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
            </div>
            <div class="header-top header-top-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-4">
                            <div class="header-info">
                                <ul>
                                    <li><a href="/frontend/page-about.htlm">About Us</a></li>
                                    <li><a href="/frontend/page-account.php">My Account</a></li>
                                    <li><a href="/frontend/shop-wishlist.php">Wishlist</a></li>
                                    <li><a href="/frontend/shop-order.php">Order Tracking</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="text-center">
                                <div id="news-flash" class="d-inline-block">
                                    <ul>
                                        <li>100% Secure delivery without contacting the courier</li>
                                        <li>Supper Value Deals - Save more with coupons</li>
                                        <li>Trendy 25silver jewelry, save up 35% off today</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <div class="header-info header-info-right">
                                <ul>
                                    <li>Need help? Call Us: <strong class="text-brand"> + 1800 900</strong></li>
                                    <li>
                                        <a class="language-dropdown-active" href="/frontend/#">English <i class="fi-rs-angle-small-down"></i></a>
                                        <ul class="language-dropdown">
                                            <li>
                                                <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/flag-fr.png" alt="" />Français</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/flag-dt.png" alt="" />Deutsch</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/flag-ru.png" alt="" />Pусский</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="language-dropdown-active" href="/frontend/#">USD <i class="fi-rs-angle-small-down"></i></a>
                                        <ul class="language-dropdown">
                                            <li>
                                                <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/flag-fr.png" alt="" />INR</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/flag-dt.png" alt="" />MBP</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/flag-ru.png" alt="" />EU</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="header-wrap">
                        <div class="logo logo-width-1">
                            <a href="/frontend/index.php"><img src="/frontend/assets/imgs/theme/logo.svg" alt="logo" /></a>
                        </div>
                        <div class="header-right">
                            <div class="search-style-2">
                                <form action="#">
                                    <select class="select-active">
                                        <option>All Categories</option>
                                        <option>Milks and Dairies</option>
                                        <option>Wines & Alcohol</option>
                                        <option>Clothing & Beauty</option>
                                        <option>Pet Foods & Toy</option>
                                        <option>Fast food</option>
                                        <option>Baking material</option>
                                        <option>Vegetables</option>
                                        <option>Fresh Seafood</option>
                                        <option>Noodles & Rice</option>
                                        <option>Ice cream</option>
                                    </select>
                                    <input type="text" placeholder="Search for items..." />
                                </form>
                            </div>
                            <div class="header-action-right">
                                <div class="header-action-2">
                                    <div class="search-location">
                                        <form action="#">
                                            <select class="select-active">
                                                <option>Your Location</option>
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>Arizona</option>
                                                <option>Delaware</option>
                                                <option>Florida</option>
                                                <option>Georgia</option>
                                                <option>Hawaii</option>
                                                <option>Indiana</option>
                                                <option>Maryland</option>
                                                <option>Nevada</option>
                                                <option>New Jersey</option>
                                                <option>New Mexico</option>
                                                <option>New York</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="header-action-icon-2">
                                        <a href="/frontend/shop-compare.php">
                                            <img class="svgInject" alt="Nest" src="/frontend/assets/imgs/theme/icons/icon-compare.svg" />
                                            <span class="pro-count blue">3</span>
                                        </a>
                                        <a href="/frontend/shop-compare.php"><span class="lable ml-0">Compare</span></a>
                                    </div>
                                    <div class="header-action-icon-2">
                                        <a href="/frontend/shop-wishlist.php">
                                            <img class="svgInject" alt="Nest" src="/frontend/assets/imgs/theme/icons/icon-heart.svg" />
                                            <span class="pro-count blue">6</span>
                                        </a>
                                        <a href="/frontend/shop-wishlist.php"><span class="lable">Wishlist</span></a>
                                    </div>
                                    <div class="header-action-icon-2">
                                        <a class="mini-cart-icon" href="/frontend/shop-cart.php">
                                            <img alt="Nest" src="/frontend/assets/imgs/theme/icons/icon-cart.svg" />
                                            <span class="pro-count blue">2</span>
                                        </a>
                                        <a href="/frontend/shop-cart.php"><span class="lable">Cart</span></a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <ul>
                                                <li>
                                                    <div class="shopping-cart-img">
                                                        <a href="/frontend/shop-product-right.php"><img alt="Nest" src="/frontend/assets/imgs/shop/thumbnail-3.jpg" /></a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="/frontend/shop-product-right.php">Daisy Casual Bag</a></h4>
                                                        <h4><span>1 × </span>$800.00</h4>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="/frontend/#"><i class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shopping-cart-img">
                                                        <a href="/frontend/shop-product-right.php"><img alt="Nest" src="/frontend/assets/imgs/shop/thumbnail-2.jpg" /></a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="/frontend/shop-product-right.php">Corduroy Shirts</a></h4>
                                                        <h4><span>1 × </span>$3200.00</h4>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="/frontend/#"><i class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="shopping-cart-footer">
                                                <div class="shopping-cart-total">
                                                    <h4>Total <span>$4000.00</span></h4>
                                                </div>
                                                <div class="shopping-cart-button">
                                                    <a href="/frontend/shop-cart.php" class="outline">View cart</a>
                                                    <a href="/frontend/shop-checkout.php">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-action-icon-2">
                                        <a href="/frontend/page-account.php">
                                            <img class="svgInject" alt="Nest" src="/frontend/assets/imgs/theme/icons/icon-user.svg" />
                                        </a>
                                        <a href="/frontend/page-account.php"><span class="lable ml-0">Account</span></a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="/frontend/page-account.php"><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                                </li>
                                                <li>
                                                    <a href="/frontend/page-account.php"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                                </li>
                                                <li>
                                                    <a href="/frontend/page-account.php"><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
                                                </li>
                                                <li>
                                                    <a href="/frontend/shop-wishlist.php"><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="/frontend/page-account.php"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                                </li>
                                                <li>
                                                    <a href="/frontend/page-login.php"><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-bottom-bg-color sticky-bar">
                <div class="container">
                    <div class="header-wrap header-space-between position-relative">
                        <div class="logo logo-width-1 d-block d-lg-none">
                            <a href="/frontend/index.php"><img src="/frontend/assets/imgs/theme/logo.svg" alt="logo" /></a>
                        </div>
                        <div class="header-nav d-none d-lg-flex">
                            <div class="main-categori-wrap d-none d-lg-block">
                                <a class="categories-button-active" href="/frontend/#">
                                    <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                                    <i class="fi-rs-angle-down"></i>
                                </a>
                                <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-1.svg" alt="" />Milks and Dairies</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-2.svg" alt="" />Clothing & beauty</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-3.svg" alt="" />Pet Foods & Toy</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-4.svg" alt="" />Baking material</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a>
                                            </li>
                                        </ul>
                                        <ul class="end">
                                            <li>
                                                <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-6.svg" alt="" />Wines & Drinks</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-7.svg" alt="" />Fresh Seafood</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-8.svg" alt="" />Fast food</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-9.svg" alt="" />Vegetables</a>
                                            </li>
                                            <li>
                                                <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-10.svg" alt="" />Bread and Juice</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more_slide_open" style="display: none">
                                        <div class="d-flex categori-dropdown-inner">
                                            <ul>
                                                <li>
                                                    <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/icon-1.svg" alt="" />Milks and Dairies</a>
                                                </li>
                                                <li>
                                                    <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/icon-2.svg" alt="" />Clothing & beauty</a>
                                                </li>
                                            </ul>
                                            <ul class="end">
                                                <li>
                                                    <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/icon-3.svg" alt="" />Wines & Drinks</a>
                                                </li>
                                                <li>
                                                    <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/icon-4.svg" alt="" />Fresh Seafood</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                                </div>
                            </div>
                            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                                <nav>
                                    <ul>
                                        <li class="hot-deals"><img src="/frontend/assets/imgs/theme/icons/icon-hot.svg" alt="hot deals" /><a href="/frontend/shop-grid-right.php">Hot Deals</a></li>
                                        <li>
                                            <a class="active" href="/frontend/index.php">Home <i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/frontend/index.php">Home 1</a></li>
                                                <li><a href="/frontend/index-2.php">Home 2</a></li>
                                                <li><a href="/frontend/index-3.php">Home 3</a></li>
                                                <li><a href="/frontend/index-4.php">Home 4</a></li>
                                                <li><a href="/frontend/index-5.php">Home 5</a></li>
                                                <li><a href="/frontend/index-6.php">Home 6</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/frontend/page-about.php">About</a>
                                        </li>
                                        <li>
                                            <a href="/frontend/shop-grid-right.php">Shop <i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/frontend/shop-grid-right.php">Shop Grid – Right Sidebar</a></li>
                                                <li><a href="/frontend/shop-grid-left.php">Shop Grid – Left Sidebar</a></li>
                                                <li><a href="/frontend/shop-list-right.php">Shop List – Right Sidebar</a></li>
                                                <li><a href="/frontend/shop-list-left.php">Shop List – Left Sidebar</a></li>
                                                <li><a href="/frontend/shop-fullwidth.php">Shop - Wide</a></li>
                                                <li>
                                                    <a href="/frontend/#">Single Product <i class="fi-rs-angle-right"></i></a>
                                                    <ul class="level-menu">
                                                        <li><a href="/frontend/shop-product-right.php">Product – Right Sidebar</a></li>
                                                        <li><a href="/frontend/shop-product-left.php">Product – Left Sidebar</a></li>
                                                        <li><a href="/frontend/shop-product-full.php">Product – No sidebar</a></li>
                                                        <li><a href="/frontend/shop-product-vendor.php">Product – Vendor Infor</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="/frontend/shop-filter.php">Shop – Filter</a></li>
                                                <li><a href="/frontend/shop-wishlist.php">Shop – Wishlist</a></li>
                                                <li><a href="/frontend/shop-cart.php">Shop – Cart</a></li>
                                                <li><a href="/frontend/shop-checkout.php">Shop – Checkout</a></li>
                                                <li><a href="/frontend/shop-compare.php">Shop – Compare</a></li>
                                                <li>
                                                    <a href="/frontend/#">Shop Invoice<i class="fi-rs-angle-right"></i></a>
                                                    <ul class="level-menu">
                                                        <li><a href="/frontend/shop-invoice-1.php">Shop Invoice 1</a></li>
                                                        <li><a href="/frontend/shop-invoice-2.php">Shop Invoice 2</a></li>
                                                        <li><a href="/frontend/shop-invoice-3.php">Shop Invoice 3</a></li>
                                                        <li><a href="/frontend/shop-invoice-4.php">Shop Invoice 4</a></li>
                                                        <li><a href="/frontend/shop-invoice-5.php">Shop Invoice 5</a></li>
                                                        <li><a href="/frontend/shop-invoice-6.php">Shop Invoice 6</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/frontend/#">Vendors <i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/frontend/vendors-grid.php">Vendors Grid</a></li>
                                                <li><a href="/frontend/vendors-list.php">Vendors List</a></li>
                                                <li><a href="/frontend/vendor-details-1.php">Vendor Details 01</a></li>
                                                <li><a href="/frontend/vendor-details-2.php">Vendor Details 02</a></li>
                                                <li><a href="/frontend/vendor-dashboard.php">Vendor Dashboard</a></li>
                                                <li><a href="/frontend/vendor-guide.php">Vendor Guide</a></li>
                                            </ul>
                                        </li>
                                        <li class="position-static">
                                            <a href="/frontend/#">Mega menu <i class="fi-rs-angle-down"></i></a>
                                            <ul class="mega-menu">
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="/frontend/#">Fruit & Vegetables</a>
                                                    <ul>
                                                        <li><a href="/frontend/shop-product-right.php">Meat & Poultry</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Fresh Vegetables</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Herbs & Seasonings</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Cuts & Sprouts</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Exotic Fruits & Veggies</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Packaged Produce</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="/frontend/#">Breakfast & Dairy</a>
                                                    <ul>
                                                        <li><a href="/frontend/shop-product-right.php">Milk & Flavoured Milk</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Butter and Margarine</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Eggs Substitutes</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Marmalades</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Sour Cream</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Cheese</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="/frontend/#">Meat & Seafood</a>
                                                    <ul>
                                                        <li><a href="/frontend/shop-product-right.php">Breakfast Sausage</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Dinner Sausage</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Chicken</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Sliced Deli Meat</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Wild Caught Fillets</a></li>
                                                        <li><a href="/frontend/shop-product-right.php">Crab and Shellfish</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-width-34">
                                                    <div class="menu-banner-wrap">
                                                        <a href="/frontend/shop-product-right.php"><img src="/frontend/assets/imgs/banner/banner-menu.png" alt="Nest" /></a>
                                                        <div class="menu-banner-content">
                                                            <h4>Hot deals</h4>
                                                            <h3>
                                                                Don't miss<br />
                                                                Trending
                                                            </h3>
                                                            <div class="menu-banner-price">
                                                                <span class="new-price text-success">Save to 50%</span>
                                                            </div>
                                                            <div class="menu-banner-btn">
                                                                <a href="/frontend/shop-product-right.php">Shop now</a>
                                                            </div>
                                                        </div>
                                                        <div class="menu-banner-discount">
                                                            <h3>
                                                                <span>25%</span>
                                                                off
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/frontend/blog-category-grid.php">Blog <i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/frontend/blog-category-grid.php">Blog Category Grid</a></li>
                                                <li><a href="/frontend/blog-category-list.php">Blog Category List</a></li>
                                                <li><a href="/frontend/blog-category-big.php">Blog Category Big</a></li>
                                                <li><a href="/frontend/blog-category-fullwidth.php">Blog Category Wide</a></li>
                                                <li>
                                                    <a href="/frontend/#">Single Post <i class="fi-rs-angle-right"></i></a>
                                                    <ul class="level-menu level-menu-modify">
                                                        <li><a href="/frontend/blog-post-left.php">Left Sidebar</a></li>
                                                        <li><a href="/frontend/blog-post-right.php">Right Sidebar</a></li>
                                                        <li><a href="/frontend/blog-post-fullwidth.php">No Sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/frontend/#">Pages <i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/frontend/page-about.php">About Us</a></li>
                                                <li><a href="/frontend/page-contact.php">Contact</a></li>
                                                <li><a href="/frontend/page-account.php">My Account</a></li>
                                                <li><a href="/frontend/page-login.php">Login</a></li>
                                                <li><a href="/frontend/page-register.php">Register</a></li>
                                                <li><a href="/frontend/page-purchase-guide.php">Purchase Guide</a></li>
                                                <li><a href="/frontend/page-privacy-policy.php">Privacy Policy</a></li>
                                                <li><a href="/frontend/page-terms.php">Terms of Service</a></li>
                                                <li><a href="/frontend/page-404.php">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/frontend/page-contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="hotline d-none d-lg-flex">
                            <img src="/frontend/assets/imgs/theme/icons/icon-headphone.svg" alt="hotline" />
                            <p>1900 - 888<span>24/7 Support Center</span></p>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                        <div class="header-action-right d-block d-lg-none">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="/frontend/shop-wishlist.php">
                                        <img alt="Nest" src="/frontend/assets/imgs/theme/icons/icon-heart.svg" />
                                        <span class="pro-count white">4</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="/frontend/shop-cart.php">
                                        <img alt="Nest" src="/frontend/assets/imgs/theme/icons/icon-cart.svg" />
                                        <span class="pro-count white">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="/frontend/shop-product-right.php"><img alt="Nest" src="/frontend/assets/imgs/shop/thumbnail-3.jpg" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="/frontend/shop-product-right.php">Plain Striola Shirts</a></h4>
                                                    <h3><span>1 × </span>$800.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="/frontend/#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="/frontend/shop-product-right.php"><img alt="Nest" src="/frontend/assets/imgs/shop/thumbnail-4.jpg" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="/frontend/shop-product-right.php">Macbook Pro 2022</a></h4>
                                                    <h3><span>1 × </span>$3500.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="/frontend/#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$383.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="/frontend/shop-cart.php">View cart</a>
                                                <a href="/frontend/shop-checkout.php">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-top">
                    <div class="mobile-header-logo">
                        <a href="/frontend/index.php"><img src="/frontend/assets/imgs/theme/logo.svg" alt="logo" /></a>
                    </div>
                    <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                        <button class="close-style search-close">
                            <i class="icon-top"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-header-content-area">
                    <div class="mobile-search search-style-3 mobile-header-border">
                        <form action="#">
                            <input type="text" placeholder="Search for items…" />
                            <button type="submit"><i class="fi-rs-search"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li class="menu-item-has-children">
                                    <a href="/frontend/index.php">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontend/index.php">Home 1</a></li>
                                        <li><a href="/frontend/index-2.php">Home 2</a></li>
                                        <li><a href="/frontend/index-3.php">Home 3</a></li>
                                        <li><a href="/frontend/index-4.php">Home 4</a></li>
                                        <li><a href="/frontend/index-5.php">Home 5</a></li>
                                        <li><a href="/frontend/index-6.php">Home 6</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend/shop-grid-right.php">shop</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontend/shop-grid-right.php">Shop Grid – Right Sidebar</a></li>
                                        <li><a href="/frontend/shop-grid-left.php">Shop Grid – Left Sidebar</a></li>
                                        <li><a href="/frontend/shop-list-right.php">Shop List – Right Sidebar</a></li>
                                        <li><a href="/frontend/shop-list-left.php">Shop List – Left Sidebar</a></li>
                                        <li><a href="/frontend/shop-fullwidth.php">Shop - Wide</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="/frontend/#">Single Product</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontend/shop-product-right.php">Product – Right Sidebar</a></li>
                                                <li><a href="/frontend/shop-product-left.php">Product – Left Sidebar</a></li>
                                                <li><a href="/frontend/shop-product-full.php">Product – No sidebar</a></li>
                                                <li><a href="/frontend/shop-product-vendor.php">Product – Vendor Infor</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/frontend/shop-filter.php">Shop – Filter</a></li>
                                        <li><a href="/frontend/shop-wishlist.php">Shop – Wishlist</a></li>
                                        <li><a href="/frontend/shop-cart.php">Shop – Cart</a></li>
                                        <li><a href="/frontend/shop-checkout.php">Shop – Checkout</a></li>
                                        <li><a href="/frontend/shop-compare.php">Shop – Compare</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="/frontend/#">Shop Invoice</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontend/shop-invoice-1.php">Shop Invoice 1</a></li>
                                                <li><a href="/frontend/shop-invoice-2.php">Shop Invoice 2</a></li>
                                                <li><a href="/frontend/shop-invoice-3.php">Shop Invoice 3</a></li>
                                                <li><a href="/frontend/shop-invoice-4.php">Shop Invoice 4</a></li>
                                                <li><a href="/frontend/shop-invoice-5.php">Shop Invoice 5</a></li>
                                                <li><a href="/frontend/shop-invoice-6.php">Shop Invoice 6</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend/#">Vendors</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontend/vendors-grid.php">Vendors Grid</a></li>
                                        <li><a href="/frontend/vendors-list.php">Vendors List</a></li>
                                        <li><a href="/frontend/vendor-details-1.php">Vendor Details 01</a></li>
                                        <li><a href="/frontend/vendor-details-2.php">Vendor Details 02</a></li>
                                        <li><a href="/frontend/vendor-dashboard.php">Vendor Dashboard</a></li>
                                        <li><a href="/frontend/vendor-guide.php">Vendor Guide</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend/#">Mega menu</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="/frontend/#">Women's Fashion</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontend/shop-product-right.php">Dresses</a></li>
                                                <li><a href="/frontend/shop-product-right.php">Blouses & Shirts</a></li>
                                                <li><a href="/frontend/shop-product-right.php">Hoodies & Sweatshirts</a></li>
                                                <li><a href="/frontend/shop-product-right.php">Women's Sets</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/frontend/#">Men's Fashion</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontend/shop-product-right.php">Jackets</a></li>
                                                <li><a href="/frontend/shop-product-right.php">Casual Faux Leather</a></li>
                                                <li><a href="/frontend/shop-product-right.php">Genuine Leather</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/frontend/#">Technology</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontend/shop-product-right.php">Gaming Laptops</a></li>
                                                <li><a href="/frontend/shop-product-right.php">Ultraslim Laptops</a></li>
                                                <li><a href="/frontend/shop-product-right.php">Tablets</a></li>
                                                <li><a href="/frontend/shop-product-right.php">Laptop Accessories</a></li>
                                                <li><a href="/frontend/shop-product-right.php">Tablet Accessories</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend/blog-category-fullwidth.php">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontend/blog-category-grid.php">Blog Category Grid</a></li>
                                        <li><a href="/frontend/blog-category-list.php">Blog Category List</a></li>
                                        <li><a href="/frontend/blog-category-big.php">Blog Category Big</a></li>
                                        <li><a href="/frontend/blog-category-fullwidth.php">Blog Category Wide</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="/frontend/#">Single Product Layout</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontend/blog-post-left.php">Left Sidebar</a></li>
                                                <li><a href="/frontend/blog-post-right.php">Right Sidebar</a></li>
                                                <li><a href="/frontend/blog-post-fullwidth.php">No Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend/#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontend/page-about.php">About Us</a></li>
                                        <li><a href="/frontend/page-contact.php">Contact</a></li>
                                        <li><a href="/frontend/page-account.php">My Account</a></li>
                                        <li><a href="/frontend/page-login.php">Login</a></li>
                                        <li><a href="/frontend/page-register.php">Register</a></li>
                                        <li><a href="/frontend/page-purchase-guide.php">Purchase Guide</a></li>
                                        <li><a href="/frontend/page-privacy-policy.php">Privacy Policy</a></li>
                                        <li><a href="/frontend/page-terms.php">Terms of Service</a></li>
                                        <li><a href="/frontend/page-404.php">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend/#">Language</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontend/#">English</a></li>
                                        <li><a href="/frontend/#">French</a></li>
                                        <li><a href="/frontend/#">German</a></li>
                                        <li><a href="/frontend/#">Spanish</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-header-info-wrap">
                        <div class="single-mobile-header-info">
                            <a href="/frontend/page-contact.php"><i class="fi-rs-marker"></i> Our location </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="/frontend/page-login.php"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="/frontend/#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                        </div>
                    </div>
                    <div class="mobile-social-icon mb-50">
                        <h6 class="mb-15">Follow Us</h6>
                        <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                        <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                        <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                        <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                        <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
                    </div>
                    <div class="site-copyright">Copyright 2021 © Nest. All rights reserved. Powered by AliThemes.</div>
                </div>
            </div>
        </div>
        <!--End header-->
        <main class="main">
            <div class="page-header mt-30 mb-50">
                <div class="container">
                    <div class="archive-header">
                        <div class="row align-items-center">
                            <div class="col-xl-3">
                                <h1 class="mb-15">Snack</h1>
                                <div class="breadcrumb">
                                    <a href="/frontend/index.php" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                                    <span></span> Shop <span></span> Snack
                                </div>
                            </div>
                            <div class="col-xl-9 text-end d-none d-xl-block">
                                <ul class="tags-list">
                                    <li class="hover-up">
                                        <a href="/frontend/blog-category-grid.php"><i class="fi-rs-cross mr-10"></i>Cabbage</a>
                                    </li>
                                    <li class="hover-up active">
                                        <a href="/frontend/blog-category-grid.php"><i class="fi-rs-cross mr-10"></i>Broccoli</a>
                                    </li>
                                    <li class="hover-up">
                                        <a href="/frontend/blog-category-grid.php"><i class="fi-rs-cross mr-10"></i>Artichoke</a>
                                    </li>
                                    <li class="hover-up">
                                        <a href="/frontend/blog-category-grid.php"><i class="fi-rs-cross mr-10"></i>Celery</a>
                                    </li>
                                    <li class="hover-up mr-0">
                                        <a href="/frontend/blog-category-grid.php"><i class="fi-rs-cross mr-10"></i>Spinach</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-30">
                <div class="row">
                    <div class="col-lg-4-5">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p>We found <strong class="text-brand">29</strong> items for you!</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="/frontend/#">50</a></li>
                                            <li><a href="/frontend/#">100</a></li>
                                            <li><a href="/frontend/#">150</a></li>
                                            <li><a href="/frontend/#">200</a></li>
                                            <li><a href="/frontend/#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="/frontend/#">Featured</a></li>
                                            <li><a href="/frontend/#">Price: Low to High</a></li>
                                            <li><a href="/frontend/#">Price: High to Low</a></li>
                                            <li><a href="/frontend/#">Release Date</a></li>
                                            <li><a href="/frontend/#">Avg. Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid">
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-1-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-1-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Snack</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Seeds of Change Organic Quinoe</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-2-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-2-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Hodo Foods</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">All Natural Italian-Style Chicken Meatballs</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 80%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (3.5)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">Stouffer</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$52.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-3-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-3-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Snack</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Angie’s Boomchickapop Sweet & Salty</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 85%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">StarKist</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$48.85</span>
                                                <span class="old-price">$52.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-4-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-4-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Vegetables</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Foster Farms Takeout Crispy Classic</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$17.85</span>
                                                <span class="old-price">$19.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-5-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-5-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Pet Foods</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Blue Diamond Almonds Lightly</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-6-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-6-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Hodo Foods</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Chobani Complete Vanilla Greek</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$54.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-7-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-7-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Meats</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$32.85</span>
                                                <span class="old-price">$33.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-8-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-8-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Snack</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Encore Seafoods Stuffed Alaskan</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$35.85</span>
                                                <span class="old-price">$37.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-9-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-9-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Coffes</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Gorton’s Beer Battered Fish Fillets</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">Old El Paso</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-10-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-10-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Cream</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Haagen-Dazs Caramel Cone Ice Cream</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 50%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (2.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">Tyson</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$22.85</span>
                                                <span class="old-price">$24.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-1-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-1-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Snack</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Seeds of Change Organic Quinoe</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-2-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-2-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Hodo Foods</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">All Natural Italian-Style Chicken Meatballs</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 80%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (3.5)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">Stouffer</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$52.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-3-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-3-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Snack</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Angie’s Boomchickapop Sweet & Salty</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 85%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">StarKist</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$48.85</span>
                                                <span class="old-price">$52.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-4-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-4-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Vegetables</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Foster Farms Takeout Crispy Classic</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$17.85</span>
                                                <span class="old-price">$19.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-5-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-5-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">-14%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Pet Foods</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Blue Diamond Almonds Lightly</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-6-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-6-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Hodo Foods</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Chobani Complete Vanilla Greek</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$54.85</span>
                                                <span class="old-price">$55.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-7-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-7-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Meats</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$32.85</span>
                                                <span class="old-price">$33.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-8-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-8-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Snack</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Encore Seafoods Stuffed Alaskan</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$35.85</span>
                                                <span class="old-price">$37.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-9-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-9-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Coffes</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Gorton’s Beer Battered Fish Fillets</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">Old El Paso</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$23.85</span>
                                                <span class="old-price">$25.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/frontend/shop-product-right.php">
                                                <img class="default-img" src="/frontend/assets/imgs/shop/product-10-1.jpg" alt="" />
                                                <img class="hover-img" src="/frontend/assets/imgs/shop/product-10-2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" href="/frontend/shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn" href="/frontend/shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/frontend/shop-grid-right.php">Cream</a>
                                        </div>
                                        <h2><a href="/frontend/shop-product-right.php">Haagen-Dazs Caramel Cone Ice Cream</a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 50%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (2.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">Tyson</a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>$22.85</span>
                                                <span class="old-price">$24.8</span>
                                            </div>
                                            <div class="add-cart">
                                                <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product card-->
                        </div>
                        <!--product grid-->
                        <div class="pagination-area mt-20 mb-20">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item">
                                        <a class="page-link" href="/frontend/#"><i class="fi-rs-arrow-small-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="/frontend/#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="/frontend/#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="/frontend/#">3</a></li>
                                    <li class="page-item"><a class="page-link dot" href="/frontend/#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="/frontend/#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="/frontend/#"><i class="fi-rs-arrow-small-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <section class="section-padding pb-5">
                            <div class="section-title">
                                <h3 class="">Deals Of The Day</h3>
                                <a class="show-all" href="/frontend/shop-grid-right.php">
                                    All Deals
                                    <i class="fi-rs-angle-right"></i>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="product-cart-wrap style-2">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img">
                                                <a href="/frontend/shop-product-right.php">
                                                    <img src="/frontend/assets/imgs/banner/banner-5.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="deals-countdown-wrap">
                                                <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                                            </div>
                                            <div class="deals-content">
                                                <h2><a href="/frontend/shop-product-right.php">Seeds of Change Organic Quinoa, Brown</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="product-cart-wrap style-2">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img">
                                                <a href="/frontend/shop-product-right.php">
                                                    <img src="/frontend/assets/imgs/banner/banner-6.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="deals-countdown-wrap">
                                                <div class="deals-countdown" data-countdown="2026/04/25 00:00:00"></div>
                                            </div>
                                            <div class="deals-content">
                                                <h2><a href="/frontend/shop-product-right.php">Perdue Simply Smart Organics Gluten</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">Old El Paso</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$24.85</span>
                                                        <span class="old-price">$26.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-none d-lg-block">
                                    <div class="product-cart-wrap style-2">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img">
                                                <a href="/frontend/shop-product-right.php">
                                                    <img src="/frontend/assets/imgs/banner/banner-7.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="deals-countdown-wrap">
                                                <div class="deals-countdown" data-countdown="2027/03/25 00:00:00"></div>
                                            </div>
                                            <div class="deals-content">
                                                <h2><a href="/frontend/shop-product-right.php">Signature Wood-Fired Mushroom</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">Progresso</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$12.85</span>
                                                        <span class="old-price">$13.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-none d-xl-block">
                                    <div class="product-cart-wrap style-2">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img">
                                                <a href="/frontend/shop-product-right.php">
                                                    <img src="/frontend/assets/imgs/banner/banner-8.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="deals-countdown-wrap">
                                                <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                                            </div>
                                            <div class="deals-content">
                                                <h2><a href="/frontend/shop-product-right.php">Simply Lemonade with Raspberry Juice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="/frontend/vendor-details-1.php">Yoplait</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$15.85</span>
                                                        <span class="old-price">$16.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/frontend/shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--End Deals-->
                    </div>
                    <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                        <div class="sidebar-widget widget-category-2 mb-30">
                            <h5 class="section-title style-1 mb-30">Category</h5>
                            <ul>
                                <li>
                                    <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-1.svg" alt="" />Milks & Dairies</a><span class="count">30</span>
                                </li>
                                <li>
                                    <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-2.svg" alt="" />Clothing</a><span class="count">35</span>
                                </li>
                                <li>
                                    <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-3.svg" alt="" />Pet Foods </a><span class="count">42</span>
                                </li>
                                <li>
                                    <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-4.svg" alt="" />Baking material</a><span class="count">68</span>
                                </li>
                                <li>
                                    <a href="/frontend/shop-grid-right.php"> <img src="/frontend/assets/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a><span class="count">87</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Fillter By Price -->
                        <div class="sidebar-widget price_range range mb-30">
                            <h5 class="section-title style-1 mb-30">Fill by price</h5>
                            <div class="price-filter">
                                <div class="price-filter-inner">                                    
                                    <div id="slider-range" class="mb-20"></div>
                                    <div class="d-flex justify-content-between">
                                        <div class="caption">From: <strong id="slider-range-value1" class="text-brand"></strong></div>
                                        <div class="caption">To: <strong id="slider-range-value2" class="text-brand"></strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                        <br />
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                                        <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                                        <br />
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                                    </div>
                                    <label class="fw-900 mt-15">Item Condition</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="" />
                                        <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                                        <br />
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="" />
                                        <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                        <br />
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="" />
                                        <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                    </div>
                                </div>
                            </div>
                            <a href="/frontend/shop-grid-right.php" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                        </div>
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                            <h5 class="section-title style-1 mb-30">New products</h5>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="/frontend/assets/imgs/shop/thumbnail-3.jpg" alt="#" />
                                </div>
                                <div class="content pt-10">
                                    <h5><a href="/frontend/shop-product-detail.php">Chen Cardigan</a></h5>
                                    <p class="price mb-0 mt-5">$99.50</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="/frontend/assets/imgs/shop/thumbnail-4.jpg" alt="#" />
                                </div>
                                <div class="content pt-10">
                                    <h6><a href="/frontend/shop-product-detail.php">Chen Sweater</a></h6>
                                    <p class="price mb-0 mt-5">$89.50</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="/frontend/assets/imgs/shop/thumbnail-5.jpg" alt="#" />
                                </div>
                                <div class="content pt-10">
                                    <h6><a href="/frontend/shop-product-detail.php">Colorful Jacket</a></h6>
                                    <p class="price mb-0 mt-5">$25</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width: 60%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                            <img src="/frontend/assets/imgs/banner/banner-11.png" alt="" />
                            <div class="banner-text">
                                <span>Oganic</span>
                                <h4>
                                    Save 17% <br />
                                    on <span class="text-brand">Oganic</span><br />
                                    Juice
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="main">
            <section class="newsletter mb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="position-relative newsletter-inner">
                                <div class="newsletter-content">
                                    <h2 class="mb-20">
                                        Stay home & get your daily <br />
                                        needs from our shop
                                    </h2>
                                    <p class="mb-45">Start You'r Daily Shopping with <span class="text-brand">Nest Mart</span></p>
                                    <form class="form-subcriber d-flex">
                                        <input type="email" placeholder="Your emaill address" />
                                        <button class="btn" type="submit">Subscribe</button>
                                    </form>
                                </div>
                                <img src="/frontend/assets/imgs/banner/banner-9.png" alt="newsletter" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="featured section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                            <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                                <div class="banner-icon">
                                    <img src="/frontend/assets/imgs/theme/icons/icon-1.svg" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Best prices & offers</h3>
                                    <p>Orders $50 or more</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                                <div class="banner-icon">
                                    <img src="/frontend/assets/imgs/theme/icons/icon-2.svg" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Free delivery</h3>
                                    <p>24/7 amazing services</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                                <div class="banner-icon">
                                    <img src="/frontend/assets/imgs/theme/icons/icon-3.svg" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Great daily deal</h3>
                                    <p>When you sign up</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                                <div class="banner-icon">
                                    <img src="/frontend/assets/imgs/theme/icons/icon-4.svg" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Wide assortment</h3>
                                    <p>Mega Discounts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                                <div class="banner-icon">
                                    <img src="/frontend/assets/imgs/theme/icons/icon-5.svg" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Easy returns</h3>
                                    <p>Within 30 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                            <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                                <div class="banner-icon">
                                    <img src="/frontend/assets/imgs/theme/icons/icon-6.svg" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Safe delivery</h3>
                                    <p>Within 30 days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-padding footer-mid">
                <div class="container pt-15 pb-20">
                    <div class="row">
                        <div class="col">
                            <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0">
                                <div class="logo mb-30">
                                    <a href="/frontend/index.php" class="mb-15"><img src="/frontend/assets/imgs/theme/logo.svg" alt="logo" /></a>
                                    <p class="font-lg text-heading">Awesome grocery store website template</p>
                                </div>
                                <ul class="contact-infor">
                                    <li><img src="/frontend/assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                    <li><img src="/frontend/assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    <li><img src="/frontend/assets/imgs/theme/icons/icon-email-2.svg" alt="" /><strong>Email:</strong><span>sale@Nest.com</span></li>
                                    <li><img src="/frontend/assets/imgs/theme/icons/icon-clock.svg" alt="" /><strong>Hours:</strong><span>10:00 - 18:00, Mon - Sat</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">Company</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="/frontend/#">About Us</a></li>
                                <li><a href="/frontend/#">Delivery Information</a></li>
                                <li><a href="/frontend/#">Privacy Policy</a></li>
                                <li><a href="/frontend/#">Terms &amp; Conditions</a></li>
                                <li><a href="/frontend/#">Contact Us</a></li>
                                <li><a href="/frontend/#">Support Center</a></li>
                                <li><a href="/frontend/#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">Account</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="/frontend/#">Sign In</a></li>
                                <li><a href="/frontend/#">View Cart</a></li>
                                <li><a href="/frontend/#">My Wishlist</a></li>
                                <li><a href="/frontend/#">Track My Order</a></li>
                                <li><a href="/frontend/#">Help Ticket</a></li>
                                <li><a href="/frontend/#">Shipping Details</a></li>
                                <li><a href="/frontend/#">Compare products</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">Corporate</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="/frontend/#">Become a Vendor</a></li>
                                <li><a href="/frontend/#">Affiliate Program</a></li>
                                <li><a href="/frontend/#">Farm Business</a></li>
                                <li><a href="/frontend/#">Farm Careers</a></li>
                                <li><a href="/frontend/#">Our Suppliers</a></li>
                                <li><a href="/frontend/#">Accessibility</a></li>
                                <li><a href="/frontend/#">Promotions</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">Popular</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="/frontend/#">Milk & Flavoured Milk</a></li>
                                <li><a href="/frontend/#">Butter and Margarine</a></li>
                                <li><a href="/frontend/#">Eggs Substitutes</a></li>
                                <li><a href="/frontend/#">Marmalades</a></li>
                                <li><a href="/frontend/#">Sour Cream and Dips</a></li>
                                <li><a href="/frontend/#">Tea & Kombucha</a></li>
                                <li><a href="/frontend/#">Cheese</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget widget-install-app col">
                            <h4 class="widget-title">Install App</h4>
                            <p class="wow fadeIn animated">From App Store or Google Play</p>
                            <div class="download-app">
                                <a href="/frontend/#" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="/frontend/assets/imgs/theme/app-store.jpg" alt="" /></a>
                                <a href="/frontend/#" class="hover-up mb-sm-2"><img src="/frontend/assets/imgs/theme/google-play.jpg" alt="" /></a>
                            </div>
                            <p class="mb-20">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated" src="/frontend/assets/imgs/theme/payment-method.png" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            <div class="container pb-30">
                <div class="row align-items-center">
                    <div class="col-12 mb-30">
                        <div class="footer-bottom"></div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <p class="font-sm mb-0">&copy; 2021, <strong class="text-brand">Nest</strong> - HTML Ecommerce Template <br />All rights reserved</p>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                        <div class="hotline d-lg-inline-flex mr-30">
                            <img src="/frontend/assets/imgs/theme/icons/phone-call.svg" alt="hotline" />
                            <p>1900 - 6666<span>Working 8:00 - 22:00</span></p>
                        </div>
                        <div class="hotline d-lg-inline-flex">
                            <img src="/frontend/assets/imgs/theme/icons/phone-call.svg" alt="hotline" />
                            <p>1900 - 8888<span>24/7 Support Center</span></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                        <div class="mobile-social-icon">
                            <h6>Follow Us</h6>
                            <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                            <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                            <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                            <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                            <a href="/frontend/#"><img src="/frontend/assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
                        </div>
                        <p class="font-sm">Up to 15% discount on your first subscribe</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        <img src="/frontend/assets/imgs/theme/loading.gif" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor JS-->
        <script src="/frontend/assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="/frontend/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="/frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
        <script src="/frontend/assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="/frontend/assets/js/plugins/slick.js"></script>
        <script src="/frontend/assets/js/plugins/jquery.syotimer.min.js"></script>
        <script src="/frontend/assets/js/plugins/wow.js"></script>
        <script src="/frontend/assets/js/plugins/slider-range.js"></script>
        <script src="/frontend/assets/js/plugins/perfect-scrollbar.js"></script>
        <script src="/frontend/assets/js/plugins/magnific-popup.js"></script>
        <script src="/frontend/assets/js/plugins/select2.min.js"></script>
        <script src="/frontend/assets/js/plugins/waypoints.js"></script>
        <script src="/frontend/assets/js/plugins/counterup.js"></script>
        <script src="/frontend/assets/js/plugins/jquery.countdown.min.js"></script>
        <script src="/frontend/assets/js/plugins/images-loaded.js"></script>
        <script src="/frontend/assets/js/plugins/isotope.js"></script>
        <script src="/frontend/assets/js/plugins/scrollup.js"></script>
        <script src="/frontend/assets/js/plugins/jquery.vticker-min.js"></script>
        <script src="/frontend/assets/js/plugins/jquery.theia.sticky.js"></script>
        <script src="/frontend/assets/js/plugins/jquery.elevatezoom.js"></script>
        <!-- Template  JS -->
        <script src="/frontend/assets/js/main.js?v=4.0"></script>
        <script src="/frontend/assets/js/shop.js?v=4.0"></script>
    </body>
</html>
