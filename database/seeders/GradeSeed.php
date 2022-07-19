<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'name'              => 'Grade 1',
        ]);
        Grade::create([
            'name'              => 'Grade 2',
        ]);
        Grade::create([
            'name'              => 'Grade 3',
        ]);
        Grade::create([
            'name'              => 'Grade 4',
        ]);
        Grade::create([
            'name'              => 'Grade 5',
        ]);
        Grade::create([
            'name'              => 'Grade 6',
        ]);
        Grade::create([
            'name'              => 'Grade 7',
        ]);
       
    }
}
