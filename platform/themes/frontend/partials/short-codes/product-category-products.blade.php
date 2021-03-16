{{-- @if ($category)
    <div class="ps-product-list">
        <product-category-products-component :category="{{ json_encode($category) }}" :children="{{ json_encode($category->children) }}" url="{{ route('public.ajax.product-category-products') }}" all="{{ $category->url }}"></product-category-products-component>
    </div>
@endif --}}



<!-- New Arrivals Men
				============================================= -->
				<div class="container clearfix">

					<div class="fancy-title title-border topmargin-sm mb-4 title-center">
						<h4>Hàng mới về: Nam</h4>
					</div>

					<div class="row grid-6">

						<!-- Shop Item 1
						============================================= -->
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/1.jpg" alt="Image 1"></a>
									<a href="#"><img src="themes/frontend/images/items/new/1-1.jpg" alt="Image 1"></a>
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
									<div class="product-title mb-1"><h3><a href="#">Denim xanh nhạt</a></h3></div>
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
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/2.jpg" alt="Image 2"></a>
									<a href="#"><img src="themes/frontend/images/items/new/2-1.jpg" alt="Image 2"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Giày thể thao xanh đậm</a></h3></div>
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
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/4.jpg" alt="Image 3"></a>
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
									<div class="product-title mb-1"><h3><a href="#">Quần đùi nam in hình</a></h3></div>
									<div class="product-price font-primary"><del class="mr-1">41.99$</del> <ins>35.00$</ins></div>
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

						<!-- Shop Item 4
						============================================= -->
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/3.jpg" alt="Image 5"></a>
									<a href="#"><img src="themes/frontend/images/items/new/3-1.jpg" alt="Image 5"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Quần thể thao nữ</a></h3></div>
									<div class="product-price font-primary"><ins>21.00$</ins></div>
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

						<!-- Shop Item 5
						============================================= -->
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/6.jpg" alt="Image 5"></a>
									<a href="#"><img src="themes/frontend/images/items/new/6-1.jpg" alt="Image 5"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Váy mát mẻ in hình</a></h3></div>
									<div class="product-price font-primary"><ins>$31.49</ins></div>
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

						<!-- Shop Item 6
						============================================= -->
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/5.jpg" alt="Image 6"></a>
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
									<div class="product-title mb-1"><h3><a href="#">Áo sọc đỏ cho nữ</a></h3></div>
									<div class="product-price font-primary"><del class="mr-1">41.99$</del> <ins>35.00$</ins></div>
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

						<!-- Shop Item 7
						============================================= -->
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/7.jpg" alt="Image 7"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Túi nữ màu nâu đậm nữ</a></h3></div>
									<div class="product-price font-primary"><ins>49.49$</ins></div>
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

						<!-- Shop Item 8
						============================================= -->
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/8.jpg" alt="Image 8"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Kính chống tia UV</a></h3></div>
									<div class="product-price font-primary"><ins>39.99$</ins></div>
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

						<!-- Shop Item 9
						============================================= -->
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/9.jpg" alt="Image 9"></a>
									<a href="#"><img src="themes/frontend/images/items/new/9-1.jpg" alt="Image 3"></a>
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
									<div class="product-title mb-1"><h3><a href="#">Áo thun thể thao</a></h3></div>
									<div class="product-price font-primary"><del class="mr-1">21.99$</del> <ins>15.00$</ins></div>
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

						<!-- Shop Item 10
						============================================= -->
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/10.jpg" alt="Image 10"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="sale-flash badge badge-secondary p-2">Hết hàng!</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Túi màu xanh da trời in hình</a></h3></div>
									<div class="product-price font-primary"><ins>61.49$</ins></div>
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

						<!-- Shop Item 11
						============================================= -->
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/11.jpg" alt="Image 6"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><img src="themes/frontend/images/items/new/11.jpg" alt="Image 10"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><img src="themes/frontend/images/items/new/11.jpg" alt="Image 10"></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Đồng hồ nữ màu xanh</a></h3></div>
									<div class="product-price font-primary"><ins>23.00$</ins></div>
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

						<!-- Shop Item 12
						============================================= -->
						<div class="col-lg-2 col-md-3 col-6 px-2">
							<div class="product">
								<div class="product-image">
									<a href="#"><img src="themes/frontend/images/items/new/12.jpg" alt="Image 6"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a>
											<a href="demos/shop/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
										</div>
										<div class="bg-overlay-bg bg-transparent"></div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title mb-1"><h3><a href="#">Giày đi tiệc màu xanh</a></h3></div>
									<div class="product-price font-primary"><ins>51.00$</ins></div>
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

					</div>

                </div>
                
                <!-- Sign Up
				============================================= -->
				<div class="section my-4 py-5">
					<div class="container">
						<div class="row">
                            {!! Theme::partial('register') !!}
                        </div>
					</div>
				</div>