@extends('user.layout.app')
@section('content')
@section('page-title','खपिन्छेँ | सदस्य')

<section>
    <div class="container">
        <div class="row">
            <div class="breadcrumb"><a href="{{url('')}}">गृहपृष्ठ</a> » सदस्य</div>
            <div class="col-md-12">
                <div class="col-md-8 widget-sidebar">
                    <div class="aboutUs postDetails">
                        <h3 class="heading-title-paragraph">सदस्य</h3>
                        <br>
                        <form action="#" method="GET">
                            {!! csrf_field() !!}
                            <div id="custom-search-input">
                                <div class="input-group col-md-12">
                                    <input type="text" class="form-control input-lg" placeholder="नाम बाट खोज्नुहोस " name="keyword">
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

                        @if(count($persons))

                        <table id="customers">
                            <tbody>
                            <tr>
                                <th>नाम</th>

                                <th>लिङ्ग​</th>
                                <th>Age</th>
                                <th>education</th>
                                <th>occupation</th>

                            </tr>

                            @foreach($persons as $data)

                                <tr>
                                    <td><a href="{{route('persons.details', $data->id)}}">{{$data->name_np}}</a></td>

                                    <td>{{$data->Gender()}}</td>
                                    <td>{{$data->Age()}}</td>
                                    <td>{{$data->education}}</td>
                                    <td>{{$data->occupation}}</td>
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


                        {!! $persons->render() !!}


                        <br>


                    </div>
                </div>

                @include('user.layout.mainlink')

            </div>
        </div>
    </div>

</section>
@endsection