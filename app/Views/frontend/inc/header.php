
<nav class="navbar navbar-expand-lg ecommerce-navbar" id="navbar">
    <div class="container">
        <a class="navbar-brand d-none d-lg-block" href="<?= base_url('/')?>">
            <div class="logo-dark">
                <img src="<?=base_url()?>public/assets/images/logo-dark-1.png" alt="" height="25" />
            </div>
            <div class="logo-light">
                <img src="<?=base_url()?>public/assets/images/logo-light-1.png" alt="" height="25" />
            </div>
        </a>
        <button class="btn btn-soft-primary btn-icon d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="bi bi-list fs-20"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0" id="navigation-menu">
                <li class="nav-item d-block d-lg-none">
                    <a class="d-block p-3 h-auto text-center" href="index.html">
                        <img src="<?=base_url()?>public/assets/images/logo-dark-1.png" alt="" height="25" class="card-logo-dark mx-auto" />
                        <img src="<?=base_url()?>public/assets/images/logo-light-1.png" alt="" height="25"
                            class="card-logo-light mx-auto" />
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" data-key="t-demos" href="<?= base_url('/')?>" role="button">
                        Home
                    </a>
                    <!-- <ul class="dropdown-menu dropdown-menu-md dropdown-menu-center dropdown-menu-list submenu">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link" data-key="t-main-layout">Main Layout</a>
                        </li>
                        <li class="nav-item">
                            <a href="watch-main-layout.html" class="nav-link" data-key="t-unique-watches">Unique
                                Watches</a>
                        </li>
                        <li class="nav-item">
                            <a href="modern-fashion.html" class="nav-link" data-key="t-modern-fashion">Modern
                                Fashion</a>
                        </li>
                        <li class="nav-item">
                            <a href="trend-fashion.html" class="nav-link" data-key="t-trend-fashion">Trend
                                Fashion</a>
                        </li>
                    </ul> -->
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                    <a class="nav-link dropdown-toggle" data-key="t-catalog" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Catalog
                    </a>
                    <div class="dropdown-menu p-0">
                        <div class="row g-0 g-lg-4">
                            <div class="col-lg-2 d-none d-lg-block">
                                <div class="card rounded-start rounded-0 border-0 h-100 mb-0 overflow-hidden" style="
                        background-image: url('<?=base_url()?>public/assets/images/ecommerce/img-1.jpg');
                        background-size: cover;
                      ">
                                    <div class="bg-overlay bg-light bg-opacity-25"></div>
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <a href="product-grid-sidebar-banner.html"
                                                class="btn btn-secondary btn-hover"><i
                                                    class="ph-storefront align-middle me-1"></i>
                                                <span data-key="t-shop-now">Shop Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                    <li>
                                        <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title"
                                            data-key="t-men">
                                            Men
                                        </p>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-grid-sidebar-banner.html" class="nav-link"
                                            data-key="t-clothing">Clothing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-grid-right.html" class="nav-link"
                                            data-key="t-watches">Watches</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-list-left.html" class="nav-link" data-key="t-bags-Luggage">Bags
                                            & Luggage</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-grid-right.html" class="nav-link"
                                            data-key="t-footwear">Footwear</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-list.html" class="nav-link"
                                            data-key="t-innerwear">Innerwear</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-list-right.html" class="nav-link"
                                            data-key="t-other-accessories">Other Accessories</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2">
                                <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                    <li>
                                        <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title"
                                            data-key="t-women">
                                            Women
                                        </p>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-list-defualt.html" class="nav-link"
                                            data-key="t-western-wear">Western Wear</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-list-left.html" class="nav-link"
                                            data-key="t-handbags-clutches">Handbags & Clutches</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-grid-right.html" class="nav-link"
                                            data-key="t-lingerie-nightwear">Lingerie & Nightwear</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-grid-sidebar-banner.html" class="nav-link"
                                            data-key="t-footwear">Footwear</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-grid-defualt.html" class="nav-link"
                                            data-key="t-fashion-silver-jewellery">Fashion & Silver Jewellery</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2">
                                <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                    <li>
                                        <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title"
                                            data-key="t-accessories-others">
                                            Accessories & Others
                                        </p>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-grid-right.html" class="nav-link"
                                            data-key="t-home-kitchen-pets">Home, Kitchen, Pets</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-list-left.html" class="nav-link"
                                            data-key="t-beauty-health-grocery">Beauty, Health, Grocery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-grid-sidebar-banner.html" class="nav-link"
                                            data-key="t-sports-fitness-bags-luggage">Sports, Fitness, Bags,
                                            Luggage</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-list.html" class="nav-link"
                                            data-key="t-car-motorbike-industrial">Car, Motorbike, Industrial</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product-list-right.html" class="nav-link" data-key="t-books">Books</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2">
                                <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                    <li>
                                        <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title"
                                            data-key="t-others">
                                            Others
                                        </p>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-signup-basic.html" class="nav-link" data-key="t-sign-up">Sign
                                            Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-signin-basic.html" class="nav-link" data-key="t-sign-in">Sign
                                            In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-pass-reset-basic.html" class="nav-link"
                                            data-key="t-passowrd-reset">Reset Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-404.html" class="nav-link" data-key="t-error-404">Error
                                            404</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2 d-none d-lg-block">
                                <div class="p-3">
                                    <p class="mb-3 text-uppercase fs-11 fw-medium text-muted" data-key="t-top-brands">
                                        Top Brands
                                    </p>
                                    <div class="row g-2">
                                        <div class="col-lg-4">
                                            <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                <img src="<?=base_url()?>public/assets/images/brands/img-8.png" alt="" class="avatar-sm" />
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                <img src="<?=base_url()?>public/assets/images/brands/img-2-1.png" alt=""
                                                    class="avatar-sm" />
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                <img src="<?=base_url()?>public/assets/images/brands/img-3-1.png" alt=""
                                                    class="avatar-sm" />
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                <img src="<?=base_url()?>public/assets/images/brands/img-4-1.png" alt=""
                                                    class="avatar-sm" />
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                <img src="<?=base_url()?>public/assets/images/brands/img-5-1.png" alt=""
                                                    class="avatar-sm" />
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                <img src="<?=base_url()?>public/assets/images/brands/img-6-1.png" alt=""
                                                    class="avatar-sm" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" data-key="t-shop">
                        Shop
                    </a>
                    <div class="dropdown-menu dropdown-mega-menu-xl dropdown-menu-center p-0">
                        <div class="row g-0 g-lg-4">
                            <div class="col-lg-5 d-none d-lg-block">
                                <div class="card rounded-start rounded-0 border-0 h-100 mb-0 overflow-hidden" style="
                        background-image: url('<?=base_url()?>public/assets/images/ecommerce/img-2.jpg');
                        background-size: cover;">
                                    <div class="bg-overlay bg-primary" style="opacity: 0.9"></div>
                                    <div
                                        class="card-body d-flex align-items-center justify-content-center position-relative">
                                        <div class="text-center">
                                            <h6 class="card-title text-white">
                                                Welcome to Toner
                                            </h6>
                                            <p class="text-white-75">
                                                See all the products at once.
                                            </p>
                                            <a href="#!" class="btn btn-light btn-sm btn-hover">Shop Now <i
                                                    class="ph-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row g-0 g-lg-4">
                                    <div class="col-lg-6">
                                        <div class="py-3">
                                            <ul class="dropdown-menu-list list-unstyled mb-0">
                                                <li>
                                                    <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title"
                                                        data-key="t-checkout-pages">
                                                        Checkout Pages
                                                    </p>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('user/address')?>" class="nav-link" data-key="t-address">
                                                        Address</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('order/track')?>" class="nav-link"
                                                        data-key="t-track-order">Track Order</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('payment')?>" class="nav-link"
                                                        data-key="t-payment">Payment</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('review')?>" class="nav-link"
                                                        data-key="t-review">Review</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('conformation')?>" class="nav-link"
                                                        data-key="t-confirmation">Confirmation</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('order/history')?>" class="nav-link"
                                                        data-key="t-my-orders-order-history">My Orders / Order
                                                        History</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                            <li>
                                                <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title"
                                                    data-key="t-support">
                                                    Support
                                                </p>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= base_url('user/cart')?>" class="nav-link"
                                                    data-key="t-shopping-cart">Shopping Cart</a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a href="checkout.html" class="nav-link"
                                                    data-key="t-checkout">Checkout</a>
                                            </li> -->
                                            <li class="nav-item">
                                                <a href="<?= base_url('wishlist')?>" class="nav-link"
                                                    data-key="t-wishlist">Wishlist</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" data-key="t-pages" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu dropdown-menu-md dropdown-menu-center dropdown-menu-list submenu">
                        <li class="nav-item dropdown dropdown-hover">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                                data-key="t-products">Products</a>
                            <ul class="dropdown-menu submenu">
                                <!-- <li class="dropdown dropdown-hover">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false" data-key="t-grid-view">Grid View</a>
                                    <ul class="dropdown-menu submenu">
                                        <li>
                                            <a class="nav-link" href="<?= base_url('product-grid-default')?>"
                                                data-key="t-default">default</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url('product-grid-sidebar-banner')?>"
                                                data-key="t-sidebar-with-banner">Sidebar with Banner</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url('product-grid-right')?>"
                                                data-key="t-right-sidebar">Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url('product-grid')?>" data-key="t-no-sidebar">No
                                                Sidebar</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="dropdown dropdown-hover">
                                    <a href="<?= base_url('product/list')?>" class="nav-link dropdown-toggle" data-key="t-list-view">List View</a>
                                    <!-- <ul class="dropdown-menu submenu">
                                        <li>
                                            <a class="nav-link" href="<?= base_url('product/list')?>"
                                                data-key="t-default">default</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url('')?>"
                                                data-key="t-left-sidebar">Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url('')?>"
                                                data-key="t-right-sidebar">Right Sidebar</a>
                                         </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url('')?>" data-key="t-no-sidebar">No
                                                Sidebar</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li>
                                    <a class="nav-link" href="<?= base_url('product/details')?>" data-key="t-product-details">Product
                                        Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                                data-key="t-users">Users</a>
                            <ul class="dropdown-menu submenu">
                                <li>
                                    <a class="nav-link" href="<?= base_url('user/account')?>" data-key="t-my-account">My Account</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="auth-signin-basic.html" data-key="t-sign-in">Sign
                                        In</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="auth-signup-basic.html" data-key="t-sign-up">Sign
                                        Up</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="auth-pass-reset-basic.html"
                                        data-key="t-password-reset">Password Reset</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="auth-pass-change-basic.html"
                                        data-key="t-create-password">Password Create</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="auth-success-msg-basic.html"
                                        data-key="t-success-message">Success Message</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="auth-twostep-basic.html" data-key="t-two-step-verify">Two
                                        Step Verify</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="<?=base_url('logout')?>" data-key="t-logout">Logout</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="auth-404.html" data-key="t-error-404">Error 404</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="auth-500.html" data-key="t-error-500">Error 500</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="coming-soon.html" data-key="t-coming-soon">Coming
                                        Soon</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('product/category')?>" class="nav-link" data-key="t-categories">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('about-us')?>" class="nav-link" data-key="t-about">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('purchase-guide')?>" class="nav-link" data-key="t-purchase-guide">Purchase
                                Guide</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('terms-conditions')?>" class="nav-link" data-key="t-terms-of-service">Terms of
                                Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('privacy-policy')?>" class="nav-link" data-key="t-privacy-policy">Privacy
                                Policy</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="store-locator.html" class="nav-link" data-key="t-store-locator">Store
                                Locator</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="<?= base_url('faq')?>" class="nav-link" data-key="t-faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('invoice')?>" class="nav-link" data-key="t-invoice">Invoice</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a href="<?= base_url('order/success')?>" class="nav-link"
                                data-key="t-email-template">Order
                                        Success</a>
                            <!-- <ul class="dropdown-menu submenu">
                                <li>
                                    <a class="nav-link" href="email-black-friday.html" data-key="t-black-friday">Black
                                        Friday</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="email-flash-sale.html" data-key="t-flash-sale">Flash
                                        Sale</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="email-order-success.html" data-key="t-order-success">Order
                                        Success</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="email-order-success-2.html"
                                        data-key="t-order-success-2">Order Success 2</a>
                                </li>
                            </ul> -->
                        </li>
                        <!-- <li class="nav-item">
                            <a href="../components/index.html" class="nav-link" target="_blank"
                                data-key="t-components">Components
                                <span class="badge bg-danger align-bottom ms-1">1.0</span></a>
                        </li> -->
                        <!-- <li class="nav-item dropdown dropdown-hover">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                                data-key="t-multi-level">Multi Level</a>
                            <ul class="dropdown-menu submenu">
                                <li>
                                    <a class="nav-link" href="#" data-key="t-level-1.1">Level 1.1</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#" data-key="t-level-1.2">Level 1.2</a>
                                </li>
                                <li class="dropdown dropdown-hover">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false" data-key="t-level-1.3">Level 1.3</a>
                                    <ul class="dropdown-menu submenu">
                                        <li>
                                            <a class="nav-link" href="#" data-key="t-level-2.1">Level 2.1</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#" data-key="t-level-2.2">Level 2.2</a>
                                        </li>
                                        <li class="dropdown dropdown-hover">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-key="t-level-2.3">Level 2.3</a>
                                            <ul class="dropdown-menu submenu">
                                                <li>
                                                    <a class="nav-link" href="#" data-key="t-level-3.1">Level
                                                        3.1</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="#" data-key="t-level-3.2">Level
                                                        3.2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact-us')?>" data-key="t-contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="bg-overlay navbar-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show">
        </div>

        <div class="d-flex align-items-center">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted"
                data-bs-toggle="modal" data-bs-target="#searchModal">
                <!-- <i class="bx bx-search fs-22"></i> -->
                <i class="fas fa-search fa-lg"></i>
            </button>
            <div class="topbar-head-dropdown ms-1 header-item">
                <button type="button" id="open_cart_modal" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted"
                    data-bs-toggle="offcanvas" data-bs-target="#ecommerceCart" aria-controls="ecommerceCart">
                    <i class="ph-shopping-cart fs-18"></i>
                    <span
                        id="cart_icon_count"
                        class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-danger">0</span>
                </button>
            </div>

            <div class="dropdown topbar-head-dropdown ms-2 header-item ">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-sun align-middle fs-20"></i>
                </button>
                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                    <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i>
                        Default (light
                        mode)</a>
                    <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i>
                        Dark</a>
                    <a href="#!" class="dropdown-item" data-mode="auto"><i
                            class="bi bi-moon-stars align-middle me-2"></i> Auto (system
                        default)</a>
                </div>
            </div>
            <div class="dropdown header-item" id="authorised_account">
                
            </div>
        </div>
    </div>
</nav>

<!--cart -->
<div class="offcanvas offcanvas-end product-list" tabindex="-1" id="ecommerceCart" aria-labelledby="ecommerceCartLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="ecommerceCartLabel">
            My Cart
            <span class="badge bg-danger align-middle ms-1 cartitem-badge" id="total_cart_item_count"></span>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-0">
        <div data-simplebar="" class="h-100">
            <ul class="list-group list-group-flush cartlist" id="cart_item">
                <!-- <li class="list-group-item product">
                    <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md" style="height: 100%">
                                <div class="avatar-title bg-warning-subtle rounded-3">
                                    <img src="<?=base_url()?>public/assets/images/products/img-4-1.png" alt="" class="avatar-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <a href="#!">
                                <h5 class="fs-15">Borosil Paper Cup</h5>
                            </a>
                            <div class="d-flex mb-3 gap-2">
                                <div class="text-muted fw-medium mb-0">
                                    $<span class="product-price">24.00</span>
                                </div>
                                <div class="vr"></div>
                                <span class="text-success fw-medium">In Stock</span>
                            </div>
                            <div class="input-step">
                                <button type="button" class="minus">–</button>
                                <input type="number" class="product-quantity" value="2" min="0" max="100" readonly="" />
                                <button type="button" class="plus">+</button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                                data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                <i class="ri-close-fill fs-16"></i>
                            </button>
                            <div class="fw-medium mb-0 fs-16">
                                $<span class="product-line-price">48.00</span>
                            </div>
                        </div>
                    </div>
                </li> -->
                <!-- <li class="list-group-item product">
                    <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md" style="height: 100%">
                                <div class="avatar-title bg-info-subtle rounded-3">
                                    <img src="<?=base_url()?>public/assets/images/products/img-1-1.png" alt="" class="avatar-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <a href="#!">
                                <h5 class="fs-15">Rockerz Ear Bluetooth Hea...</h5>
                            </a>
                            <div class="d-flex mb-3 gap-2">
                                <div class="text-muted fw-medium mb-0">
                                    $<span class="product-price">160.00</span>
                                </div>
                                <div class="vr"></div>
                                <span class="text-success fw-medium">In Stock</span>
                            </div>
                            <div class="input-step">
                                <button type="button" class="minus">–</button>
                                <input type="number" class="product-quantity" value="1" min="0" max="100" readonly="" />
                                <button type="button" class="plus">+</button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                                data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                <i class="ri-close-fill fs-16"></i>
                            </button>
                            <div class="fw-medium mb-0 fs-16">
                                $<span class="product-line-price">160.00</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item product">
                    <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md" style="height: 100%">
                                <div class="avatar-title bg-danger-subtle rounded-3">
                                    <img src="<?=base_url()?>public/assets/images/products/img-6-1.png" alt="" class="avatar-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <a href="#!">
                                <h5 class="fs-15">Monte Carlo Sweaters</h5>
                            </a>
                            <div class="d-flex mb-3 gap-2">
                                <div class="text-muted fw-medium mb-0">
                                    $ <span class="product-price">244.99</span>
                                </div>
                                <div class="vr"></div>
                                <span class="text-success fw-medium">In Stock</span>
                            </div>
                            <div class="input-step">
                                <button type="button" class="minus">–</button>
                                <input type="number" class="product-quantity" value="3" min="0" max="100" readonly="" />
                                <button type="button" class="plus">+</button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                                data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                <i class="ri-close-fill fs-16"></i>
                            </button>
                            <div class="fw-medium mb-0 fs-16">
                                $<span class="product-line-price">734.97</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item product">
                    <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md" style="height: 100%">
                                <div class="avatar-title bg-primary-subtle rounded-3">
                                    <img src="<?=base_url()?>public/assets/images/products/img-8-1.png" alt="" class="avatar-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <a href="#!">
                                <h5 class="fs-15">Men's Running Shoes Act...</h5>
                            </a>
                            <div class="d-flex mb-3 gap-2">
                                <div class="text-muted fw-medium mb-0">
                                    $<span class="product-price">120.30</span>
                                </div>
                                <div class="vr"></div>
                                <span class="text-success fw-medium">In Stock</span>
                            </div>
                            <div class="input-step">
                                <button type="button" class="minus">–</button>
                                <input type="number" class="product-quantity" value="2" min="0" max="100" readonly="" />
                                <button type="button" class="plus">+</button>
                            </div>
                        </div>
                        <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                                data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                <i class="ri-close-fill fs-16"></i>
                            </button>
                            <div class="fw-medium mb-0 fs-16">
                                $<span class="product-line-price">240.60</span>
                            </div>
                        </div>
                    </div>
                </li> -->
            </ul>

            <div class="table-responsive mx-2 border-top border-top-dashed">
                <table class="table table-borderless mb-0 fs-14 fw-semibold">
                    <tbody>
                        <tr>
                            <td>Sub Total :</td>
                            <td class="text-end cart-subtotal">$1183.57</td>
                        </tr>
                        <tr>
                            <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                            <td class="text-end cart-discount">- $177.54</td>
                        </tr>
                        <tr>
                            <td>Shipping Charge :</td>
                            <td class="text-end cart-shipping">$65.00</td>
                        </tr>
                        <tr>
                            <td>Estimated Tax (12.5%) :</td>
                            <td class="text-end cart-tax">$147.95</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="m-0 fs-16 text-muted">Total:</h6>
            <div class="px-2">
                <h6 class="m-0 fs-16 cart-total">$1218.98</h6>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-6">
                <button type="button" class="btn btn-light w-100" id="reset-layout">
                    View Cart
                </button>
            </div>
            <div class="col-6">
                <a href="#!" target="_blank" class="btn btn-info w-100">Continue to Checkout</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
            <div class="modal-header p-3">
                <div class="position-relative w-100">
                    <input type="text" class="form-control form-control-lg border-2" placeholder="Search for Toner..."
                        autocomplete="off" id="search-options" value="" />
                    <span class="bi bi-search search-widget-icon fs-17"></span>
                    <a href="javascript:void(0);"
                        class="search-widget-icon fs-14 link-secondary text-decoration-underline search-widget-icon-close d-none"
                        id="search-close-options">Clear</a>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden" id="search-dropdown">
                <div class="dropdown-head rounded-top">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-14 text-muted fw-semibold">
                                    RECENT SEARCHES
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-item bg-transparent text-wrap">
                        <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i
                                class="mdi mdi-magnify ms-1 align-middle"></i></a>
                        <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i
                                class="mdi mdi-magnify ms-1 align-middle"></i></a>
                    </div>
                </div>

                <div data-simplebar="" style="max-height: 300px" class="pe-2 ps-3 my-3">
                    <div class="list-group list-group-flush border-dashed">
                        <div class="notification-group-list">
                            <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">
                                Apps Pages
                            </h5>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i
                                    class="bi bi-speedometer2 me-2"></i>
                                <span>Analytics Dashboard</span></a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i
                                    class="bi bi-filetype-psd me-2"></i>
                                <span>Toner.psd</span></a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i
                                    class="bi bi-ticket-detailed me-2"></i>
                                <span>Support Tickets</span></a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i
                                    class="bi bi-file-earmark-zip me-2"></i>
                                <span>Toner.zip</span></a>
                        </div>

                        <div class="notification-group-list">
                            <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">
                                Links
                            </h5>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i
                                    class="bi bi-link-45deg me-2 align-middle"></i>
                                <span>www.themesbrand.com</span></a>
                        </div>

                        <div class="notification-group-list">
                            <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">
                                People
                            </h5>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                <div class="d-flex align-items-center">
                                    <img src="<?=base_url()?>public/assets/images/users/avatar-1-1.jpg" alt=""
                                        class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                    <div>
                                        <h6 class="mb-0">Ayaan Bowen</h6>
                                        <span class="fs-12 text-muted">React Developer</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                <div class="d-flex align-items-center">
                                    <img src="<?=base_url()?>public/assets/images/users/avatar-7-1.jpg" alt=""
                                        class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                    <div>
                                        <h6 class="mb-0">Alexander Kristi</h6>
                                        <span class="fs-12 text-muted">React Developer</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                <div class="d-flex align-items-center">
                                    <img src="<?=base_url()?>public/assets/images/users/avatar-5-1.jpg" alt=""
                                        class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                    <div>
                                        <h6 class="mb-0">Alan Carla</h6>
                                        <span class="fs-12 text-muted">React Developer</span>
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

<!-- removeItemModal -->
<div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="../../../gsqxdxog-1.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548"
                        style="width: 100px; height: 100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">
                            Are you sure you want to remove this product ?
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" onclick="delete_the_cart_item()" class="btn w-sm btn-danger" id="remove-product">
                        Yes, Delete It!
                    </button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="subscribeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-body p-0 bg-info-subtle rounded">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-4 h-100">
                            <span class="badge bg-info-subtle text-info fs-13">GET 10% SALE OFF</span>
                            <h2 class="display-6 mt-2 mb-3">
                                Subscribe & Get <b>50% Special</b> Discount On Email
                            </h2>
                            <p class="mb-4 pb-lg-2 fs-16">
                                Join our newsletter to receive the latest updates and
                                promotion
                            </p>
                            <form action="#!">
                                <div class="position-relative ecommerce-subscript">
                                    <input type="email" class="form-control rounded-pill border-0"
                                        placeholder="Enter your email" />
                                    <button type="submit" class="btn btn-info btn-hover rounded-pill">
                                        Subscript
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4 pb-0">
                            <img src="<?=base_url()?>public/assets/images/subscribe.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- <a href="../backend/index.html"
    class="btn btn-warning position-fixed bottom-0 start-0 m-5 z-3 btn-hover d-none d-lg-block"><i
        class="bi bi-database align-middle me-1"></i> Backend</a> -->

