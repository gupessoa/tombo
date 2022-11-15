<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovimentoRequest;
use App\Http\Requests\UpdateMovimentoRequest;
use App\Models\Era;
use App\Models\Movimento;

class MovimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimentos = Movimento::paginate(10);
        return view('admin.movimento.index', ['movimentos' => $movimentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eras = Era::all();
        return view('admin.movimento.create', ['eras' => $eras]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\MovimentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovimentoRequest $request)
    {

        $movimento = new Movimento([
            'nome' => $request->nome,
            'data_inicial' =>$request->data_inicial,
            'data_final' => $request->data_final,
            'id_era' => $request->id_era
        ]);

        $movimento->saveOrFail();

        return redirect('/admin/movimentos/')->with('success', 'Movimento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movimento  $movimento
     * @return \Illuminate\Http\Response
     */
    public function show(Movimento $movimento)
    {
        return view('admin.movimento.single', ['movimento' => $movimento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movimento  $movimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Movimento $movimento)
    {
        $eras = Era::all();
        return view('admin.movimento.edit', ['movimento' => $movimento, 'eras' => $eras]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MovimentoRequest  $request
     * @param  \App\Models\Movimento  $movimento
     * @return \Illuminate\Http\Response
     */
    public function update(MovimentoRequest $request, Movimento $movimento)
    {
        $movimento->nome = $request->nome;
        $movimento->data_inicial >$request->data_inicial;
        $movimento->data_final = $request->data_final;
        $movimento->id_era = $request->id_era;

        $movimento->updateOrFail();

        return redirect('/admin/movimentos/')->with('success', 'Movimento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movimento  $movimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movimento $movimento)
    {
        $movimento->deleteOrFail();

        return redirect('/admin/movimentos/')->with('success', 'Movimento excluido com sucesso!');
    }
}
