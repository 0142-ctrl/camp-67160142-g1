<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pokedex'] = Pokedex::all();
        return view('pokedexs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Pokedex = new Pokedex;
        $Pokedex->name =  $request->input('name');
        $Pokedex->type =  $request->input('type');
        $Pokedex->species =  $request->input('species');
        $Pokedex->height =  $request->input('height');
        $Pokedex->weight =  $request->input('weight');
        $Pokedex->hp =  $request->input('hp');
        $Pokedex->attack =  $request->input('attack');
        $Pokedex->defense =  $request->input('defense');
        $Pokedex->image_url =  $request->input('image_url');
        $Pokedex->save();

        return redirect('/pokedexs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pokedex = Pokedex::findOrFail($id);
        return view('pokedexs.show', compact('pokedex'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['pokedex_update'] = Pokedex::find($id);
        $data['pokedex'] = Pokedex::all();

        return view('pokedexs.update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Pokedex = Pokedex::find($id);
        $Pokedex->name =  $request->input('name');
        $Pokedex->type =  $request->input('type');
        $Pokedex->species =  $request->input('species');
        $Pokedex->height =  $request->input('height');
        $Pokedex->weight =  $request->input('weight');
        $Pokedex->hp =  $request->input('hp');
        $Pokedex->attack =  $request->input('attack');
        $Pokedex->defense =  $request->input('defense');
        $Pokedex->image_url =  $request->input('image_url');
        $Pokedex->save();

        return redirect('/pokedexs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $Pokedex = Pokedex::find($id) ;
        $Pokedex->delete();
        return redirect('/pokedexs');
    }
}