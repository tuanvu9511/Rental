<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\idproducts;

class myproducts extends Model
{
    use HasFactory;
    protected $table = "myproducts";
    protected $fillable = 
    [
     'id_idproduct',
     'quantity',
     'id_jobinput',
    ];
    public $timestamps = true;

    public function connect_idproducts()
    {
        return $this->hasOne(idproducts::class,'id','id_idproduct');
    }



}
