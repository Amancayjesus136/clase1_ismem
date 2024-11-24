<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
        $paises = Pais::orderBy('id_pais', 'asc')->get();
        return view('config.pais', compact('paises'));
    }

    public function store(Request $request)
    {
        Pais::create($request->all());
        return redirect()->back()->with('success', 'País creado exitosamente.');
    }
}
