

@extends('user.layout.app')
@section('page-title','खपिन्छे | गुनासो')
@section('content')
    <div class="container">
    <!--<div class="breadcrumb"><a href="{{url('')}}">Home</a> » Contact</div>-->
        <div class="col-sm-12 widget_comments padding-clear padding-top">
            <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » गुनासो</div>
        </div>
    </div>
    <section id="contact" class='padding-top'>
        <div class="container">
            <div class="row">
                <div class="about_our_company" style="margin-bottom: 20px;">
                    <h1 style="color:#fff;"> गुनासो</h1>
                    <div class="titleline-icon"></div>
                    <p style="color:#fff;">गुनासो बुझाउनुस्| </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form name="sentMessage" id="contactForm" novalidate="" action="{{route('gunaso_store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="full_name" type="text" class="form-control" placeholder="पुरा नाम *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="input-group form-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                </span>
                                    <input name= "email" type="email" class="form-control" placeholder="ईमेल  *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" placeholder="फोन *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="sub" name="subject" class="form-control" placeholder="बिषय *" id="subject" required="" data-validation-required-message="Please enter subject.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea name ="message" class="form-control" placeholder="तपाईंको सन्देश  *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 alignRight">
                                <button type="submit" class="btn success btn-xl get">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-sm-12 widget_comments padding-clear">
            <h3 class="widget-title">More Details</h3>
        </div>
        <div class="col-sm-6 padding-top padding-clear">
            <div class="contactInfo">
                <h3><i class="fa fa-home fa-1x"></i> ठेगाना :</h3>
                <p>खपिन्छे त्वा</p>
                <p>९ / ११  नं. वडा कार्यालय</p>
                 <p> ललितपुर</p>

                <br />
                <h3><i class="fa fa-phone fa-1x"></i> फोन  :</h3>
                <p>०१-५५३६४७१ </p>
                <br>
                <h3><i class="fa fa-envelope fa-1x"></i> ईमेल :</h3>
                <p>khapinchhentole@gmail.com</p>
                <br />
                {{--<h3><i class="fa fa-user fa-1x" ></i> CEO:</h3>--}}
                {{--<p>Name of person</p>--}}
                {{--<br />--}}
                {{--<h3><i class="fa fa-yelp fa-1x"></i> Other Details:</h3>--}}
                {{--<ul>--}}
                    {{--<li><a href="#">facebook</a></li>--}}
                    {{--<li><a href="#">site.com</a></li>--}}
                {{--</ul>--}}
            </div>
        </div>
        <div class="col-sm-6 padding-top paddingR0">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.2833385821423!2d85.3127984150614!3d27.67763638280409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19cb0d14573d%3A0xe04f345f83867b6e!2slmcity+ward+3!5e0!3m2!1sen!2s!4v1499539172527" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220.83848592207738!2d85.32764551550896!3d27.673541670992655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f2895055fd%3A0x61ae3b8161eb2984!2sBhairav%20mandir!5e0!3m2!1sen!2snp!4v1627971740970!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" ></iframe> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220.83848592207738!2d85.32764551550896!3d27.673541670992655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f2895055fd%3A0x61ae3b8161eb2984!2sBhairav%20mandir!5e0!3m2!1sen!2snp!4v1627971740970!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>



@endsection


