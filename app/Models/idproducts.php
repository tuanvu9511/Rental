<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productSpecifications;
use App\Models\productBrands;
use App\Models\productCategories;

class idproducts extends Model
{
    use HasFactory;
    protected $table = "idproducts";
    protected $fillable = 
    [
     'id_productspecification',
     'id_productbrand',
     'id_productcategory'
    ];
    public $timestamps = true;

    public function nameSpecification()
    {
        return $this->hasOne(productSpecifications::class, 'id', 'id_productspecification');
    }
//get Name Brand

    public function nameBrand()
    {
        return $this->hasOne(productBrands::class, 'id', 'id_productbrand');
    }
//get Name Category

    public function nameCategory()
    {
        return $this->hasOne(productCategories::class, 'id', 'id_productcategory');
    }


}
