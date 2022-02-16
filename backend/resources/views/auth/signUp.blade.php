@extends('layouts.layout')

@section('title', 'アカウント作成')

@section('content')
<p>アカウント作成</p>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route("register") }}">
    @csrf
    <input-component
        :is-required="{{ json_encode(true) }}"
        label="メールアドレス"
        type="email"
        name="email"
        placeholder="hoge@example.com"
        :old-value="{{ old('email') }}"
    ></input-component>

    <input-component
        :is-required="{{ json_encode(true) }}"
        label="ユーザ名"
        type="text"
        name="name"
        placeholder="ほげ太郎"
        :old-value="{{ old('name') }}"
    ></input-component>

    <input-component
        :is-required="{{ json_encode(true) }}"
        label="パスワード"
        type="password"
        name="password"
        placeholder=""
    ></input-component>

    <input-component
        :is-required="{{ json_encode(true) }}"
        label="パスワード確認"
        type="password"
        name="password_confirmation"
        placeholder=""
    ></input-component>

    <button type="submit"class="inline-block text-sm px-4 py-2 leading-none bg-teal-500 border rounded text-white border-teal-500 mt-4 lg:mt-0 hover:shadow-lg">
        登録
    </button>
</form>
@endsection
