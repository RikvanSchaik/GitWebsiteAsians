
    @extends('layouts.app')

@section('content')
<div class="posts-container container">


    <h1>Posts</h1>
    @if(count($posts) > 0)
       
        <div class="card">
        <ul class="list-group list-group-flush">
        @foreach($posts as $post)
            <div class="row post-item">
                <div class="col-md-4">
                    <img class="post-picture" {{--style="width:100%"--}} src="/storage/cover_images/{{$post->cover_image}}" alt="image">
                </div> 
                <div class="col-md-8 post-text">
                     <h3><a class="post-link" href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                     <h3>{{$post->body}}</h3>

                     <small class="post-date">Written on {{$post->created_at}}</small>
                     <hr>
                </div>                 
            </div>
        @endforeach
        </ul>

        </div>
    
    @else

    @endif

</div>
<link href="{{ asset('css/posts.css') }}" rel="stylesheet">

@endsection
