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
            'componente_descricao'=>'required',
            'componente_tipo'=>'required',
            'componente_quantidade'=>'required',
            'componente_metrica'=>'required',
            'componente_dt_validade'=>'required',
          ]);

          $componente = new Componente([
            'descricao' => $request->get('componente_descricao'),
            'tipo' => $request->get('componente_tipo'),
            'quantidade' => $request->get('componente_quantidade'),
            'metrica' => $request->get('componente_metrica'),
            'dt_validade' => $request->get('componente_dt_validade'),
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
            'componente_descricao'=>'required',
            'componente_tipo'=>'required',
            'componente_quantidade'=>'required',
            'componente_metrica'=>'required',
            'componente_dt_validade'=>'required',
          ]);
          $componente = Componente::find($id);

          $componente->descricao = $request->get('componente_descricao');
          $componente->tipo = $request->get('componente_tipo');
          $componente->quantidade = $request->get('componente_quantidade');
          $componente->metrica = $request->get('componente_metrica');
          $componente->dt_validade = $request->get('componente_dt_validade');

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
