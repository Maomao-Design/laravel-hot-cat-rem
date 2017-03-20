<section>
    <div data-loop="false" data-autoplay="false" data-simulate-touch="true" class="swiper-container swiper-slider swiper-variant-1 bg-gray-base">
        <div class="swiper-wrapper text-center">
            @foreach ($advertising as $ad)
            <div data-slide-bg="/storage/{{ $ad->image }}" class="swiper-slide">
                <div class="swiper-slide-caption">
                    <div class="shell">
                        <div class="range range-sm-center">
                            <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                <h2 data-caption-animate="fadeInUp" data-caption-delay="0s" class="slider-header">
                                    {{ $ad->title }}
                                </h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="100" class="text-bigger slider-text">
                                    {{ $ad->description}}
                                </p>
                                @if($ad->link)
                                <div class="group-xl-responsive offset-top-30 offset-sm-top-45">
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
        <div class="swiper-scrollbar"></div>
        <div class="swiper-nav-wrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>