<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Museu;
use Illuminate\Http\Request;

class MuseuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museus = Museu::withCount('obras')->paginate();
        return view('admin.museu.index', ['museus' => $museus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.museu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $museu = new Museu([
           'nome' => $request->nome,
           'outro_nome' => $request->outro_nome,
           'endereco' => $request->endereco,
           'cidade' => $request->cidade,
           'pais' => $request->pais,
        ]);

        $museu->saveOrFail();

        return redirect('/admin/museus')->with(['sucess' => 'Museu cadastrado com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $museu = Museu::find($id);
        return view('admin.museu.single', ['museu' => $museu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $museu = Museu::find($id);
        return view('admin.museu.edit', ['museu' => $museu]);
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
        $museu = Museu::find($id);
        $museu->nome = $request->nome;
        $museu->outro_nome = $request->outro_nome;
        $museu->endereco = $request->endereco;
        $museu->cidade = $request->cidade;
        $museu->pais = $request->pais;

        $museu->updateOrFail();

        return redirect('/admin/museus')->with('success', 'Museu atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $museu = Museu::find($id);
        $museu->delete();

        return redirect('/admin/museus')->with('success', 'Museu removido com sucesso!');
    }
}
