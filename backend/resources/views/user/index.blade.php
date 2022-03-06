@extends('layouts.layout')

@section('title', $user->getName())

@section('content')
    <h2 class="text-3xl font-bold text-center text-teal-500">
        {{ $user->getName() }} - 投稿履歴
    </h2>
    <div class="flex flex-row flex-wrap justify-center gap-14 mt-3">
        @foreach ($posts as $post)
            <post-card-component :title='{{ json_encode($post->getTitle()) }}' :id="{{ json_encode($post->getId()) }}"
                :img='{{ json_encode($post->postImages[0]->getImage()) }}'>
            </post-card-component>
        @endforeach
    </div>
    {{ $posts->links() }}
@endsection
