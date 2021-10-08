<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jobinputs;

class partnerproducts extends Model
{
    use HasFactory;
    protected $table = "partnerproducts";
    protected $fillable = 
    [
     'id_jobinput',
     'status',
     'ended_at',
    ];
    public $timestamps = true;
    public function connect_jobinputs(){
        return $this->hasOne(jobinputs::class,'id','id_jobinput');
    }
}
