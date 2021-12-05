<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    protected $table = 'products';

    public function variants(){

        return $this->hasMany('App\Models\Variant','product_id','product_id');


    }
}
