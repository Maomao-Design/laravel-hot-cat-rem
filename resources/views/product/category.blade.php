@extends('layouts.app')

@section('title')
    {{ $brand->title }}
@endsection

@section('content')

    <section class="section-md-50"></section>

    <section class="text-center section-40 section-md-60 h2 font-adonide">
        {{ $brand->title }}
    </section>

    <!--list-->
    <section class="section-50  product-bg section-bottom-120">
        <div class="shell isotope-wrap">
            <div class="range">
                <div class="cell-xs-12 text-center">

                    <ul class="isotope-filters-responsive">
                        <li>
                            {{--<p>Choose your category:</p>--}}
                        </li>
                        <li class="block-top-level">
                            <button data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true" class="isotope-filters-toggle btn btn-sm btn-default">Filter<span class="caret"></span></button>
                            <div id="isotope-1" class="isotope-filters isotope-filters-minimal isotope-filters-horizontal">
                                <ul class="list-inline">
                                    {{--<li><a data-isotope-filter="*" data-isotope-group="gallery" href="#" class="active">All</a></li>--}}
                                    @foreach($categories as $category)
                                    <li><a data-isotope-filter="{{$category->id}}" data-isotope-group="gallery" href="#">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cell-xs-12 offset-sm-top-40 offset-md-top-120">
                    <div class="row text-center">
                        <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default isotope--loaded" style="position: relative;">
                            @foreach($products as $product)
                                @include('product.list')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--list end-->


@endsection