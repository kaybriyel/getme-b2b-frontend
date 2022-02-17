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
        <link rel="shortcut icon" type="image/x-icon" href="/frontendassets/imgs/theme/favicon.svg" />
        <!-- Template CSS -->
        <link rel="stylesheet" href="/frontendassets/css/plugins/slider-range.css" />
        <link rel="stylesheet" href="/frontendassets/css/main.css?r=<?php echo random_int(0, 5) ?>" />
    </head>

    <body class="single-product">
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
                                            <img src="assets/imgs/shop/product-16-2.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/imgs/shop/product-16-1.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/imgs/shop/product-16-3.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/imgs/shop/product-16-4.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/imgs/shop/product-16-5.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/imgs/shop/product-16-6.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/imgs/shop/product-16-7.jpg" alt="product image" />
                                        </figure>
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails">
                                        <div><img src="assets/imgs/shop/thumbnail-3.jpg" alt="product image" /></div>
                                        <div><img src="assets/imgs/shop/thumbnail-4.jpg" alt="product image" /></div>
                                        <div><img src="assets/imgs/shop/thumbnail-5.jpg" alt="product image" /></div>
                                        <div><img src="assets/imgs/shop/thumbnail-6.jpg" alt="product image" /></div>
                                        <div><img src="assets/imgs/shop/thumbnail-7.jpg" alt="product image" /></div>
                                        <div><img src="assets/imgs/shop/thumbnail-8.jpg" alt="product image" /></div>
                                        <div><img src="assets/imgs/shop/thumbnail-9.jpg" alt="product image" /></div>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">
                                    <span class="stock-status out-stock"> Sale Off </span>
                                    <h3 class="title-detail"><a href="/frontendshop-product-right.php" class="text-heading">Seeds of Change Organic Quinoa, Brown</a></h3>
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
                                            <a href="/frontend#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">1</span>
                                            <a href="/frontend#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
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
                                    <li><a href="/frontendpage-about.htlm">About Us</a></li>
                                    <li><a href="/frontendpage-account.php">My Account</a></li>
                                    <li><a href="/frontendshop-wishlist.php">Wishlist</a></li>
                                    <li><a href="/frontendshop-order.php">Order Tracking</a></li>
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
                                        <a class="language-dropdown-active" href="/frontend#">English <i class="fi-rs-angle-small-down"></i></a>
                                        <ul class="language-dropdown">
                                            <li>
                                                <a href="/frontend#"><img src="assets/imgs/theme/flag-fr.png" alt="" />Français</a>
                                            </li>
                                            <li>
                                                <a href="/frontend#"><img src="assets/imgs/theme/flag-dt.png" alt="" />Deutsch</a>
                                            </li>
                                            <li>
                                                <a href="/frontend#"><img src="assets/imgs/theme/flag-ru.png" alt="" />Pусский</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="language-dropdown-active" href="/frontend#">USD <i class="fi-rs-angle-small-down"></i></a>
                                        <ul class="language-dropdown">
                                            <li>
                                                <a href="/frontend#"><img src="assets/imgs/theme/flag-fr.png" alt="" />INR</a>
                                            </li>
                                            <li>
                                                <a href="/frontend#"><img src="assets/imgs/theme/flag-dt.png" alt="" />MBP</a>
                                            </li>
                                            <li>
                                                <a href="/frontend#"><img src="assets/imgs/theme/flag-ru.png" alt="" />EU</a>
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
                            <a href="/frontendindex.php"><img src="assets/imgs/theme/logo.svg" alt="logo" /></a>
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
										<a href="/frontendshop-compare.php">
											<img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-compare.svg" />
											<span class="pro-count blue">3</span>
										</a>
										<a href="/frontendshop-compare.php"><span class="lable ml-0">Compare</span></a>
									</div>
									<div class="header-action-icon-2">
										<a href="/frontendshop-wishlist.php">
											<img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-heart.svg" />
											<span class="pro-count blue">6</span>
										</a>
										<a href="/frontendshop-wishlist.php"><span class="lable">Wishlist</span></a>
									</div>
									<div class="header-action-icon-2">
										<a class="mini-cart-icon" href="/frontendshop-cart.php">
											<img alt="Nest" src="assets/imgs/theme/icons/icon-cart.svg" />
											<span class="pro-count blue">2</span>
										</a>
										<a href="/frontendshop-cart.php"><span class="lable">Cart</span></a>
										<div class="cart-dropdown-wrap cart-dropdown-hm2">
											<ul>
												<li>
													<div class="shopping-cart-img">
														<a href="/frontendshop-product-right.php"><img alt="Nest" src="assets/imgs/shop/thumbnail-3.jpg" /></a>
													</div>
													<div class="shopping-cart-title">
														<h4><a href="/frontendshop-product-right.php">Daisy Casual Bag</a></h4>
														<h4><span>1 × </span>$800.00</h4>
													</div>
													<div class="shopping-cart-delete">
														<a href="/frontend#"><i class="fi-rs-cross-small"></i></a>
													</div>
												</li>
												<li>
													<div class="shopping-cart-img">
														<a href="/frontendshop-product-right.php"><img alt="Nest" src="assets/imgs/shop/thumbnail-2.jpg" /></a>
													</div>
													<div class="shopping-cart-title">
														<h4><a href="/frontendshop-product-right.php">Corduroy Shirts</a></h4>
														<h4><span>1 × </span>$3200.00</h4>
													</div>
													<div class="shopping-cart-delete">
														<a href="/frontend#"><i class="fi-rs-cross-small"></i></a>
													</div>
												</li>
											</ul>
											<div class="shopping-cart-footer">
												<div class="shopping-cart-total">
													<h4>Total <span>$4000.00</span></h4>
												</div>
												<div class="shopping-cart-button">
													<a href="/frontendshop-cart.php" class="outline">View cart</a>
													<a href="/frontendshop-checkout.php">Checkout</a>
												</div>
											</div>
										</div>
									</div>
									<div class="header-action-icon-2">
										<a href="/frontendpage-account.php">
											<img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-user.svg" />
										</a>
										<a href="/frontendpage-account.php"><span class="lable ml-0">Account</span></a>
										<div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
											<ul>
												<li><a href="/frontendpage-account.php"><i class="fi fi-rs-user mr-10"></i>My Account</a></li>
												<li><a href="/frontendpage-account.php"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a></li>
												<li><a href="/frontendpage-account.php"><i class="fi fi-rs-label mr-10"></i>My Voucher</a></li>
												<li><a href="/frontendshop-wishlist.php"><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a></li>
												<li><a href="/frontendpage-account.php"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a></li>
												<li><a href="/frontendpage-login.php"><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a></li>
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
                            <a href="/frontendindex.php"><img src="assets/imgs/theme/logo.svg" alt="logo" /></a>
                        </div>
                        <div class="header-nav d-none d-lg-flex">
                            <div class="main-categori-wrap d-none d-lg-block">
                                <a class="categories-button-active" href="/frontend#">
                                    <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                                    <i class="fi-rs-angle-down"></i>
                                </a>
                                <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-1.svg" alt="" />Milks and Dairies</a>
                                            </li>
                                            <li>
                                                <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-2.svg" alt="" />Clothing & beauty</a>
                                            </li>
                                            <li>
                                                <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-3.svg" alt="" />Pet Foods & Toy</a>
                                            </li>
                                            <li>
                                                <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-4.svg" alt="" />Baking material</a>
                                            </li>
                                            <li>
                                                <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a>
                                            </li>
                                        </ul>
                                        <ul class="end">
                                            <li>
                                                <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-6.svg" alt="" />Wines & Drinks</a>
                                            </li>
                                            <li>
                                                <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-7.svg" alt="" />Fresh Seafood</a>
                                            </li>
                                            <li>
                                                <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-8.svg" alt="" />Fast food</a>
                                            </li>
                                            <li>
                                                <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-9.svg" alt="" />Vegetables</a>
                                            </li>
                                            <li>
                                                <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-10.svg" alt="" />Bread and Juice</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more_slide_open" style="display: none">
                                        <div class="d-flex categori-dropdown-inner">
                                            <ul>
                                                <li>
                                                    <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/icon-1.svg" alt="" />Milks and Dairies</a>
                                                </li>
                                                <li>
                                                    <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/icon-2.svg" alt="" />Clothing & beauty</a>
                                                </li>
                                            </ul>
                                            <ul class="end">
                                                <li>
                                                    <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/icon-3.svg" alt="" />Wines & Drinks</a>
                                                </li>
                                                <li>
                                                    <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/icon-4.svg" alt="" />Fresh Seafood</a>
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
                                        <li class="hot-deals"><img src="assets/imgs/theme/icons/icon-hot.svg" alt="hot deals" /><a href="/frontendshop-grid-right.php">Hot Deals</a></li>
                                        <li>
                                            <a class="active" href="/frontendindex.php">Home <i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/frontendindex.php">Home 1</a></li>
                                                <li><a href="/frontendindex-2.php">Home 2</a></li>
                                                <li><a href="/frontendindex-3.php">Home 3</a></li>
                                                <li><a href="/frontendindex-4.php">Home 4</a></li>
                                        <li><a href="/frontendindex-5.php">Home 5</a></li>
                                        <li><a href="/frontendindex-6.php">Home 6</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/frontendpage-about.php">About</a>
                                        </li>
                                        <li>
                                            <a href="/frontendshop-grid-right.php">Shop <i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/frontendshop-grid-right.php">Shop Grid – Right Sidebar</a></li>
                                                <li><a href="/frontendshop-grid-left.php">Shop Grid – Left Sidebar</a></li>
                                                <li><a href="/frontendshop-list-right.php">Shop List – Right Sidebar</a></li>
                                                <li><a href="/frontendshop-list-left.php">Shop List – Left Sidebar</a></li>
                                                <li><a href="/frontendshop-fullwidth.php">Shop - Wide</a></li>
                                                <li>
                                                    <a href="/frontend#">Single Product <i class="fi-rs-angle-right"></i></a>
                                                    <ul class="level-menu">
                                                        <li><a href="/frontendshop-product-right.php">Product – Right Sidebar</a></li>
                                                        <li><a href="/frontendshop-product-left.php">Product – Left Sidebar</a></li>
                                                        <li><a href="/frontendshop-product-full.php">Product – No sidebar</a></li>
                                                        <li><a href="/frontendshop-product-vendor.php">Product – Vendor Infor</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="/frontendshop-filter.php">Shop – Filter</a></li>
                                                <li><a href="/frontendshop-wishlist.php">Shop – Wishlist</a></li>
                                                <li><a href="/frontendshop-cart.php">Shop – Cart</a></li>
                                                <li><a href="/frontendshop-checkout.php">Shop – Checkout</a></li>
                                                <li><a href="/frontendshop-compare.php">Shop – Compare</a></li>
                                                <li>
                                                    <a href="/frontend#">Shop Invoice<i class="fi-rs-angle-right"></i></a>
                                                    <ul class="level-menu">
                                                        <li><a href="/frontendshop-invoice-1.php">Shop Invoice 1</a></li>
                                                        <li><a href="/frontendshop-invoice-2.php">Shop Invoice 2</a></li>
                                                        <li><a href="/frontendshop-invoice-3.php">Shop Invoice 3</a></li>
                                                        <li><a href="/frontendshop-invoice-4.php">Shop Invoice 4</a></li>
                                                        <li><a href="/frontendshop-invoice-5.php">Shop Invoice 5</a></li>
                                                        <li><a href="/frontendshop-invoice-6.php">Shop Invoice 6</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/frontend#">Vendors <i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/frontendvendors-grid.php">Vendors Grid</a></li>
                                                <li><a href="/frontendvendors-list.php">Vendors List</a></li>
                                                <li><a href="/frontendvendor-details-1.php">Vendor Details 01</a></li>
                                                <li><a href="/frontendvendor-details-2.php">Vendor Details 02</a></li>
                                                <li><a href="/frontendvendor-dashboard.php">Vendor Dashboard</a></li>
                                                <li><a href="/frontendvendor-guide.php">Vendor Guide</a></li>
                                            </ul>
                                        </li>
                                        <li class="position-static">
                                            <a href="/frontend#">Mega menu <i class="fi-rs-angle-down"></i></a>
                                            <ul class="mega-menu">
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="/frontend#">Fruit & Vegetables</a>
                                                    <ul>
                                                        <li><a href="/frontendshop-product-right.php">Meat & Poultry</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Fresh Vegetables</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Herbs & Seasonings</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Cuts & Sprouts</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Exotic Fruits & Veggies</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Packaged Produce</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="/frontend#">Breakfast & Dairy</a>
                                                    <ul>
                                                        <li><a href="/frontendshop-product-right.php">Milk & Flavoured Milk</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Butter and Margarine</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Eggs Substitutes</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Marmalades</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Sour Cream</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Cheese</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="/frontend#">Meat & Seafood</a>
                                                    <ul>
                                                        <li><a href="/frontendshop-product-right.php">Breakfast Sausage</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Dinner Sausage</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Chicken</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Sliced Deli Meat</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Wild Caught Fillets</a></li>
                                                        <li><a href="/frontendshop-product-right.php">Crab and Shellfish</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-width-34">
                                                    <div class="menu-banner-wrap">
                                                        <a href="/frontendshop-product-right.php"><img src="assets/imgs/banner/banner-menu.png" alt="Nest" /></a>
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
                                                                <a href="/frontendshop-product-right.php">Shop now</a>
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
                                            <a href="/frontendblog-category-grid.php">Blog <i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/frontendblog-category-grid.php">Blog Category Grid</a></li>
                                                <li><a href="/frontendblog-category-list.php">Blog Category List</a></li>
                                                <li><a href="/frontendblog-category-big.php">Blog Category Big</a></li>
                                                <li><a href="/frontendblog-category-fullwidth.php">Blog Category Wide</a></li>
                                                <li>
                                                    <a href="/frontend#">Single Post <i class="fi-rs-angle-right"></i></a>
                                                    <ul class="level-menu level-menu-modify">
                                                        <li><a href="/frontendblog-post-left.php">Left Sidebar</a></li>
                                                        <li><a href="/frontendblog-post-right.php">Right Sidebar</a></li>
                                                        <li><a href="/frontendblog-post-fullwidth.php">No Sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/frontend#">Pages <i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/frontendpage-about.php">About Us</a></li>
                                                <li><a href="/frontendpage-contact.php">Contact</a></li>
                                                <li><a href="/frontendpage-account.php">My Account</a></li>
                                                <li><a href="/frontendpage-login.php">Login</a></li>
                                                <li><a href="/frontendpage-register.php">Register</a></li>
                                                <li><a href="/frontendpage-purchase-guide.php">Purchase Guide</a></li>
                                                <li><a href="/frontendpage-privacy-policy.php">Privacy Policy</a></li>
                                                <li><a href="/frontendpage-terms.php">Terms of Service</a></li>
                                                <li><a href="/frontendpage-404.php">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/frontendpage-contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="hotline d-none d-lg-flex">
                            <img src="assets/imgs/theme/icons/icon-headphone.svg" alt="hotline" />
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
                                    <a href="/frontendshop-wishlist.php">
                                        <img alt="Nest" src="assets/imgs/theme/icons/icon-heart.svg" />
                                        <span class="pro-count white">4</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="/frontendshop-cart.php">
                                        <img alt="Nest" src="assets/imgs/theme/icons/icon-cart.svg" />
                                        <span class="pro-count white">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="/frontendshop-product-right.php"><img alt="Nest" src="assets/imgs/shop/thumbnail-3.jpg" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="/frontendshop-product-right.php">Plain Striola Shirts</a></h4>
                                                    <h3><span>1 × </span>$800.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="/frontend#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="/frontendshop-product-right.php"><img alt="Nest" src="assets/imgs/shop/thumbnail-4.jpg" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="/frontendshop-product-right.php">Macbook Pro 2022</a></h4>
                                                    <h3><span>1 × </span>$3500.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="/frontend#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$383.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="/frontendshop-cart.php">View cart</a>
                                                <a href="/frontendshop-checkout.php">Checkout</a>
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
                        <a href="/frontendindex.php"><img src="assets/imgs/theme/logo.svg" alt="logo" /></a>
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
                                    <a href="/frontendindex.php">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontendindex.php">Home 1</a></li>
                                        <li><a href="/frontendindex-2.php">Home 2</a></li>
                                        <li><a href="/frontendindex-3.php">Home 3</a></li>
                                        <li><a href="/frontendindex-4.php">Home 4</a></li>
                                        <li><a href="/frontendindex-5.php">Home 5</a></li>
                                        <li><a href="/frontendindex-6.php">Home 6</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontendshop-grid-right.php">shop</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontendshop-grid-right.php">Shop Grid – Right Sidebar</a></li>
                                        <li><a href="/frontendshop-grid-left.php">Shop Grid – Left Sidebar</a></li>
                                        <li><a href="/frontendshop-list-right.php">Shop List – Right Sidebar</a></li>
                                        <li><a href="/frontendshop-list-left.php">Shop List – Left Sidebar</a></li>
                                        <li><a href="/frontendshop-fullwidth.php">Shop - Wide</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="/frontend#">Single Product</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontendshop-product-right.php">Product – Right Sidebar</a></li>
                                                <li><a href="/frontendshop-product-left.php">Product – Left Sidebar</a></li>
                                                <li><a href="/frontendshop-product-full.php">Product – No sidebar</a></li>
                                                <li><a href="/frontendshop-product-vendor.php">Product – Vendor Infor</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/frontendshop-filter.php">Shop – Filter</a></li>
                                        <li><a href="/frontendshop-wishlist.php">Shop – Wishlist</a></li>
                                        <li><a href="/frontendshop-cart.php">Shop – Cart</a></li>
                                        <li><a href="/frontendshop-checkout.php">Shop – Checkout</a></li>
                                        <li><a href="/frontendshop-compare.php">Shop – Compare</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="/frontend#">Shop Invoice</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontendshop-invoice-1.php">Shop Invoice 1</a></li>
                                                <li><a href="/frontendshop-invoice-2.php">Shop Invoice 2</a></li>
                                                <li><a href="/frontendshop-invoice-3.php">Shop Invoice 3</a></li>
                                                <li><a href="/frontendshop-invoice-4.php">Shop Invoice 4</a></li>
                                                <li><a href="/frontendshop-invoice-5.php">Shop Invoice 5</a></li>
                                                <li><a href="/frontendshop-invoice-6.php">Shop Invoice 6</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend#">Vendors</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontendvendors-grid.php">Vendors Grid</a></li>
                                        <li><a href="/frontendvendors-list.php">Vendors List</a></li>
                                        <li><a href="/frontendvendor-details-1.php">Vendor Details 01</a></li>
                                        <li><a href="/frontendvendor-details-2.php">Vendor Details 02</a></li>
                                        <li><a href="/frontendvendor-dashboard.php">Vendor Dashboard</a></li>
                                        <li><a href="/frontendvendor-guide.php">Vendor Guide</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend#">Mega menu</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="/frontend#">Women's Fashion</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontendshop-product-right.php">Dresses</a></li>
                                                <li><a href="/frontendshop-product-right.php">Blouses & Shirts</a></li>
                                                <li><a href="/frontendshop-product-right.php">Hoodies & Sweatshirts</a></li>
                                                <li><a href="/frontendshop-product-right.php">Women's Sets</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/frontend#">Men's Fashion</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontendshop-product-right.php">Jackets</a></li>
                                                <li><a href="/frontendshop-product-right.php">Casual Faux Leather</a></li>
                                                <li><a href="/frontendshop-product-right.php">Genuine Leather</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/frontend#">Technology</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontendshop-product-right.php">Gaming Laptops</a></li>
                                                <li><a href="/frontendshop-product-right.php">Ultraslim Laptops</a></li>
                                                <li><a href="/frontendshop-product-right.php">Tablets</a></li>
                                                <li><a href="/frontendshop-product-right.php">Laptop Accessories</a></li>
                                                <li><a href="/frontendshop-product-right.php">Tablet Accessories</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontendblog-category-fullwidth.php">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontendblog-category-grid.php">Blog Category Grid</a></li>
                                        <li><a href="/frontendblog-category-list.php">Blog Category List</a></li>
                                        <li><a href="/frontendblog-category-big.php">Blog Category Big</a></li>
                                        <li><a href="/frontendblog-category-fullwidth.php">Blog Category Wide</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="/frontend#">Single Product Layout</a>
                                            <ul class="dropdown">
                                                <li><a href="/frontendblog-post-left.php">Left Sidebar</a></li>
                                                <li><a href="/frontendblog-post-right.php">Right Sidebar</a></li>
                                                <li><a href="/frontendblog-post-fullwidth.php">No Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontendpage-about.php">About Us</a></li>
                                        <li><a href="/frontendpage-contact.php">Contact</a></li>
                                        <li><a href="/frontendpage-account.php">My Account</a></li>
                                        <li><a href="/frontendpage-login.php">Login</a></li>
                                        <li><a href="/frontendpage-register.php">Register</a></li>
                                        <li><a href="/frontendpage-purchase-guide.php">Purchase Guide</a></li>
                                        <li><a href="/frontendpage-privacy-policy.php">Privacy Policy</a></li>
                                        <li><a href="/frontendpage-terms.php">Terms of Service</a></li>
                                        <li><a href="/frontendpage-404.php">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/frontend#">Language</a>
                                    <ul class="dropdown">
                                        <li><a href="/frontend#">English</a></li>
                                        <li><a href="/frontend#">French</a></li>
                                        <li><a href="/frontend#">German</a></li>
                                        <li><a href="/frontend#">Spanish</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-header-info-wrap">
                        <div class="single-mobile-header-info">
                            <a href="/frontendpage-contact.php"><i class="fi-rs-marker"></i> Our location </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="/frontendpage-login.php"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="/frontend#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                        </div>
                    </div>
                    <div class="mobile-social-icon mb-50">
                        <h6 class="mb-15">Follow Us</h6>
                        <a href="/frontend#"><img src="assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                        <a href="/frontend#"><img src="assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                        <a href="/frontend#"><img src="assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                        <a href="/frontend#"><img src="assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                        <a href="/frontend#"><img src="assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
                    </div>
                    <div class="site-copyright">Copyright 2021 © Nest. All rights reserved. Powered by AliThemes.</div>
                </div>
            </div>
        </div>
        <!--End header-->
        <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="/frontendindex.php" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                        <span></span> <a href="/frontendshop-grid-right.php">Vegetables & tubers</a> <span></span> Seeds of Change Organic
                    </div>
                </div>
            </div>
            <div class="container mb-30">
                <div class="row">
                    <div class="col-xl-11 col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="product-detail accordion-detail">
                                    <div class="row mb-50 mt-30">
                                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                            <div class="detail-gallery">
                                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                                <!-- MAIN SLIDES -->
                                                <div class="product-image-slider">
                                                    <figure class="border-radius-10">
                                                        <img src="assets/imgs/shop/product-16-2.jpg" alt="product image" />
                                                    </figure>
                                                    <figure class="border-radius-10">
                                                        <img src="assets/imgs/shop/product-16-1.jpg" alt="product image" />
                                                    </figure>
                                                    <figure class="border-radius-10">
                                                        <img src="assets/imgs/shop/product-16-3.jpg" alt="product image" />
                                                    </figure>
                                                    <figure class="border-radius-10">
                                                        <img src="assets/imgs/shop/product-16-4.jpg" alt="product image" />
                                                    </figure>
                                                    <figure class="border-radius-10">
                                                        <img src="assets/imgs/shop/product-16-5.jpg" alt="product image" />
                                                    </figure>
                                                    <figure class="border-radius-10">
                                                        <img src="assets/imgs/shop/product-16-6.jpg" alt="product image" />
                                                    </figure>
                                                    <figure class="border-radius-10">
                                                        <img src="assets/imgs/shop/product-16-7.jpg" alt="product image" />
                                                    </figure>
                                                </div>
                                                <!-- THUMBNAILS -->
                                                <div class="slider-nav-thumbnails">
                                                    <div><img src="assets/imgs/shop/thumbnail-3.jpg" alt="product image" /></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-4.jpg" alt="product image" /></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-5.jpg" alt="product image" /></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-6.jpg" alt="product image" /></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-7.jpg" alt="product image" /></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-8.jpg" alt="product image" /></div>
                                                    <div><img src="assets/imgs/shop/thumbnail-9.jpg" alt="product image" /></div>
                                                </div>
                                            </div>
                                            <!-- End Gallery -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="detail-info pr-30 pl-30">
                                                <span class="stock-status out-stock"> Sale Off </span>
                                                <h2 class="title-detail">Seeds of Change Organic Quinoa, Brown</h2>
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
                                                <div class="short-desc mb-30">
                                                    <p class="font-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.</p>
                                                </div>
                                                <div class="attr-detail attr-size mb-30">
                                                    <strong class="mr-10">Size / Weight: </strong>
                                                    <ul class="list-filter size-filter font-small">
                                                        <li><a href="/frontend#">50g</a></li>
                                                        <li class="active"><a href="/frontend#">60g</a></li>
                                                        <li><a href="/frontend#">80g</a></li>
                                                        <li><a href="/frontend#">100g</a></li>
                                                        <li><a href="/frontend#">150g</a></li>
                                                    </ul>
                                                </div>
                                                <div class="detail-extralink mb-50">
                                                    <div class="detail-qty border radius">
                                                        <a href="/frontend#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                        <span class="qty-val">1</span>
                                                        <a href="/frontend#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                                    </div>
                                                    <div class="product-extra-link2">
                                                        <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/frontendshop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn hover-up" href="/frontendshop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="font-xs">
                                                    <ul class="mr-50 float-start">
                                                        <li class="mb-5">Type: <span class="text-brand">Organic</span></li>
                                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2021</span></li>
                                                        <li>LIFE: <span class="text-brand">70 days</span></li>
                                                    </ul>
                                                    <ul class="float-start">
                                                        <li class="mb-5">SKU: <a href="/frontend#">FWM15VKT</a></li>
                                                        <li class="mb-5">Tags: <a href="/frontend#" rel="tag">Snack</a>, <a href="/frontend#" rel="tag">Organic</a>, <a href="/frontend#" rel="tag">Brown</a></li>
                                                        <li>Stock:<span class="in-stock text-brand ml-5">8 Items In Stock</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Detail Info -->
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="tab-style3">
                                            <ul class="nav nav-tabs text-uppercase">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="/frontend#Description">Description</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="/frontend#Additional-info">Additional info</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab" href="/frontend#Vendor-info">Vendor</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="/frontend#Reviews">Reviews (3)</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content shop_info_tab entry-main-content">
                                                <div class="tab-pane fade show active" id="Description">
                                                    <div class="">
                                                        <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>
                                                        <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>
                                                        <ul class="product-more-infor mt-30">
                                                            <li><span>Type Of Packing</span> Bottle</li>
                                                            <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                                                            <li><span>Quantity Per Case</span> 100ml</li>
                                                            <li><span>Ethyl Alcohol</span> 70%</li>
                                                            <li><span>Piece In One</span> Carton</li>
                                                        </ul>
                                                        <hr class="wp-block-separator is-style-dots" />
                                                        <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>
                                                        <h4 class="mt-30">Packaging & Delivery</h4>
                                                        <hr class="wp-block-separator is-style-wide" />
                                                        <p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>
                                                        <p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>
                                                        <h4 class="mt-30">Suggested Use</h4>
                                                        <ul class="product-more-infor mt-30">
                                                            <li>Refrigeration not necessary.</li>
                                                            <li>Stir before serving</li>
                                                        </ul>
                                                        <h4 class="mt-30">Other Ingredients</h4>
                                                        <ul class="product-more-infor mt-30">
                                                            <li>Organic raw pecans, organic raw cashews.</li>
                                                            <li>This butter was produced using a LTG (Low Temperature Grinding) process</li>
                                                            <li>Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li>
                                                        </ul>
                                                        <h4 class="mt-30">Warnings</h4>
                                                        <ul class="product-more-infor mt-30">
                                                            <li>Oil separation occurs naturally. May contain pieces of shell.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="Additional-info">
                                                    <table class="font-md">
                                                        <tbody>
                                                            <tr class="stand-up">
                                                                <th>Stand Up</th>
                                                                <td>
                                                                    <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="folded-wo-wheels">
                                                                <th>Folded (w/o wheels)</th>
                                                                <td>
                                                                    <p>32.5″L x 18.5″W x 16.5″H</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="folded-w-wheels">
                                                                <th>Folded (w/ wheels)</th>
                                                                <td>
                                                                    <p>32.5″L x 24″W x 18.5″H</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="door-pass-through">
                                                                <th>Door Pass Through</th>
                                                                <td>
                                                                    <p>24</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="frame">
                                                                <th>Frame</th>
                                                                <td>
                                                                    <p>Aluminum</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="weight-wo-wheels">
                                                                <th>Weight (w/o wheels)</th>
                                                                <td>
                                                                    <p>20 LBS</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="weight-capacity">
                                                                <th>Weight Capacity</th>
                                                                <td>
                                                                    <p>60 LBS</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="width">
                                                                <th>Width</th>
                                                                <td>
                                                                    <p>24″</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="handle-height-ground-to-handle">
                                                                <th>Handle height (ground to handle)</th>
                                                                <td>
                                                                    <p>37-45″</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="wheels">
                                                                <th>Wheels</th>
                                                                <td>
                                                                    <p>12″ air / wide track slick tread</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="seat-back-height">
                                                                <th>Seat back height</th>
                                                                <td>
                                                                    <p>21.5″</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="head-room-inside-canopy">
                                                                <th>Head room (inside canopy)</th>
                                                                <td>
                                                                    <p>25″</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="pa_color">
                                                                <th>Color</th>
                                                                <td>
                                                                    <p>Black, Blue, Red, White</p>
                                                                </td>
                                                            </tr>
                                                            <tr class="pa_size">
                                                                <th>Size</th>
                                                                <td>
                                                                    <p>M, S</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="Vendor-info">
                                                    <div class="vendor-logo d-flex mb-30">
                                                        <img src="assets/imgs/vendor/vendor-18.svg" alt="" />
                                                        <div class="vendor-name ml-15">
                                                            <h6>
                                                                <a href="/frontendvendor-details-2.php">Noodles Co.</a>
                                                            </h6>
                                                            <div class="product-rate-cover text-end">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width: 90%"></div>
                                                                </div>
                                                                <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="contact-infor mb-50">
                                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Contact Seller:</strong><span>(+91) - 540-025-553</span></li>
                                                    </ul>
                                                    <div class="d-flex mb-55">
                                                        <div class="mr-30">
                                                            <p class="text-brand font-xs">Rating</p>
                                                            <h4 class="mb-0">92%</h4>
                                                        </div>
                                                        <div class="mr-30">
                                                            <p class="text-brand font-xs">Ship on time</p>
                                                            <h4 class="mb-0">100%</h4>
                                                        </div>
                                                        <div>
                                                            <p class="text-brand font-xs">Chat response</p>
                                                            <h4 class="mb-0">89%</h4>
                                                        </div>
                                                    </div>
                                                    <p>Noodles & Company is an American fast-casual restaurant that offers international and American noodle dishes and pasta in addition to soups and salads. Noodles & Company was founded in 1995 by Aaron Kennedy and is headquartered in Broomfield, Colorado. The company went public in 2013 and recorded a $457 million revenue in 2017.In late 2018, there were 460 Noodles & Company locations across 29 states and Washington, D.C.</p>
                                                </div>
                                                <div class="tab-pane fade" id="Reviews">
                                                    <!--Comments-->
                                                    <div class="comments-area">
                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <h4 class="mb-30">Customer questions & answers</h4>
                                                                <div class="comment-list">
                                                                    <div class="single-comment justify-content-between d-flex mb-30">
                                                                        <div class="user justify-content-between d-flex">
                                                                            <div class="thumb text-center">
                                                                                <img src="assets/imgs/blog/author-2.png" alt="" />
                                                                                <a href="/frontend#" class="font-heading text-brand">Sienna</a>
                                                                            </div>
                                                                            <div class="desc">
                                                                                <div class="d-flex justify-content-between mb-10">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <span class="font-xs text-muted">December 4, 2021 at 3:12 pm </span>
                                                                                    </div>
                                                                                    <div class="product-rate d-inline-block">
                                                                                        <div class="product-rating" style="width: 100%"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="/frontend#" class="reply">Reply</a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="single-comment justify-content-between d-flex mb-30 ml-30">
                                                                        <div class="user justify-content-between d-flex">
                                                                            <div class="thumb text-center">
                                                                                <img src="assets/imgs/blog/author-3.png" alt="" />
                                                                                <a href="/frontend#" class="font-heading text-brand">Brenna</a>
                                                                            </div>
                                                                            <div class="desc">
                                                                                <div class="d-flex justify-content-between mb-10">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <span class="font-xs text-muted">December 4, 2021 at 3:12 pm </span>
                                                                                    </div>
                                                                                    <div class="product-rate d-inline-block">
                                                                                        <div class="product-rating" style="width: 80%"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="/frontend#" class="reply">Reply</a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="single-comment justify-content-between d-flex">
                                                                        <div class="user justify-content-between d-flex">
                                                                            <div class="thumb text-center">
                                                                                <img src="assets/imgs/blog/author-4.png" alt="" />
                                                                                <a href="/frontend#" class="font-heading text-brand">Gemma</a>
                                                                            </div>
                                                                            <div class="desc">
                                                                                <div class="d-flex justify-content-between mb-10">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <span class="font-xs text-muted">December 4, 2021 at 3:12 pm </span>
                                                                                    </div>
                                                                                    <div class="product-rate d-inline-block">
                                                                                        <div class="product-rating" style="width: 80%"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="/frontend#" class="reply">Reply</a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="mb-30">Customer reviews</h4>
                                                                <div class="d-flex mb-30">
                                                                    <div class="product-rate d-inline-block mr-15">
                                                                        <div class="product-rating" style="width: 90%"></div>
                                                                    </div>
                                                                    <h6>4.8 out of 5</h6>
                                                                </div>
                                                                <div class="progress">
                                                                    <span>5 star</span>
                                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                                </div>
                                                                <div class="progress">
                                                                    <span>4 star</span>
                                                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                                </div>
                                                                <div class="progress">
                                                                    <span>3 star</span>
                                                                    <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                                </div>
                                                                <div class="progress">
                                                                    <span>2 star</span>
                                                                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                                </div>
                                                                <div class="progress mb-30">
                                                                    <span>1 star</span>
                                                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                                </div>
                                                                <a href="/frontend#" class="font-xs text-muted">How are ratings calculated?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--comment form-->
                                                    <div class="comment-form">
                                                        <h4 class="mb-15">Add a review</h4>
                                                        <div class="product-rate d-inline-block mb-30"></div>
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-12">
                                                                <form class="form-contact comment_form" action="#" id="commentForm">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" name="email" id="email" type="email" placeholder="Email" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <input class="form-control" name="website" id="website" type="text" placeholder="Website" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" class="button button-contactForm">Submit Review</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-60">
                                        <div class="col-12">
                                            <h2 class="section-title style-1 mb-30">Related products</h2>
                                        </div>
                                        <div class="col-12">
                                            <div class="row related-products">
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                    <div class="product-cart-wrap hover-up">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="/frontendshop-product-right.php" tabindex="0">
                                                                    <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                                                                    <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/frontendshop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                                <a aria-label="Compare" class="action-btn small hover-up" href="/frontendshop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="/frontendshop-product-right.php" tabindex="0">Ulstra Bass Headphone</a></h2>
                                                            <div class="rating-result" title="90%">
                                                                <span> </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                    <div class="product-cart-wrap hover-up">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="/frontendshop-product-right.php" tabindex="0">
                                                                    <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                                                                    <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/frontendshop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                                <a aria-label="Compare" class="action-btn small hover-up" href="/frontendshop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="sale">-12%</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="/frontendshop-product-right.php" tabindex="0">Smart Bluetooth Speaker</a></h2>
                                                            <div class="rating-result" title="90%">
                                                                <span> </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <span>$138.85 </span>
                                                                <span class="old-price">$145.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                    <div class="product-cart-wrap hover-up">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="/frontendshop-product-right.php" tabindex="0">
                                                                    <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                                                                    <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/frontendshop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                                <a aria-label="Compare" class="action-btn small hover-up" href="/frontendshop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="new">New</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="/frontendshop-product-right.php" tabindex="0">HomeSpeak 12UEA Goole</a></h2>
                                                            <div class="rating-result" title="90%">
                                                                <span> </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <span>$738.85 </span>
                                                                <span class="old-price">$1245.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6 d-lg-block d-none">
                                                    <div class="product-cart-wrap hover-up mb-0">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="/frontendshop-product-right.php" tabindex="0">
                                                                    <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                                                    <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/frontendshop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                                <a aria-label="Compare" class="action-btn small hover-up" href="/frontendshop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="/frontendshop-product-right.php" tabindex="0">Dadua Camera 4K 2021EF</a></h2>
                                                            <div class="rating-result" title="90%">
                                                                <span> </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <span>$89.8 </span>
                                                                <span class="old-price">$98.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 primary-sidebar sticky-sidebar mt-30">
                                <div class="sidebar-widget widget-delivery mb-30 bg-grey-9 box-shadow-none">
                                    <h5 class="section-title style-3 mb-20">Delivery</h5>
                                    <ul>
                                        <li>
                                            <i class="fi fi-rs-marker mr-10 text-brand"></i>
                                            <span>
                                                5171 W Campbell Ave <br />
                                                undefined Kent, Utah 53127 <br />United States
                                            </span>
                                            <a href="/frontend#" class="change float-end">Change</a>
                                        </li>
                                        <li class="hr"><span></span></li>
                                    </ul>
                                    <h5 class="section-title style-3 mb-20">Return & Warranty</h5>
                                    <ul>
                                        <li>
                                            <i class="fi fi-rs-shield-check mr-10 text-brand"></i>
                                            <span> 100% Authentic </span>
                                        </li>
                                        <li>
                                            <i class="fi fi-rs-time-forward-ten mr-10 text-brand"></i>
                                            <span> 10 Days Return </span>
                                        </li>
                                        <li>
                                            <i class="fi fi-rs-diploma mr-10 text-brand"></i>
                                            <span> 12 Months Warranty </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-widget widget-vendor mb-30 bg-grey-9 box-shadow-none">
                                    <h5 class="section-title style-3 mb-20">Vendor</h5>
                                    <div class="vendor-logo d-flex mb-30">
                                        <img src="assets/imgs/vendor/vendor-18.svg" alt="" />
                                        <div class="vendor-name ml-15">
                                            <h6>
                                                <a href="/frontendvendor-details-2.php">Noodles Co.</a>
                                            </h6>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="contact-infor">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Contact Seller:</strong><span>(+91) - 540-025-553</span></li>
                                        <li class="hr"><span></span></li>
                                    </ul>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="text-brand font-xs">Rating</p>
                                            <h4 class="mb-0">92%</h4>
                                        </div>
                                        <div>
                                            <p class="text-brand font-xs">Ship on time</p>
                                            <h4 class="mb-0">100%</h4>
                                        </div>
                                        <div>
                                            <p class="text-brand font-xs">Chat response</p>
                                            <h4 class="mb-0">89%</h4>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="hr"><span></span></li>
                                    </ul>
                                    <p>Become a Vendor? <a href="/frontendpage-register.php"> Register now</a></p>
                                </div>
                                <div class="sidebar-widget widget-category-2 mb-30">
                                    <h5 class="section-title style-1 mb-30">Category</h5>
                                    <ul>
                                        <li>
                                            <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-1.svg" alt="" />Milks & Dairies</a><span class="count">30</span>
                                        </li>
                                        <li>
                                            <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-2.svg" alt="" />Clothing</a><span class="count">35</span>
                                        </li>
                                        <li>
                                            <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-3.svg" alt="" />Pet Foods </a><span class="count">42</span>
                                        </li>
                                        <li>
                                            <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-4.svg" alt="" />Baking material</a><span class="count">68</span>
                                        </li>
                                        <li>
                                            <a href="/frontendshop-grid-right.php"> <img src="assets/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a><span class="count">87</span>
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
                                    <a href="/frontendshop-grid-right.php" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                                </div>
                                <!-- Product sidebar Widget -->
                                <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                                    <h5 class="section-title style-1 mb-30">New products</h5>
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img src="assets/imgs/shop/thumbnail-3.jpg" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h5><a href="/frontendshop-product-detail.php">Chen Cardigan</a></h5>
                                            <p class="price mb-0 mt-5">$99.50</p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img src="assets/imgs/shop/thumbnail-4.jpg" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h6><a href="/frontendshop-product-detail.php">Chen Sweater</a></h6>
                                            <p class="price mb-0 mt-5">$89.50</p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: 80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img src="assets/imgs/shop/thumbnail-5.jpg" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h6><a href="/frontendshop-product-detail.php">Colorful Jacket</a></h6>
                                            <p class="price mb-0 mt-5">$25</p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: 60%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                                    <img src="assets/imgs/banner/banner-11.png" alt="" />
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
                                <img src="assets/imgs/banner/banner-9.png" alt="newsletter" />
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
                                    <img src="assets/imgs/theme/icons/icon-1.svg" alt="" />
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
                                    <img src="assets/imgs/theme/icons/icon-2.svg" alt="" />
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
                                    <img src="assets/imgs/theme/icons/icon-3.svg" alt="" />
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
                                    <img src="assets/imgs/theme/icons/icon-4.svg" alt="" />
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
                                    <img src="assets/imgs/theme/icons/icon-5.svg" alt="" />
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
                                    <img src="assets/imgs/theme/icons/icon-6.svg" alt="" />
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
                                    <a href="/frontendindex.php" class="mb-15"><img src="assets/imgs/theme/logo.svg" alt="logo" /></a>
                                    <p class="font-lg text-heading">Awesome grocery store website template</p>
                                </div>
                                <ul class="contact-infor">
                                    <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                    <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    <li><img src="assets/imgs/theme/icons/icon-email-2.svg" alt="" /><strong>Email:</strong><span>sale@Nest.com</span></li>
                                    <li><img src="assets/imgs/theme/icons/icon-clock.svg" alt="" /><strong>Hours:</strong><span>10:00 - 18:00, Mon - Sat</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">Company</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="/frontend#">About Us</a></li>
                                <li><a href="/frontend#">Delivery Information</a></li>
                                <li><a href="/frontend#">Privacy Policy</a></li>
                                <li><a href="/frontend#">Terms &amp; Conditions</a></li>
                                <li><a href="/frontend#">Contact Us</a></li>
                                <li><a href="/frontend#">Support Center</a></li>
                                <li><a href="/frontend#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">Account</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="/frontend#">Sign In</a></li>
                                <li><a href="/frontend#">View Cart</a></li>
                                <li><a href="/frontend#">My Wishlist</a></li>
                                <li><a href="/frontend#">Track My Order</a></li>
                                <li><a href="/frontend#">Help Ticket</a></li>
                                <li><a href="/frontend#">Shipping Details</a></li>
                                <li><a href="/frontend#">Compare products</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">Corporate</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="/frontend#">Become a Vendor</a></li>
                                <li><a href="/frontend#">Affiliate Program</a></li>
                                <li><a href="/frontend#">Farm Business</a></li>
                                <li><a href="/frontend#">Farm Careers</a></li>
                                <li><a href="/frontend#">Our Suppliers</a></li>
                                <li><a href="/frontend#">Accessibility</a></li>
                                <li><a href="/frontend#">Promotions</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">Popular</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="/frontend#">Milk & Flavoured Milk</a></li>
                                <li><a href="/frontend#">Butter and Margarine</a></li>
                                <li><a href="/frontend#">Eggs Substitutes</a></li>
                                <li><a href="/frontend#">Marmalades</a></li>
                                <li><a href="/frontend#">Sour Cream and Dips</a></li>
                                <li><a href="/frontend#">Tea & Kombucha</a></li>
                                <li><a href="/frontend#">Cheese</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget widget-install-app col">
                            <h4 class="widget-title">Install App</h4>
                            <p class="wow fadeIn animated">From App Store or Google Play</p>
                            <div class="download-app">
                                <a href="/frontend#" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt="" /></a>
                                <a href="/frontend#" class="hover-up mb-sm-2"><img src="assets/imgs/theme/google-play.jpg" alt="" /></a>
                            </div>
                            <p class="mb-20">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated" src="assets/imgs/theme/payment-method.png" alt="" />
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
                            <img src="assets/imgs/theme/icons/phone-call.svg" alt="hotline" />
                            <p>1900 - 6666<span>Working 8:00 - 22:00</span></p>
                        </div>
                        <div class="hotline d-lg-inline-flex">
                            <img src="assets/imgs/theme/icons/phone-call.svg" alt="hotline" />
                            <p>1900 - 8888<span>24/7 Support Center</span></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                        <div class="mobile-social-icon">
                            <h6>Follow Us</h6>
                            <a href="/frontend#"><img src="assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                            <a href="/frontend#"><img src="assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                            <a href="/frontend#"><img src="assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                            <a href="/frontend#"><img src="assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                            <a href="/frontend#"><img src="assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
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
                        <img src="assets/imgs/theme/loading.gif" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor JS-->
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
        <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="assets/js/plugins/slick.js"></script>
        <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
        <script src="assets/js/plugins/wow.js"></script>
        <script src="assets/js/plugins/slider-range.js"></script>
        <script src="assets/js/plugins/perfect-scrollbar.js"></script>
        <script src="assets/js/plugins/magnific-popup.js"></script>
        <script src="assets/js/plugins/select2.min.js"></script>
        <script src="assets/js/plugins/waypoints.js"></script>
        <script src="assets/js/plugins/counterup.js"></script>
        <script src="assets/js/plugins/jquery.countdown.min.js"></script>
        <script src="assets/js/plugins/images-loaded.js"></script>
        <script src="assets/js/plugins/isotope.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/jquery.vticker-min.js"></script>
        <script src="assets/js/plugins/jquery.theia.sticky.js"></script>
        <script src="assets/js/plugins/jquery.elevatezoom.js"></script>
        <!-- Template  JS -->
        <script src="/frontend/assets/js/main.js?v=4.0"></script>
        <script src="/frontend/assets/js/shop.js?v=4.0"></script>
    </body>
</html>
