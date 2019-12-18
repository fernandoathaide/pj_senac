<?php

namespace App\Http\Controllers;

use App\Model\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('curso.index', compact('cursos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'curso_nome'=>'required',
            'curso_descricao'=>'required',
            'curso_qt_alunos'=>'required',
            'curso_dt_inicio'=>'required',
            'curso_dt_fim'=>'required',
            'curso_carga_horaria'=>'required'
          ]);

          $curso = new Curso([
            'no_curso' => $request->get('curso_nome'),
            'descricao' => $request->get('curso_descricao'),
            'qt_alunos' => $request->get('curso_qt_alunos'),
            'dt_inicio' => $request->get('curso_dt_inicio'),
            'dt_fim' => $request->get('curso_dt_fim'),
            'qt_horas_curso' => $request->get('curso_carga_horaria')
          ]);
          $curso->save();
          return redirect('/curso')->with('success', 'Curso cadastrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect('/curso')->with('success', 'Curso excluido com sucesso!');
    }
}
