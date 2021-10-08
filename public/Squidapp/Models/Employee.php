<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
    protected $fillable = ['name', 'email', 'skills', 'position_id', 'squad_id', 'status'];
}
