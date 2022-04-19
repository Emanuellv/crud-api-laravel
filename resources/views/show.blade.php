@extends('templates.template')

@section('content')

<h1 class="text-center"> Visualizar </h1>

<div class="col-8 m-auto">
   Titulo: {{$film->titulo}}<br>
   Descrição: {{$film->descricao}}<br>
   Gênero: {{$film->genero}}<br>
   Ano: {{$film->ano}}<br>
</div>
@endsection