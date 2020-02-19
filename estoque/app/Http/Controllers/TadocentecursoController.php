<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tadocentecurso;

class TadocentecursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tadocentecurso = Tadocentecurso::All();
        return view('tadocentecurso.index', compact('tadocentecursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tadocentecurso.create');
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
            'tadocentecurso_dt_inclusao'=>'required',
            'tadocentecurso_dt_exclusao'=>'required',

          ]);

          $tadocentecurso = new Tadocentecurso([
            'dt_inclusao' => $request->get('tadocentecurso_dt_exclusao'),
            'dt_exclusao' => $request->get('tadocentecurso_dt_exclusao'),

          ]);
          $tadocentecurso->save();
          return redirect('/tadocentecurso')->with('success', 'tadocentecurso cadastrado!');
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
        $tadocentecurso = Tadocentecurso::find($id);
        return view('tadocentecurso.edit', compact('tadocentecurso'));
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
            'tadocentecurso_dt_inclusao'=>'required',
            'tadocentecurso_dt_exclusao'=>'required',
          ]);
          $tadocentecurso = Tadocentecurso::find($id);

          $tadocentecurso->inclusao = $request->get('tadocentecurso_inclusao');
          $tadocentecurso->exclusao = $request->get('tadocentecurso_exclusao');


          $tadocentecurso->save();
          return redirect('/tadocentecurso')->with('success', 'tadocentecurso Alterado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tadocentecurso = tadocentecurso::find($id);
        $tadocentecurso->delete();
        return redirect('/tadocentecurso')->with('success', 'tadocentecurso excluido com sucesso!');
    }
}
