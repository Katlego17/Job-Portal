<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a dummy user
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('cubezoo123'),
            'image' => 'profile.jpg', // You can adjust this based on your storage setup
            'cv' => 'Tumiso_Tsagae_CV_ (1).pdf', // You can adjust this based on your storage setup
            'job_title' => 'Software Engineer',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'twitter' => 'https://twitter.com/johndoe',
            'facebook' => 'https://facebook.com/johndoe',
            'linkedin' => 'https://linkedin.com/in/johndoe',
        ]);

        // You can add more dummy users as needed
    }
}
