<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'CustomerName', 'Email','Gender','CustomerAge', 'CustomerCity','CustomerPostCode','CustomerCountry','CustomerState','CustomerPhone','AgentFirstName','AgentLastName','AgentGender','AgentAddress','AgentCity','AgentCountry','AgentState',' ',
    ];
}
