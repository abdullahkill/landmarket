<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    public function propertyImage(){
        return $this->hasMany('App\Models\propertyImage');
    }
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'PropertyTittle','Propertyaddress', 'Propertytype','Propertyprice','City', 'Area','Description','Image',
    ];
}
