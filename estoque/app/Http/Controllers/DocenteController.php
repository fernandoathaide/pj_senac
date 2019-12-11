<?php

namespace App\Http\Controllers;

use App\Model\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docente.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create');
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
            'docente_nome'=>'required',
            'docente_matricula'=>'required',
          ]);

          $docente = new Docente([
            'nome' => $request->get('docente_nome'),
            'matricula' => $request->get('docente_matricula')
          ]);
          $docente->save();
          return redirect('/docente')->with('success', 'Docente cadastrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::find($id);
        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_docente)
    {
        $request->validate([
            'docente_nome'=>'required',
            'docente_matricula'=>'required',
          ]);

          $docente = Docente::find($id_docente);
          $docente->nome = $request->get('docente_nome');
          $docente->matricula = $request->get('docente_matricula');

          $docente->save();
          return redirect('/docente')->with('success', 'Docente Alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_docente)
    {
        $docente = Docente::find($id_docente);
        $docente->delete();
        return redirect('/docente')->with('success', 'Docente excluido com sucesso!');
    }
}
