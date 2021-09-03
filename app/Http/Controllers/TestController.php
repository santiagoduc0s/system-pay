<?php

namespace App\Http\Controllers;

use App\Services\PayPalService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $paypal = new PayPalService();
        return $paypal->capturePayment('8LJ28020VN767114W');
//        return $paypal->createOrder(89.3, 'USD');
    }
}
