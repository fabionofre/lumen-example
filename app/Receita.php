<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Receita extends Model implements
{



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao', 'data', 'valor', 'tipo', 'id_tipo_r', 'id_conta', 'id_cliente'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    
}
