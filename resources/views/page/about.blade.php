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

    <section class="section-50 section-sm-75 section-lg-100">
        <div class="shell">
            <div class="about-other-wrap text-center">
                <h5>
                    Solution
                </h5>
                <div class="">
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
            <div class="about-other-wrap text-center">
                <h5>
                    Products
                </h5>
                <div class="">
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
            <div class="about-other-wrap text-center">
                <h5>
                    Industry
                </h5>
                <div class="">
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
    <section class="about-footer">
        <div class="shell">
            <div class="range range-md-justify offset-top-30 offset-sm-top-40">
                <div class="cell-sm-6 no-cell-pl">
                    <figure><img src={{asset('jcb/images/typography-3-570x386.jpg')}} alt="" width="570" height="386">
                    </figure>
                </div>
                <div class="cell-sm-6 offset-top-30 offset-sm-top-0 no-cell-pl about-footer-content">
                    <div class="text-gray-darker">
                        <h6 class="about-service-title">
                            SERVICE
                        </h6>
                        <p>
                            We conform to the standards to ensure quality, and we conform to our customer’s needs to ensure satisfaction.
                            For more information on our products and services, or to request a quote, please contact us today
                        </p>
                        <div class="about-more text-right">
                            <a href="{{URL::route('page','contact')}}#get-in-touch">GET IN TOUCH  <span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--about footer end-->

@endsection