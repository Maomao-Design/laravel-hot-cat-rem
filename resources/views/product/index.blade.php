@extends('layouts.app')

@section('title')
    Products
@endsection

@section('content')

    <section style="height: 100px;"></section>

    <!--search-->
    <!--search end-->
    <section class="section-60 section-sm-90 section-lg-bottom-120">
        <div class="shell">
            <div class="range range-md-center">
                <div class="cell-md-10">
                    <form action="search-results.html" method="GET" data-search-live-count="15" class="rd-search rd-search-minimal">
                        <div class="form-group">
                            <label for="rd-search-form-input-1" class="form-label rd-input-label"><span class="text-mobile">search...</span><span class="text-default">Search</span></label>
                            <input id="rd-search-form-input-1" type="text" name="s" autocomplete="off" class="form-control">
                        </div>
                        <button type="submit" class="btn-icon-only btn-icon-only-primary"><span class="icon icon-sm material-icons-keyboard_return"></span></button>
                    </form>
                </div>
                <div class="cell-sm-11 offset-top-40 offset-sm-top-60">
                    <div class="rd-search-results"></div>
                </div>
            </div>
        </div>
    </section>


    <!--list-->
    <section class="section-50  product-bg">
        <div class="shell isotope-wrap">
            <div class="range">
                <div class="cell-xs-12 text-center">

                    <ul class="isotope-filters-responsive">
                        <li>
                            <p>Choose your category:</p>
                        </li>
                        <li class="block-top-level">
                            <button data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true" class="isotope-filters-toggle btn btn-sm btn-default">Filter<span class="caret"></span></button>
                            <div id="isotope-1" class="isotope-filters isotope-filters-minimal isotope-filters-horizontal">
                                <ul class="list-inline">
                                    {{--<li><a data-isotope-filter="*" data-isotope-group="gallery" href="#" class="active">All</a></li>--}}
                                    @foreach($categories as $category)
                                    <li><a data-isotope-filter="{{$category->id}}" data-isotope-group="gallery" href="#">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cell-xs-12 offset-top-40">
                    <div class="row">
                        <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default isotope--loaded" style="position: relative; height: 649px;">
                            @foreach ($brands as $brand)
                            <div data-filter="{{ $brand->category_id }}" class="col-xs-12 col-sm-6 col-md-4 isotope-item" >
                                <a href="{{ URL::route('brand',$brand->id) }}">
                                    <div class="thumbnail thumbnail-variant-3">
                                        <figure>
                                            <img src="{{ asset('storage/'.$brand->image) }}" alt="" width="340" height="250">
                                        </figure>
                                    </div>
                                    <div class="product-new" style="display: none">New</div>
                                    <div class="product-title">
                                        <h6>{{ $brand->title }}</h6>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--list end-->


@endsection