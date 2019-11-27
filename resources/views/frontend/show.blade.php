
@extends('frontend.layouts.master')

@section('title')
{{ $post->title }}
@endsection

@section('content')

    
<h1 class="home-title">Latest New Posts</h1>
    <div class="row mb-4">
        <div class="col-md-6 mb-1">
            <img src="{{ asset('images/blogimg/' . $post->images) }}" 
            style="float:left;margin-right: 20px;">
        </div>
        <div class="col-md-6 mb-1">
            <h3>{{ $post->title }}</h3>
            <p style="text-align:justify;">{!! $post->content !!}</p>
            <p style="float:left;margin-right:10px;">
            <i class="fa fa-user"></i> 
            {{ $post->user->name }}</p>
            <p><i class="fa fa-folder-open"></i> {{ $post->category->title }}</p>
        </div>
    </div>
    <div class="row mb-4">
        @if(auth()->check())
            <div class="col-md-12 mb-3">

                @foreach($comments as $comment)
                    <strong>
                        <i class="fa fa-user-circle" style="font-size: 20px;"></i> 
                        {{ $comment->user->name }}
                    </strong>
                    <p>{{ $comment->content }}</p>
                @endforeach

                    <form action="{{ url('comment/create') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <h4>Add Comment</h4>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="commendable_id" value="{{ $post->id }}">
                            <input type="hidden" name="commendable_type" value="App\post">
                            <textarea class="form-control mb-3 mt-3" id="comment" rows="4" name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Summit Comment</button>
                    </form>

            </div>
        @endif

        <div class="col-md-12 text-right">
        <a href="{{ url('/') }}" class="btn btn-primary">Go back</a>
        </div>
    </div>

        

    

@endsection



