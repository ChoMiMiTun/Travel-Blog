@extends('frontend.layouts.master')

@section ('title', 'blog')

@section('content')

<div class="container">
    <h1 class="home-title">Latest New Posts</h1>
    <div class="row mb-4">
        @foreach($posts as $post)
        <div class="col-md-4 mb-5">
            <p><img src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 500px;"> </p>
            <h3>{{ $post->title }}</h3>
            <p>{!! substr($post->content, 0, 180) !!} ...</p>
            <p style="float:left;margin-right:10px;"><i class="fa fa-user"></i> {{ $post->user->name }}</p>
            <p><i class="fa fa-folder-open"></i> {{ $post->category->title }}</p>
            <a href="{{ url("post/$post->id") }}" class="btn btn-primary">Read more...</a>
        </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        {{ $posts->links() }}
    </div>

</div>

@endsection