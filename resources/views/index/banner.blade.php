<section>
    <div data-loop="false" data-autoplay="5000" data-simulate-touch="true" class="swiper-container swiper-slider swiper-variant-1">
        <div class="swiper-wrapper">
            @foreach ($advertising as $ad)
            <div data-slide-bg="/storage/{{ $ad->image }}" class="swiper-slide">
                <div class="swiper-slide-caption">
                    <div class="shell">
                        <div class="range">
                            <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                <h2 data-caption-animate="fadeInUp" data-caption-delay="0s"
                                    style="color: {{ $ad->color }}"
                                    class="slider-header slider-header-index">
                                    {{ $ad->title }}
                                </h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="100"
                                   style="color: {{ $ad->color }}"
                                   class="slider-text-index slider-text">
                                    {{ $ad->description}}
                                </p>
                                @if($ad->link)
                                <div class="group-xl-responsive offset-top-30 offset-sm-top-45 slider-btn-index">
                                    <a data-caption-animate="fadeInUp" data-caption-delay="250" 
                                        href="{{ $ad->link}}"  >
                                        {{--class="btn btn-xl btn-white-outline-variant-1">--}}
                                        SEE MORE  >
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
        <div class="swiper-pagination-wrap"><div class="swiper-pagination"></div></div>
        <div class="swiper-scrollbar"></div>
        {{--<div class="swiper-nav-wrap">--}}
            {{--<div class="swiper-button-prev"></div>--}}
            {{--<div class="swiper-button-next"></div>--}}
        {{--</div>--}}
    </div>
</section>