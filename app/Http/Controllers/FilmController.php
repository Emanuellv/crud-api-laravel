<?php

namespace App\Http\Controllers;

use App\Models\ModelFilms as ModelFilms;
use App\Http\Resources\Filme as FilmeResource;
use Exception;
use Illuminate\Http\Request;

class FilmController extends Controller {

  public function index(){
    $films = ModelFilms::paginate(15);
    return FilmeResource::collection($films);
  }

  public function show($id){
   

    try{
      $films = ModelFilms::findOrFail( $id );
      return new FilmeResource($films);
  }catch(\Exception $erro){

      throw new \Exception('produto não pode ser cadastrado', 500);

  }

}

  public function store(Request $request){
     $films = new ModelFilms;
     $films->titulo = $request->input('titulo');
     $films->descricao = $request->input('descricao');
     $films->genero = $request->input('genero');
     $films->ano = $request->input('ano');
    if(  $films->save() ){
      return new FilmeResource($films);
    }
  }

   public function update(Request $request){
     $films = ModelFilms::findOrFail( $request->id );
     $films->titulo = $request->input('titulo');
     $films->descricao = $request->input('descricao');
     $films->genero = $request->input('genero');
     $films->ano = $request->input('ano');

    if(  $films->save() ){
      return new FilmeResource($films);
    }
  } 

  public function destroy($id){
     $films = ModelFilms::findOrFail($id);
    if($films->delete() ){
      return new FilmeResource($films);
    }

  }
}