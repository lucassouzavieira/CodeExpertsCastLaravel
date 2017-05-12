@extends('layout')


@section('title')
Book Index
@endsection

@section('content')
    <form action="{{ route('book.store') }}" method="post">
        {{ csrf_field() }}
        <label for="titulo">Título</label><br>
        <input type="text" name="titulo" id="titulo">
        <button type="submit">Salvar</button>
    </form>
@endsection
