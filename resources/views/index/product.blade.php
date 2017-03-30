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
                                @foreach($categories as $category)
                                <li><a data-isotope-filter="{{$category->id}}" data-isotope-group="gallery" href="#">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cell-xs-12 offset-top-40">
                <div class="row">
                    <div id="index-product-list" data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default">
                        @foreach($brands as $brand)
                        <div data-filter="{{$brand->category_id}}" class="col-xs-12 col-sm-6 col-md-4 isotope-item index-product-item">
                            <a href="{{ URL::route('brand', $brand->id) }}">
                                <div class="thumbnail thumbnail-variant-3">
                                    <figure>
                                        <img src="{{ asset('storage/'.$brand->image)}}" alt="" />
                                    </figure>
                                </div>
                                {{--<div class="product-new">New</div>--}}
                                <div class="product-title">
                                    <h6>{{$brand->title}}</h6>
                                    <p>{{$brand->other}}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center section-50">
        <a href="{{URL::route('brands')}}">
            <div class="btn btn-md btn-blue-ma ajax-more-btn">
            See More <i class="fa fa-spinner fa-spin"></i>
            </div>
        </a>
    </div>
</section>



