<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    
    public function index(){

        $Productos= Producto::all();
        return view('Productos.index',compact('Productos'));
    }

    public function create(){

        return view('Productos.create');
    }

    public function store(Request $request){

        $producto = new Producto();

        $producto->Titulo = $request->Titulo;
        $producto->Ciudad = $request->Ciudad;
        $producto->Precio = $request->Precio;

        $producto->save();

        return redirect()->route('Productos.index');

    }
}

