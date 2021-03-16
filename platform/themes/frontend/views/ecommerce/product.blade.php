@php
    $originalProduct = $product;
    $selectedAttrs = [];
    $productImages = $product->images;
    if ($product->is_variation) {
        $product = get_parent_product($product->id);
        $selectedAttrs = app(\Botble\Ecommerce\Repositories\Interfaces\ProductVariationInterface::class)
            ->getAttributeIdsOfChildrenProduct($originalProduct->id);
        if (count($productImages) == 0) {
            $productImages = $product->images;
        }
    } else {
        $selectedAttrs = $product->defaultVariation->productAttributes->pluck('id')->all();
    }

    $countRating = 0;
    if (EcommerceHelper::isReviewEnabled()) {
        $reviews = $originalProduct->reviews->where('status', \Botble\Base\Enums\BaseStatusEnum::PUBLISHED);
        $countRating = $reviews->count();
    }

    Theme::set('stickyHeader', 'false');
    Theme::set('topHeader', Theme::partial('header-product-page', compact('product', 'countRating')));
    Theme::set('bottomFooter', Theme::partial('footer-product-page', compact('product')));
    Theme::set('pageId', 'product-page');
    Theme::set('headerMobile', Theme::partial('header-mobile-product'));
@endphp
	<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						<div class="postcontent col-lg-9 order-lg-last">

							<div class="single-product">
								<div class="product">
									<div class="row gutter-40">

										<div class="col-md-6">

											<!-- Product Single - Gallery
											============================================= -->
											<div class="product-image">
												<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
													<div class="flexslider">
														<div class="slider-wrap" data-lightbox="gallery">
															<div class="slide" data-thumb="{{ asset('images/shop/thumbs/dress/3.jpg') }}"><a href="images/shop/dress/3.jpg" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="{{ asset('images/shop/dress/3.jpg') }}" alt="Pink Printed Dress"></a></div>
															<div class="slide" data-thumb="{{ asset('images/shop/thumbs/dress/3-1.jpg') }}"><a href="images/shop/dress/3-1.jpg" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="{{ asset('images/shop/dress/3-1.jpg') }}" alt="Pink Printed Dress"></a></div>
															<div class="slide" data-thumb="{{ asset('images/shop/thumbs/dress/3-2.jpg') }}"><a href="images/shop/dress/3-2.jpg" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="{{ asset('images/shop/dress/3-2.jpg') }}" alt="Pink Printed Dress"></a></div>
														</div>
													</div>
												</div>
												<div class="sale-flash badge badge-danger p-2">Giảm giá!</div>
											</div><!-- Product Single - Gallery End -->

										</div>

										<div class="col-md-6 product-desc">

											<div class="d-flex align-items-center justify-content-between">

												<!-- Product Single - Price
												============================================= -->
												<div class="product-price"><del>$39.99</del> <ins>$24.99</ins></div><!-- Product Single - Price End -->

												<!-- Product Single - Rating
												============================================= -->
												<div class="product-rating">
													<i class="icon-star3"></i>
													<i class="icon-star3"></i>
													<i class="icon-star3"></i>
													<i class="icon-star-half-full"></i>
													<i class="icon-star-empty"></i>
												</div><!-- Product Single - Rating End -->

											</div>

											<div class="line"></div>

											<!-- Product Single - Quantity & Cart Button
											============================================= -->
											<form class="cart mb-0 d-flex justify-content-between align-items-center" method="post" enctype='multipart/form-data'>
												<div class="quantity clearfix">
													<input type="button" value="-" class="minus">
													<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" />
													<input type="button" value="+" class="plus">
												</div>
												<button type="submit" class="add-to-cart button m-0">Add to cart</button>
											</form><!-- Product Single - Quantity & Cart Button End -->

											<div class="line"></div>

											<!-- Product Single - Short Description
											============================================= -->
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
											<p>Perspiciatis ad eveniet ea quasi debitis quos laborum eum reprehenderit eaque explicabo assumenda rem modi.</p>
											<ul class="iconlist">
												<li><i class="icon-caret-right"></i> Chọn màu</li>
												<li><i class="icon-caret-right"></i> Kích thước</li>
												<li><i class="icon-caret-right"></i> Hoàn trả hàng trong vòng 30 ngày</li>
											</ul><!-- Product Single - Short Description End -->

											<!-- Product Single - Meta
											============================================= -->
											<div class="card product-meta">
												<div class="card-body">
													<span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span>
													<span class="posted_in">thể loại: <a href="#" rel="tag">Váy</a>.</span>
													<span class="tagged_as">Tags: <a href="#" rel="tag">Hồng</a>, <a href="#" rel="tag">Ngắn</a>, <a href="#" rel="tag">Váy</a>, <a href="#" rel="tag">In hình</a>.</span>
												</div>
											</div><!-- Product Single - Meta End -->

											<!-- Product Single - Share
											============================================= -->
											<div class="si-share border-0 d-flex justify-content-between align-items-center mt-4">
												<span>Chia sẻ:</span>
												<div>
													<a href="#" class="social-icon si-borderless si-facebook">
														<i class="icon-facebook"></i>
														<i class="icon-facebook"></i>
													</a>
													<a href="#" class="social-icon si-borderless si-twitter">
														<i class="icon-twitter"></i>
														<i class="icon-twitter"></i>
													</a>
													<a href="#" class="social-icon si-borderless si-pinterest">
														<i class="icon-pinterest"></i>
														<i class="icon-pinterest"></i>
													</a>
													<a href="#" class="social-icon si-borderless si-gplus">
														<i class="icon-gplus"></i>
														<i class="icon-gplus"></i>
													</a>
													<a href="#" class="social-icon si-borderless si-rss">
														<i class="icon-rss"></i>
														<i class="icon-rss"></i>
													</a>
													<a href="#" class="social-icon si-borderless si-email3">
														<i class="icon-email3"></i>
														<i class="icon-email3"></i>
													</a>
												</div>
											</div><!-- Product Single - Share End -->

										</div>

										<div class="w-100"></div>

										<div class="col-12 mt-5">

											<div class="tabs clearfix mb-0" id="tab-1">

												<ul class="tab-nav clearfix">
													<li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="d-none d-md-inline-block"> Miêu tả</span></a></li>
													<li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="d-none d-md-inline-block"> Thông tin chi tiết</span></a></li>
													<li><a href="#tabs-3"><i class="icon-star3"></i><span class="d-none d-md-inline-block"> Đánh giá (2)</span></a></li>
												</ul>

												<div class="tab-container">

													<div class="tab-content clearfix" id="tabs-1">
														<p>Chiếc váy in màu hồng, dệt, cổ tròn có nút khóa và đóng cúc ở phía sau, không tay, có khóa kéo giấu ở đường may bên trái, vòng đai dọc theo eo với phần gài nhẹ bên dưới, đính thương hiệu phía trên bên trái viền trước, có một lớp lót đính kèm.</p>
														Tặng kèm với một chiếc thắt lưng tổng hợp mỏng màu trắng có khóa cài.
													</div>
													<div class="tab-content clearfix" id="tabs-2">

														<table class="table table-striped table-bordered">
															<tbody>
																<tr>
																	<td>Kích thước</td>
																	<td>Nhỏ, Thung bình &amp; Lớn</td>
																</tr>
																<tr>
																	<td>Màu</td>
																	<td>Hồng &amp; Trắng</td>
																</tr>
																<tr>
																	<td>Eo</td>
																	<td>26 cm</td>
																</tr>
																<tr>
																	<td>Chiều Dài</td>
																	<td>40 cm</td>
																</tr>
																<tr>
																	<td>Ngực</td>
																	<td>33 inches</td>
																</tr>
																<tr>
																	<td>Chất liệu</td>
																	<td>Cotton, Silk &amp; Synthetic</td>
																</tr>
																<tr>
																	<td>Bảo hành</td>
																	<td>3 Months</td>
																</tr>
															</tbody>
														</table>

													</div>
													<div class="tab-content clearfix" id="tabs-3">

														<div id="reviews" class="clearfix">

															<ol class="commentlist clearfix">

																<li class="comment even thread-even depth-1" id="li-comment-1">
																	<div id="comment-1" class="comment-wrap clearfix">

																		<div class="comment-meta">
																			<div class="comment-author vcard">
																				<span class="comment-avatar clearfix">
																				<img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
																			</div>
																		</div>

																		<div class="comment-content clearfix">
																			<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">Ngày 24 tháng 4 năm 2021 lúc 10:46 sáng</a></span></div>
																			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo perferendis aliquid tenetur. Aliquid, tempora, sit aliquam officiis nihil autem eum at repellendus facilis quaerat consequatur commodi laborum saepe non nemo nam maxime quis error tempore possimus est quasi reprehenderit fuga!</p>
																			<div class="review-comment-ratings">
																				<i class="icon-star3"></i>
																				<i class="icon-star3"></i>
																				<i class="icon-star3"></i>
																				<i class="icon-star3"></i>
																				<i class="icon-star-half-full"></i>
																			</div>
																		</div>

																		<div class="clear"></div>

																	</div>
																</li>

																<li class="comment even thread-even depth-1" id="li-comment-2">
																	<div id="comment-2" class="comment-wrap clearfix">

																		<div class="comment-meta">
																			<div class="comment-author vcard">
																				<span class="comment-avatar clearfix">
																				<img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
																			</div>
																		</div>

																		<div class="comment-content clearfix">
																			<div class="comment-author">Mary Jane<span><a href="#" title="Permalink to this comment">Ngày 16 tháng 6 năm 2021 lúc 6:00 chiều</a></span></div>
																			<p>Quasi, blanditiis, neque ipsum numquam odit asperiores hic dolor necessitatibus libero sequi amet voluptatibus ipsam velit qui harum temporibus cum nemo iste aperiam explicabo fuga odio ratione sint fugiat consequuntur vitae adipisci delectus eum incidunt possimus tenetur excepturi at accusantium quod doloremque reprehenderit aut expedita labore error atque?</p>
																			<div class="review-comment-ratings">
																				<i class="icon-star3"></i>
																				<i class="icon-star3"></i>
																				<i class="icon-star3"></i>
																				<i class="icon-star-empty"></i>
																				<i class="icon-star-empty"></i>
																			</div>
																		</div>

																		<div class="clear"></div>

																	</div>
																</li>

															</ol>

															<!-- Modal Reviews
															============================================= -->
															<a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d m-0 float-right">Đánh giá sản phẩm</a>

															<div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
																<div class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title" id="reviewFormModalLabel">Gửi đánh giá</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																		</div>
																		<div class="modal-body">
																			<form class="row mb-0" id="template-reviewform" name="template-reviewform" action="#" method="post">

																				<div class="col-6 mb-3">
																					<label for="template-reviewform-name">Tên <small>*</small></label>
																					<div class="input-group">
																						<div class="input-group-prepend">
																							<div class="input-group-text"><i class="icon-user"></i></div>
																						</div>
																						<input type="text" id="template-reviewform-name" name="template-reviewform-name" value="" class="form-control required" />
																					</div>
																				</div>

																				<div class="col-6 mb-3">
																					<label for="template-reviewform-email">Email <small>*</small></label>
																					<div class="input-group">
																						<div class="input-group-prepend"><div class="input-group-text">@</div></div>
																						<input type="email" id="template-reviewform-email" name="template-reviewform-email" value="" class="required email form-control" />
																					</div>
																				</div>

																				<div class="w-100"></div>

																				<div class="col-12 mb-3">
																					<label for="template-reviewform-rating">Xếp hạng</label>
																					<select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
																						<option value="">-- Chọn --</option>
																						<option value="1">1</option>
																						<option value="2">2</option>
																						<option value="3">3</option>
																						<option value="4">4</option>
																						<option value="5">5</option>
																					</select>
																				</div>

																				<div class="w-100"></div>

																				<div class="col-12 mb-3">
																					<label for="template-reviewform-comment">Bình luận <small>*</small></label>
																					<textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
																				</div>

																				<div class="col-12">
																					<button class="button button-3d m-0" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit">Gửi Bình Luận</button>
																				</div>

																			</form>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
																		</div>
																	</div><!-- /.modal-content -->
																</div><!-- /.modal-dialog -->
															</div><!-- /.modal -->
															<!-- Modal Reviews End -->

														</div>

													</div>

												</div>

											</div>

											<div class="line"></div>

											<div class="row">
												<div class="col-md-4 d-none d-md-block">
													<a href="#" title="Brand Logo"><img src="{{ asset('images/shop/brand2.jpg') }}" alt="Brand Logo"></a>
												</div>

												<div class="col-md-8">

													<div class="row gutter-30">

														<div class="col-lg-6">
															<div class="feature-box fbox-plain fbox-dark fbox-sm">
																<div class="fbox-icon">
																	<i class="icon-thumbs-up2"></i>
																</div>
																<div class="fbox-content">
																	<h3>Hàng Chính Hãng 100%</h3>
																	<p class="mt-0">Chúng tôi đảm bảo hàng chính hãng và bảo hành cho bạn</p>
																</div>
															</div>
														</div>

														<div class="col-lg-6">
															<div class="feature-box fbox-plain fbox-dark fbox-sm">
																<div class="fbox-icon">
																	<i class="icon-credit-cards"></i>
																</div>
																<div class="fbox-content">
																	<h3>Nhiều hình thức thanh toán</h3>
																	<p class="mt-0">Có thể thanh toán bằng Visa, MasterCard và American Express &amp; và cả PayPal.</p>
																</div>
															</div>
														</div>

														<div class="col-lg-6">
															<div class="feature-box fbox-plain fbox-dark fbox-sm">
																<div class="fbox-icon">
																	<i class="icon-truck2"></i>
																</div>
																<div class="fbox-content">
																	<h3>Giao hàng nhanh miễn phí</h3>
																	<p class="mt-0">Giao hàng miễn phí đến hơn 100 địa điểm trên toàn thế giới đối với đơn hàng trên $ 40.</p>
																</div>
															</div>
														</div>

														<div class="col-lg-6">
															<div class="feature-box fbox-plain fbox-dark fbox-sm">
																<div class="fbox-icon">
																	<i class="icon-undo"></i>
																</div>
																<div class="fbox-content">
																	<h3>Hoàn trả trong vòng 30 ngày</h3>
																	<p class="mt-0">Trả lại hoặc đổi các mặt hàng đã mua trong vòng 30 ngày miễn phí.</p>
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

							<div class="line"></div>

							<div class="w-100">

								<h4>những sản phẩm liên quan</h4>

								<div class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">

									<div class="oc-item">
										<div class="product">
											<div class="product-image">
												<a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
												<a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
												<div class="sale-flash badge badge-success p-2">Giảm giá đến 50%*</div>
												<div class="bg-overlay">
													<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
														<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
														<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
													</div>
													<div class="bg-overlay-bg bg-transparent"></div>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Đầm ngắn nữ họa tiết sọc caro</a></h3></div>
												<div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
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

									<div class="oc-item">
										<div class="product">
											<div class="product-image">
												<a href="#"><img src="{{ asset('images/shop/pants/1-1.jpg') }}" alt="Slim Fit Chinos"></a>
												<a href="#"><img src="{{ asset('images/shop/pants/1.jpg') }}" alt="Slim Fit Chinos"></a>
												<div class="bg-overlay">
													<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
														<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
														<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
													</div>
													<div class="bg-overlay-bg bg-transparent"></div>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Quần Chinos mỏng vừa vặn</a></h3></div>
												<div class="product-price">$39.99</div>
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

									<div class="oc-item">
										<div class="product">
											<div class="product-image">
												<a href="#"><img src="{{ asset('images/shop/shoes/1-1.jpg') }}" alt="Dark Brown Boots"></a>
												<a href="#"><img src="{{ asset('images/shop/shoes/1.jpg') }}" alt="Dark Brown Boots"></a>
												<div class="bg-overlay">
													<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
														<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
														<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
													</div>
													<div class="bg-overlay-bg bg-transparent"></div>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Ủng màu nâu đậm</a></h3></div>
												<div class="product-price">$49</div>
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

									<div class="oc-item">
										<div class="product">
											<div class="product-image">
												<a href="#"><img src="{{ asset('images/shop/dress/2.jpg') }}" alt="Light Blue Denim Dress"></a>
												<a href="#"><img src="{{ asset('images/shop/dress/2-2.jpg') }}" alt="Light Blue Denim Dress"></a>
												<div class="bg-overlay">
													<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
														<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
														<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
													</div>
													<div class="bg-overlay-bg bg-transparent"></div>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Váy denim xanh nhạt</a></h3></div>
												<div class="product-price">$19.95</div>
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

									<div class="oc-item">
										<div class="product">
											<div class="product-image">
												<a href="#"><img src="{{ asset('images/shop/sunglasses/1.jpg') }}" alt="Unisex Sunglasses"></a>
												<a href="#"><img src="{{ asset('images/shop/sunglasses/1-1.jpg') }}" alt="Unisex Sunglasses"></a>
												<div class="sale-flash badge badge-success p-2">Giảm giá!</div>
												<div class="bg-overlay">
													<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
														<a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-cart"></i></a>
														<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
													</div>
													<div class="bg-overlay-bg bg-transparent"></div>
												</div>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Kính râm Unisex</a></h3></div>
												<div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
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

								</div>

							</div>

						</div>

						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links clearfix">

									<h4>Shop Categories</h4>
									<ul>
										<li><a href="#">Áo sơ mi</a></li>
										<li><a href="#">Quân dài</a></li>
										<li><a href="#">Áo phông</a></li>
										<li><a href="#">Kính râm</a></li>
										<li><a href="#">Giày</a></li>
										<li><a href="#">Túi, Ba lo</a></li>
										<li><a href="#">Đồng hồ đeo tay</a></li>
									</ul>

								</div>

								<div class="widget clearfix">

									<h4>Các mục gần đây</h4>
									<div class="posts-sm row col-mb-30" id="recent-shop-list-sidebar">
										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset('images/shop/small/1.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Áo phông màu xanh cổ tròn</a></h4>
													</div>
													<div class="entry-meta no-separator">
														<ul>
															<li class="color">$29.99</li>
															<li><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset('images/shop/small/6.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Đầm ngắn nữ họa tiết sọc caro</a></h4>
													</div>
													<div class="entry-meta no-separator">
														<ul>
															<li class="color">$23.99</li>
															<li><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i><i class="icon-star-empty"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset('images/shop/small/7.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Váy denim xanh nhạt</a></h4>
													</div>
													<div class="entry-meta no-separator">
														<ul>
															<li class="color">$19.99</li>
															<li><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="widget clearfix">

									<h4>Các mục được xem lần cuối</h4>
									<div class="posts-sm row col-mb-30" id="last-viewed-shop-list-sidebar">
										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset('images/shop/small/3.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Áo phông cổ tròn</a></h4>
													</div>
													<div class="entry-meta no-separator">
														<ul>
															<li class="color">$15</li>
															<li><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset('images/shop/small/10.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Quần màu xanh</a></h4>
													</div>
													<div class="entry-meta no-separator">
														<ul>
															<li class="color">$19</li>
															<li><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset('images/shop/small/11.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Đồng hồ Chrome bạc</a></h4>
													</div>
													<div class="entry-meta no-separator">
														<ul>
															<li class="color">$34.99</li>
															<li><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i><i class="icon-star-empty"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="widget clearfix">

									<h4>Thời trang phổ biến</h4>
									<div class="posts-sm row col-mb-30" id="popular-shop-list-sidebar">
										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset('images/shop/small/8.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Váy hồng có họa tiết</a></h4>
													</div>
													<div class="entry-meta no-separator">
														<ul>
															<li class="color">$21</li>
															<li><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset('images/shop/small/5.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Áo phông màu xanh cổ tròn</a></h4>
													</div>
													<div class="entry-meta no-separator">
														<ul>
															<li class="color">$19.99</li>
															<li><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset('images/shop/small/12.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Kính râm nam Aviator</a></h4>
													</div>
													<div class="entry-meta no-separator">
														<ul>
															<li class="color">$14.99</li>
															<li><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="widget clearfix">
									<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=240&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" style="border:none; overflow:hidden; width:240px; height:290px;"></iframe>
								</div>

								<div class="widget subscribe-widget clearfix">

									<h4>Đăng ký để nhận thêm nhiều ưu đãi mới nhất</h4>
									<h5>Đăng ký Bản tin của chúng tôi để nhận thông tin Ưu đãi mới nhất &amp; Đặt trước:</h5>
									<form action="#" class="my-0">
										<div class="input-group mx-auto">
											<input type="text" class="form-control" placeholder="Enter your Email" required="">
											<div class="input-group-append">
												<button class="btn btn-success" type="submit"><i class="icon-email2"></i></button>
											</div>
										</div>
									</form>
								</div>

								<div class="widget clearfix">

									<div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false">

										<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/1.png')}}" alt="Clients"></a></div>
										<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/2.png')}}" alt="Clients"></a></div>
										<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/3.png')}}" alt="Clients"></a></div>
										<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/4.png')}}" alt="Clients"></a></div>
										<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/5.png')}}" alt="Clients"></a></div>
										<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/6.png')}}" alt="Clients"></a></div>
										<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/7.png')}}" alt="Clients"></a></div>
										<div class="oc-item"><a href="#"><img src="{{ asset('images/clients/8.png')}}" alt="Clients"></a></div>

									</div>

								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</section><!-- #content end -->

<div class="ps-page--product">
    <div class="ps-container">
            <div class="ps-page__container">
                <div class="ps-page__left">
                    <div class="ps-product--detail ps-product--fullwidth">
                        <div class="ps-product__header">
                            <div class="ps-product__thumbnail" data-vertical="true">
                                <figure>
                                    <div class="ps-wrapper">
                                        <div class="ps-product__gallery" data-arrow="true">
                                            @foreach ($productImages as $img)
                                                <div class="item">
                                                    <a href="{{ RvMedia::getImageUrl($img) }}">
                                                        <img src="{{ RvMedia::getImageUrl($img) }}" alt="{{ $originalProduct->name }}"/>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </figure>
                                <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">
                                    @foreach ($productImages as $img)
                                        <div class="item">
                                            <img src="{{ RvMedia::getImageUrl($img, 'thumb') }}" alt="{{ $originalProduct->name }}"/>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="ps-product__info">
                                <h1>{{ $product->name }}</h1>
                                <div class="ps-product__meta">
                                    @if ($product->brand_id)
                                        <p>{{ __('Brand') }}: <a href="{{ $product->brand->url }}">{{ $product->brand->name }}</a></p>
                                    @endif
                                    @if (EcommerceHelper::isReviewEnabled())
                                        @if ($countRating > 0)
                                            <div class="rating_wrap">
                                                <a href="#tab-reviews">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: {{ get_average_star_of_product($originalProduct->id) * 20 }}%"></div>
                                                    </div>
                                                    <span class="rating_num">({{ $countRating }} {{ __('reviews') }})</span>
                                                </a>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                                <h4 class="ps-product__price @if ($product->front_sale_price !== $product->price) sale @endif"><span>{{ format_price($product->front_sale_price) }}</span> @if ($product->front_sale_price !== $product->price) <del>{{ format_price($product->price) }} </del> @endif</h4>
                                <div class="ps-product__desc">
                                    <div class="ps-list--dot">
                                        {!! clean($product->description) !!}
                                    </div>
                                </div>
                                @php $flashSale = $product->flashSales()->first(); @endphp

                                @if ($flashSale)
                                    <div class="ps-product__countdown">
                                        <figure>
                                            <figcaption> {{ __("Don't Miss Out! This promotion will expires in") }}</figcaption>
                                            <ul class="ps-countdown" data-time="{{ $flashSale->end_date }}">
                                                <li><span class="days"></span>
                                                    <p>{{ __('Days') }}</p>
                                                </li>
                                                <li><span class="hours"></span>
                                                    <p>{{ __('Hours') }}</p>
                                                </li>
                                                <li><span class="minutes"></span>
                                                    <p>{{ __('Minutes') }}</p>
                                                </li>
                                                <li><span class="seconds"></span>
                                                    <p>{{ __('Seconds') }}</p>
                                                </li>
                                            </ul>
                                        </figure>
                                        <figure>
                                            <figcaption>{{ __('Sold Items') }}</figcaption>
                                            <div class="ps-product__progress-bar ps-progress" data-value="{{ $flashSale->pivot->quantity > 0 ? ($flashSale->pivot->sold / $flashSale->pivot->quantity) * 100 : 0 }}">
                                                <div class="ps-progress__value"><span style="width: {{ $flashSale->pivot->quantity > 0 ? $flashSale->pivot->sold / $flashSale->pivot->quantity : 0 }}%;"></span></div>
                                                <p><b>{{ $flashSale->pivot->sold }}/{{ $flashSale->pivot->quantity }}</b> {{ __('Sold') }}</p>
                                            </div>
                                        </figure>
                                    </div>
                                @endif

                                @if ($product->variations()->count() > 0)
                                    <div class="pr_switch_wrap">
                                        {!! render_product_swatches($product, [
                                            'selected' => $selectedAttrs,
                                            'view'     => Theme::getThemeNamespace() . '::views.ecommerce.attributes.swatches-renderer'
                                        ]) !!}
                                    </div>
                                    <div class="number-items-available" style="display: none; margin-bottom: 10px;"></div>
                                @endif
                                <form class="add-to-cart-form" method="POST" action="{{ route('public.cart.add-to-cart') }}">
                                    @csrf
                                    {!! apply_filters(ECOMMERCE_PRODUCT_DETAIL_EXTRA_HTML, null) !!}
                                    <div class="ps-product__shopping">
                                        <figure>
                                            <figcaption>{{ __('Quantity') }}</figcaption>
                                            <div class="form-group--number product__qty">
                                                <button class="up" type="button"><i class="icon-plus"></i></button>
                                                <button class="down" type="button"><i class="icon-minus"></i></button>
                                                <input class="form-control qty-input" type="text" name="qty" value="1" placeholder="1" readonly>
                                            </div>
                                        </figure>
                                        <input type="hidden" name="id" class="hidden-product-id" value="{{ ($originalProduct->is_variation || !$originalProduct->defaultVariation->product_id) ? $originalProduct->id : $originalProduct->defaultVariation->product_id }}"/>

                                        @if (EcommerceHelper::isCartEnabled())
                                            <button class="ps-btn ps-btn--black" type="submit">{{ __('Add to cart') }}</button>
                                            @if (EcommerceHelper::isQuickBuyButtonEnabled())
                                                <button class="ps-btn" type="submit" name="checkout">{{ __('Buy Now') }}</button>
                                            @endif
                                        @endif
                                        <div class="ps-product__actions">
                                            <a class="js-add-to-wishlist-button" href="{{ route('public.wishlist.add', $product->id) }}"><i class="icon-heart"></i></a>
                                            <a class="js-add-to-compare-button" href="{{ route('public.compare.add', $product->id) }}" title="{{ __('Compare') }}"><i class="icon-chart-bars"></i></a>
                                        </div>
                                    </div>
                                </form>
                                <div class="ps-product__specification">
                                    @if ($product->sku)
                                        <p><strong>{{ __('SKU') }}:</strong> {{ $product->sku }}</p>
                                    @endif

                                    @if ($product->categories->count())
                                        <p class="categories"><strong> {{ __('Categories') }}:</strong>
                                            @foreach($product->categories as $category)
                                                <a href="{{ $category->url }}">{{ $category->name }}</a>@if (!$loop->last),@endif
                                            @endforeach
                                        </p>
                                    @endif

                                    @if ($product->tags->count())
                                        <p class="tags"><strong> {{ __('Tags') }}:</strong>
                                            @foreach($product->tags as $tag)
                                                <a href="{{ $tag->url }}">{{ $tag->name }}</a>@if (!$loop->last),@endif
                                            @endforeach
                                        </p>
                                    @endif
                                </div>
                                <div class="ps-product__sharing">
                                    <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($product->url) }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode($product->url) }}&summary={{ rawurldecode(strip_tags($product->description)) }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a class="twitter" href="https://twitter.com/intent/tweet?url={{ urlencode($product->url) }}&text={{ strip_tags($product->description) }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product__content ps-tab-root">
                            <ul class="ps-tab-list">
                                <li class="active"><a href="#tab-description">{{ __('Description') }}</a></li>
                                @if (EcommerceHelper::isReviewEnabled())
                                    <li><a href="#tab-reviews">{{ __('Reviews') }} ({{ $countRating }})</a></li>
                                @endif
                            </ul>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-description">
                                    <div class="ps-document">
                                        <div>
                                            {!! clean($product->content, 'youtube') !!}
                                        </div>
                                        @if (theme_option('facebook_comment_enabled_in_product', 'yes') == 'yes')
                                            <br />
                                            {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, Theme::partial('comments')) !!}
                                        @endif
                                    </div>
                                </div>
                                @if (EcommerceHelper::isReviewEnabled())
                                    <div class="ps-tab" id="tab-reviews">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="ps-block--average-rating">
                                                <div class="ps-block__header">
                                                    <h3>{{ number_format($reviews->avg('star'), 2) }}</h3>
                                                    @if ($countRating > 0)
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width: {{ $reviews->avg('star') * 20 }}%"></div>
                                                            </div>
                                                            <span class="rating_num">({{ $countRating }} {{ __('reviews') }})</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="ps-block__star"><span>{{ __('5 Star') }}</span>
                                                    @php
                                                        $stars = $reviews->where('star', 5)->count();
                                                        if ($stars > 0) {
                                                            $stars = $stars / $countRating * 100;
                                                        }
                                                    @endphp
                                                    <div class="ps-progress" data-value="{{ $stars }}"><span></span></div><span>{{ ((int) ($stars * 100)) / 100 }}%</span>
                                                </div>
                                                <div class="ps-block__star"><span>{{ __('4 Star') }}</span>
                                                    @php
                                                        $stars = $reviews->where('star', 4)->count();
                                                        if ($stars > 0) {
                                                            $stars = $stars / $countRating * 100;
                                                        }
                                                    @endphp
                                                    <div class="ps-progress" data-value="{{ $stars }}"><span></span></div><span>{{ ((int) ($stars * 100)) / 100 }}%</span>
                                                </div>
                                                <div class="ps-block__star"><span>{{ __('3 Star') }}</span>
                                                    @php
                                                        $stars = $reviews->where('star', 3)->count();
                                                        if ($stars > 0) {
                                                            $stars = $stars / $countRating * 100;
                                                        }
                                                    @endphp
                                                    <div class="ps-progress" data-value="{{ $stars }}"><span></span></div><span>{{ ((int) ($stars * 100)) / 100 }}%</span>
                                                </div>
                                                <div class="ps-block__star"><span>{{ __('2 Star') }}</span>
                                                    @php
                                                        $stars = $reviews->where('star', 2)->count();
                                                        if ($stars > 0) {
                                                            $stars = $stars / $countRating * 100;
                                                        }
                                                    @endphp
                                                    <div class="ps-progress" data-value="{{ $stars }}"><span></span></div><span>{{ ((int) ($stars * 100)) / 100 }}%</span>
                                                </div>
                                                <div class="ps-block__star"><span>{{ __('1 Star') }}</span>
                                                    @php
                                                        $stars = $reviews->where('star', 1)->count();
                                                        if ($stars > 0) {
                                                            $stars = $stars / $countRating * 100;
                                                        }
                                                    @endphp
                                                    <div class="ps-progress" data-value="{{ $stars }}"><span></span></div><span>{{ ((int) ($stars * 100)) / 100 }}%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            {!! Form::open(['route' => 'public.reviews.create', 'method' => 'post', 'class' => 'ps-form--review form-review-product']) !!}
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <h4>{{ __('Submit Your Review') }}</h4>
                                                @if (!auth('customer')->check())
                                                    <p class="text-danger">{{ __('Please') }} <a href="{{ route('customer.login') }}">{{ __('login') }}</a> {{ __('to write review!') }}</p>
                                                @endif
                                                <div class="form-group form-group__rating">
                                                    <label for="review-star">{{ __('Your rating of this product') }}</label>
                                                    <select name="star" class="ps-rating" data-read-only="false" id="review-star">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="comment" id="txt-comment" rows="6" placeholder="{{ __('Write your review') }}" @if (!auth('customer')->check()) disabled @endif></textarea>
                                                </div>

                                                <div class="success-message text-success" style="display: none;">
                                                    <span></span>
                                                </div>
                                                <div class="error-message text-danger" style="display: none;">
                                                    <span></span>
                                                </div>

                                                <div class="form-group submit">
                                                    <button class="ps-btn @if (!auth('customer')->check()) btn-disabled @endif" type="submit" @if (!auth('customer')->check()) disabled @endif>{{ __('Submit Review') }}</button>
                                                </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                    @if (EcommerceHelper::isReviewEnabled())
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="block--product-reviews">
                                                    <div class="block__header">
                                                        <h2>{{ $countRating }} {{ __('reviews for ":product"', ['product' => $product->name]) }}</h2>
                                                    </div>
                                                    <div class="block__content" id="app">
                                                        <product-reviews-component url="{{ route('public.ajax.product-reviews', $product->id) }}"></product-reviews-component>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-page__right">
                    <aside class="widget widget_product widget_features">
                        @for ($i = 1; $i <= 5; $i++)
                            @if (theme_option('product_feature_' . $i . '_title'))
                                <p><i class="{{ theme_option('product_feature_' . $i . '_icon') }}"></i> {{ theme_option('product_feature_' . $i . '_title') }}</p>
                            @endif
                        @endfor
                    </aside>
                    <aside class="widget">
                        {!! AdsManager::display('product-sidebar') !!}
                    </aside>
                </div>
            </div>

            @php
                $crossSellProducts = array_slice(get_cross_sale_products($originalProduct), 0, 7);
            @endphp
            @if (count($crossSellProducts) > 0)
                <div class="ps-section--default ps-customer-bought">
                    <div class="ps-section__header">
                        <h3>{{ __('Customers who bought this item also bought') }}</h3>
                    </div>
                    <div class="ps-section__content">
                        <div class="row">
                            @foreach($crossSellProducts as $crossId)
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        {!! Theme::partial('product-item', ['product' => get_product_by_id($crossId)]) !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <div class="ps-section--default" id="products">
                <div class="ps-section__header">
                    <h3>{{ __('Related products') }}</h3>
                </div>
                <related-products-component url="{{ route('public.ajax.related-products', $product->id) }}?limit=6"></related-products-component>
            </div>
    </div>
</div>
