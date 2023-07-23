<?php

namespace App\Http\Controllers;

use App\Models\SubOrder;
use Illuminate\Http\Request;

class SubOrderController extends Controller
{
    public function pay(SubOrder $suborder){
        $suborder->transactions()->create([
            'transaction_id'=> uniqid('trans-'.$suborder->id),
            'amount_paid'=> $suborder->total_amount,
            'commission'=>  0.05 * $suborder->total_amount
        ]);
           
        return redirect()->to('/admin/transactions')->withMessage('Transaction Created');
    }
}
