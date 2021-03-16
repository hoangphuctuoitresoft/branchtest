@php
    Theme::layout('blog-sidebar')
    
@endphp
	<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						<!-- Post Content
						============================================= -->
						<div class="postcontent col-lg-9 order-lg-last">

							<div class="single-post mb-0">

								<!-- Single Post
								============================================= -->
								<div class="entry clearfix">

									<!-- Entry Title
									============================================= -->
									<div class="entry-title">
										<h2>Đây là bài đăng Chuẩn có Hình ảnh Xem trước</h2>
									</div><!-- .entry-title end -->

									<!-- Entry Meta
									============================================= -->
									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i> 10 tháng 7 năm 2021</li>
											<li><a href="#"><i class="icon-user"></i> quản trị viên</a></li>
											<li><i class="icon-folder-open"></i> <a href="#">Chung</a>, <a href="#">Truyền thông</a></li>
											<li><a href="#"><i class="icon-comments"></i> 43 Bình luận</a></li>
											<li><a href="#"><i class="icon-camera-retro"></i></a></li>
										</ul>
									</div><!-- .entry-meta end -->

									<!-- Entry Image
									============================================= -->
									<div class="entry-image">
										<a href="#"><img src="{{ asset('images/blog/full/1.jpg') }}" alt="Blog Single"></a>
									</div><!-- .entry-image end -->

									<!-- Entry Content
									============================================= -->
									<div class="entry-content mt-0">

										<p>Bách khoa toàn thư Wikipedia tiếng Việt hiện có 1.259.670 bài viết. Trong số đó, 408 bài có chất lượng tốt đã được các thành viên bình chọn là bài viết chọn lọc. Những bài viết này đạt được các tiêu chuẩn dữ liệu chính xác, nội dung hoàn chỉnh, trung lập... và được xem như những bài nổi bật nhất của Wikipedia tiếng Việt. </p>

										<p>Tính trung bình <a href="#">trong 3087 bài viết</a>. của Wikipedia, có một bài được chọn lọc. Các bài viết chọn lọc được đánh dấu bằng một ngôi sao màu vàng (Fairytale bookmark golden.png) ở trên cùng góc phải.</p>

										<blockquote><p>Tại các phiên bản Wikipedia ngôn ngữ khác, bên cạnh liên kết tới Wikipedia tiếng Việt cũng sẽ có một ngôi sao giúp nhận biết một bài được chọn lọc.</p></blockquote>

										<p>Hiện nay, mỗi tuần sẽ có một bài viết chọn lọc được giới thiệu trên Trang Chính. Trong tương lai, khi chất lượng các bài viết cao hơn, có thể mỗi ngày sẽ có thêm một bài chọn lọc, giống như các Wikipedia phiên bản lớn khác.</p>

										<p>Với chức năng minh họa cho các bài viết, những hình ảnh ở Wikipedia cũng đóng một vai trò quan trọng trong việc chuyển tải kiến thức và thông tin. Từ tháng 11 năm 2008, Wikipedia tiếng Việt bắt đầu giới thiệu các hình ảnh đẹp lên Trang Chính mỗi tuần, đã có 135 hình ảnh của tuần. Từ ngày 11 tháng 5 năm 2011, các hình ảnh được đổi mới hàng ngày đã có 2.154 hình ảnh của ngày. Đó là các hình đã được các thành viên của Wikimedia Commons bình chọn và được xem như một trong những hình ảnh chất lượng nhất của dự án.</p>

										
										<!-- Post Single - Content End -->

										<!-- Tag Cloud
										============================================= -->
										<div class="tagcloud clearfix bottommargin">
											<a href="#">Chung</a>
											<a href="#">Thông tin chi tiết</a>
											<a href="#">Truyền thông</a>
											<a href="#">nhấn</a>
											<a href="#">bộ sưu tập</a>
											<a href="#">hình minh họa</a>
										</div><!-- .tagcloud end -->

										<div class="clear"></div>

										<!-- Post Single - Share
										============================================= -->
										<div class="si-share border-0 d-flex justify-content-between align-items-center">
											<span>Chia sẻ bài đăng này:</span>
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
										</div><!-- Post Single - Share End -->

									</div>
								</div><!-- .entry end -->

								<!-- Post Navigation
								============================================= -->
								<div class="row justify-content-between col-mb-30 post-navigation">
									<div class="col-12 col-md-auto text-center">
										<a href="#">&lArr; Đây là bài đăng Chuẩn với Thư viện trượt</a>
									</div>

									<div class="col-12 col-md-auto text-center">
										<a href="#">Đây là một bài đăng âm thanh được nhúng &rArr;</a>
									</div>
								</div><!-- .post-navigation end -->

								<div class="line"></div>

								<!-- Post Author Info
								============================================= -->
								<div class="card">
									<div class="card-header"><strong>Đăng bởi <a href="#">John Doe</a></strong></div>
									<div class="card-body">
										<div class="author-image">
											<img src="{{ asset('images/author/1.jpg') }}" alt="Image" class="rounded-circle">
										</div>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
									</div>
								</div><!-- Post Single - Author End -->

								<div class="line"></div>

								<h4>Bài viết liên quan:</h4>

								<div class="related-posts row posts-md col-mb-30">

									<div class="entry col-12 col-md-6">
										<div class="grid-inner row align-items-center gutter-20">
											<div class="col-4">
												<div class="entry-image">
													<a href="#"><img src="{{ asset('images/blog/small/10.jpg') }}" alt="Blog Single"></a>
												</div>
											</div>
											<div class="col-8">
												<div class="entry-title title-xs">
													<h3><a href="#">Đây là một bài đăng hình ảnh</a></h3>
												</div>
												<div class="entry-meta">
													<ul>
														<li><i class="icon-calendar3"></i> 10 tháng 7 năm 2021</li>
														<li><a href="#"><i class="icon-comments"></i> 12</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12 col-md-6">
										<div class="grid-inner row align-items-center gutter-20">
											<div class="col-4">
												<div class="entry-image">
													<a href="#"><img src="{{ asset('images/blog/small/20.jpg') }}" alt="Blog Single"></a>
												</div>
											</div>
											<div class="col-8">
												<div class="entry-title title-xs">
													<h3><a href="#">Đây là một bài đăng video</a></h3>
												</div>
												<div class="entry-meta">
													<ul>
														<li><i class="icon-calendar3"></i> 24 tháng 7 năm 2021</li>
														<li><a href="#"><i class="icon-comments"></i> 16</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12 col-md-6">
										<div class="grid-inner row align-items-center gutter-20">
											<div class="col-4">
												<div class="entry-image">
													<a href="#"><img src="{{ asset('images/blog/small/21.jpg') }}" alt="Blog Single"></a>
												</div>
											</div>
											<div class="col-8">
												<div class="entry-title title-xs">
													<h3><a href="#">Đây là một bài đăng trong thư viện</a></h3>
												</div>
												<div class="entry-meta">
													<ul>
														<li><i class="icon-calendar3"></i> Ngày 8 tháng 8 năm 2021</li>
														<li><a href="#"><i class="icon-comments"></i> 8</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12 col-md-6">
										<div class="grid-inner row align-items-center gutter-20">
											<div class="col-4">
												<div class="entry-image">
													<a href="#"><img src="{{ asset('images/blog/small/22.jpg') }}" alt="Blog Single"></a>
												</div>
											</div>
											<div class="col-8">
												<div class="entry-title title-xs">
													<h3><a href="#">Đây là một bài đăng âm thanh</a></h3>
												</div>
												<div class="entry-meta">
													<ul>
														<li><i class="icon-calendar3"></i> Ngày 22 tháng 8 năm 2021</li>
														<li><a href="#"><i class="icon-comments"></i> 21</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>

								</div>

								<!-- Comments
								============================================= -->
								<div id="comments" class="clearfix">

									<h3 id="comments-title"><span><fb:comments-count href="http://themes.semicolonweb.com/html/coworker/blog-single-split.php"></fb:comments-count></span> Bình luận</h3>

									<!-- Facebook Comments
									============================================= -->
									<div class="fb-comments" data-width="100%" data-href="http://themes.semicolonweb.com/html/coworker/blog-single-split.php" data-numposts="5" data-colorscheme="light"></div>
									<!-- Facebook Comments end -->

								</div><!-- #comments end -->

							</div>

						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget-twitter-feed clearfix">

									<h4>Nguồn cấp dữ liệu Twitter</h4>
									<ul class="iconlist twitter-feed" data-username="envato" data-count="2">
										<li></li>
									</ul>

									<a href="#" class="btn btn-secondary btn-sm float-right">Theo dõi chúng tôi trên Twitter</a>

								</div>

								<div class="widget clearfix">

									<h4>Flickr Photostream</h4>
									<div id="flickr-widget" class="flickr-feed masonry-thumbs grid-container" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>

								</div>

								<div class="widget clearfix">

									<div class="tabs mb-0 clearfix" id="sidebar-tabs">

										<ul class="tab-nav clearfix">
											<li><a href="#tabs-1">Phổ biến</a></li>
											<li><a href="#tabs-2">Gần đây</a></li>
											<li><a href="#tabs-3"><i class="icon-comments-alt mr-0"></i></a></li>
										</ul>

										<div class="tab-container">

											<div class="tab-content clearfix" id="tabs-1">
												<div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="{{ asset('images/magazine/small/3.jpg') }}" alt="Image"></a>
																</div>
															</div>
															<div class="col pl-3">
																<div class="entry-title">
																	<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
																</div>
																<div class="entry-meta">
																	<ul>
																		<li><i class="icon-comments-alt"></i> 35 Bình luận</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>

													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="{{ asset('images/magazine/small/2.jpg') }}" alt="Image"></a>
																</div>
															</div>
															<div class="col pl-3">
																<div class="entry-title">
																	<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
																</div>
																<div class="entry-meta">
																	<ul>
																		<li><i class="icon-comments-alt"></i> 24 Bình luận</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>

													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="{{ asset('images/magazine/small/1.jpg') }}" alt="Image"></a>
																</div>
															</div>
															<div class="col pl-3">
																<div class="entry-title">
																	<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
																</div>
																<div class="entry-meta">
																	<ul>
																		<li><i class="icon-comments-alt"></i> 19 Bình luận</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content clearfix" id="tabs-2">
												<div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="{{ asset('images/magazine/small/1.jpg') }}" alt="Image"></a>
																</div>
															</div>
															<div class="col pl-3">
																<div class="entry-title">
																	<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
																</div>
																<div class="entry-meta">
																	<ul>
																		<li>10 tháng 7 năm 2021</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>

													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="{{ asset('images/magazine/small/2.jpg') }}" alt="Image"></a>
																</div>
															</div>
															<div class="col pl-3">
																<div class="entry-title">
																	<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
																</div>
																<div class="entry-meta">
																	<ul>
																		<li>10 tháng 7 năm 2021</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>

													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="{{ asset('images/magazine/small/3.jpg') }}" alt="Image"></a>
																</div>
															</div>
															<div class="col pl-3">
																<div class="entry-title">
																	<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
																</div>
																<div class="entry-meta">
																	<ul>
																		<li>10 tháng 7 năm 2021</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content clearfix" id="tabs-3">
												<div class="posts-sm row col-mb-30" id="recent-comments-list-sidebar">
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="{{ asset('images/icons/avatar.jpg') }}" alt="User Avatar"></a>
																</div>
															</div>
															<div class="col pl-3">
																<strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
															</div>
														</div>
													</div>

													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="{{ asset('images/icons/avatar.jpg') }}" alt="User Avatar"></a>
																</div>
															</div>
															<div class="col pl-3">
																<strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
															</div>
														</div>
													</div>

													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="{{ asset('images/icons/avatar.jpg') }}" alt="User Avatar"></a>
																</div>
															</div>
															<div class="col pl-3">
																<strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>

									</div>

								</div>

								<div class="widget clearfix">

									<h4>Danh mục đầu tư</h4>
									<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

										<div class="oc-item">
											<div class="portfolio-item">
												<div class="portfolio-image">
													<a href="#">
														<img src="{{ asset('images/portfolio/4/3.jpg') }}" alt="Mac Sunglasses">
													</a>
													<div class="bg-overlay">
														<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
															<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
														</div>
														<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
													</div>
												</div>
												<div class="portfolio-desc text-center pb-0">
													<h3><a href="portfolio-single-video.html">Kính râm Mac</a></h3>
													<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
												</div>
											</div>
										</div>

										<div class="oc-item">
											<div class="portfolio-item">
												<div class="portfolio-image">
													<a href="portfolio-single.html">
														<img src="{{ asset('images/portfolio/4/1.jpg') }}" alt="Open Imagination">
													</a>
													<div class="bg-overlay">
														<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
															<a href="{{ asset('images/blog/full/1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
														</div>
														<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
													</div>
												</div>
												<div class="portfolio-desc text-center pb-0">
													<h3><a href="portfolio-single.html">Mở trí tưởng tượng</a></h3>
													<span><a href="#">Truyền thông</a>, <a href="#">Biểu tượng</a></span>
												</div>
											</div>
										</div>

									</div>

								</div>

								<div class="widget clearfix">

									<h4>Tag Cloud</h4>
									<div class="tagcloud">
										<a href="#">Chung</a>
										<a href="#">videos</a>
										<a href="#">Âm nhạc</a>
										<a href="#">Truyền thông</a>
										<a href="#">nhiếp ảnh</a>
										<a href="#">thị sai</a>
										<a href="#">thương mại điện tử</a>
										<a href="#">điều kiện</a>
										<a href="#">Phiếu giảm giá</a>
										<a href="#">hiện đại</a>
									</div>

								</div>

							</div>
						</div><!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section><!-- #content end -->
