{{-- A diretiva @extends é usada para herdar do layout (main.blade.php) no arquivo contact.blade.php --}}
@extends('layout.main')

{{-- O @section define a sessão do conteúdo --}}
@section('content')
    <h1>Página de Contato</h1>
@stop

@section('footer')
    <script>alert("Olá Mundo Laravel !!")</script>
@stop