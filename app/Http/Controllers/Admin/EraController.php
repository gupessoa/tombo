<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EraRequest;
use App\Http\Requests\UpdateEraRequest;
use App\Models\Era;

class EraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eras = Era::paginate();
        return view('admin.era.index', ['eras' => $eras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.era.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\EraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EraRequest $request)
    {
//        dd($request->all());
        $era = new Era([
           'nome' => $request->nome,
           'data_inicial' => $request->data_inicial,
           'data_final' => $request->data_final
        ]);

        if($request->data_inicial < 0){
            $era['data_inicial'] = $request->data_inicial;
        }
        if($request->data_final < 0){
            $era['data_final'] = $request->data_final;
        }
//        dd($era);

        $era->saveOrFail();

        return redirect('/admin/eras')->with('sucess', 'Era cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Era  $era
     * @return \Illuminate\Http\Response
     */
    public function show(Era $era)
    {
        return view('admin.era.single', ['era' => $era]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Era  $era
     * @return \Illuminate\Http\Response
     */
    public function edit(Era $era)
    {
        return view('admin.era.edit', ['era' => $era]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EraRequest  $request
     * @param  \App\Models\Era  $era
     * @return \Illuminate\Http\Response
     */
    public function update(EraRequest $request, Era $era)
    {
        $era->nome = $request->nome;
        $era->data_inicial = $request->data_inicial;
        $era->data_final = $request->data_final;

        $era->updateOrFail();

        return redirect('/admin/eras')->with('sucess', 'Era ataulizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Era  $era
     * @return \Illuminate\Http\Response
     */
    public function destroy(Era $era)
    {
        $era->deleteOrFail();
        return redirect('/admin/eras')->with('success', 'Era excluida com sucesso');
    }
}
