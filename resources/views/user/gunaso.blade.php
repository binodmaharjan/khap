@extends('user.layout.app')
@section('content')
       <div class="container">
    <!--<div class="breadcrumb"><a href="{{url('')}}">Home</a> » Contact</div>-->
      <div class="col-sm-12 widget_comments padding-clear padding-top">
               <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » गुनासो</div>
        </div>
</div>
 <div class="container">
    <section id="contact" class='padding-top gunaso'>
            <div class="container">
                <div class="row">
                    <div class="about_our_company" style="margin-bottom: 20px;">
                        <h1 style="color:#fff;">Gunaso</h1>
                        <p style="color:#fff;">Please provide your comment</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form name="sentMessage" id="contactForm" novalidate="" action="{{route('gunaso_store')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
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
                                        <input type="sub" name="subject" class="form-control" placeholder="Subject" id="subject" required="" data-validation-required-message="Please enter subject.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                         
                                      <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <span class="btn btn-primary btn-file"><span class="fileupload-new">Upload your file</span>
                                        <span class="fileupload-exists">Change</span>         <input type="file" /></span>
                                        <span class="fileupload-preview"></span>
                                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 alignRight">
                                    <button type="submit" class="btn success btn-xl get">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
  </div>


@endsection