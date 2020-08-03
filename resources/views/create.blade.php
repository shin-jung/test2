@extends('layouts.app')

@section('title', '新增文章')

@section('content')



@auth
<form action="/articles/create" method="POST">
    @csrf
{{-- <input type="hidden" name="_method" value="patch"> --}}
姓名：<input type="text" name="name" /><br />
標題：<input type="text" name="title" /><br />
內容：<textarea name="content"></textarea>

<input type="submit" value="送出" />
</form>
@endauth
