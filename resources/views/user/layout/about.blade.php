<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="col-md-8 padding-clear">
                <div class="aboutUs">
                    <h3 class="heading-title-paragraph">हाम्रो बारेमा</h3>
                    <p>काठमाडौं नेपालको केन्द्रीय राजधानी शहर तथा मुलुककै पहिलो महानगर पनि हो । यस महानगरको उपनगरको रुपमा रहेका दुई ठूला शहरहरु मध्ये दक्षिणतर्फ ललितपुर र पूर्वतर्फ भक्तपुर रहेका छन्
                        शिवपुरी, फुल्चोकी, नागार्जुङ र चन्द्रागिरी नामका चार ठूला पहाडहरुको बीचमा रहेको यो महानगर अनुपम भौगोलिक अवस्था, रहस्यपूर्ण जैविक विविधता सहित कचौरा आकारमा समुन्द्री सतहबाट लगभग १४०० मि
                        टर (४६०० फिट) को उचाइमा ५०.६७ वर्ग किलो मिटरमा फैलिएर २७'२२" उत्तरी अक्षांश र ८५'२०" पूर्वी देशान्तरमा अवस्थित रहेको छ । ।काठमाडौं नेपालको केन्द्रीय राजधानी शहर तथा मुलुककै पहिलो महानगर पनि हो । यस महानगरको उपनगरको रुपमा रहेका दुई ठूला शहरहरु मध्ये दक्षिणतर्फ ललितपुर र पूर्वतर्फ भक्तपुर रहेका छन्
                        शिवपुरी, फुल्चोकी, नागार्जुङ र चन्द्रागिरी नामका चार ठूला पहाडहरुको बीचमा रह <span class="paragraph-link"><a href="#">पुरा पढ्नुहोस</a></span>
                    </p>

                </div>
            </div>
            <div class="col-md-4  widget-sidebar">
                <div class="widget widget_comments noShadow">
                    <h3 class="widget-title">समाचार​</h3>
                    <div class="widget-inner staffSlider">
                        <ul class="comment">
                             <li>
                                    <a href="#">News 1</a>
                                </li>
                                  <li>
                                    <a href="#">News 1</a>
                                </li>
                                  <li>
                                    <a href="#">News 1</a>
                                </li>
                                  <li>
                                    <a href="#">News 1</a>
                                </li>
                                  <li>
                                    <a href="#">News 1</a>
                                </li>
                                  <li>
                                    <a href="#">News 1</a>
                                </li>
                                  <li>
                                    <a href="#">News 1</a>
                                </li>
                                  <li>
                                    <a href="#">News 1</a>
                                </li>
                                  <li>
                                    <a href="#">News 1</a>
                                </li>
                                

                            @if(count($news))
                                @foreach($news as $news)
                                <li>
                                    <a href="#">{{$news->title}}</a>
                                </li>
                                @endforeach
                                @endif

                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>