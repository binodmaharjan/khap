@extends('user.layout.app')
@section('content')
@section('page-title','३ नं. वडा कार्यालय | ')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » बृदा भत्ता नामावली</div>

                <div class="col-md-9 widget-sidebar">
                    <div class="aboutUs postDetails">
                        <h3 class="heading-title-paragraph">बृदा भत्ता नामावली</h3>
                        <br>




                        <table id="customers">
                            <tbody><tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Citizenship</th>
                                <th>Member id</th>
                                <th>Type</th>

                            </tr>

                            @foreach($bhatta as $data)

                            <tr>
                                <td>{{$data->memberName}}</td>
                                <td>{{$data->age}}</td>
                                <td>{{$data->gender}}</td>
                                <td>{{$data->citizenship}}</td>
                                <td>{{$data->gender}}</td>
                                <td>{{$data->type}}</td>
                            </tr>

                            @endforeach
                            {{--<tr class="alt">--}}
                                {{--<td>Berglunds snabbköp</td>--}}
                                {{--<td>Christina Berglund</td>--}}
                                {{--<td>Sweden</td>--}}
                            {{--</tr>--}}

                            </tbody></table>
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