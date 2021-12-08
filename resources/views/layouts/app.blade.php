<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <style>
        .navbar-light .navbar-nav .nav-link
        {
    color: white;
    
}

.bg-light {
    background-color: #1314140d!important;

}
body
	{
		font-family: montserrat;
		margin: 0px;
		padding: 0px;
		outline: none;
		box-sizing: border-box;
		background: linear-gradient(to right, #E6DADA 0%, #274046 100%);

	}
	.center{
		margin: auto;
		width: 40%;
		border: 1px solid gray;
		margin-top: 30px;
	
		background-color: white;
		border-radius: 20px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

    .form{
      padding: 20px;
    }
    .heading{
      background-color: #133d8b;
    border-radius: 16px 16px 0px 0px;
      color:white;
      height: 63px;
    }
    </style>
</head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My-Blog System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
  
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">Dasboard</a>
        </li>

        @auth

        <li class="nav-item">
  <a class="nav-link" href="/posts">Post</a>
</li>
      
        <li class="nav-item">
        <a class="nav-link" href="">welcome to {{auth()->user()->name}}</a>
      </li>
        <li class="nav-item">
          <form action="{{route('logout')}}">
            @csrf
          <button type="submit">Logout</button>
          </form>
           
        </li>
    @endauth

    @guest
    <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Singup</a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
      </li>
      @endguest
    </ul>
    

  </div>
</nav>



        @yield('content')
    </body>
</html>