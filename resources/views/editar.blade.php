@extends('tamplate')
@section('conteudo')
    <form method="POST" action="/atualizar-aluno/{{ $aluno->id }}">
        @csrf
        @method('PUT')
        <input type="text" name="firstName" value="{{ $aluno->firstName }}">
        <input type="text" name="lastName" value="{{ $aluno->lastName }}">
        <input type="number" name="idade" value="{{ $aluno->idade }}">
        <button type="submit">Atualizar</button>
    </form>
@endsection