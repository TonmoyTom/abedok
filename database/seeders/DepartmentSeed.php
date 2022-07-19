<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\District;
use App\Models\Grade;
use App\Models\PostOffice;
use App\Models\Upazila;
use Illuminate\Database\Seeder;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name'              => 'Bangladesh Navy',
        ]);
        Department::create([
            'name'              => 'Ministry of Railway',
        ]);
        Department::create([
            'name'              => 'Bangladesh Bank',
        ]);
        Department::create([
            'name'              => 'Bangladesh Job',
        ]);
        Department::create([
            'name'              => 'Bangladesh Highway',
        ]);
        Department::create([
            'name'              => 'Bangladesh government',
        ]);
      
    }
   
}
