@extends('layouts.layout')

@section('title', '新着')

@section('content')
    <h2 class="text-3xl font-bold text-center text-teal-500">
        新着
    </h2>
    <div class="flex flex-row flex-wrap justify-center gap-14 mt-3">
        @foreach ($newPosts as $newPost)
            <post-card-component :title='{{ json_encode($newPost->getTitle()) }}'
                :id="{{ json_encode($newPost->getId()) }}"
                :img='{{ json_encode($newPost->postImages[0]->getImage()) }}'>
            </post-card-component>
        @endforeach
    </div>

    <div class="max-w-4xl mx-auto mt-6">
        {{ $newPosts->links() }}
    </div>
@endsection