<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-info btn-icon" style="bottom: 50px" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<a class="btn btn-danger shadow-lg chat-button rounded-bottom-0 d-none d-lg-block" data-bs-toggle="collapse"
    href="#chatBot" aria-expanded="false" aria-controls="chatBot">Online Chat</a>

<div class="collapse chat-box" id="chatBot">
    <div class="card shadow-lg border-0 rounded-bottom-0 mb-0">
        <div class="card-header bg-success d-flex align-items-center border-0">
            <h5 class="text-white fs-16 fw-medium flex-grow-1 mb-0">
                Hi, Raquel Murillo 👋
            </h5>
            <button type="button" class="btn-close btn-close-white flex-shrink-0" onclick="chatBot()"
                data-bs-dismiss="collapse" aria-label="Close"></button>
        </div>
        <div class="card-body p-0">
            <div id="users-chat-widget">
                <div class="chat-conversation p-3" id="chat-conversation" data-simplebar="" style="height: 280px">
                    <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                        <li class="chat-list left">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src="<?=base_url()?>public/assets/images/logo-sm-1.png" alt="" />
                                </div>
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">
                                                Welcome to Themesbrand. We are here to help you. You
                                                can also directly email us at
                                                Support@themesbrand.com to schedule a meeting with
                                                our Technology Consultant.
                                            </p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i
                                                        class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name">
                                        <small class="text-muted time">09:07 am</small>
                                        <span class="text-success check-message-icon"><i
                                                class="ri-check-double-line align-bottom"></i></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                        <li class="chat-list right">
                            <div class="conversation-list">
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">
                                                Good morning, How are you? What about our next
                                                meeting?
                                            </p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i
                                                        class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name">
                                        <small class="text-muted time">09:08 am</small>
                                        <span class="text-success check-message-icon"><i
                                                class="ri-check-double-line align-bottom"></i></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                        <li class="chat-list left">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src="<?=base_url()?>public/assets/images/logo-sm-1.png" alt="" />
                                </div>
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">
                                                Yeah everything is fine. Our next meeting tomorrow
                                                at 10.00 AM
                                            </p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i
                                                        class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name">
                                        <small class="text-muted time">09:10 am</small>
                                        <span class="text-success check-message-icon"><i
                                                class="ri-check-double-line align-bottom"></i></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->
                    </ul>
                </div>
            </div>
            <div class="border-top border-top-dashed">
                <div class="row g-2 mt-2 mx-3 mb-3">
                    <div class="col">
                        <div class="position-relative">
                            <input type="text" class="form-control border-light bg-light"
                                placeholder="Enter Message..." />
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-auto">
                        <button type="submit" class="btn btn-info">
                            <i class="mdi mdi-send"></i>
                        </button>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
