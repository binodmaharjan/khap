@extends('user.layout.app')
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
                        <h1 style="color:#fff;">Contact Us</h1>
                        <div class="titleline-icon"></div>
                        <p style="color:#fff;">Please provide your suggestion</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form name="sentMessage" id="contactForm" novalidate="" action="{{route('gunaso_store')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="full_name" type="text" class="form-control" placeholder="Your full Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                        <div class="input-group form-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                </span>
                                        <input name= "email" type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="phone" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                         <div class="form-group">
                                            <select id="subject" name="type" class="form-control" required="required" placeholder="Subject *" data-validation-required-message="choose subject">
                                                <option value="na" selected="">Choose One</option>
                                                <option value="service">General Customer Service</option>
                                                <option value="suggestions">Suggestions</option>
                                                <option value="product">Product Support</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="sub" name="subject" class="form-control" placeholder="Subject" id="subject" required="" data-validation-required-message="Please enter subject.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <textarea name ="message" class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
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
                <h3><i class="fa fa-home fa-1x"></i> Address:</h3>               
                <p>Lalitpur</p>
                <br />
                <h3><i class="fa fa-envelope fa-1x"></i> E-Mail Address:</h3>
                <p>lalitpur@gmail.com</p>
                <br />
                <h3><i class="fa fa-user fa-1x" ></i> CEO:</h3>
                <p>Name of perosn</p>
                <br />
                <h3><i class="fa fa-yelp fa-1x"></i> Other Details:</h3>
                <ul>
                    <li><a href="#">facebook</a></li>
                     <li><a href="#">site.com</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 padding-top paddingR0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d226387.73275101284!2d85.1905802372105!3d27.55294002743764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb143cc669c123%3A0x40d854bf34db9c39!2sLalitpur!5e0!3m2!1sen!2snp!4v1498742396114" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
</div>
       


@endsection