@extends('layouts.app') 

@section('title', 'Index Title') 

@section('content')

@include('index.banner')


<section id="section-start-journey" class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145">
    <div class="shell">
        <div class="range range-md-middle range-sm-center">
            <div data-wow-duration="2s" data-wow-offset="200" class="cell-sm-10 cell-md-5 wow fadeInLeft">

                <p class="h3 offset-top-0">Bring your future with</p>
                <p class="h3 offset-top-0">Bring your future with</p>
                <p class="offset-top-40 text-secondary"></p>

            </div>
            <div class="cell-sm-11 cell-md-7 offset-top-40 offset-sm-top-60 offset-md-top-0">
                <div class="image-group" style="text-align: right">
                    <figure></figure>
                    <!--<figure data-wow-duration=".9s" data-wow-delay=".4s" data-wow-offset="200" class="wow fadeInRightMedium"><img src="/jcb/imgs/index-2.png" alt="" width="508" height="341" />-->
                    <!--</figure>-->
                    <figure data-wow-duration=".9s" data-wow-delay=".8s" data-wow-offset="100" class="wow fadeInRightSmall"><img src="/jcb/imgs/index-2.png" alt="" width="394" height="396" />
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="shell">
        <div class="range range-md-middle range-sm-center">
            <div data-wow-duration="2s" data-wow-offset="200" class="cell-sm-10 cell-md-5 wow fadeInLeft">


                <p class="offset-top-40 text-secondary">
                    Cables of the F-LINK-L series are specifically designed for building LonWorks based networks. LonWorks is the name of the
                    intelligent distributed control networking technology platform developed by Echelon. LonWorks networks
                    are used in a wide variety of applications including automating building and various industrial processes,
                    supervision and control of energy and transportation systems, etc.
                </p>

            </div>
            <div class="cell-sm-11 cell-md-7 offset-top-40 offset-sm-top-60 offset-md-top-0">
                <div data-wow-duration="2s" data-wow-offset="200" class="cell-sm-10 cell-md-5 wow fadeInRight">

                    <p class="offset-top-40 text-secondary">
                        Cables of the F-LINK-L series are specifically designed for building LonWorks based networks. LonWorks is the name of the
                        intelligent distributed control networking technology platform developed by Echelon. LonWorks networks
                        are used in a wide variety of applications including automating building and various industrial processes,
                        supervision and control of energy and transportation systems, etc.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145 product-bg">
    <div class="shell isotope-wrap">
        <div class="range">
            <div class="cell-xs-12 text-center">
                <h3 class="text-left">Products</h3>
                <ul class="isotope-filters-responsive offset-top-40">
                    <li>
                        <p>Choose your category:</p>
                    </li>
                    <li class="block-top-level">
                        <button data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true" class="isotope-filters-toggle btn btn-sm btn-default">Filter<span class="caret"></span></button>
                        <div id="isotope-1" class="isotope-filters isotope-filters-minimal isotope-filters-horizontal">
                            <ul class="list-inline">
                                <li><a data-isotope-filter="*" data-isotope-group="gallery" href="#" class="active">All</a></li>
                                <li><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">Webdesign</a></li>
                                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">UI/UX</a></li>
                                <li><a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">Branding</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cell-xs-12 offset-top-40">
                <div class="row">
                    <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default">
                        <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                            <a href="">
                                <div class="thumbnail thumbnail-variant-3">
                                    <figure>
                                        <img src="/jcb/imgs/thumb.png" alt="" width="340" height="250" />
                                    </figure>
                                </div>
                                <div class="product-new">New</div>
                                <div class="product-title">
                                    <h6>YJV 0.6/1kV</h6>
                                    <p>YJV 0.6/1kV</p>
                                </div>
                            </a>
                        </div>
                        <div data-filter="Category 2" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                            <div class="thumbnail thumbnail-variant-3">
                                <figure><img src="/jcb/images/gallery-grid-2-370x278.jpg" alt="" width="370" height="278" />
                                </figure>

                            </div>
                        </div>
                        <div data-filter="Category 3" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                            <div class="thumbnail thumbnail-variant-3">
                                <figure><img src="/jcb/images/gallery-grid-3-370x278.jpg" alt="" width="370" height="278" />
                                </figure>
                            </div>
                        </div>
                        <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                            <div class="thumbnail thumbnail-variant-3">
                                <figure><img src="/jcb/images/gallery-grid-4-370x278.jpg" alt="" width="370" height="278" />
                                </figure>
                            </div>
                        </div>
                        <div data-filter="Category 2" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                            <div class="thumbnail thumbnail-variant-3">
                                <figure><img src="/jcb/images/gallery-grid-5-370x278.jpg" alt="" width="370" height="278" />
                                </figure>
                            </div>
                        </div>
                        <div data-filter="Category 3" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                            <div class="thumbnail thumbnail-variant-3">
                                <figure><img src="/jcb/images/gallery-grid-6-370x278.jpg" alt="" width="370" height="278" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-50 section-sm-60 section-md-75 bg-gray-lighter">
    <div class="shell">
        <div class="range range-sm-center range-sm-middle range-sm-reverse">
            <div class="cell-sm-6 cell-lg-6 text-sm-center">
                <div class="box-container-small text-right">

                    <p class="offset-top-22 text-secondary font-n24">
                        Choose from our wide range of predefined Homepage layouts and demos to create your Own Amazing Experience.</p>
                    <a href="" class="btn btn-xl btn-blue-ma offset-top-35 offset-md-top-60">SEE MORE  &nbsp;></a>
                </div>
            </div>
            <div class="cell-sm-6 cell-lg-6 offset-top-40 offset-sm-top-0">
                <div class="image-wrap-1"><img src="/jcb/imgs/thumb-big.png" alt="" width="550" height="480">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection