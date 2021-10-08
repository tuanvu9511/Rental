<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productspecifications extends Model
{
    use HasFactory;
    protected $table = "productspecifications";
    protected $fillable = 
    [
     'nameSpecification'
    ];
    public $timestamps = true;
}
