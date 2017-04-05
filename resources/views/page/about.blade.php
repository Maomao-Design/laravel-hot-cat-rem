@extends('layouts.app')

@section('title')
    {{ $page->title }}
@endsection

@section('content')

    <section style="background-image: url({{asset('/storage/'.$page->image)}})"
             class="section-165 section-sm-200 section-md-200 section-lg-bottom-265 page-title-wrap">
        <div class="position-absolute shell-wrap">
            <div class="shell position-relative">
                <div class="page-about-title text-uppercase text-right font-adonide_bold">
                    <span>about</span>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-whisper">
        <div class="shell">
            <div class="page-about-title text-uppercase text-right font-adonide_bold">
                <span>us</span>
            </div>
        </div>
    </section>

    <!--about-->
    <section class="section-50  section-lg-top-90 bg-whisper">
        <div class="shell">

            <blockquote class="about-blockquote">
                <p style="max-width: 380px">
                    {!! $page->excerpt !!}
                </p>

            </blockquote>

            <div class="about-description text-justify">
                {!! $page->body !!}

            </div>
        </div>
    </section>

    <section class="section-50 section-sm-75 section-lg-100">
        <div class="shell">
            <div class="about-other-wrap">
                <h4 class="text-center">
                    Solution
                </h4>
                <div class="text-justify">
                    <p>
                        We not only provide the highest quality material,
                        but at a reasonable cost to our oversea customers on time.
                        We are flexible to meet custom needs when it comes to products or order specifications.
                        Our main priority as a top industrial wire and cable company is to provide our international customers with wire and cable
                        products as quickly and efficiently as possible.We always formulate creative and professional solutions to
                        a number of small and medium enterprises clients demands.Thanks to years of technical expertise from the
                        field and continual research into new technology to cope with the latest industry requirements we can
                        pridely provdie our clients with our value-added services.
                    </p>
                </div>
            </div>
            <!--Products-->
            <div class="about-other-wrap">
                <h4 class="text-center">
                    Products
                </h4>
                <div class="text-justify">
                    <p>
                        we apply today’s updated technology to produce high-quality wire,
                        cable products, and patented cable tray etc. To assure that our products are made from the best material,
                        we conform to the standards set by UL,CE,IEEE,GB. Our products(wire/cable/cable tray) are offered in many different sizes, colors,
                        lengths, and labeling.
                    </p>
                </div>
            </div>
            <!--Products end-->
            <!--Industry-->
            <div class="about-other-wrap">
                <h4 class="text-center">
                    Industry
                </h4>
                <div class="text-justify">
                    <p>
                        Tiancai is located in tianchang industry zone, with a total area of ​​XXXXX square meters, the registered capital of XXX million yuan,
                        the total assets of XXX million, with the domestic first-class production equipment and improve the detection system.
                        We employ XXX headcount of the most experienced graduate engineers
                        in the cable and wire field and have an in-house technical capability to design and  manufacture to quickly meet customer needs.
                    </p>
                </div>
            </div>
            <!--Industry end-->
        </div>
    </section>
    <!--about other end-->

    <!--about footer-->
    @include('layouts.service')
    <!--about footer end-->

@endsection