</div>

<script>
     $(document).ready(function () {
        get_cart_data();
        $.ajax({
            url: "<?= base_url('api/user') ?>",
            type: "GET",
            success: function (resp) {
                // resp = JSON.parse(resp)
                // console.log(resp.user_data.number)
                if (resp.status) {
                //    console.log(resp.number)
                    var image_url = `https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813`
                   if(resp.user_img != null){
                    image_url =`<?=base_url('public/uploads/user_images/')?>${resp.user_img.img}`
                   }

                   html = `<button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="${image_url}"
                        alt="Header Avatar" />
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <h6 class="dropdown-header" id="user_name">${resp.user_data.user_name}</h6>
                    <a class="dropdown-item" href="<?=base_url('order/history')?>"><i
                            class="bi bi-cart4 text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Order History</span></a>
                    <a class="dropdown-item" href="<?=base_url('order/track')?>"><i
                            class="bi bi-truck text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Track Orders</span></a>
                    <a class="dropdown-item" href="../backend/index.html"><i
                            class="bi bi-speedometer2 text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Dashboard</span></a>
                    <a class="dropdown-item" href="<?=base_url('faq')?>"><i
                            class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Help</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=base_url('user/account')?>"><i
                            class="bi bi-coin text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Balance : <b>$8451.36</b></span></a>
                    <a class="dropdown-item" href="<?=base_url('user/account')?>"><span
                            class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                            class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Settings</span></a>
                    <a class="dropdown-item" href="<?=base_url('logout')?>"><i
                            class="bi bi-box-arrow-right text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle" data-key="t-logout">Logout</span></a>
                </div>`
                $('#authorised_account').html(html)
                } else {
                    html = `<button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813"
                                alt="Header Avatar" />
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" style="height:150px">
                            <div class="ms-md-auto mt-5">
                                <a href="<?=base_url('login')?>" class="btn btn-success btn-hover ml-5">Login</a>
                            </div>
                        </div>`
                    $('#authorised_account').html(html)

                }
            },
            error: function () {
            }
        })

        $("#open_cart_modal").click(function(){
            get_cart_data()
        });
        
     })

     function get_cart_data(){
        $.ajax({
            url: "<?= base_url('/api/user/id') ?>",
            type: "GET",
            success: function (resp) {
                
                if (resp.status) {
                    // console.log(user_id) 
                    $.ajax({
                        url: "<?= base_url('/api/user/cart') ?>",
                        type: "GET",
                        data:{user_id:resp.data},
                        success: function (resp) {
                            
                            $('#cart_item').empty()
                            $('#total_cart_item_count').text(0)
                            if (resp.status) {
                                console.log('--')
                                console.log(resp)
                                html = ""
                                var total_item = "";
                                $('#cart_icon_count').html(resp.data.length)
                                $.each(resp.data, function(index, cart) {
                                    html = `<li class="list-group-item product">
                                                <div class="d-flex gap-3">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-md" style="height: 100%">
                                                            <div class="avatar-title bg-warning-subtle rounded-3">
                                                                <img src="<?=base_url()?>public/assets/images/products/img-4-1.png" alt="" class="avatar-sm" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!">
                                                            <h5 class="fs-15">Borosil Paper Cup</h5>
                                                        </a>
                                                        <div class="d-flex mb-3 gap-2">
                                                            <div class="text-muted fw-medium mb-0">
                                                                $<span class="product-price">24.00</span>
                                                            </div>
                                                            <div class="vr"></div>
                                                            <span class="text-success fw-medium">In Stock</span>
                                                        </div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="2" min="0" max="100" readonly="" />
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" onclick="remove_cart_item('${cart.uid}')" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn">
                                                            <i class="ri-close-fill fs-16"></i>
                                                        </button>
                                                        <div class="fw-medium mb-0 fs-16">
                                                            $<span class="product-line-price">48.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>`
                                    $('#cart_item').append(html)
                                    total_item = index +1
                                })
                                $('#total_cart_item_count').text(total_item)
                                
                            } else {
                                console.log(resp)
                            }
                            
                        },
                        error: function (err) {
                            console.log(err)
                        },
                    })
                       
                } else {
                    console.log(resp)
                    var storedData = localStorage.getItem('cartData');
                    var retrievedData = JSON.parse(storedData);
                    console.log(retrievedData);
                    $('#cart_item').empty()
                    $('#total_cart_item_count').text(0)
                    if(retrievedData != ""){
                        html = ""
                        // $('#cart_item').empty()
                        var total_item = "";
                        $.each(retrievedData, function(index, cart) {
                            html = `<li class="list-group-item product">
                                        <div class="d-flex gap-3">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md" style="height: 100%">
                                                    <div class="avatar-title bg-warning-subtle rounded-3">
                                                        <img src="<?=base_url()?>public/assets/images/products/img-4-1.png" alt="" class="avatar-sm" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!">
                                                    <h5 class="fs-15">Borosil Paper Cup</h5>
                                                </a>
                                                <div class="d-flex mb-3 gap-2">
                                                    <div class="text-muted fw-medium mb-0">
                                                        $<span class="product-price">24.00</span>
                                                    </div>
                                                    <div class="vr"></div>
                                                    <span class="text-success fw-medium">In Stock</span>
                                                </div>
                                                <div class="input-step">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="2" min="0" max="100" readonly="" />
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                                <button type="button" onclick="remove_cart_item_local_storage('${cart.product_id}')" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn">
                                                    <i class="ri-close-fill fs-16"></i>
                                                </button>
                                                <div class="fw-medium mb-0 fs-16">
                                                    $<span class="product-line-price">48.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>`
                            $('#cart_item').append(html)
                            total_item = index +1
                        })
                        $('#total_cart_item_count').text(total_item)
                    }
                    
                }
            },
            error: function (err) {
                console.log(err)
            },
        })
     }

     let cart_item_id = ""
     function remove_cart_item(cart_id){
        $('#removeItemModal').modal('show')
        cart_item_id = cart_id;
        console.log(cart_item_id)
    }

    let local_storage_cart_item_id = ""
     function remove_cart_item_local_storage(cart_id){
        $('#removeItemModal').modal('show')
        local_storage_cart_item_id = cart_id;
     }

     function delete_the_cart_item(){
        console.log(cart_item_id)
       
        if(cart_item_id != ""){
            $.ajax({
                url: "<?= base_url('/api/user/cart/remove') ?>",
                type: "GET",
                data:{cart_id:cart_item_id},
                success: function (resp) {
                    
                    if (resp.status) {
                        console.log(resp)
                        Toastify({
                            text: resp.message.toUpperCase(),
                            duration: 3000,
                            position: "right",
                            stopOnFocus: true,
                            style: {
                                background: resp.status ? 'gray' : 'darkred',
                            },

                        }).showToast();
                        
                        cart_item_id = "";
                        $('#removeItemModal').modal('hide')
                    } else {
                        Toastify({
                            text: resp.message.toUpperCase(),
                            duration: 3000,
                            position: "right",
                            stopOnFocus: true,
                            style: {
                                background: resp.status ? 'gray' : 'darkred',
                            },

                        }).showToast();
                        console.log(resp)
                    }
                    get_cart_data()
                    
                },
                error: function (err) {
                    console.log(err)
                },
            })
        }else if(local_storage_cart_item_id != ""){
            var storageData = localStorage.getItem('cartData');

            if (storageData) {
                var retrievedData = JSON.parse(storageData);

                var updatedData = retrievedData.filter(function(item) {
                    return item.product_id !== local_storage_cart_item_id;
                });
                var updatedDataJSON = JSON.stringify(updatedData);
                localStorage.setItem('cartData', updatedDataJSON);
                $('#removeItemModal').modal('hide')
                Toastify({
                    text: 'Item Removed Successfully'.toUpperCase(),
                    duration: 3000,
                    position: "right",
                    stopOnFocus: true,
                    style: {
                        background:'gray',
                    },

                }).showToast();
            }
            get_cart_data()

        }
        

     }

    
    
</script>