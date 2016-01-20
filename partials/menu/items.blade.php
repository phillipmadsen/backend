@foreach($items as $item)
    <li>
        @if($item->link) <a @if($item->hasChildren()) class="" href="javascript:void(0)" @else href="{{ $item->url() }}" @endif>
         @if($item->hasChildren()) @else @endif


          @if($item->icon)<span class="title">   {!! $item->prependIcon()->title !!} </span> @else <span class="title">  {{$item->title}}  </span>  @endif

            @if($item->hasChildren()) <i class="icon-arrow"></i> <span class="selected"></span> @endif
        </a>
        @else
            {{$item->title}}
        @endif
        @if($item->hasChildren())
            <ul class="sub-menu" style="display: none;">
                @foreach($item->children() as $child)
                    <li><a href="{{ $child->url() }}"><span class="title"><i class="fa fa-arrow-right" style="color:red"></i>&nbsp;  {{ $child->title }}</span></a></li>
                @endforeach
            </ul>
        @endif
    </li>
    @if($item->divider)
        <li{{\HTML::attributes($item->divider)}}></li>
    @endif
@endforeach
{{-- <i class="fa fa-arrow-right" style="color:red"></i>&nbsp; 

clip-cart
 clip-phone-3
 clip-banknote
  clip-plus-circle-2

--}}