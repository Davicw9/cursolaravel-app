@extends('tamplate')
@section('conteudo')
    <h1>Lista de Alunos</h1>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->firstName }} {{ $aluno->lastName }}</td>
                    <td>{{ $aluno->idade }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection