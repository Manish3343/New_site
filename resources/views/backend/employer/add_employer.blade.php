@extends('backend.admin-master')
@section('site-title')
    {{__('Create Employer')}}
@endsection
 
@section('content')

    <div class="col-lg-12 col-ml-12 padding-bottom-30 ">
        <div class="row">
       <div class="col-12 mt-5">
        <div class="card">
        <div class="card-body">
            <form action="{{($latest_data)?route('admin.employer.update',$latest_data->id):route('admin.employer.store')}}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" value="{{($latest_data)?$latest_data->name:''}}" class="form-control" id="name" placeholder="Enter name" name="name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" value="{{($latest_data)?$latest_data->email:''}}" class="form-control" id="email" placeholder="Enter email" name="email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                    </div>
                      <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="number" value="{{($latest_data)?$latest_data->phone:''}}" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                    </div>
                    @if($latest_data)
                    <div class="form-group">
                      <label for="email">Gender:</label>
                      <select name="gender" id="gender" class="form-control">
                        <option value="male" {{$latest_data->gender=='male'?'selected':''}}>Male</option>
                        <option value="female"{{$latest_data->gender=='female'?'selected':''}}>Female</option>
                        <option value="other"{{$latest_data->gender=='other'?'selected':''}}>Other</option>
                      </select>
                    </div>
                    @else
                    <div class="form-group">
                        <label for="email">Gender:</label>
                        <select name="gender" id="gender" class="form-control">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                      @endif

                    <div class="form-group">
                        <label for="phone">Higher Education:</label>
                        <input type="text" value="{{($latest_data)?$latest_data->education:''}}" class="form-control" id="education" placeholder="Enter Higher Education" name="education">
                        @error('education')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                    </div>
                      <div class="form-group">
                        <label for="phone">Address:</label>
                        <input type="text" value="{{($latest_data)?$latest_data->addres:''}}" class="form-control" id="adress" placeholder="Enter address" name="address">
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                      @error('pswd')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="pwd">Confirm Password:</label>
                        <input type="password" class="form-control" id="confirm_pwd" placeholder="Enter confirm password" name="confirm_pwd">
                        @error('confirm_pwd')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
         
        </div>
       </div>
       </div>
       
    </div>  
</div> 
  @endsection
