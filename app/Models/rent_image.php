<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rent_image extends Model
{
    public  function rentproperty(){
        return $this->belongsTo('App\Models\rentproperty');
    }
    use HasFactory;
}
