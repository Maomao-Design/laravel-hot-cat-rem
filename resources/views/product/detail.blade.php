@extends('layouts.app')

@section('title')
    {{ $product->title }} Detail
@endsection

@section('content')

    <section class="section-md-50"></section>

    <section class="text-center section-15 section-md-75 product-details-title">
        <h3>{{ $category->name }}</h3>
        <p>
            {{ $product->title }}
        </p>
    </section>

    <!--detail-->

    <!--images-->
    <section class="product-bg">
        <div class="shell">

            <article class="post-classic section-top-30">
                <div class="post-media">
                    <div data-items="1" data-stage-padding="0" data-loop="true" data-margin="15" data-mouse-drag="true" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" class="owl-carousel owl-style-minimal">
                        @if($product->images != null)
                        @foreach($product->images as $image)
                        <div class="item">
                            <figure><img src="{{ asset('storage/'.$image)}}" alt="" width="970" height="546"/>
                            </figure>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>

            </article>

        </div>
    </section>
    <!--images end-->
    <!--body-->
    <section class="product-detail-body section-15 section-bottom-35 product-bg">
        <div class="shell">
            <div>
                {!! $product->body !!}
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