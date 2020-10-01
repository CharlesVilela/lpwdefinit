<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'salario',
    ];

    public function getNome(){
        return $this->attributes['nome'];
    }

    public function setNome(String $nome){
        $this->attributes['nome'];
   }

    public function getCPF(){
        return $this->attributes['cpf'];
    }

    public function setCPF(String $cpf){
        $this->attributes['cpf'];
   }

    public function getSalario(){
        return $this->attributes['salario'];
    }

    public function setSalario(String $salario){
        $this->attributes['salario'];
   }

}
