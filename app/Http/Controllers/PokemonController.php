<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pokemon;

class PokemonController extends Controller
{
    public function index()
    {
        return Pokemon::all();
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $pokemon = new Pokemon($input);
        if (!$pokemon->save()) {
            abort(500, "Não foi possivel salvar.");
        }
        return $pokemon;
    }

    public function show($id)
    {
        return Pokemon::find($id);
    }

    public function update($id, Request $request)
    {
        $pokemon = Pokemon::find($id);
        $input = $request->all();

        if(!$pokemon){
            $pokemon = new Pokemon($input);
        }
        $input = $request->all();
        foreach ($input as $k => $v){
            $pokemon->$k = $v;
        }

        if (!$pokemon->save()) {
            abort(500, "Não foi possivel atualisar");
        }
        return $pokemon;

    }

    public function destroy($id)
    {
        return Pokemon::destroy($id);
    }
}

