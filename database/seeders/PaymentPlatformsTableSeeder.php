<?php

namespace Database\Seeders;

use App\Models\PaymentPlatform;
use Illuminate\Database\Seeder;

class PaymentPlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([
            'name' => 'PayPal',
            'img' => 'img/payment-platforms/paypal.jpg'
        ]);

        PaymentPlatform::create([
            'name' => 'Stripe',
            'img' => 'img/payment-platforms/stripe.jpg'
        ]);
    }
}
