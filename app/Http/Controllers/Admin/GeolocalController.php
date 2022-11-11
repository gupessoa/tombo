<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeolocalRequest;
use App\Http\Requests\UpdateGeolocalRequest;
use App\Models\Geolocal;

class GeolocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geolocals = Geolocal::paginate(10);
        return view('admin.geolocal.index', ['geolocals' => $geolocals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.geolocal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\GeolocalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeolocalRequest $request)
    {
        $geolocal = new Geolocal([
            'nome' => $request->nome
        ]);

        $geolocal->saveOrFail();

        return redirect('/admin/geolocals')->with('success', 'Geolocalização cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Geolocal  $geolocal
     * @return \Illuminate\Http\Response
     */
    public function show(Geolocal $geolocal)
    {
        return view('admin.geolocal.single', ['geolocal' => $geolocal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Geolocal  $geolocal
     * @return \Illuminate\Http\Response
     */
    public function edit(Geolocal $geolocal)
    {
        return view('admin.geolocal.edit', ['geolocal' => $geolocal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\GeolocalRequest  $request
     * @param  \App\Models\Geolocal  $geolocal
     * @return \Illuminate\Http\Response
     */
    public function update(GeolocalRequest $request, Geolocal $geolocal)
    {
        $geolocal->nome = $request->nome;

        $geolocal->saveOrFail();

        return redirect('/admin/geolocals')->with('success', 'Geolocalização atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Geolocal  $geolocal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Geolocal $geolocal)
    {
        $geolocal->deleteOrFail();
        return redirect('/admin/geolocals')->with('success', 'Geolocalização exlcuida com sucesso!');
    }
}
