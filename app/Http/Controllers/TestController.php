<?php

namespace App\Http\Controllers;

use App\Resolvers\PaymentPlatformResolver;
use App\Services\PayPalService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $x = new PaymentPlatformResolver();
        $x->resolveService(1);
    }
}
