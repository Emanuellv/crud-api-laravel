<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelFilms;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $objFilm;

    public function __construct()
    {
        $this->objFilm=new ModelFilms();
    }
    public function index()
    {
        $film=$this->objFilm->all();
        return view("index", compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objFilm->create([
            'titulo'=>$request->titulo,
            'descricao'=>$request->descricao,
            'genero'=>$request->genero,
            'ano'=>$request->ano
        ]);
        if($cad){
            return redirect('films');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film=$this->objFilm->find($id);
        return view ("show", compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film=$this->objFilm->find($id);
        return view("create", compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objFilm->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'descricao'=>$request->descricao,
            'genero'=>$request->genero,
            'ano'=>$request->ano
        ]);
        return redirect('films');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $del=$this->objFilm->destroy($id);
    return($del)?"sim":"não";
    }
 
}
