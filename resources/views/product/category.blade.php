@extends('layouts.app')

@section('title')
    產品 Category
@endsection

@section('content')

    <section style="height: 100px;"></section>

    <section class="text-center section-75 product-class-title">
        High-Voltage Cables
    </section>

    <!--list-->
    <section class="section-50  product-bg">
        <div class="shell isotope-wrap">
            <div class="range">
                <div class="cell-xs-12 text-center">

                    <ul class="isotope-filters-responsive">
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
                        <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default isotope--loaded" style="position: relative; height: 649px;">
                            <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item" >
                                <a href="">
                                    <div class="thumbnail thumbnail-variant-3">
                                        <figure>
                                            <img src="/jcb/imgs/thumb.png" alt="" width="340" height="250">
                                        </figure>
                                    </div>
                                </a>
                            </div>
                            <div data-filter="Category 2" class="col-xs-12 col-sm-6 col-md-4 isotope-item" >
                                <div class="thumbnail thumbnail-variant-3">
                                    <figure><img src="/jcb/images/gallery-grid-2-370x278.jpg" alt="" width="370" height="278">
                                    </figure>

                                </div>
                            </div>
                            <div data-filter="Category 3" class="col-xs-12 col-sm-6 col-md-4 isotope-item" >
                                <div class="thumbnail thumbnail-variant-3">
                                    <figure><img src="/jcb/images/gallery-grid-3-370x278.jpg" alt="" width="370" height="278">
                                    </figure>
                                </div>
                            </div>
                            <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item" >
                                <div class="thumbnail thumbnail-variant-3">
                                    <figure><img src="/jcb/images/gallery-grid-4-370x278.jpg" alt="" width="370" height="278">
                                    </figure>
                                </div>
                            </div>
                            <div data-filter="Category 2" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                                <div class="thumbnail thumbnail-variant-3">
                                    <figure><img src="/jcb/images/gallery-grid-5-370x278.jpg" alt="" width="370" height="278">
                                    </figure>
                                </div>
                            </div>
                            <div data-filter="Category 3" class="col-xs-12 col-sm-6 col-md-4 isotope-item" >
                                <div class="thumbnail thumbnail-variant-3">
                                    <figure><img src="/jcb/images/gallery-grid-6-370x278.jpg" alt="" width="370" height="278">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--list end-->


@endsection