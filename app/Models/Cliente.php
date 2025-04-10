<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'cpf',
        'email',
        'senha'
    ];

    protected $hidden = [
        'senha',
        'remember_token'
    ];

    public function pedidos()
    {
        //return $this->hasMan
    }



}
