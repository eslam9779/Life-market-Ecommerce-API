<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;


class OrderConroller extends Controller
{

    //calc_total_income
    public function calc_total_income()
    {
        $income=order::all("total");
        $total=0;
        foreach ($income as $number)
        {
            $total+=$number["total"];
        }
        return $total;
    }
    //get orders count
    public function getordercount()
    {
        $orders=order::all();
        return count($orders);
    }
   
    // get order id and date
    public function get_orders_id_and_date()
    {
        $orders=order::all(["id","created_at"]);
        return $orders;
    }


    public function index()
    {
        $orders=order::all();
        return $orders;
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
        //
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
