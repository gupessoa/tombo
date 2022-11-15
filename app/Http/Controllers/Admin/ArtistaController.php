<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artista;
use App\Models\Grupo;
use App\Models\Movimento;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = Artista::paginate();
        return view('admin.artista.index', ['artistas' => $artistas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movimentos = Movimento::all();
        $grupos = Grupo::all();
        return view('admin.artista.create', [
            'movimentos' => $movimentos,
            'grupos' => $grupos
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artista = new Artista([
            'nome' => $request->nome ,
            'ano_nasc' => $request->ano_nasc ,
            'local_nasc' => $request->local_nasc ,
            'ano_morte' => $request->ano_morte,
            'local_morte' => $request->local_morte ,
        ]);

        $artista->saveOrFail();
        $artista->grupos()->sync($request->grupos);
        $artista->movimentos()->sync($request->movimentos);

        return redirect('/admin/artistas')->with('success', 'Artista cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artista = Artista::find($id);
        return view('admin.artista.single', ['artista' => $artista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movimentos = Movimento::all();
        $grupos = Grupo::all();
        $artista = Artista::find($id);
        return view('admin.artista.edit', [
            'movimentos' => $movimentos,
            'grupos' => $grupos,
            'artista' => $artista
            ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artista = Artista::find($id);
        $artista->deleteOrFail();
        return redirect('/admin/artistas')->with('success', 'Artsta excluído com sucesso!');
    }
}
