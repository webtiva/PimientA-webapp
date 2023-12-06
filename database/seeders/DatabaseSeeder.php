<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\ProgramaAnalitico;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('programa_analiticos')->insert([
            'codigo' => random_int(1000000, 9999999),
            'materia' => 'Astrofísica I',
            'n_hojas' => random_int(5, 10),
            'img_pages_path' => Str::random(30),
        ]);
        DB::table('programa_analiticos')->insert([
            'codigo' => random_int(1000000, 9999999),
            'materia' => 'Física I',
            'n_hojas' => random_int(5, 10),
            'img_pages_path' => Str::random(30),
        ]);
        DB::table('programa_analiticos')->insert([
            'codigo' => random_int(1000000, 9999999),
            'materia' => 'Física II',
            'n_hojas' => random_int(5, 10),
            'img_pages_path' => Str::random(30),
        ]);
        DB::table('programa_analiticos')->insert([
            'codigo' => random_int(1000000, 9999999),
            'materia' => 'Física Computacional',
            'n_hojas' => random_int(5, 10),
            'img_pages_path' => Str::random(30),
        ]);
    }
}
