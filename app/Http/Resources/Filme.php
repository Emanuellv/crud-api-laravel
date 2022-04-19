<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Filme extends JsonResource
{
        public function toArray($request){
          //return parent::toArray($request);
          return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'genero' => $this->genero,
            'ano' => $this->ano,

          ];
        }
      
        /* public function with( $request ){
          return [
            'version' => '1.0.0',
            'author_url' => url('https://terminalroot.com.br')
          ];
        } */
      }
