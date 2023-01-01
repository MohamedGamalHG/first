<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    public function run()
    {
        Db::table('users')->delete();
        User::updateOrCreate([
            'name'=>'admin',
            'email' => 'admin@admin.com',
            'password'=> \Hash::make('123456789')
        ]);
    }
}
