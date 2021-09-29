<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productbrand;
use App\Models\productcategory;
use App\Models\productspecification;
use App\Models\supplier;

class mainwarehouse extends Model
{
    use HasFactory;
    protected $table="mainwarehouses";
    protected $fillable = 
    ['nameproduct','id_productbrand','id_productspeciafication','id_productcategory','id_supplier','quantity','quantityused'];
    public $timestamps = true;

    public function brand()
    {
        return $this->hasOne(productbrand::class,'id_productbrand','id');
    }
    public function category()
    {
        return $this->hasOne(productcategory::class,'id_','id');
    }
    public function specification()
    {
        return $this->hasOne(productspecification::class,'id_productspeciafication','id');
    }
    public function supplier()
    {
        return $this->hasOne(supplier::class,'id_supplier','id');
    }
}
