<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class product_photos extends Model
{
    use HasFactory;

    protected $table="product_photos";

    public function  Products (){

        return $this->belongsTo(product_photos::class);
    }
    protected $fillable = ['prd_id','path','created_at'];

}
