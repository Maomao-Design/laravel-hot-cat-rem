<div data-filter="{{ $product->category_id }}" class="col-xs-12 col-sm-6 col-md-6 isotope-item text-center" style="padding-bottom: 20px;" >
    <a href="{{ URL::route('product',$product->id) }}">
        <div class="thumbnail thumbnail-variant-3">
            <?php
            $images = json_decode($product->images)[0];
            if(!$images){
                $images = 'jcb/imgs/error.jpg';
            }else{
                $images = 'storage/'.$images;
            }
            ?>
            <figure>
                <img src="{{ asset($images) }}" alt="" style="max-width: 100%;" >
            </figure>
        </div>
        <div class="product-class-rd">
            <div>RATED VOLTAGE</div>
            <p>
                {{ $product->attributes}}
            </p>
        </div>
    </a>
</div>