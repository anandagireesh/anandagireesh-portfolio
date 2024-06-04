<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::Where('email','tripti2k24@gmail.com')->first();
        if(!$user){
            User::create([
                'name' => 'Anand M S',
                'email' => 'anandagireesh@gmail.com',
                'password' => Hash::make('Veda@gireesh_123'),
                'role' => 'Super Admin',
                'bio' => 'A back-end developer from India with over 6 years of experience. I\'m proficient in Golang and have a strong understanding of Laravel, having built several web applications using this framework. I also have a Master\'s degree in Computer Application and hold theoretical knowledge of Docker, Jenkins, and AWS.',
                'website' => 'https://anandagireesh.me/',
                'facebook' => 'https://www.facebook.com/anandagireesh/',
                'twitter' => 'https://x.com/anandagireesh',
                'instagram' => 'https://www.instagram.com/anandagireesh/',
                'linkedin' => 'https://www.linkedin.com/in/anandagireesh/',
                'github' => 'https://github.com/anandagireesh',
                'gitlab' => 'https://gitlab.com/anandagireesh',
                'phone' => '+971- 55 996 8603',
            ]);
        }
    }
}
