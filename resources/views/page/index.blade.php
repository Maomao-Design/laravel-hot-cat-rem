@extends('layouts.app')

@section('title')
{{ $page->title }}
@endsection

@section('content')

<section style="background-image: url({{asset('/storage/'.$page->image)}})"
         class="section-165 section-sm-200 section-md-200 section-lg-bottom-265 bg-gray-dark page-title-wrap">
</section>


<!--about-->
<section class="section-50  section-lg-top-90 bg-whisper">
    <div class="shell">

        <blockquote class="about-blockquote">
            <p>
                {!! $page->excerpt !!}
            </p>

        </blockquote>

        <div class="about-description">
            {!! $page->body !!}

        </div>
    </div>
</section>


@endsection