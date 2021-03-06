<link href="{{asset('user/gallery.css')}}" rel="stylesheet">
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » फोटो ग्यालरी</div>

                <div class="col-md-9">
                    <!-- Gallery -->
                    <section id="galleries">

                        <!-- Photo Galleries -->
                        <div class="gallery">


                            <div class="">
                                <h3 class="otherTitles noShadow">Gallery</h3>
                                <ul class="tabs">
                                    <li><a href="#" data-tag="all" class="button active">All</a></li>
                                    <li><a href="#" data-tag="people" class="button">People</a></li>
                                    <li><a href="#" data-tag="place" class="button">Places</a></li>
                                    <li><a href="#" data-tag="thing" class="button">Things</a></li>
                                </ul>
                                <div class="custom-gallery-wraper gallaryOverflow">


                                    <ul class="galleryList">


                                        <li class='media all thing'>
                                            <img alt="Title goes here" src=" {{url('src/kids.jpg')}}">
                                            <p class="text">a</p>
                                        </li>
                                        <li class='media all thing'>
                                            <img alt="Title  here" src=" {{url('src/kids.jpg')}}">
                                            <p class="text">b</p>
                                        </li>
                                        <li class='media all thing'>
                                            <img alt="Title goes here" src=" {{url('src/kids.jpg')}}">
                                            <p class="text">What we have to show</p>
                                        </li>
                                        <li class='media all place'>
                                            <img alt="Title goes here" src=" {{url('src/kids.jpg')}}">
                                            <p class="text">What we have to show</p>
                                        </li>
                                        <li class='media all thing'>
                                            <img alt="Title goes here" src=" {{url('src/kids.jpg')}}">
                                            <p class="text">What we have to show</p>
                                        </li>
                                        <li class='media all people'>
                                            <img alt="Title goes here" src=" {{url('src/kids.jpg')}}">
                                            <p class="text">What we have to show</p>
                                        </li>
                                        <li class='media all thing'>
                                            <img alt="Title goes here" src=" {{url('src/kids.jpg')}}">
                                            <p class="text">What we have to show</p>
                                        </li>
                                        <li class='media all people'>
                                            <img alt="Title goes here" src=" {{url('src/kids.jpg')}}">
                                            <p class="text">What we have to show</p>
                                        </li>
                                        <li class='media all thing'>
                                            <img alt="Title goes here" src=" {{url('src/kids.jpg')}}">
                                            <p class="text">What we have to show</p>
                                        </li>
                                        <li class='media all people'>
                                            <img alt="Title goes here" src=" {{url('src/kids.jpg')}}">
                                            <p class="text">What we have to show</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>


            </div>
                @include('user.layout.mainlink')
        </div>

    </div>
</section>

</section>
<script src="{{asset('user/js/gallery/jquery.min.js')}}"></script>
<script src="{{asset('user/js/gallery/jquery.poptrox.min.js')}}"></script>
<script src="{{asset('user/js/gallery/jquery.scrolly.min.js')}}"></script>
<script src="{{asset('user/js/gallery/skel.min.js')}}"></script>
<script src="{{asset('user/js/gallery/util.js')}}"></script>
<script src="{{asset('user/js/gallery/main.js')}}"></script>