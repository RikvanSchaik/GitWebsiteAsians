
    @extends('layouts.app')

@section('content')
<div class="container show-post-container">
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div class="row">
        <div class="col-md-12">
            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="image">
        </div>
    </div>
    <p>{{$post->body}}</p>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-dnger'])}}
    {!!Form::close()!!}
    @endif
    @endif
</div>
<link href="{{ asset('css/show-post.css') }}" rel="stylesheet">

@endsection
