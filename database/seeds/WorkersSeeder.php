<?php

use Illuminate\Database\Seeder;
use App\Workers;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=3; $i < 15; $i++) 
        { 
        	Workers::create([
        		"name"=>"cesco".$i,
        		"phone"=>"4141414141".$i,
        		"department_id"=>$i
        	]);
        }
    }
}
