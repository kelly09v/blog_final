@extends('web.layout')
@section('content')

<x-web.blog.post.index :posts='$posts'>
    <h2>listado de publicaciones </h2>
    @slot('header')
    <h2 class="font-semibold text-xl text-red-500 leading-tight">
        listado principal de publicacion

    </h2>
    @endslot
    @slot('footer')
   <footer>
    pie de pagina 
   </footer>
    @endslot
</x-web.blog.post.index>
@endsection


