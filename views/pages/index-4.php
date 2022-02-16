﻿<?php View::component('modals/quick-view') ?>
<main class="main">
    <section class="hero-3 position-relative align-items">
        <h2 class="mb-30 text-center">What are you looking for?</h2>
        <form class="form-subcriber d-flex mb-30 text-center">
            <input type="email" placeholder="Your emaill address" tabindex="-1" />
            <button class="btn" type="submit" tabindex="-1">Subscribe</button>
        </form>
        <ul class="list-inline nav nav-tabs links font-xs text-center">
            <li class="list-inline-item nav-item"><a class="nav-link font-xs" href="shop-grid-right.php">Cake</a></li>
            <li class="list-inline-item nav-item"><a class="nav-link font-xs" href="shop-grid-right.php">Coffes</a></li>
            <li class="list-inline-item nav-item"><a class="nav-link font-xs" href="shop-grid-right.php">Pet Foods</a></li>
            <li class="list-inline-item nav-item"><a class="nav-link font-xs" href="shop-grid-right.php">Vegetables</a></li>
        </ul>
    </section>
    <section class="bg-grey-1 section-padding pt-100 pb-80 mb-80">
        <div class="container">
            <h1 class="mb-80 text-center">Trending items</h1>
            <div class="row product-grid">
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Snack</a>
                            </div>
                            <h2><a href="shop-product-right.php">Seeds of Change Organic Quinoe Naturel</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$28.85</span>
                                    <span class="old-price">$32.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="sale">Sale</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Hodo Foods</a>
                            </div>
                            <h2><a href="shop-product-right.php">All Natural Italian-Style Chicken Meatballs</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 80%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (3.5)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">Stouffer</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$52.85</span>
                                    <span class="old-price">$55.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="new">New</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Snack</a>
                            </div>
                            <h2><a href="shop-product-right.php">Angie’s Boomchickapop Sweet & Salty</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 85%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">StarKist</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$48.85</span>
                                    <span class="old-price">$52.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Vegetables</a>
                            </div>
                            <h2><a href="shop-product-right.php">Foster Farms Takeout Crispy Classic</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$17.85</span>
                                    <span class="old-price">$19.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="best">-14%</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Pet Foods</a>
                            </div>
                            <h2><a href="shop-product-right.php">Blue Diamond Almonds Lightly Naturel</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$23.85</span>
                                    <span class="old-price">$25.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Hodo Foods</a>
                            </div>
                            <h2><a href="shop-product-right.php">Chobani Complete Vanilla Greek Bottle</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$54.85</span>
                                    <span class="old-price">$55.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Meats</a>
                            </div>
                            <h2><a href="shop-product-right.php">Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="sale">Sale</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Snack</a>
                            </div>
                            <h2><a href="shop-product-right.php">Encore Seafoods Stuffed Alaskan</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$35.85</span>
                                    <span class="old-price">$37.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Coffes</a>
                            </div>
                            <h2><a href="shop-product-right.php">Gorton’s Beer Battered Fish Fillets</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">Old El Paso</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$23.85</span>
                                    <span class="old-price">$25.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Cream</a>
                            </div>
                            <h2><a href="shop-product-right.php">Haagen-Dazs Caramel Cone Ice Cream</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 50%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (2.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">Tyson</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$22.85</span>
                                    <span class="old-price">$24.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Snack</a>
                            </div>
                            <h2><a href="shop-product-right.php">Seeds of Change Organic Quinoe Naturel</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$28.85</span>
                                    <span class="old-price">$32.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="sale">Sale</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Hodo Foods</a>
                            </div>
                            <h2><a href="shop-product-right.php">All Natural Italian-Style Chicken Meatballs</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 80%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (3.5)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">Stouffer</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$52.85</span>
                                    <span class="old-price">$55.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="new">New</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Snack</a>
                            </div>
                            <h2><a href="shop-product-right.php">Angie’s Boomchickapop Sweet & Salty</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 85%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">StarKist</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$48.85</span>
                                    <span class="old-price">$52.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Vegetables</a>
                            </div>
                            <h2><a href="shop-product-right.php">Foster Farms Takeout Crispy Classic</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$17.85</span>
                                    <span class="old-price">$19.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="best">-14%</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Pet Foods</a>
                            </div>
                            <h2><a href="shop-product-right.php">Blue Diamond Almonds Lightly Naturel</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$23.85</span>
                                    <span class="old-price">$25.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Hodo Foods</a>
                            </div>
                            <h2><a href="shop-product-right.php">Chobani Complete Vanilla Greek Bottle</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$54.85</span>
                                    <span class="old-price">$55.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Meats</a>
                            </div>
                            <h2><a href="shop-product-right.php">Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="sale">Sale</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Snack</a>
                            </div>
                            <h2><a href="shop-product-right.php">Encore Seafoods Stuffed Alaskan</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$35.85</span>
                                    <span class="old-price">$37.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Coffes</a>
                            </div>
                            <h2><a href="shop-product-right.php">Gorton’s Beer Battered Fish Fillets</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">Old El Paso</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$23.85</span>
                                    <span class="old-price">$25.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                <a href="shop-product-right.php">
                                    <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                                    <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.php">Cream</a>
                            </div>
                            <h2><a href="shop-product-right.php">Haagen-Dazs Caramel Cone Ice Cream</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 50%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (2.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.php">Tyson</a></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span>$22.85</span>
                                    <span class="old-price">$24.8</span>
                                </div>
                                <div class="add-cart">
                                    <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
            </div>
            <!--row-->
            <h1 class="text-center mt-100 mb-80">Deals of the day</h1>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <div class="product-img-action-wrap">
                            <div class="product-img">
                                <a href="shop-product-right.php">
                                    <img src="assets/imgs/banner/banner-5.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="deals-countdown-wrap">
                                <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                            </div>
                            <div class="deals-content">
                                <h2><a href="shop-product-right.php">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.php">NestFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="product-img-action-wrap">
                            <div class="product-img">
                                <a href="shop-product-right.php">
                                    <img src="assets/imgs/banner/banner-6.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="deals-countdown-wrap">
                                <div class="deals-countdown" data-countdown="2026/04/25 00:00:00"></div>
                            </div>
                            <div class="deals-content">
                                <h2><a href="shop-product-right.php">Perdue Simply Smart Organics Gluten Free</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.php">Old El Paso</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>$24.85</span>
                                        <span class="old-price">$26.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 d-none d-lg-block">
                    <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <div class="product-img-action-wrap">
                            <div class="product-img">
                                <a href="shop-product-right.php">
                                    <img src="assets/imgs/banner/banner-7.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="deals-countdown-wrap">
                                <div class="deals-countdown" data-countdown="2027/03/25 00:00:00"></div>
                            </div>
                            <div class="deals-content">
                                <h2><a href="shop-product-right.php">Signature Wood-Fired Mushroom and Caramelized</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (3.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.php">Progresso</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>$12.85</span>
                                        <span class="old-price">$13.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 d-none d-xl-block">
                    <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="product-img-action-wrap">
                            <div class="product-img">
                                <a href="shop-product-right.php">
                                    <img src="assets/imgs/banner/banner-8.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="deals-countdown-wrap">
                                <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                            </div>
                            <div class="deals-content">
                                <h2><a href="shop-product-right.php">Simply Lemonade with Raspberry Juice</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (3.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.php">Yoplait</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>$15.85</span>
                                        <span class="old-price">$16.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.php"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>