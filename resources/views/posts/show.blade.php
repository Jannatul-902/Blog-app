@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
