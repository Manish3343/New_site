@extends('frontend.user.dashboard.user-master')
@section('section')
     <div class="row">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                 <th>SN.</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Pan Card</th>
                                 <th>Aadhar card</th>
                                 <th>RL</th>
                                 <th>10th Marksheet</th>
                                 <th>Graduation markesheet</th>
                                 <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $data)
                          
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td><a href="{{asset('PanCard/'.$data->pan_card)}}" target="_blank" class="btn btn-success"></i>Preview</a></td>
                                <td><a href="{{asset('AadharCard/'.$data->aadhar_card)}}" target="_blank" class="btn btn-success"></i>Preview</a></td>
                                <td><a href="{{asset('RLCard/'.$data->rl_card)}}" target="_blank" class="btn btn-success"></i>Preview</a></td>
                                <td><a href="{{asset('TenMarksheet/'.$data->tenth_mark)}}" target="_blank" class="btn btn-success"></i>Preview</a></td>
                                <td><a href="{{asset('TenMarksheet/'.$data->tenth_mark)}}" target="_blank" class="btn btn-success"></i>Preview</a></td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>
@endsection