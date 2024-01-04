<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $primarykey = "id";
    function group()
    {
        return $this->hasOne('App\Models\group','id','group_id');
    }
}
