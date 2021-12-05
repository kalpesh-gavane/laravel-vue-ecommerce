<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GarmentProducts extends Model
{
    use HasFactory;
    protected $table = 'garments_products';

    public function variants(){

        return $this->hasMany('App\Models\Variant','product_id','product_id');


    }
}
