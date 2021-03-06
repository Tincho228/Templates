<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Martin Quintero',
            'email' => 'martinquintero521@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        $users = User::factory(10)->create();
        foreach($users as $user){
            $user->plans()->attach([rand(1,2), 3]);    
        }
    }
}
