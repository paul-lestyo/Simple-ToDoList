<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Todolist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Todolist::create([
			'todo' => 'membuat sesuatu',
			'children' => [
				[ 'todo' => 'sesuatu pertama' ],
				[ 'todo' => 'sesuatu kedua' ],
				[ 'todo' => 'sesuatu ketiga' ],
			]
		]);
    }
}
