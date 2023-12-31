<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\ProductsDetailsResource;
use  App\Models\Products;
use  App\Models\ProductsRating;
use App\Models\ProuductsDiscount;
use App\Models\SubCategories;
use App\Models\delivery_price;




class ProductDetailsController extends Controller
{

    public function similar_products(string $id){
        $arr[]=[];
        $i=0;
        $product=Products::where('sub_cat_id',$id)->get();
        foreach($product as $prd){
            if($prd->quantity > 0){
                $arr[$i]=$prd;
                $i++;
            }
        }
        return $arr;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $details= Products::find($id);
       
        return  [$details];

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
