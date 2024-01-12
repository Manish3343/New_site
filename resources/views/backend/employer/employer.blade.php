@extends('backend.admin-master')
@section('site-title')
    {{__('Employer')}}
@endsection
 
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
            <div class="card">
            <div class="card-body">
         @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
       <a href="{{route('admin.employer.create')}}" class="btn btn-primary" style="float:right">+ New Employer</a>
        <div class="row">

            <table class="table table-bordered">
        <thead>
            <th>SN.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Education</th>
            <th>Employer Code</th>
            <th>Addresss</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($employer as $data)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->education}}</td>
            <td>{{$data->username}}</td>
            <td>{{$data->addres}}</td>
            <td>
                <a href="{{route('admin.edit.employer',$data->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('admin.delete.employer',$data->id)}}" class="btn btn-danger">Delete</a>
    
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
