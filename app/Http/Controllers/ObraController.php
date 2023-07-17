<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra;

class ObraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obras = Obra::paginate(5);
        return view('obras.index', compact('obras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obras.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'codigo' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

        $obra = $request->all();

        if ($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenObra = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenObra);
            $obra['imagen'] = $imagenObra;
        }

        // Obtener el ID del usuario autenticado
        $userID = auth()->id();
        $obra['user_id'] = $userID;

        Obra::create($obra);

        return redirect()->route('obras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Obra $obra)
    {
        return view('obras.editar', compact('obra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obra $obra)
{
    $request->validate([
        'titulo' => 'required',
        'descripcion' => 'required',
        'codigo' => 'required',
        'imagen' => 'image|mimes:jpeg,png,svg|max:1024'
    ]);

    $data = $request->all();

    if ($request->hasFile('imagen')) {
        $rutaGuardarImg = 'imagen/';
        $imagenObra = date('YmdHis') . "." . $request->file('imagen')->getClientOriginalExtension();
        $request->file('imagen')->move($rutaGuardarImg, $imagenObra);
        $data['imagen'] = $imagenObra;
    }

    $obra->update($data);

    return redirect()->route('obras.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obra $obra)
    {
        $obra->delete();
        return redirect()->route('obras.index');
    }
}
