@extends('layouts.app')

@section('title')
    Post detail
@endsection

@section('content')

    <!--detail-->
    <section class="product-bg section-md-75 section-sm-15">

        <div class="shell">
            <div class="new-detail-max-width section-xl-top-50 section-sm-top-15">
                <div class="new-detail-title text-center main-title-color">
                    NEWS TITLE
                </div>
                <div class="new-detail-time text-center main-title-color">
                    01/03  2017
                </div>

                <div class="new-detail-pic">
                    <figure>
                        <img src="imgs/new180.gif" alt="" >
                    </figure>
                </div>

                <div class="new-detail-body">
                    <p>
                        This laboratory carries out research & development through the
                        promotion of optoelectronic technologies. It has been producing world-class
                        technologies now for a number of years, focusing on fiber optics,
                        the backbone of broadband communications. It performs the most advanced research & development
                        on "light" in various fields and develops leading-edge optoelectronic technologies.
                        The speed of technological advancement to date can only be labeled,
                        "remarkable." Innovative technologies have also been produced by integrating individual research fields.
                        To respond to social trends and needs in a timely manner, this laboratory has researched various optical devices and modules,
                        from perspectives of not only the telecommunications field but a wide range of applications, including the research &
                        development of fiber optics. The laboratory's research & development also covers inorganic materials based on
                        glasses and organic materials, nano-technologies studying objects of sizes smaller than the wavelength of light,
                        and even higher frequency of light.
                    </p>
                </div>
            </div>
        </div>
        <div class="section-15"></div>
        <section  class="section-15 news-paging">
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
    </section>
    <!--detail end-->





    <!--Paging end-->


@endsection