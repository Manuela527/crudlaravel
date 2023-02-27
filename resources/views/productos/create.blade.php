@extends('layouts.app')

@section('title','Create')

@section('content')

<form action="{{route('Productos.store')}}" method="post"
 class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
@csrf
    <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Crear Productos</h2>

    <input class="my-2 w-full bg-gray-200 P-2 text-lg rounded placeholder-gray-900"
    placeholder="Titulo" name="Titulo">

    <input class="my-2 w-full bg-gray-200 P-2 text-lg rounded placeholder-gray-900"
    placeholder="Ciudad" name="Ciudad">

    <input class="my-2 w-full bg-gray-200 P-2 text-lg rounded placeholder-gray-900"
    placeholder="Precio" name="Precio">

    <button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-600">Crear</button>
</form>


@endsection