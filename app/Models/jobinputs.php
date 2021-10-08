<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\idproducts;
use App\Models\suppliers;
use App\Models\typejobs;

class jobinputs extends Model
{
    use HasFactory;
    protected $table = "jobinputs";
    protected $fillable = 
    [
     'id_typejob',
     'id_idproduct',
     'id_supplier',
     'quantity',
     'note'
    ];
    public $timestamps = true;
    public function connect_idproducts()
    {
        return $this->hasOne(idproducts::class, 'id', 'id_idproduct');
    }

    public function connect_suppliers()
    {
        return $this->hasOne(suppliers::class, 'id', 'id_supplier');
    }

    public function connect_typejobs()
    {
        return $this->hasOne(typejobs::class, 'id', 'id_typejob');
    }
}
