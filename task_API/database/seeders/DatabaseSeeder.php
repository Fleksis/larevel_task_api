<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'board_id' => 'task',
            'color' => 'red',
            'title' => 'Alberts',
            'description' => 'asdasdasd',
        ]);
    }
}
