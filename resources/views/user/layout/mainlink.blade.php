


<div class="col-md-3 widget-sidebar">
    <div class="widget widget_comments noShadow">
        <h3 class="widget-title">मुख्य लिन्क </h3>
        <div class="widget-inner staffSlider">
            <ul class="comment mainlinks">

                @foreach($menu as $menu)
                <li>
                    <a href="{{$menu->link}}">{!! $menu->name !!}</a>
                </li>

                    @endforeach


            </ul>
        </div>
    </div>
</div>