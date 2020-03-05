<?php

namespace App\Http\Controllers;

use App\Model\Componente;
use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $componentes = Componente::All();
        return view('componente.index', compact('componentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('componente.create');
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
            'componente_no_componente'=>'required',
            'componente_descricao'=>'required',
            'componente_qt_horas_componente'=>'required',
            'componente_qt_alunos_mat_componente'=>'required',
          ]);

          $componente = new Componente([
            'no_componente' => $request->get('componente_no_componente'),
            'descricao' => $request->get('componente_descricao'),
            'qt_horas_componente' => $request->get('componente_qt_horas_componente'),
            'qt_alunos_mat_componente' => $request->get('componente_qt_alunos_mat_componente'),
          ]);
          $componente->save();
          return redirect('/componente')->with('success', 'componente cadastrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $componente = Componente::find($id);
        return view('componente.edit', compact('componente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'componente_no_componente'=>'required',
            'componente_descricao'=>'required',
            'componente_qt_horas_componente'=>'required',
            'componente_qt_alunos_mat_componente'=>'required',
          ]);
          $componente = Componente::find($id);

          $componente->no_componente = $request->get('componente_no_componente');
          $componente->descricao = $request->get('componente_descricao');
          $componente->qt_horas_componente = $request->get('componente_qt_horas_componente');
          $componente->qt_alunos_mat_componente = $request->get('componente_qt_alunos_mat_componente');


          $componente->save();
          return redirect('/componente')->with('success', 'Componente Alterado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $componente = Componente::find($id);
        $componente->delete();
        return redirect('/componente')->with('success', 'Componente excluido com sucesso!');
    }
}
