@extends('tamplate')
@section('conteudo')
<form method="GET" action="/salvar-aluno">
    @csrf
    <input type="text" name="firstName" placeholder="Primeiro Nome">
    <input type="text" name="lastName" placeholder="Último Nome">
    <input type="number" name="idade" placeholder="Idade">
    <button type="submit">Enviar</button>
</form>
@endsection