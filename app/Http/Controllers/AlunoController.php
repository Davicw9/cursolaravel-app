<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CadastrarAluno');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Cria e Salva um novo aluno no BD
        $aluno = new Aluno();
        $aluno->firstName = $request->input('firstName');
        $aluno->lastName = $request->input('lastName');
        $aluno->idade = $request->input('idade');
        $aluno->save();

        // Redirecionar rota
        return redirect()->route('alunos.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        $alunos = Aluno::all();

        return view('mostrar', ['alunos' => $alunos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo "Chegou até aqui";
        $aluno = Aluno::findOrfail($id);
        return view('editar', ['aluno' => $aluno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos do formulário
        /*$request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
        ]);*/

        $aluno = Aluno::findOrFail($id);
        
        $aluno->firstName = $request->firstName;
        $aluno->lastName = $request->lastName;
        $aluno->idade = $request->idade;
        $aluno->save();

        // Redirecionar para a página
        return redirect()->route('alunos.show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        echo "aluno " . $aluno->firstName . " " . $aluno->lastName . " excluído com sucesso";
        
    }
}
