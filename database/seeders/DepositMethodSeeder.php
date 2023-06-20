<?php

namespace Database\Seeders;

use App\Models\DepositMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepositMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DepositMethod::create([

            'name' => 'Bank transfer',
            'image_url' => 'https://demo.prowallet.pro/uploads/_1640164820.png',
            'fixed_deposit_fee' => 1.2,
            'percentage_deposit_fee' => 1.0,
            'status' => 1,
        ]);
    }
}
