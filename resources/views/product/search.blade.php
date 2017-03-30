@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')

    <section style="height: 100px;"></section>

    <section class="text-center section-75 product-class-title">
      Search  "{{ $title }}"
    </section>

    <!--list-->
    <section class="section-50  product-bg">
        <div class="shell isotope-wrap">
            <div class="range">

                <div class="cell-xs-12 offset-top-40">
                    <div class="row">
                        <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default isotope--loaded" style="position: relative; height: 649px;">
                            @foreach($products as $product)
                                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-6 isotope-item text-center" >
                                    <a href="{{ URL::route('product',$product->id) }}">
                                        <div class="thumbnail thumbnail-variant-3">
                                            <figure>
                                                <img src="/jcb/imgs/thumb.png" alt="" width="340" height="250">
                                            </figure>
                                        </div>
                                        <div class="product-class-rd">
                                            <div>Raled Voltage</div>
                                            <p>
                                                8.7/10 KV
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        @if($products->isEmpty())
                            <div> not search ...</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--list end-->


@endsection