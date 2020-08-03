@extends('layouts.app')

@section('title', $data->title)

@section('content')
    <form action="/articles/{{ $data->id }}" method="POST">
        姓名：<input type="text" name="name" value="{{ $data->name }}" /> <br />
        標題：<input type="text" name="title" value="{{ $data->title }}" /> <br />
        內容：<textarea name="content">{{ $data->content }}</textarea>
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="submit" value="送出" />
    </form>
@endsection