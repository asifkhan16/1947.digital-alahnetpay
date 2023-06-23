<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'country_name' => 'America',
            'country_code' => "US",
            'currency_code' => 'USD'
        ]);
        Currency::create([
            'country_name' => 'Europe',
            'country_code' => "EU",
            'currency_code' => 'EUR'
        ]);
        Currency::create([
            'country_name' => 'Pakistan',
            'country_code' => "PK",
            'currency_code' => 'PKR'
        ]);
    }
}
