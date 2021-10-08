<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typejobs extends Model
{
    use HasFactory;
    protected $table = "typejobs";
    protected $fillable = 
    [
     'namejob'
    ];
    public $timestamps = true;
}
