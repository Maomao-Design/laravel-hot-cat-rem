<div class="shell">
    <div class="range range-md-bottom range-sm-center">
        <div  class="cell-sm-11 cell-md-6" >
            @if ($prev)
                <a href="{{ URL::route('post',$prev->id) }}">
                    <i class="fa fa-long-arrow-left"></i>
                    {{ $prev->title }}
                </a>
            @else
                No more
            @endif
        </div>
        <div class="cell-sm-11 cell-md-6  offset-md-top-0 text-right">
            @if ($next)
                <a href="{{ URL::route('post',$next->id)  }}">
                    {{ $next->title }}
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            @else
                No more
            @endif
        </div>
    </div>
</div>