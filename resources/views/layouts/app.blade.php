<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Tailwind CSS Link Funciona similar a bootstrap-->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
  </head>
  <body class= "bg-gray-100 text-gray-800">

    <nav class="h-16 flex justify-end py-4 px-16"> 
    <a href="{{route('Productos.index')}}" class="border border-green-500 
    rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Productos</a>

    <a href="{{route('Productos.create')}}"  class="text-white rounded px-4 pt-1 h-10 bg-green-500 font-semibold mx-2 hover:bg-blue-600">Crear</a>
  </nav>
<main class="p-16 flex justify-center">
    @yield('content')
</main>
</body>