<?php

namespace App\Http\Controllers;

use App\Services\PayPalService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $rules = [
            'value'             => ['required', 'numeric', 'min:5'],
            'currency'          => ['required', 'exists:currencies,iso'],
            'payment_platform'   => ['required', 'exists:payment_platforms,id']
        ];
        $request->validate($rules);

        $paypal = new PayPalService();

        return $paypal->handlePayment($request);
    }

    public function approval(Request $request)
    {
        $paypal = new PayPalService();

        return $paypal->handleApproval($request);
    }

    public function cancelled()
    {
        return 'error';
    }
}
