<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Work Sans')) }}:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet" type="text/css">
        <!-- CSS Library-->


        {!! Theme::header() !!}
    </head>
    <body class="stretched" @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif @if (Theme::get('pageId')) id="{{ Theme::get('pageId') }}" @endif>

        {{-- {!! Theme::get('topHeader') !!} --}}

        <!-- Document Wrapper
            ============================================= -->
            <div id="wrapper" class="clearfix">

                <div class="modal-on-load" data-target="#myModal1"></div>

                <!-- On LOad Modal -->
                <div class="modal1 mfp-hide subscribe-widget mx-auto" id="myModal1" style="max-width: 750px;">
                    <div class="row justify-content-center bg-white align-items-center" style="min-height: 380px;">
                        <div class="col-md-5 p-0">
                            <div style="background: url('images/modals/modal1.jpg') no-repeat center right; background-size: cover;  min-height: 380px;"></div>
                        </div>
                        <div class="col-md-7 bg-white p-4">
                            <div class="heading-block border-bottom-0 mb-3">
                                <h3 class="font-secondary nott ">Tham gia vào bản tin của chúng tôi &amp; nhận phiếu giảm <span class="text-danger">40%</span> Cho Đơn Hàng Đầu Tiên</h3>
                                <span>Nhận thông tin mới &amp; ưu đãi mới nhất</span>
                            </div>
                            <div class="widget-subscribe-form-result"></div>
                            <form class="widget-subscribe-form2 mb-2" action="include/subscribe.php" method="post">
                                <input type="email" id="widget-subscribe-form2-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Nhập địa chỉ Email của bạn..">
                                <div class="d-flex justify-content-between align-items-center mt-1">
                                    <button class="button button-dark  bg-dark text-white ml-0" type="submit">Đăng ký</button>
                                    <a href="#" class="btn-link" onClick="$.magnificPopup.close();return false;">Đóng</a>
                                </div>
                            </form>
                            <small class="mb-0 font-italic text-black-50">*Chúng tôi cũng ghét các Email rác &amp; Thư rác.</small>
                        </div>
                    </div>
                </div>

                <!-- Login Modal -->
                <div class="modal1 mfp-hide" id="modal-register">
                    <div class="card mx-auto" style="max-width: 540px;">
                        <div class="card-header py-3 bg-transparent center">
                            <h3 class="mb-0 font-weight-normal">Chào mừng bạn quay trở lại!</h3>
                        </div>
                        <div class="card-body mx-auto py-5" style="max-width: 70%;">

                            <a href="#" class="button button-large btn-block si-colored si-facebook nott font-weight-normal ls0 center m-0"><i class="icon-facebook-sign"></i> Đăng nhập bằng Facebook</a>

                            <div class="divider divider-center"><span class="position-relative" style="top: -2px">HOẶC</span></div>

                            <form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

                                <div class="col-12">
                                    <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" placeholder="Tên tài khoản" />
                                </div>

                                <div class="col-12 mt-4">
                                    <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" placeholder="Mật khẩu" />
                                </div>

                                <div class="col-12">
                                    <a href="#" class="float-right text-dark font-weight-light mt-2">Quên mật khẩu?</a>
                                </div>

                                <div class="col-12 mt-4">
                                    <button class="button btn-block m-0" id="login-form-submit" name="login-form-submit" value="login">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-4 center">
                            <p class="mb-0">Chưa có tài khoản? <a href="#"><u>Tạo tài khoản mới</u></a></p>
                        </div>
                    </div>
                </div>

                <!-- Top Bar
                ============================================= -->
                <div id="top-bar" class="dark" style="background-color: #a3a5a7;">
                    <div class="container">

                        <div class="row justify-content-between align-items-center">

                            <div class="col-12 col-lg-auto">
                                <p class="mb-0 d-flex justify-content-center justify-content-lg-start py-3 py-lg-0"><strong>Giao hàng miễn phí tại Mỹ khi đặt hàng trên 99$. Trả hàng dễ dàng.</strong></p>
                            </div>

                            <div class="col-12 col-lg-auto d-none d-lg-flex">

                                <!-- Top Links
                                ============================================= -->
                                <div class="top-links">
                                    <ul class="top-links-container">
                                        <li class="top-links-item"><a href="intro.html">Về chúng tôi</a></li>
                                        <li class="top-links-item"><a href="#">Các câu hỏi thường gặp</a></li>
                                        <li class="top-links-item"><a href="blog.html">Blogs</a></li>
                                        <li class="top-links-item"><a href="#">EN</a>
                                            <ul class="top-links-sub-menu">
                                                <li class="top-links-item"><a href="#"><img src="images/icons/flags/french.png" alt="French"> FR</a></li>
                                                <li class="top-links-item"><a href="#"><img src="images/icons/flags/italian.png" alt="Italian"> IT</a></li>
                                                <li class="top-links-item"><a href="#"><img src="images/icons/flags/german.png" alt="German"> DE</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- .top-links end -->

                                <!-- Top Social
                                ============================================= -->
                                <ul id="top-social">
                                    <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                                    <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                                    <li><a href="#" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">0909545966</span></a></li>
                                    <li><a href="#" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@tuoitresoft.vn</span></a></li>
                                </ul><!-- #top-social end -->

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Header
                ============================================= -->
                <header id="header" class="full-header header-size-md">
                    <div id="header-wrap">
                        <div class="container">
                            <div class="header-row justify-content-lg-between">

                                <!-- Logo
                                ============================================= -->
                                <div id="logo" class="mr-lg-4">
                                    <a href="#" class="standard-logo"><img src="themes/frontend/imageslogo.png" alt="Logo"></a>
                                    <a href="#" class="retina-logo"><img src="themes/frontend/imageslogo@2x.png" alt="Logo"></a>
                                </div><!-- #logo end -->

                                <div class="header-misc">

                                    <!-- Top Search
                                    ============================================= -->
                                    <div id="top-account">
                                        <a href="#modal-register" data-lightbox="inline" ><i class="icon-line2-user mr-1 position-relative" style="top: 1px;"></i><span class="d-none d-sm-inline-block font-primary font-weight-medium">Đăng nhập</span></a>
                                    </div><!-- #top-search end -->

                                    <!-- Top Cart
                                    ============================================= -->
                                    <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                                        <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
                                        <div class="top-cart-content">
                                            <div class="top-cart-title">
                                                <h4>Giỏ hàng</h4>
                                            </div>
                                            <div class="top-cart-items">
                                                <div class="top-cart-item">
                                                    <div class="top-cart-item-image">
                                                        <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                                    </div>
                                                    <div class="top-cart-item-desc">
                                                        <div class="top-cart-item-desc-title">
                                                            <a href="#">Áo phông cổ tròn màu xanh có nút</a>
                                                            <span class="top-cart-item-price d-block">$19.99</span>
                                                        </div>
                                                        <div class="top-cart-item-quantity">x 2</div>
                                                    </div>
                                                </div>
                                                <div class="top-cart-item">
                                                    <div class="top-cart-item-image">
                                                        <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                                    </div>
                                                    <div class="top-cart-item-desc">
                                                        <div class="top-cart-item-desc-title">
                                                            <a href="#">Váy denim xanh nhạt</a>
                                                            <span class="top-cart-item-price d-block">$24.99</span>
                                                        </div>
                                                        <div class="top-cart-item-quantity">x 3</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-cart-action">
                                                <span class="top-checkout-price">$114.95</span>
                                                <a href="#" class="button button-3d button-small m-0">Xem Giỏ Hàng</a>
                                            </div>
                                        </div>
                                    </div><!-- #top-cart end -->

                                    <!-- Top Search
                                    ============================================= -->
                                    <div id="top-search" class="header-misc-icon">
                                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                                    </div><!-- #top-search end -->

                                </div>

                                <div id="primary-menu-trigger">
                                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                                </div>

                                <!-- Primary Navigation
                                ============================================= -->
                                <nav class="primary-menu with-arrows mr-lg-auto">

                                    <ul class="menu-container">
                                        <li class="menu-item current"><a class="menu-link" href="index.html"><div>Trang chủ</div></a></li>
                                        <li class="menu-item mega-menu"><a class="menu-link" href="shop.html"><div>Thời trang nam</div></a>
                                            <div class="mega-menu-content mega-menu-style-2">
                                                <div class="container">
                                                    <div class="row">
                                                        <ul class="sub-menu-container mega-menu-column border-left-0 col-lg-3">
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Dày & Dép</div></a>
                                                                <ul class="sub-menu-container">
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Giày Đơn Giản</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div> Giày Formal</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Giày Thể Thao</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Dép Tông</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Dép Lê</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Dép Sandals</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Hiển thị tất cả <i class="icon-angle-right"></i></div></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Quần Áo</div></a>
                                                                <ul class="sub-menu-container">
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Áo Sơ Mi Đơn Giản</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Áo Phông</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Áo Thun Có Cổ</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Quần Dài / Quần Âu Dài</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Hiển thị tất cả <i class="icon-angle-right"></i></div></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <ul class="sub-menu-container mega-menu-column border-left-0 col-lg-3">
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Quần Áo Thể Thao</div></a>
                                                                <ul class="sub-menu-container">
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Áo Sơ Mi Thể Thao Đơn Giản</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Áo Phông Thể Thao</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Áo thun thể thao có cổ</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Giày thể thao</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Áo khoác</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Đồ bơi</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Hiển thị tất cả <i class="icon-angle-right"></i></div></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Đồ Lót</div></a>
                                                                <ul class="sub-menu-container">
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Quần lót boxers</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Đồ vests</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Đồ ngủ</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Hiển thị tất cả <i class="icon-angle-right"></i></div></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <ul class="sub-menu-container mega-menu-column border-left-0 col-lg-3">
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Đồ Lót</div></a>
                                                                <ul class="sub-menu-container">
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Quần lót boxers</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Đồ vests</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Đồ ngủ</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Hiển thị tất cả <i class="icon-angle-right"></i></div></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Kính râm</div></a>
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Đồng hồ đeo tay</div></a>
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Túi</div></a>
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Tai nghe</div></a>
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Phụ kiện</div></a>
                                                        </ul>
                                                        <ul class="sub-menu-container mega-menu-column col-lg-3 border-left-0">
                                                            <li class="card p-0 bg-transparent border-0">
                                                                <img class="card-img-top" src="themes/frontend/imagesmenu-image.jpg" alt="image cap">
                                                                <a href="#" class="btn btn-link text-left font-weight-medium pl-0 bg-transparent"><u>Lựa chọn của biên tập viên</u></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item mega-menu mega-menu-small"><a class="menu-link" href="intro.html"><div>Thời Trang Nữ</div></a>
                                            <div class="mega-menu-content mega-menu-style-2">
                                                <div class="container">
                                                    <div class="row">
                                                        <ul class="sub-menu-container mega-menu-column col-lg-6">
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Dày & Dép</div></a>
                                                                <ul class="sub-menu-container">
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Giày đơn giản</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Giày formal</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Giày thể thao</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Dép tông</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Dép lê</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Dày Sandals</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Giày dự tiệc</div></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <ul class="sub-menu-container mega-menu-column col-lg-6">
                                                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>quần áo</div></a>
                                                                <ul class="sub-menu-container">
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Áo sơ mi đơn giản</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Áo phông</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Áo Thun Có Cổ</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Quần Dài / Quần Âu Dài</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Trang phục dân tộc</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Quần Jean</div></a></li>
                                                                    <li class="menu-item"><a class="menu-link" href="#"><div>Đồ bơi</div></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="product.html"><div>Phụ kiện</div></a></li>
                                        <li class="menu-item"><a class="menu-link" href="blog.html"><div>Blog</div></a></li>
                                        <li class="menu-item"><a class="menu-link" href="contact.html"><div>Giảm giá</div></a></li>
                                    </ul>

                                </nav><!-- #primary-menu end -->
                            </div>
                        </div>
                    </div>
                </header>
            </div>
