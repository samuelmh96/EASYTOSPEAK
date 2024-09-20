<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = ['A1', 'A2', 'B1', 'B2', 'C1', 'C2'];
        foreach ($levels as $level) {
            Level::create([
                'name' => $level
            ]);
        }
    }
}
