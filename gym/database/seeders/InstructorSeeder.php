<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instructors = Instructor::factory(3)->create();
        foreach($instructors as $instructor){
           /* Image::factory(1)->create([
                'imageable_id' => $categoria->id,
                'imageable_type' => Categoria::class
            ]);*/
            Image::factory(1)->create([
                'imageable_id' => $instructor->id,
                'imageable_type' => Instructor::class
            ]);
        }
    }
}
