@extends('admin.layout')
@section('page_title','Add new member')
@section('header-title','Members')
@section('header-subtitle','Add new member')

@section('content')
<div class='row'>
    <div class="md-col-12">
        <div class="panel panel-default">
            <div class="panel-heading">
             Details
            </div>                 
            <div class="panel-body"> 
                <div class="person-details">
                   <h4>Name: {{$person->name}}<h4>
                   <h4>Age: {{$person->Age()}}<h4>
                   <h4>Gender: {{$person->gender}}<h4>
                   <h4>Phone: {{$person->phone}}<h4>
                   <h4>email: {{$person->email}}<h4>
                   <h4>Education: {{$person->education}}<h4>
                   <h4>Occupation: {{$person->occupation}}<h4>
                   <h4>Health: {{$person->health}}<h4>

                </div>
                <div class="relatives-table">
                    <div class="panel-heading">
                        <h3>Family<h3>
                       </div> 
                    <div class="table-responsive">
                        <table class="table">
                
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                
                            <tbody>
                            <?php $counts = 0; ?>
                
                            @foreach($person->family as $key => $data)
                
                                <tr>
                                    <td> {{ ++$counts }}</td>
                                    {{-- <td>
                                        @if(!empty($data->feature_image))
                                        <img src="{{url('storage/'.$data->feature_image)}}" height="50px">
                                    @else
                                            <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
                                        @endif
                                    </td> --}}
                
                                    <td><a href="{{route('admin.persons.edit',array($data->relative_id))}}"> {{$data->Relative->name}}</a></td>
                                    <td><a href="{{route('admin.persons.edit',array($data->relative_id))}}"> {{$data->Relative->Age()}}</a></td>
                                    <td><a href="{{route('admin.persons.edit',array($data->relative_id))}}"> {{$data->Relative->phone}}</a></td>
                                    <td><a href="{{route('admin.persons.edit',array($data->relative_id))}}"> {{$data->Relative->email}}</a></td>
                
                                    <td>
                                        <a href="{{route('admin.persons.show', $data->relative_id)}}">
                                            <button><i class="fa fa-info" aria-hidden="true"> </i> Details</button>
                                        </a>
                
                                        <a href="{{route('admin.persons.delete',array($data->relative_id))}}"
                                            onclick="return confirm('Are you sure you want to delete this item?');">
                                        <button><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </a>
                                        {{-- <a href="{{route('admin.persons.delete',array($article->id))}}" onclick="return confirm('Are you sure you want to delete this item?');">  <button ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a> --}}
                                        {{-- <a>
                                            <button class="clipboard" data-clipboard-text="{{route('article_slug',array('id'=>$data->slug))}}"><i
                                                        class="fa fa-clipboard" aria-hidden="true">Copy link</i></button>
                                        </a> --}}
                                    </td>
                
                                </tr>
                
                            @endforeach
                
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            </div>
    </div>
</div>

@endsection
