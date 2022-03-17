<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Storage::disk('public')->deleteDirectory('posts');
        Storage::disk('public')->makeDirectory('posts');


        $this->call(RoleSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(InstructorSeeder::class);
        $this->call(UserSeeder::class);  
        $this->call(PostSeeder::class);
    }
}
