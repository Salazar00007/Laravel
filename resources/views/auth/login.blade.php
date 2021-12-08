@extends('layouts.app')

@section('content')

    <div class="container-fluid">
	  <div class="col-md-12 row">
		<div class="center">
          <div class="heading">	<h1 class="text-center">Registration</h1></div>
				      @if(session('status'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session('status')}}
                @endif
			<form action="{{route('login')}}" method="POST" class="form">
                  @csrf
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

            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="remember" name="remember">
              <label class="form-check-label" for="remember">Remember</label>
          </div>

            <div>
              <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </div>
					</form>
				</div>
			</div>
			
		</div>
	
		  
@endsection