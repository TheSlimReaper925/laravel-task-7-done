<?php

use Illuminate\Database\Seeder;
use App\Locations;

class locationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=3; $i < 15; $i++) { 
        	Locations::create([
        		"city"=>"tbilisi",
        		"address"=>"tbilisi".$i,
        		"zip_code"=>"150".$i
        	])
        }
    }
}
