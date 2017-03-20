@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')

    <!--detail-->
    <section class="product-bg section-md-75 section-sm-15">

        <div class="shell">
            <div class="new-detail-max-width section-xl-top-50 section-sm-top-15">
                <div class="new-detail-title text-center main-title-color">
                    {{ $post->title }}
                </div>
                <div class="new-detail-time text-center main-title-color">
                    {{ $post->created_at->format('m/d Y') }}
                </div>

                <div class="new-detail-pic">
                    <figure>
                        <img src=" {{ asset('storage/'.$post->image ) }}" alt="" >
                    </figure>
                </div>

                <div class="new-detail-body">
                    <p>
                        {!! $post->body !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="section-15"></div>
        <section  class="section-15 news-paging">
            @include('layouts.paging')
            <!--Paging end-->
        </section>
    </section>
    <!--detail end-->



@endsection