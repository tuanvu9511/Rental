<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\idproducts;
use App\Models\suppliers;

class warehouse extends Model
{
    use HasFactory;
    protected $table = "warehouse";
    protected $fillable = 
    [
     'id_idproduct',
     'id_supplier',
     'quantity',
    ];
    public $timestamps = true;
    public function connect_idproducts()
    {
        return $this->hasOne(idproducts::class,'id','id_idproduct');
    }
    public function connect_suppliers()
    {
        return $this->hasOne(suppliers::class,'id','id_supplier');
    }
}
