<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:show-payments')->only(['index']);
    }
    
    public function index()
    {

        $payments = Payment::all();
        return view('payment.index', compact('payments'));
    }
}
