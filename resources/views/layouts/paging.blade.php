

<div class="shell">
    <div class="range range-md-bottom range-sm-center">

        <div  class="cell-xs-6 cell-mm-6 flex align-items-center" >
            @if ($prev)
                <a href="{{ URL::route('post',$prev->id) }}" class="flex">
                    <span class="flex align-items-center">
                        <i class="fa fa-long-arrow-left"></i>
                        &nbsp;
                    </span>
                    <span class="word-break-all">
                    {{ $prev->title }}
                    </span>
                </a>
            @endif
        </div>


        <div class="cell-xs-6 cell-mm-6 flex align-items-center">
            @if ($next)
                <a href="{{ URL::route('post',$next->id)  }}" class="flex">
                    <span class="word-break-all">
                        {{ $next->title }}
                    </span>
                    <span class="flex align-items-center">
                        &nbsp;<i class="fa fa-long-arrow-right"></i>
                    </span>
                </a>
            @endif
        </div>
    </div>
</div>