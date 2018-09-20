<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\setorcomercial;

class servicos extends Model
{
     protected $fillable = [
        'setorcomercials_id','descricao','condicao',
    ];
}
