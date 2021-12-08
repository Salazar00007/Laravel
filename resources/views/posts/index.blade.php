@extends('layouts.app')

@section('content')
<div class="container mt-5">
<div class="jumbotron pt-0">
  <form action="{{route('posts')}} " method="post" class="mb-4">
    @csrf
  <div class="form-group">
    <label">Post</label>
    <textarea class="form-control" id="" cols="30" rows="3" name="body"></textarea>
   
    @error('body')
      <div class="text-danger"> {{$message}}</div>
    @enderror

  </div>
 
  <button type="submit" class="btn btn-primary " href="#" role="button">Post here</button>
  </form>

      @if($posts->count())
         @foreach($posts as $post)
           <div class="mt-4">
              <a href="" class="font-bold">{{ $post->user->name }}</a><span class="ml-2">{{$post->created_at}}</span>

             <p class="mb-2">{{ $post->body }}</p>
              <div class="like-dislike" style="display: flex;">
                    @if(!$post->likedBy(auth()->user()))
                  <form action="{{route('posts.likes',$post)}}" method="post">
                      @csrf
                    <button class="" style="margin-right: 10px;">Like</button>
                  </form>
              @else
                <form action="{{route('posts.likes',$post)}}" method="post">
                      @csrf

                      @method('DELETE')
                    <button class="" style="margin-right: 10px;">unlike</button>
                </form>
              @endif
                <span>{{$post->likes->count()}} {{Str::plural('like',$post->likes->count()) }}</span>
            </div>

           </div>
         @endforeach

          

      @else
          <p>there are no posts</p>
      @endif
    </div>
</div>
@endsection