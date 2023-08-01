<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            "name"=> "Benin",
            "code"=> "BJ",
            "dialCode"=> "+229",
            "continent"=> "Afrique",
        ]);
        Country::create([
            "name"=> "Madagascar",
            "code"=> "MG",
            "dialCode"=> "+261",
            "continent"=> "Afrique",
        ]);
    }
}
