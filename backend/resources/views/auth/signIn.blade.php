@extends('layouts.layout')

@section('title', 'ログイン')

@section('content')
<p>ログイン</p>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/login">
    @csrf
    <input-component
        :is-required="{{ json_encode(false) }}"
        label="メールアドレス"
        type="email"
        name="email"
        placeholder="hoge@example.com"
        :old-value="{{ old('email') }}"
    ></input-component>

    <input-component
        :is-required="{{ json_encode(false) }}"
        label="パスワード"
        type="password"
        name="password"
        placeholder=""
    ></input-component>

    <button type="submit"class="inline-block text-sm px-4 py-2 leading-none bg-teal-500 border rounded text-white border-teal-500 mt-4 lg:mt-0 hover:shadow-lg">
        ログイン
    </button>
</form>
@endsection
