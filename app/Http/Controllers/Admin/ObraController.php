<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ObraRequest;
use App\Models\Artista;
use App\Models\Museu;
use App\Models\Obra;
use Illuminate\Http\Request;

class ObraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obras = Obra::paginate(10);
        return view('admin.obra.index', ['obras' => $obras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artistas = Artista::all();
        $museus = Museu::all();
        return view('admin.obra.create',[
            'artistas' => $artistas,
            'museus' => $museus
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

        $obra = new Obra([
            "nome" => $request->nome,
            "nome_outro" => $request->nome_outro,
            "data" => $request->data,
            "tipo" => $request->tipo,
            "tamanho" => $request->tamanho,
            "artista_id" => $request->artista,
            "museu_id" => $request->local,
        ]);

        $obra->saveOrFail();

        if($imagem = $request->file('imagem')){
            $obra->image()->create(['image' => $imagem->store('obras', 'public')]);
        }


        return redirect('/admin/obras')->with('success', 'Obra adicionada com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obra = Obra::find($id);
        return view('admin.obra.single', ['obra' => $obra]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obra = Obra::find($id);
        $artistas = Artista::all();
        $museus = Museu::all();
        return view('admin.obra.edit', [
            'obra' => $obra,
            'artistas' => $artistas,
            'museus' => $museus
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
//     * @param  Illuminate\Http\Request\ObraRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ObraRequest $request, $id)
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
        $obra = Obra::find($id);
        $obra->deleteOrFail();
        return redirect('/admin/obras')->with('success', 'Obra deletada com sucesso!');
    }
}