<div class="ps-post--detail sidebar">
    <div class="ps-post__header">
        <p>{{ $post->created_at->format('M d, Y') }} @if ($post->author) / {{ __('By') }} {{ $post->author->getFullName() }} @endif / {{ __('in') }} @foreach($post->categories as $category) <a href="{{ $category->url }}">{{ $category->name }}</a> @if (!$loop->last) , @endif @endforeach</p>
    </div>
    <div class="ps-post__content" style="padding-top: 0;">
        {!! clean($post->content, 'youtube') !!}
        @if (theme_option('facebook_comment_enabled_in_post', 'yes') == 'yes')
            <br />
            {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, Theme::partial('comments')) !!}
        @endif
    </div>
    <div class="ps-post__footer">
        @if (!$post->tags->isEmpty())
            <p class="ps-post__tags">{{ __('Tags') }}:
                @foreach ($post->tags as $tag)
                    <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                @endforeach
            </p>
        @endif
        <div class="ps-post__social">
            <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($post->url) }}&title={{ $post->description }}" target="_blank"><i class="fa fa-facebook"></i></a>
            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode($post->url) }}&summary={{ rawurldecode($post->description) }}" target="_blank"><i class="fa fa-twitter"></i></a>
            <a class="twitter" href="https://twitter.com/intent/tweet?url={{ urlencode($post->url) }}&text={{ $post->description }}" target="_blank"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
    <div class="ps-related-posts">
        <h3>{{ __('Related Posts') }}</h3>
        <div class="row">
            @foreach (get_related_posts($post->id, 2) as $post)
                <div class="col-sm-6 col-12">
                    <div class="ps-post">
                        <div class="ps-post__thumbnail">
                            <a class="ps-post__overlay" href="{{ $post->url }}"></a>
                            <img src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}" />
                        </div>
                        <div class="ps-post__content" style="padding: 20px 0;">
                            <div class="ps-post__top">
                                <div class="ps-post__meta">
                                    @foreach($post->categories as $category)
                                        <a href="{{ $category->url }}">{{ $category->name }}</a>
                                    @endforeach
                                </div>
                                <a class="ps-post__title" href="{{ $post->url }}">{{ $post->name }}</a>
                            </div>
                            <div class="ps-post__bottom">
                                <p>{{ $post->created_at->format('M d, Y') }} @if ($post->author) {{ __('by') }} {{ $post->author->getFullName() }} @endif</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


