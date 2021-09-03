<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            'use',
            'eur',
            'gbp'
        ];

        foreach ($currencies as $currency) {
            Currency::create([
                'iso' => $currency
            ]);
        }
    }
}
