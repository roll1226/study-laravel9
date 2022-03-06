@extends('layouts.layout')

@section('title',
    'ユーザ一覧
    ',)

@section('content')
    <h2 class="text-3xl font-bold text-center text-teal-500">
        ユーザ一覧
    </h2>
    <div class="flex flex-row flex-wrap justify-center gap-14 mt-3">
        @foreach ($users as $user)
            <user-card-component :user-name='{{ json_encode($user->getName()) }}'
                :post-count='{{ json_encode($user->postsCount) }}'>
            </user-card-component>
        @endforeach
    </div>

    <div class="max-w-4xl mx-auto mt-6">
        {{ $users->links() }}
    </div>
@endsection
