<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    $this->call(CoreDataSeeder::class);
    $this->call(DepartmentSeed::class);
    $this->call(EduactionSeeder::class);
    $this->call(GradeSeed::class);
    $this->call(DemoDataSeeder::class);
  }
}
