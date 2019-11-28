@extends('backend.layouts.master')

@section('title', 'Comments')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-12">

            @include('alerts')

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Commentable ID</th>
                        <th>User Name</th>
                        <th>Created at</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->commendable_id }}</td>
                        <td>{{ $comment->user_id }}</td>
                        <td>{{ $comment->created_at->format('d - m - Y') }}</td>
                        <td>{{ $comment->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection