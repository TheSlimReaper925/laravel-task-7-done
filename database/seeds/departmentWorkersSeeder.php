<?php

use Illuminate\Database\Seeder;
use App\DepartmentWorkers;

class departmentWorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=5; $i < 15; $i++) { 
        	DepartmentWorkers::create([
        		"user_id"=>$i,
        		"department_id"=>$i
        	])
        }
    }
}
