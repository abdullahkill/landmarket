<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propertyImage extends Model
{

    public  function property(){
        return $this->belongsTo('App\Models\property');
    }
    use HasFactory;
}
