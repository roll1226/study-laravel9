@extends('layouts.layout')

@section('title', 'ホーム')

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

    <h2 class="text-3xl font-bold text-center text-teal-500 mt-10">
        ランキング
    </h2>
    <div class="flex flex-row flex-wrap justify-center gap-14 mt-3">
        @foreach ($filterByRankingPosts as $filterByRankingPost)
            <post-card-component :title='{{ json_encode($filterByRankingPost->getTitle()) }}'
                :id="{{ json_encode($filterByRankingPost->getId()) }}"
                :img='{{ json_encode($filterByRankingPost->postImages[0]->getImage()) }}'>
            </post-card-component>
        @endforeach
    </div>
@endsection
