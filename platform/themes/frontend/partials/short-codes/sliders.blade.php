{{-- @if (count($sliders) > 0)
    <div class="ps-home-banner ps-home-banner--1">
        <div class="ps-container">
            <div class="ps-section__left">
                <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                    @foreach($sliders as $slider)
                        <div class="ps-banner bg--cover" data-background="{{ RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage()) }}">
                            @if ($slider->link)
                                <a class="ps-banner__overlay" href="{{ url($slider->link) }}"></a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="ps-section__right">
                <div class="ps-collection">
                    {!! AdsManager::display('top-slider-image-1') !!}
                </div>
                <div class="ps-collection">
                    {!! AdsManager::display('top-slider-image-2') !!}
                </div>
            </div>
        </div>
    </div>
@endif --}}


        <!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper" data-autoplay="6000" data-speed="800" data-loop="true" data-grab="true" data-effect="fade" data-arrow="false" style="height: 600px;">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark">
						<div class="container">
							<div class="slider-caption slider-caption-center">
								<div>
									<div class="h5 mb-2 font-secondary">Hàng Mới Về</div>
									<h2 class="bottommargin-sm text-white">Mùa Đông / 2021</h2>
									<a href="#" class="button bg-white text-dark button-light">Mua Sắm Quần Áo Nam</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide-bg" style="background-image: url('themes/frontend/images/slider/3.jpg');"></div>
					</div>
					<div class="swiper-slide dark">
						<div class="container">
							<div class="slider-caption slider-caption-center">
								<div>
									<div class="h5 mb-2 font-secondary">Bộ sưu tập mùa hè</div>
									<h2 class="bottommargin-sm text-white">Giảm giá đến 40%</h2>
									<a href="#" class="button bg-white text-dark button-light">Mua quần áo đi biển</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide-bg" style="background-image: url('themes/frontend/images/slider/3.jpg'); background-position: center 20%;"></div>
					</div>
					<div class="swiper-slide dark">
						<div class="container">
							<div class="slider-caption slider-caption-center">
								<div>
									<h2 class="bottommargin-sm text-white">Điểm đến mới / 18</h2>
									<a href="#" class="button bg-white text-dark button-light">Mua sắm quần áo nữ</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide-bg" style="background-image: url('themes/frontend/images/slider/2.jpg'); background-position: center 40%;"></div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>

		</section><!-- #Slider End -->