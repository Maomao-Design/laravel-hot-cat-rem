@extends('layouts.app')

@section('title')
    產品 Detail
@endsection

@section('content')

    <section style="height: 100px;"></section>

    <section class="text-center section-75 product-details-title">
        <h3>YJV22</h3>
        <p>
            XLPE insulation Steel Tape Armcred PVC Sheath power cable
        </p>
    </section>



    <!--detail-->

    <!--images-->
    <section class="product-bg">
        <div class="shell">
            <img src="/jcb/imgs/pic.png" alt="">
        </div>
    </section>
    <!--images end-->
    <!--body-->
    <section class="product-detail-body section-75">
        <div class="shell">
            <h5>
                Application Occasion
            </h5>
            <ul>
                <li>To be laid underground, the cable could hear Mechanical force outside,</li>
                <li>
                    but it couldn’t great pulling force.
                </li>
            </ul>
            <p>
                hello word!
            </p>
        </div>
    </section>
    <!--body end-->
    <!--detail end-->
    <!--Paging-->

    <section  class="section-15 product-paging">
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

    <!--Paging end-->


@endsection