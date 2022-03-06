@extends('layouts.layout')

@section('title', $post->title)

@section('content')
    <h2 class="text-3xl font-bold text-center text-teal-500">
        {{ $post->title }}
    </h2>
    <div class="flex flex-row flex-wrap justify-center gap-6 mt-10">
        @foreach ($post->postImages as $postImage)
            <img src="{{ $postImage->getImage() }}" alt="{{ $post->title }}" class="max-w-md shadow-md rounded-md">
        @endforeach
    </div>
@endsection
