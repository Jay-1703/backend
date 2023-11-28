<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Getordersrecordscontroller extends Controller
{
    function getCustomersData(){
        $orderList = DB::table('invoice')->select('invoice.*', 'orders.*')->join('orders', 'invoice.bill_no', '=', 'orders.bill_id')->get();
        return $orderList;
    }
}
