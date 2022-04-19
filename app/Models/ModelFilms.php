<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFilms extends Model
{
   protected $table='film';
   protected $fillable=['titulo','descricao','genero','ano'];
}
