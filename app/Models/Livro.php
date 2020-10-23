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
        'quantidade'
    ];

    public function getTitulo(){
        return $this->attributes['titulo'];
    }

    public function setTitulo(String $titulo){
        $this->attributes['titulo'] = $titulo;
   }

    public function getAutor(){
        return $this->attributes['autor'];
    }

    public function setAutor(String $autor){
        $this->attributes['autor'] = $autor;
   }

    public function getGenero(){
        return $this->attributes['genero'];
    }

    public function setGenero(String $genero){
        $this->attributes['genero'] = $genero;
   }

   public function getQuantidade(){
    return $this->attributes['quantidade'];
}

public function setQuantidade(int $quantidade){
    $this->attributes['quantidade'] = $quantidade;
}

public function reservarLivro()
    {
      //  $quantidade = $this->$quantidade;
        //$quantidade->getQuantidade() - 1;
        //$this->setQuantidade($quantidade);
    }

}
