<?php

namespace Database\Factories;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    
    protected $model = Plan::class;

    public function definition()
    {
            $name = $this->faker->unique()->sentence(1);
            return [
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => $this->faker->numberBetween(10,100),
            'description' => $this->faker->paragraph(2),
            'user_id'=> 1
        ];
    }
}
