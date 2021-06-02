<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auction extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'PropertyTittle','Propertyaddress', 'Propertytype','Propertyprice','City', 'Area','Description','contact','Timer','bidamount','Image',
    ];
}
