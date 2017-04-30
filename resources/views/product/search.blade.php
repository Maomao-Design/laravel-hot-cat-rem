@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')

    <section class="section-md-50"></section>

    <section class="text-center section-40 section-md-60 h2 font-adonide">
      Search  "{{ $title }}"
    </section>

    <!--list-->
    <section class="section-50  product-bg section-bottom-120">
        <div class="shell isotope-wrap">
            <div class="range">

                <div class="cell-xs-12 offset-top-120">
                    <div class="row">
                        <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default isotope--loaded" style="position: relative; height: 649px;">
                            @foreach($products as $product)
                                @include('product.list')
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