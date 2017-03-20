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
        @include('layouts.paging')
    </section>

    <!--Paging end-->


@endsection