@extends('layout')


@section('title')
Book Update
@endsection

@section('content')
    <form action="{{ route('book.update', ['id' => $book->id]) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <label for="titulo">Título</label><br>
        <input type="text" name="titulo" id="titulo" value="{{ $book->title }}">
        <button type="submit">Salvar</button>
    </form>
@endsection
