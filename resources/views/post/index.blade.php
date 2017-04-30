@extends('layouts.app')

@section('title')
    News & Events
@endsection

@section('content')

<section style="background-image: url({{asset('storage/'.Voyager::setting('news-banner'))}});" class="section-165 section-sm-200 section-md-200 section-lg-bottom-265  page-title-wrap">
    <div class="position-absolute shell-wrap">
        <div class="shell position-relative" >
            <div class="page-about-title text-uppercase text-right font-adonide_bold" style="font-size: 38px;">
                <div>News & </div>
                <div>Events </div>
            </div>
        </div>
    </div>
</section>


<!--list-->
<section  class="section-50  section-lg-top-120  product-bg">
    <div class="shell">
        <div class="list-news" data-total="{{ $nextPageUrl }}">
            @foreach ($posts as $post)
            <div class="range range-md-bottom range-sm-center">

                <div class="cell-sm-11 cell-md-6 offset-top-40 offset-sm-top-60 offset-md-top-0">
                    <a href="{{ URL::route('post',$post->id) }}" title="{{$post->title}}">
                        <div class="image-group wow fadeInLeftSmallSmall">
                            <img src="{{asset('storage/'.$post->image)  }}" alt="{{$post->title}}" title="{{$post->title}}" >
                        </div>
                    </a>
                </div>
                <div data-wow-duration="2s" data-wow-offset="200" class="cell-sm-10 cell-md-6 wow fadeInRight" >
                    <h6 class="text font-adonide_regular" style="font-size: 36px;">
                        {{ $post->title }}
                    </h6>
                    <p class="offset-top-0 font-adonide" style="line-height: 26px;font-size: 18px;">
                        01/03 2017
                    </p>
                    <p class="offset-top-40 text-secondary text-justify font-adonide" style="line-height: 26px;font-size: 18px;">
                        {{ $post->excerpt }}
                    </p>

                </div>
            </div>
            @endforeach

        </div>
        <div class="text-center section-50">
            {{--<div class="btn btn-primary btn-rect ajax-more-btn ajax-loading">--}}
                {{--See More <i class="fa fa-spinner fa-spin"></i>--}}
            {{--</div>--}}
        </div>
    </div>
</section>
<!--list end-->
<script>

    function postMore() {

    }
</script>

@endsection