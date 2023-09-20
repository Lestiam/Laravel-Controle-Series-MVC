<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];
        return view('series.index')->with('series', $series);//nunca mais usat echo no controller, sempre use return.
        // A função view, busca um arquivo de visualização e dessa view ela monta  resposta.
        // Como segundo parametro eu passo a variavel que vai ser criada nessa view e o conteudo que quero passar, no caso, $series
        //a função with pega o nome da variavel que bate com a minha chave, o mesmo que fazer isso: 'series' => $series
    }

    public function create()
    {
        return view('series.create');
    }
}
