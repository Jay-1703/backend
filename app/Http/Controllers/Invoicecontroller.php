<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Invoicecontroller extends Controller
{
    function generateBill(Request $req){
         $res = DB::table('invoice')->insert([
             'bill_no'=>$req[0]['billNo'],
             'bill_from'=>$req[0]['billFrom'],
             'bill_to'=>$req[0]['billTo'],
             'address_1'=>$req[0]['address_1'],
             'address_2'=>$req[0]['address_2'],
             'city'=>$req[0]['city'],
             'state'=>$req[0]['state'],
             'pincode_no'=>$req[0]['pincode_no'],
             'gst_no'=>$req[0]['gst_no'],
             'date'=>$req[0]['billDate'],
         ]);
         $res1 = DB::table('orders')->insert([
             'order_no'=>$req[1]['order_no'],
             'item_name'=>$req[1]['item_name'], 
             'qty'=>$req[1]['qty'],
             'gst_percentage'=>$req[1]['gst_percentage'],
             'price'=>$req[1]['price'],
             'subtotal_price'=>$req[1]['subtotal'],
             'total_price'=>$req[1]['total'],
             'bill_id'=>$req[0]['billNo'],
         ]); 
         if ($res == true && $res1 == true) {
             return ["messeage"=>"Bill generated successfully !!","status"=>200];   
         }
         else{
             return ["messeage"=>"Bill not generated successfully !!","status"=>500];   
         }
    }
}
