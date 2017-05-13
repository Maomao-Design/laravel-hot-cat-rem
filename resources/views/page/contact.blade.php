@extends('layouts.app')

@section('title')
    {{ $page->title }}
@endsection

@section('content')

    <section class="section-md-50"></section>


    <section class="product-bg section-60 section-sm-top-90 section-sm-bottom-100 contact-top position-relative">
        <div class="contact-bg"></div>
        <div class="shell position-relative">
            <div class="row">
                <div class="col-md-6">
                    <figure>
                        <img src="/jcb/imgs/contact.png" alt="" />
                    </figure>
                </div>
                <div class="col-md-6 contact-desc position-relative flex-md-box-mean flex-md-top flex-md">
                    <div class="contact-desc-top  text-center text-md-left">
                        <h2 class="font-adonide_bold section-top-50 section-md-top-100">CONTACTS</h2>
                        <div>
                            &nbsp;—————&nbsp;&nbsp;
                        @include('layouts.mail')
                        </div>
                    </div>
                    <div class="text-center text-md-left">
                        <div class="section-15"></div>
                        <div class="th-box">
                            <i class="fa fa-phone"></i>
                            <span class="font-adonide_bold">
                                PHONE
                            </span>
                            <div>
                                {!! Voyager::block('contact_phone') !!}
                            </div>
                        </div>
                        <div class="th-box">
                            <i class="fa fa-envelope-o fa-fw"></i>
                            <span class="font-adonide_bold">
                                EMAIL
                            </span>
                            <div>
                                {!! Voyager::block('contact_email') !!}
                            </div>
                        </div>
                        <div class="th-box">
                            <i class="fa fa-map"></i>
                            <span class="font-adonide_bold">
                                ADRESS
                            </span>
                            <div>
                                {!! Voyager::block('contact_address') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-bg section-30" id="get-in-touch">
        <div class="shell text-center text-md-left">
            <h3 class="font-adonide_bold">GET IN TOUCH</h3>
            <div class="row">
                @foreach($teams as $team)
                <div class="col-md-6 section-30 contact-pep text-center text-md-left">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/'.$team->avatar) }}" alt="" width="113" height="113">
                    </div>
                    <div class="col-md-8">
                        <div class="name font-size-n30 font-adonide_regular">{{ $team->name }}</div>
                        <div class="desc font-size-n18">{{ $team->description }}</div>
                        <div>
                            <i class="fa fa-phone"></i> {{ $team->phone }} <br />
                            <i class="fa fa-envelope-o fa-fw"></i> {{ $team->email }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection