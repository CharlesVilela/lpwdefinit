<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Livro extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'autor',
        'genero',
    ];

    public function getTitulo(){
        return $this->attributes['titulo'];
    }

    public function setTitulo(String $titulo){
        $this->attributes['titulo'];
   }

    public function getAutor(){
        return $this->attributes['autor'];
    }

    public function setAutor(String $autor){
        $this->attributes['autor'];
   }

    public function getGenero(){
        return $this->attributes['genero'];
    }

    public function setGenero(String $genero){
        $this->attributes['genero'];
   }


}
