@if($hot)
<section class="section-50 section-sm-60 section-md-75 bg-gray-lighter">
    <div class="shell">
        <div class="range range-sm-center range-sm-middle range-sm-reverse">
            <div class="cell-sm-6 cell-lg-6 ">
                <div class="box-container-small">

                    <p class="offset-top-22 text-secondary font-n24">
                        {{ $hot->title }}.</p>
                    <a href="{{ URL::route('product', $hot->id) }}" class="btn btn-md btn-blue-ma offset-top-35 offset-md-letf-15 offset-md-top-60">SEE MORE  &nbsp;></a>
                </div>
            </div>
            <div class="cell-sm-6 cell-lg-6 offset-top-40 offset-sm-top-0">
                <?php
                $image = json_decode($hot->images)[0];
                    if(!$image){
                        $image = 'jcb/imgs/error.jpg';
                    }else{
                        $image = 'storage/'.$image;
                    }
                ?>
                <div class="image-wrap-1"><img src="{{asset($image)}}" alt=""  style="max-width: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>
@endif