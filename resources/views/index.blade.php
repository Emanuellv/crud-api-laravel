@extends('templates.template')

@section('content')

<h1 class="text-center"> Crud </h1>

<div class="text-center">
    <a href="{{url('films/create')}}">
            <button class="btn btn-success">Cadastrar</button>
     </a>
</div>
<div class="col-8 m-auto">
    @csrf
<table class="table text-center mt-3 mb-4">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descrição</th>
      <th scope="col">Gênero</th>
      <th scope="col">Ano</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($film as $films)
    <tr>
      <th scope="row">{{$films->id}}</th>
      <td>{{$films->titulo}}</td>
      <td>{{$films->descricao}}</td>
      <td>{{$films->genero}}</td>
      <td>{{$films->ano}}</td>
      <td>
        <a href="{{url("films/$films->id")}}">
            <button class="btn btn-dark">Visualizar</button>
        </a>
        <a href="{{url("films/$films->id/edit")}}">
            <button class="btn btn-primary">Editar</button>
        </a>
        <a href="{{url("films/$films->id")}}" class="js-del">
            <button class="btn btn-danger">Deletar</button>
        </a>
        </td>
    </tr>
  @endforeach
  

  </tbody>
</table>

</div>
@endsection