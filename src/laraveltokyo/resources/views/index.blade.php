@extends('layouts.app')

@section('content')

<div class="">
    <form method="POST" action="/todo/add">
        <input type="text" name="name">
        <textarea name="detail"></textarea>
    </form>
    <button type="submit" value="送信">ここ</button>
</div>
<div class="">
    <p>task一覧を表示したい</p>
</div>
@endsection
