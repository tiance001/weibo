<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = 'BruceQi';
        $user->email = '1340618494@qq.com';
        $user->save();
    }
}
