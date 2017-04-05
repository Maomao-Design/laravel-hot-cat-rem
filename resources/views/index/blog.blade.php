<!--blog-->
<script>
    var indexPost = '{{$posts}}';
</script>
<section class="index-blog product-bg section-50">
    <div class="">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-pd-0 big-blog-list" >
                @foreach($posts as $post)
                @if ($loop->first)
                        <figure class="big-figure">
                            <img src="{{ asset('storage/'.$post->image)}}" alt="{{ $post->title }}">
                        </figure>
                        <div class="big-blog-bg text-center text-md-left">

                            <a href="{{ URL::route('post', $post->id) }}" title="{{ $post->title }}">
                                <h3 class="text-center color-nfff">
                                    News & Events
                                </h3>
                                <h6 class="index-blog-title text-overflow">
                                    {{ $post->title }}
                                </h6>
                                <div class="index-blog-more">
                                    READ MORE
                                </div>
                            </a>
                        </div>
                @endif
                @endforeach
            </div>
            <div class="col-lg-6 col-md-6 col-md-pd-0">
                <div class="row">
                    @foreach($posts as $post)
                        @if (!$loop->first)
                            <div class="col-lg-6 col-md-6 col-md-pd-0 big-blog-list text-center text-md-left" >
                                <figure class="small-figure">
                                    <img src="{{ asset('storage/'.$post->image)}}" alt="{{ $post->title }}">
                                </figure>
                                <div class="big-blog-bg">
                                    <a href="{{ URL::route('post', $post->id) }}" title="{{ $post->title }}">
                                        <h6 class="index-blog-title text-overflow">
                                            {{ $post->title }}
                                        </h6>
                                        <div class="index-blog-more">
                                            READ MORE
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog end-->