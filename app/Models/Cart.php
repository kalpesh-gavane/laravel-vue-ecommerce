<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'cart';


    public function products(){

        return $this->hasOne('App\Models\Products','product_id','product_id');
        
    }
}
