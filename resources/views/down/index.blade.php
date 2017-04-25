@extends('layouts.app')

@section('title')
    Down PDF
@endsection

@section('content')



    <section class="color-n333 text-center section-30 section-md-bottom-66 section-md-top-145 product-bg">
        <h2 class="">Order a catalog</h2>
        <p class="font-n16">
            To find your product take the chance to have a closer look at our catalog.
        </p>
    </section>

    <section class="section-60">
        <div class="shell">
            <div class="down-wrap text-center">
                <div class="down-list row range">
                    <div class="down-bg col-md-8">
                        <figure>
                            <img src="{{asset('jcb/imgs/pdf.jpg')}}" alt="" />
                        </figure>
                    </div>
                    <div class="col-md-4 down-btn-wp section-top-30">
                        <a href="{{ asset('storage/'.Voyager::setting('PDF'))  }}" target="_blank" class="down-btn">
                            View Oline
                        </a>
                    </div>
                </div>
                <div class="down-list row range">
                    <div class="down-bg col-md-8 position-relative">
                        <figure>
                            <img src="{{asset('jcb/imgs/pdf2.jpg')}}" alt="" />
                        </figure>
                        {{--<div class="down-pdf">PDF</div>--}}
                    </div>
                    <div class="col-md-4 down-btn-wp section-top-30">
                        <a href="{{ URL::route('down.file') }}" class="down-btn">
                            Download
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.service')

@endsection