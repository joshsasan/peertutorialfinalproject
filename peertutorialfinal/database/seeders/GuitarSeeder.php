<?php

namespace Database\Seeders;
use App\Models\Guitar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuitarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guitar::factory(20)->create();
    }
}
