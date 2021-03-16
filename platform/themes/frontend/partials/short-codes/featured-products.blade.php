{{-- <div class="ps-product-list mt-40 mb-40">
    <div class="ps-container">
        <div class="ps-section__header">
            <h3>{!! clean($title) !!}</h3>
            <ul class="ps-section__links">
                <li><a href="{{ route('public.products') }}">{{ __('View All') }}</a></li>
            </ul>
        </div>
        <featured-products-component url="{{ route('public.ajax.featured-products') }}"></featured-products-component>
    </div>
</div> --}}




<!-- Featured Carousel
					============================================= -->
					<div class="fancy-title title-border mt-4 title-center">
						<h4>Các thời trang nổi bật hàng tuần</h4>
					</div>

					<div id="oc-products" class="owl-carousel products-carousel carousel-widget" data-margin="20" data-loop="true" data-autoplay="5000" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="5">

						<!-- Shop Item 1
						============================================= -->
						<div class="oc-item">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/featured/1.jpg" alt="Round Neck T-shirts"></a>
									<a href="#"><img src="themes/frontend/images/items/featured/1-1.jpg" alt="Round Neck T-shirts"></a>
									<div class="sale-flash badge badge-danger p-2">Giảm giá!</div>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Áo thun trơn màu xanh nhạt cổ tròn</a></h3></div>
									<div class="product-price font-primary"><del class="mr-1">24.99$</del> <ins>12.49$</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>
						</div>

						<!-- Shop Item 2
						============================================= -->
						<div class="oc-item">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/featured/2.jpg" alt="Navy Blue Dress"></a>
									<a href="#"><img src="themes/frontend/images/items/featured/2-1.jpg" alt="Navy Blue Dress"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Váy xanh hải quân cho nữ</a></h3></div>
									<div class="product-price font-primary"><ins>19.99$</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
									</div>
								</div>
							</div>
						</div>

						<!-- Shop Item 3
						============================================= -->
						<div class="oc-item">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/featured/5.jpg" alt="Shoes"></a>
									<a href="#"><img src="themes/frontend/images/items/featured/5-1.jpg" alt="Shoes"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="demos/shop/ajax/shop-item-no-stock.html" class="btn btn-dark" data-lightbox="ajax">Xem qua</a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="sale-flash badge badge-secondary p-2">Hết hàng!</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Giày thể thao trắng</a></h3></div>
									<div class="product-price font-primary"><ins>35.00$</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
									</div>
								</div>
							</div>
						</div>

						<!-- Shop Item 4
						============================================= -->
						<div class="oc-item">
							<div class="product">
								<div class="product-image">
									<div class="fslider" data-arrows="false" data-autoplay="4500">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="#"><img src="themes/frontend/images/items/featured/4.jpg" alt="T-shirts"></a></div>
												<div class="slide"><a href="#"><img src="themes/frontend/images/items/featured/4-1.jpg" alt="T-shirts"></a></div>
												<div class="slide"><a href="#"><img src="themes/frontend/images/items/featured/4-2.jpg" alt="T-shirts"></a></div>
												<div class="slide"><a href="#"><img src="themes/frontend/images/items/featured/4-3.jpg" alt="T-shirts"></a></div>
											</div>
										</div>
									</div>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="sale-flash badge badge-danger p-2">Giảm giá!</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Áo phông xanh hải quân, cổ tròn, tay ngắn</a></h3></div>
									<div class="product-price font-primary"><del class="mr-1">27.99$</del> <ins>21.00$</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-empty"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>
						</div>

						<!-- Shop Item 5
						============================================= -->
						<div class="oc-item">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/featured/3.jpg" alt="T-shirts"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Áo thun đen nữ</a></h3></div>
									<div class="product-price font-primary"><ins>13.00$</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>

            </div>

           <!-- New Arrival Section
				============================================= -->
            <div class="section my-4">
                <div class="container">
                    <div class="row align-items-stretch">
                        {!! Theme::partial('new_arrival') !!}
                    </div>
                </div>
            </div>
            
