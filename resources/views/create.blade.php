@extends('templates.template')

@section('content')

<h1 class="text-center mt-3 mb-4">@if(isset($film))Editar @else Cadastrar @endif </h1>

<div class="col-8 m-auto">
    @if(isset($film))
    <form name="formEdit" id="formEdit" method="post" action="{{url("films/$film->id")}}">
      @method('PUT')
    @else
    <form name="formCad" id="formCad" method="post" action="{{url('films')}}">
      @endif
        @csrf
        <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Título:" value="{{$film->titulo ?? ''}}">
        <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição:" value="{{$film->descricao ?? ''}}">
        <input class="form-control" type="text" name="genero" id="genero" placeholder="Gênero:" value="{{$film->genero ?? ''}}">
        <input class="form-control" type="number" name="ano" id="ano" placeholder="Ano:" value="{{$film->ano ?? ''}}">  
        <input class="btn btn-primary" type="submit" @if(isset($film)) value="editar" @else value="cadastrar" @endif >  
</div>
@endsection