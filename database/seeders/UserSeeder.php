<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $users = new User();
        // $users->name = "Donaxi";
        // $users->username = "Do";
        // $users->email = "donax123@gmail.com";
        // $users->password = bcrypt("12345");
        // $users->role_id = 1;
        // $users->save();

        // $users2 = new User();
        // $users2->name = "Donaxi";
        // $users2->username = "Dona";
        // $users2->email = "x334@gmail.com";
        // $users2->password = bcrypt("12345");
        // $users2->role_id = 1;
        // $users2->save();

        // $users3 = new User();
        // $users3->name = "Donaxi";
        // $users3->username = "Donaxi00";
        // $users3->email = "donaxkakd0@gmail.com";
        // $users3->password = bcrypt("12345");
        // $users3->role_id = 1;
        // $users3->save();

        User::factory(5)->create();
    }
}
