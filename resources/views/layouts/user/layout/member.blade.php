<div class="col-md-4 widget-sidebar">
    <div class="widget widget_latest_post noShadow">
        <h3 class="widget-title">पदाधिकारी</h3>
        <div class="staffSlider">
        <div class="col-sm-12">
                <div class="img-responsive img-circle">


                    <img src="{{ !empty($member->path)?url('storage/'.$member->path):url('src/profile.jpg')}}">

          <div class="text-center-one staffDetails">
                    <h3>{{$member->name}}</h3>
                     <h4>{{$member->position}}</h4>
                    <p><strong>{{$member->email}}</strong><p>
                     <p><strong>{{$member->phone}}</strong><p>
                    <a  href="{{route('staffs')}}" class="size-mantain"><i>अन्य कर्मचारीहरु </i></a>
                </div>
                </div>
                   </div>


    </div>
 </div>
</div>