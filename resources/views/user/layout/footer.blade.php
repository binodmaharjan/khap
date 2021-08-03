

<section class="background-color-one padding-top">


    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.323106728836!2d85.3261326992425!3d27.70894272752567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c59efe8fe7%3A0xd8b03b0a1809bbfb!2z4KSV4KWD4KS34KWN4KSjIOCkpuClh-Ckl-Ckgw!5e0!3m2!1sen!2snp!4v1498375814650" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
</section>
<div class="clearfix"></div>

<footer>

    <section class="background-color-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 footer">
                    <div class="col-md-4">
                        <h4></h4>

                        @if(!empty($menu))
                        <ul>
                            @foreach($menu as $menu)
                                <li><a href="{{$menu->link}}" class="footer-link">{!! $menu->name !!}</a> </li>
                                @endforeach


                        </ul>
                            @endif
                    </div>
                    <div class="col-md-4">
                        <h4></h4>
                        <ul>
                        <li style="
                    font-size: 1.4em;">महत्वपूर्ण लिन्क </li>
                         <li><a href="https://www.ocmcm.p3.gov.np" class="footer-link" target="_blank">मुख्यमन्त्री तथा मन्त्रिपरिषद्को कार्यालय</a></li>
                         <li><a href="http://www.lalitpurmun.gov.np" class="footer-link" target="_blank">ललितपुर महानगरपालिका</a></li>
                        
                           <li><a href="http://www.mofaga.gov.np/" class="footer-link" target="_blank">सङ्घीय मामिला तथा सामान्य प्रशासन मन्त्रालय</a></li>
                           <li><a href="http://www.psc.gov.np/" class="footer-link" target="_blank">लोक सेवा आयोग</a></li>
                            <li><a href="http://cbs.gov.np/" class="footer-link" target="_blank">केन्द्रिय तथ्यांक विभाग</a></li>
                            <li><a href="https://www.npc.gov.np/np/" class="footer-link" target="_blank">राष्ट्रिय योजना आयोग</a></li>
                            <li><a href="http://www.docr.gov.np/" class="footer-link" target="_blank">केन्द्रीय पञ्जीकरण विभाग</a></li>
                          
                        </ul>
                    </div>
                     <div class="col-md-4">
                        {{--<h4>संपर्क</h4>--}}
                        <ul>
                            <li>खपिन्छेँ त्वा, यल: </li>
                            <li>ललितपुर महानगरपालिका </li>
                            <li>ललितपुर, नेपाल </li>
                            <li>०१-५५३६४७१  </li>
                            <li>
                              {{--<img src="{{asset('src/location.png')}}" width="16px"/>--}}
                                <a href="https://www.google.com/maps/place/Bhairab+Lachhi/@27.6735567,85.3279513,15z/data=!4m12!1m6!3m5!1s0x0:0x3a9b39939086d598!2sBhairab+Lachhi!8m2!3d27.6735567!4d85.3279513!3m4!1s0x0:0x3a9b39939086d598!8m2!3d27.6735567!4d85.3279513" target="_blank">गुगल नक्सामा स्थान</a></li>
                                {{--<a href="https://www.google.com/maps/place/lmcity+ward+3/@27.6775695,85.3134636,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb19cb0d14573d:0xe04f345f83867b6e!8m2!3d27.6775695!4d85.3156523?hl=en-AU">गुगल नक्सामा स्थान</a></li>--}}
                            <li>इमेल: lmcity.ward3@gmail.com</li>
                            
                        </ul>
                    </div>              
                    <div class="col-md-12">
                        <p class="footer-last-text">
                        सर्वाधिकार ©{{Patro::currentYear()}}
                        {{--<span class="pull-right footer-develop-text">डेवेलोभ : <a href="#"> बेटा इन्फर्मेसन टेक्नोलोजी--}}
                        </p></span>
                    </div>

                </div>
            </div>
        </div>
    </section>
</footer>
<script src="{{asset('user/js/jquery-1.11.3.min.js')}}"></script>
<!-- Bootstrap Files --> 
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!--js for slider container-->
<script src="{{asset('user/js/jquery.bsPhotoGallery.js')}}"></script>
<!--js for top slider-->
<script src="{{asset('user/js/thumbNails.js')}}"></script>
<script>

    //Initialise Bootstrap Carousel Touch Slider
    // Curently there are no option available.

    $('#bootstrap-touch-slider').bsTouchSlider();
    
    $(document).ready(function(){
        $('ul.galleryList').bsPhotoGallery({
            //"classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
            "classes" : "col-md-4",
            "hasModal" : true
        });
    });
//hide and show more staffs
$("#otherStaffs").hide();
$("#moreStaffs").click(function(){
$("#moreStaffs").hide( "slow");
$("#otherStaffs").show( "slow");
});
$("#hideStaffs").click(function(){
$("#moreStaffs").show( "slow");
$("#otherStaffs").hide( "slow");
});


        $("#method-option").change(function() {
            console.log('selected')
            $('#help-text').html($('option:selected').attr('data-content'));

        }).change();

</script>