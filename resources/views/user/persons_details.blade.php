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
                        <br>

                        <h4>Name: {{$person->name}}</h4>
                        <h4>Age: {{$person->Age()}}</h4>
                        <h4>Gender: {{$person->gender}}</h4>
                        <h4>Phone: {{$person->phone}}</h4>
                        <h4>Email: {{$person->email}}</h4>
                        <h4>Occupation: {{$person->occupation}}</h4>
                        <h4>Eduacation: {{$person->education}}</h4>


                        <h6 class="heading-title-paragraph">Family</h6>
                        <br>
                        <table id="customers">
                            <tbody>
                            <tr>
                                <th>नाम</th>

                                <th>लिङ्ग​</th>
                                <th>Age</th>
                                <th>education</th>
                                <th>occupation</th>

                            </tr>

                            @foreach($person->family as $data)

                                <tr>
                                    <td>{{$data->Relative->name}}</td>

                                    <td>{{$data->Relative->gender}}</td>
                                    <td>{{$data->Relative->Age()}}</td>
                                    <td>{{$data->Relative->education}}</td>
                                    <td>{{$data->Relative->occupation}}</td>
                                </tr>

                            @endforeach
                            {{--<tr class="alt">--}}
                            {{--<td>Berglunds snabbköp</td>--}}
                            {{--<td>Christina Berglund</td>--}}
                            {{--<td>Sweden</td>--}}
                            {{--</tr>--}}

                            </tbody>
                        </table>
                        <br>

                   </div>
                </div>

                @include('user.layout.mainlink')

            </div>
        </div>
    </div>

</section>
@endsection