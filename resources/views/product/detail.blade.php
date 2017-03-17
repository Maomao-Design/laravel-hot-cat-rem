@extends('layouts.app')

@section('title')
    {{ $product->title }} Detail
@endsection

@section('content')

    <section style="height: 100px;"></section>

    <section class="text-center section-75 product-details-title">
        <h3>{{ $category->name }}</h3>
        <p>
            {{ $product->title }}
        </p>
    </section>

    <!--detail-->

    <!--images-->
    <section class="product-bg">
        <div class="shell">
            <img src="/jcb/imgs/pic.png" alt="">
        </div>
    </section>
    <!--images end-->
    <!--body-->
    <section class="product-detail-body section-75">
        <div class="shell">
            <div>
                {{ $product->title }}
            </div>
        </div>
    </section>
    <!--body end-->
    <!--detail end-->
    <!--Paging-->

    <section  class="section-15 product-paging">
        <div class="shell">
            <div class="range range-md-bottom range-sm-center">
                <div  class="cell-sm-11 cell-md-6" >
                    <a href="">
                        <i class="fa fa-long-arrow-left"></i>
                        YJLV22
                    </a>
                </div>
                <div class="cell-sm-11 cell-md-6  offset-md-top-0 text-right">
                    <a href="">
                        YJLV22
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--Paging end-->


@endsection