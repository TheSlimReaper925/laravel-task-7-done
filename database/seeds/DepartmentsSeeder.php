<?php

use Illuminate\Database\Seeder;
use App\Departments;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=3; $i < 15; $i++) { 
        	Departments::create([
        		"department_name"=>"department".$i,
        		"location_id"=>$i
        	])
        }
    }
}
