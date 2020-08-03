@extends('layouts.app')

@section('title', $data->title)

@section('content')

<h1> {{ $data->title }} </h1>
<h2> {{ $data->content }} </h2>
@auth
<a href="/articles/create" class="btn btn-md btn-primary">
        <i class="fas fa-pencil-alt"></i>
        <span class="pl-1">新增文章</span>
</a>
<a href="/articles/{{ $data->id }}/edit" class="btn btn-md btn-primary">
        <i class="fas fa-pencil-alt"></i>
        <span class="pl-1">編輯文章</span>
</a>
<form action="" method="POST">
@csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-md btn-danger">
        <i class="fas fa-trash"></i>
        <span class="pl-1">刪除文章</span>
    </button>
</form>
</div>
@endauth


