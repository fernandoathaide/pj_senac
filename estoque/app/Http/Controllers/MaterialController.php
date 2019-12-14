<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiais = Material::All();
        return view('material.index', compact('materiais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.create');
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
            'material_descricao'=>'required',
            'material_tipo'=>'required',
            'material_quantidade'=>'required',
            'material_metrica'=>'required',
            'material_dt_validade'=>'required',
          ]);

          $material = new Material([
            'descricao' => $request->get('material_descricao'),
            'tipo' => $request->get('material_tipo'),
            'quantidade' => $request->get('material_quantidade'),
            'metrica' => $request->get('material_metrica'),
            'dt_validade' => $request->get('material_dt_validade'),
          ]);
          $material->save();
          return redirect('/material')->with('success', 'Material cadastrado!');
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
        $material = Material::find($id);
        return view('material.edit', compact('material'));
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
            'material_descricao'=>'required',
            'material_tipo'=>'required',
            'material_quantidade'=>'required',
            'material_metrica'=>'required',
            'material_dt_validade'=>'required',
          ]);
          $material = Material::find($id);

          $material->descricao = $request->get('material_descricao');
          $material->tipo = $request->get('material_tipo');
          $material->quantidade = $request->get('material_quantidade');
          $material->metrica = $request->get('material_metrica');
          $material->dt_validade = $request->get('material_dt_validade');

          $material->save();
          return redirect('/material')->with('success', 'Material Alterado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Material::find($id);
        $material->delete();
        return redirect('/material')->with('success', 'Material excluido com sucesso!');
    }
}
