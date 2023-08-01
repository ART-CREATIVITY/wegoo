<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $benin = Country::findOrFail(1);
        $madagascar = Country::findOrFail(2);
        Flight::create([
            "name"=> "Place des matyrs",
            "note"=> 4.7,
            "image"=>"assets/images/1.jpg",
            "moving_means"=>["airplane", "cars"],
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam temporibus dolore id consectetur. Odit sequi quam cumque explicabo animi, necessitatibus eveniet dolor aspernatur modi? Minima iure quo nobis repellendus?",
            "country_id"=> $benin->id
        ]);
        Flight::create([
            "name"=> "Porte du non retour",
            "note"=> 4.7,
            "image"=>"assets/images/2.jpg",
            "moving_means"=>["airplane", "cars"],
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam temporibus dolore id consectetur. Odit sequi quam cumque explicabo animi, necessitatibus eveniet dolor aspernatur modi? Minima iure quo nobis repellendus?",
            "country_id"=> $benin->id
        ]);
        Flight::create([
            "name"=> "Nose By",
            "note"=> 4.4,
            "image"=>"assets/images/4a.jpg",
            "moving_means"=>["airplane", "cars"],
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam temporibus dolore id consectetur. Odit sequi quam cumque explicabo animi, necessitatibus eveniet dolor aspernatur modi? Minima iure quo nobis repellendus?",
            "country_id"=> $madagascar->id
        ]);
        Flight::create([
            "name"=> "Kili Awaa",
            "note"=> 4.4,
            "image"=>"assets/images/1.jpg",
            "moving_means"=>["airplane", "cars"],
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam temporibus dolore id consectetur. Odit sequi quam cumque explicabo animi, necessitatibus eveniet dolor aspernatur modi? Minima iure quo nobis repellendus?",
            "country_id"=> $madagascar->id
        ]);
    }
}
