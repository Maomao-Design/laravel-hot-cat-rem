@extends('layouts.app')

@section('title')
    Down PDF
@endsection

@section('content')

    <section style="height: 100px;"></section>

    <section class="text-center section-75 product-class-title">
        Order a catalog
        <p style="font-size: 12px;padding-top: 10px;">
            To find your product take the chance to have a closer look at our catalog.
        </p>
    </section>

    <section class="section-15 section-bottom-60">
        <div class="shell">
            <div class="down-wrap text-center">
                <div class="down-list row range range-md-justify">
                    <div class="down-bg col-md-8">
                        <figure>
                            <img src="{{asset('jcb/imgs/down-b.png')}}" alt="" />
                        </figure>
                    </div>
                    <div class="col-md-4 down-btn-wp">
                        <a href="{{ asset('storage/'.Voyager::setting('PDF'))  }}" target="_blank" class="down-btn">
                            View Oline
                        </a>
                    </div>
                </div>
                <div class="down-list row range range-md-justify">
                    <div class="down-bg col-md-8 position-relative">
                        <figure>
                            <img src="{{asset('jcb/imgs/down-b.png')}}" alt="" />
                        </figure>
                        <div class="down-pdf">PDF</div>
                    </div>
                    <div class="col-md-4 down-btn-wp">
                        <a href="{{ URL::route('down.file') }}" class="down-btn">
                            Download
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection