
<div class="col-md-3 widget-sidebar">
    <div class="widget widget_comments noShadow">
        <h3 class="widget-title">मुख्य लिन्क </h3>
        <div class="widget-inner staffSlider">
            <ul class="comment mainlinks">

                @if(empty($main_link))

                @foreach($menu as $menu)
                <li>
                    <a href="{{$menu->link}}">{!! $menu->name !!}</a>
                </li>

                    @endforeach
                @else

                    @foreach($main_link as $main_link)
                        <li>
                            <a href="{{route('article_slug',array('slug'=>$main_link->slug))}}">{!! $main_link->title !!}</a>
                        </li>
                    @endforeach
                    @endforelse

            </ul>


            <div class="info">
              <a href="{{asset('src/suchana.jpeg')}}"><img src="{{asset('src/suchana.jpeg')}}" width="100%" > </a>
            </div>

        </div>
    </div>
</div>

