@extends('user.layout.app')
@section('content')
@section('page-title','३ नं. वडा कार्यालय | ')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » समाजिक सुरक्षा भत्ता</div>

                <div class="col-md-9 widget-sidebar">
                    <div class="aboutUs postDetails">
                        <h3 class="heading-title-paragraph">समाजिक सुरक्षा भत्ता</h3>
                        <br>
                        <form action="{{route('bhatta_search')}}" method="GET">
                            {!! csrf_field() !!}
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">

                                <input type="text" class="form-control input-lg" placeholder="नाम, नागरिकता नं अथवा सदस्य नं बाट खोज्नुहोस " name="keyword">
                                <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>


                    </span>

                            </div>
                        </div>
                        </form>
                        <br>
                        <br>

                        @if(count($bhatta))

                        <table id="customers">
                            <tbody>
                            <tr>
                                <th>नाम</th>

                                <th>लिङ्ग​</th>
                                <th>नागरिकता नं</th>
                                <th>सदस्य नं</th>
                                <th>प्रकार</th>

                            </tr>

                            @foreach($bhatta as $data)

                                <tr>
                                    <td>{{$data->memberName}}</td>

                                    <td>{{$data->gender}}</td>
                                    <td>{{$data->citizenship}}</td>
                                    <td>{{$data->memberId}}</td>
                                    <td>{{$data->type}}</td>
                                </tr>

                            @endforeach
                            {{--<tr class="alt">--}}
                            {{--<td>Berglunds snabbköp</td>--}}
                            {{--<td>Christina Berglund</td>--}}
                            {{--<td>Sweden</td>--}}
                            {{--</tr>--}}

                            </tbody>
                        </table>

                        @else

                          {{"No search results"}}

                            @endforelse


                        {!! $bhatta->render() !!}


                        <br>


                    </div>
                </div>

                @include('user.layout.mainlink')

            </div>
        </div>
    </div>

</section>
@endsection