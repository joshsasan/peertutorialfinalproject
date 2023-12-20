<?php

namespace Database\Seeders;
use App\Models\Percussion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PercussionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Percussion::factory(20)->create();
    }
}
