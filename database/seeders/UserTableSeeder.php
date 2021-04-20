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
            "password" => bcrypt("admin"),
            "status" => "Работает",
            "hiredate" => date('Y-m-d'),
            "wage" => "30000",
            "percent" => "50",
            "salary" => "300000",
        ]);
        $role = Role::create([
            "name" => "Админ",
            "slug" => "admin"
        ]);
        $user->roles()->attach($role);

        $user = User::create([
            "name" => "user",
            "email" => "user@user.ru",
            "password" => bcrypt("user"),
            "status" => "Уволен",
            "hiredate" => date('Y-m-d'),
            "wage" => "20000",
            "percent" => "40",
            "salary" => "200000",
        ]);
        $role = Role::create([
            "name" => "Пользователь",
            "slug" => "user"
        ]);
        $user->roles()->attach($role);

        $user = User::create([
            "name" => "director",
            "email" => "director@director.ru",
            "password" => bcrypt("director"),
            "status" => "Работает",
            "hiredate" => date('Y-m-d'),
            "wage" => "10000",
            "percent" => "30",
            "salary" => "100000",
        ]);
        $role = Role::create([
            "name" => "Директор",
            "slug" => "director"
        ]);
        $user->roles()->attach($role);
        $role = Role::create([
            "name" => "Бухгалтер",
            "slug" => "accountant"
        ]);
    }
}
