<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class arrecadacao extends Model
{
    protected $fillable = [
        'mes','ano','faturamento','estorno','saldofaturado','contafaturada','condicao','arrecadacao','contasarrecadadas',
    ];

}
