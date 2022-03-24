<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Image;
use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $categorias = Categoria::factory(6)->create();
        foreach($categorias as $categoria){
            Image::factory(1)->create([
                'imageable_id' => $categoria->id,
                'imageable_type' => Categoria::class
            ]);
        }
    }
}
