<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable =[
        //atributos da model
        'id',
        'nome'
    ];

    protected $table= 'pessoas';

    public function telefone(){
        return $this->hasMany(Telefone::class,'pessoa_id');
    }

}
