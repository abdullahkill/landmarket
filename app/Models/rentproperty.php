<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rentproperty extends Model
{

    public function rent_image(){
        return $this->hasMany('App\Models\rent_image');
    }
    
    use HasFactory;

    public $timestamps=false;

    protected $fillable = [
        'Name', 'Phone','Email','EmgContact','Area','Description','price','Image',
    ];
} 
