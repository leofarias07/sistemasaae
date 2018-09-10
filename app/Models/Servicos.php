<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\setorcomercial;

class servicos extends Model
{
     public function setor()
    {
        return $this->hasOne(setorcomercial::Class);
    }
}
