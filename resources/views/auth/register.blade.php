@extends('layouts.app')

@section('content')

    <div class="container-fluid">
			<div class="col-md-12 row">
				<div class="center">
          <div class="heading">	<h1 class="text-center">Registration</h1></div>
				
					<form action="{{route('register')}}" method="POST" class="form">
            @csrf
					  <div class="form-group">
					    <label>Name</label>
					    <input type="" class="form-control"  name="name" value="{{old('name')}}">
              @error('name')
              <div class="text-danger"> {{$message}}</div>
               
              @enderror
					  </div>

					  <div class="form-group">
					    <label>Username</label>
					    <input type="text" name="username" class="form-control" value="{{old('username')}}" >
              @error('name')
                <div class="text-danger"> {{$message}}</div>
              @enderror
					  </div>
					  
              <div class="form-group">
                <label>Email_id</label>
                 <input type="text" name="email" class="form-control"  value="{{old('email')}}"  >
                 @error('email')
                  <div class="text-danger"> {{$message}}</div>
 
                  @enderror
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" >
              @error('password')
              <div class="text-danger"> {{$message}}</div>
 
              @enderror
            </div>

            <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" >
              @error('confirmation_password')
              <div class="text-danger"> {{$message}}</div>
              @enderror

            </div>
            <div>
              <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </div>
					</form>
				</div>
			</div>
			
		</div>
	
		  
@endsection