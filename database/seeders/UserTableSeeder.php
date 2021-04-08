<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "admin",
            "email" => "admin@admin.ru",
            "password" => bcrypt("admin")
        ]);
        $role = Role::create([
            "name" => "Админ",
            "slug" => "admin"
        ]);
        $user->roles()->attach($role);

        $user = User::create([
            "name" => "user",
            "email" => "user@user.ru",
            "password" => bcrypt("user")
        ]);
        $role = Role::create([
            "name" => "Пользователь",
            "slug" => "user"
        ]);
        $user->roles()->attach($role);

        $user = User::create([
            "name" => "director",
            "email" => "director@director.ru",
            "password" => bcrypt("director")
        ]);
        $role = Role::create([
            "name" => "Директор",
            "slug" => "director"
        ]);
        $user->roles()->attach($role);
    }
}
