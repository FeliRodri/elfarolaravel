<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class NoticiaController
 * @package App\Http\Controllers
 */
class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['noticias'] = Noticia::paginate(5);

        return view('noticia.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noticia = new Noticia();
        $categorias = Categoria::pluck('nombre', 'id');


        return view('noticia.create', compact('noticia', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsPost = new Noticia();
        request()->validate(Noticia::$rules);

        //$datosNoticia = request()->all();
        $datosNoticia = request()->except('_token');
        if ($request->hasFile('imagen')) {
            $datosNoticia['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }
        Noticia::insert($datosNoticia);

        //return response()->json($datosNoticia);

        //return response()->json($noticia);

        // if ($request->hasFile('imagen')) {

        //     $imagen = $request->file('imagen');
        //     $destinationPath = 'storage/uploads';
        //     $newsImagen = date('YmdHis') . "." . $imagen->getClientOriginalName();
        //     $uploadSucess = $request->file('imagen')->move($destinationPath, $newsImagen);
        //     $newsPost->imagen = $destinationPath . $newsImagen;

        // }

        return redirect()->route('noticias.index')->with('success', 'Noticia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);

        return view('noticia.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$noticia = Noticia::find($id);
        $noticia = Noticia::findOrFail($id);
        $categorias = Categoria::pluck('nombre', 'id');

        return view('noticia.edit', compact('noticia', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Noticia $noticia
     * @return \Illuminate\Http\Response
     */
    // Noticia::insert($datosNoticia);
    // Storage::delete('public/' . $noticia->imagen);

    // $imagen = $request->file('imagen');
    // $destinationPath = 'storage/uploads';
    // $newsImagen = date('YmdHis') . "." . $imagen->getClientOriginalName();
    // $uploadSucess = $request->file('imagen')->move($destinationPath, $newsImagen);
    // $newsPost->imagen = $destinationPath . $newsImagen;
    //$noticia['imagen'] = $request->file('imagen')->store('uploads', 'public');
    public function update(Request $request, $id)
    {
        $datosNoticia = request()->except(['_token', '_method']);

        if ($request->hasFile('imagen')) {

            $noticia = Noticia::findOrFail($id);

            Storage::delete('public/' . $noticia->imagen);

            $datosNoticia['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }

        Noticia::where('id', '=', $id)->update($datosNoticia);

        $noticia = Noticia::findOrFail($id);

        return redirect()->route('noticias.index', compact('noticia'))
            ->with('success', 'Noticia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $noticia = Noticia::find($id)->delete();

        return redirect()->route('noticias.index')
            ->with('success', 'Noticia eliminada con exito');
    }
}