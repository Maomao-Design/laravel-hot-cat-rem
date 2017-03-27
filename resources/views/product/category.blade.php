@extends('layouts.app')

@section('title')
    {{ $brand->title }}
@endsection

@section('content')

    <section style="height: 100px;"></section>

    <section class="text-center section-75 product-class-title">
        {{ $brand->title }}
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
                                    <li><a data-isotope-filter="{{$category->id}}" data-isotope-group="gallery" href="#">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cell-xs-12 offset-top-40">
                    <div class="row">
                        <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default isotope--loaded" style="position: relative; height: 649px;">
                            @foreach($products as $product)
                            <div data-filter="{{ $product->category_id }}" class="col-xs-12 col-sm-6 col-md-6 isotope-item text-center" >
                                <a href="{{ URL::route('product',$product->id) }}">
                                    <div class="thumbnail thumbnail-variant-3">
                                        <?php
                                        $images = json_decode($product->images)[0];
                                        if(!$images){
                                            $images = 'jcb/imgs/error.jpg';
                                        }else{
                                            $images = 'storage/'.$images;
                                        }
                                        ?>
                                        <figure>
                                            <img src="{{ asset($images) }}" alt="" style="max-width: 100%;" >
                                        </figure>
                                    </div>
                                    <div class="product-class-rd">
                                        <div>Raled Voltage</div>

                                        <p>

                                            {{ $product->attributes}}
                                        </p>
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