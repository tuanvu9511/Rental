<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productbrands extends Model
{
    use HasFactory;
    protected $table = "productbrands";
    protected $fillable = 
    [
     'namebrand'
    ];
    public $timestamps = true;
}
