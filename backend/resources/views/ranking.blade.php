@extends('layouts.layout')

@section('title', 'ランキング')

@section('content')
    <h2 class="text-3xl font-bold text-center text-teal-500">
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

    <div class="max-w-4xl mx-auto mt-6">
        {{ $filterByRankingPosts->links() }}
    </div>
@endsection
