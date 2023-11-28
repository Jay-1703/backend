<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Getbilldatacontroller extends Controller
{
    function getBillData(Request $req){
        $billData = DB::table('invoice')->select('invoice.*','orders.*')->where('invoice.bill_no', $req->id)->join('orders', 'invoice.bill_no', '=', 'orders.bill_id')->get();
        return $billData;
    }
}
