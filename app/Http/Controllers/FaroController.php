<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class FaroController extends Controller
{
    public function index()
    {
        //$noticias = Noticia::get();
        $noticias = DB::table('noticias')->select('titulo', 'nombre', 'descripcion', 'imagen')->join('categorias', function (JoinClause $join) {

            $join->on('noticias.categoria_id', '=', 'categorias.id')

                ->where('noticias.categoria_id', '=', 8);
        })
            ->get();

        $categorias = Categoria::pluck('nombre', 'id');

        return view('layouts.deportes', compact('noticias', 'categorias'));
    }

    public function negocios()
    {
        $noticias = DB::table('noticias')->select('titulo', 'nombre', 'descripcion', 'imagen')->join('categorias', function (JoinClause $join) {

            $join->on('noticias.categoria_id', '=', 'categorias.id')

                ->where('noticias.categoria_id', '=', 3);
        })
            ->get();

        $categorias = Categoria::pluck('nombre', 'id');

        return view('layouts.negocios', compact('noticias', 'categorias'));

    }

    public function documentales()
    {
        $noticias = DB::table('noticias')->select('titulo', 'nombre', 'descripcion', 'imagen')->join('categorias', function (JoinClause $join) {

            $join->on('noticias.categoria_id', '=', 'categorias.id')

                ->where('noticias.categoria_id', '=', 4);
        })
            ->get();

        $categorias = Categoria::pluck('nombre', 'id');

        return view('layouts.documentales', compact('noticias', 'categorias'));
    }

    public function politica()
    {
        $noticias = DB::table('noticias')->select('titulo', 'nombre', 'descripcion', 'imagen')->join('categorias', function (JoinClause $join) {

            $join->on('noticias.categoria_id', '=', 'categorias.id')

                ->where('noticias.categoria_id', '=', 7);
        })
            ->get();

        $categorias = Categoria::pluck('nombre', 'id');

        return view('layouts.politica', compact('noticias', 'categorias'));
    }

    public function saludBienestar()
    {
        $noticias = DB::table('noticias')->select('titulo', 'nombre', 'descripcion', 'imagen')->join('categorias', function (JoinClause $join) {

            $join->on('noticias.categoria_id', '=', 'categorias.id')

                ->where('noticias.categoria_id', '=', 5);
        })
            ->get();

        $categorias = Categoria::pluck('nombre', 'id');

        return view('layouts.saludBienestar', compact('noticias', 'categorias'));
    }

    public function ultimasNoticias()
    {
        $noticias = DB::table('noticias')->select('titulo', 'nombre', 'descripcion', 'imagen')->join('categorias', function (JoinClause $join) {

            $join->on('noticias.categoria_id', '=', 'categorias.id')

                ->where('noticias.categoria_id', '=', 6);
        })
            ->get();

        $categorias = Categoria::pluck('nombre', 'id');

        return view('layouts.ultimasNoticias', compact('noticias', 'categorias'));
    }

    //$noticias = Noticia::all();
//INNER JOIN categorias c ON n.categoria_id = c.id WHERE n.categoria_id=2;
}

//SELECT titulo, nombre, descripcion, imagen FROM noticias INNER JOIN categorias ON noticias.categoria_id = categorias.id WHERE noticias.categoria_id = 2;