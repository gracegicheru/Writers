<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;

class PaymentController extends Controller
{
    public function Payment(Request $request){
        $orderdetails = json_decode($request->input('orderdetails'));
        $orderNo=$request->input('orderNo');

        $payments = new Payment;
        $payments->orderNo= $orderNo;
        $payments->order_id =$orderdetails->id;
        $payments->payer_id = $orderdetails->payer->payer_id;
        $payments->email_address = $orderdetails->payer->email_address;
        $payments->amount = $orderdetails->purchase_units[0]->amount->value;
        $payments->payment_status = $orderdetails->status;
        $payments->create_time = $orderdetails->create_time;

        $payments->save();

//        return response()->json([
//            'status'=>'ok',
//            'details'=>$orderdetails
//        ]);


    }


}
