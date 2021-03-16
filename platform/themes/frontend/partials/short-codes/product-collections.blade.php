{{-- <div class="ps-product-list mb-60">
    <product-collections-component title="{!! clean($title) !!}" :product_collections="{{ json_encode($productCollections) }}" url="{{ route('public.ajax.products') }}" all="{{ route('public.products') }}"></product-collections-component>
</div> --}}

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <!-- Shop Categories
     ============================================= -->
            <div class="fancy-title title-border title-center mb-4">
                <h4>Các danh mục phổ biến</h4>
            </div>

            <div class="row justify-content-center col-mb-50">
                <div class="col-sm-6 col-lg-4">
                    <div class="fancy-title title-border">
                        <h4>Đến gần đây</h4>
                    </div>

                    <div class="posts-sm row col-mb-30" id="recent-shop-list-sidebar">
                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/1.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Áo thun cổ tròn màu xanh</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$29.99</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star-half-full"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/6.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Váy ngắn có kiểm tra</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$23.99</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i><i class="icon-star-half-full"></i><i
                                                    class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/7.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Váy denim xanh nhạt</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$19.99</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i><i class="icon-star-empty"></i><i
                                                    class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/9.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Quần chinos mỏng béo</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$24.99</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="fancy-title title-border">
                        <h4>Sản phẩm phổ biến</h4>
                    </div>

                    <div class="posts-sm row col-mb-30" id="popular-shop-list-sidebar">
                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/3.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Áo thun cổ tròn</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$15</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/10.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Quần xanh </a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$19</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star-empty"></i><i class="icon-star-empty"></i><i
                                                    class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/11.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Đồng hồ Chrome bạc</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$34.99</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i><i class="icon-star-half-full"></i><i
                                                    class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/4.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Áo phông Polo đen</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$17.99</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star-half-full"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="fancy-title title-border">
                        <h4>Được đề xuất cho bạn</h4>
                    </div>

                    <div class="posts-sm row col-mb-30" id="recommended-shop-list-sidebar">
                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/8.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Váy in màu hồng</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$21</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star-half-full"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/5.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Áo thun cổ tròn màu xanh</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$19.99</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i><i class="icon-star-empty"></i><i
                                                    class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/12.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Kính râm nam Aviator</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$14.99</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star-half-full"></i><i class="icon-star-empty"></i><i
                                                    class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="themes/frontend/images/categories/2.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col pl-3">
                                    <div class="entry-title">
                                        <h4><a href="#">Kính râm Unisex</a></h4>
                                    </div>
                                    <div class="entry-meta no-separator">
                                        <ul>
                                            <li class="color">$17.99</li>
                                            <li><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star3"></i><i class="icon-star3"></i><i
                                                    class="icon-star-half-full"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
