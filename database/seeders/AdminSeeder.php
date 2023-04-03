<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'RIJVI-&-RODH',
            'name' => 'RIJVI & RODH',
            'email' => 'RIJVI&RODH@gmail.com',
            'password' => bcrypt('rr123456'),
            'user_type' => 'admin',
            'refer_code' => uniqid(),
        ]);
        User::create([
            'username' => 'q',
            'name' => 'Frank',
            'email' => 'frank@gmail.com',
            'password' => bcrypt('q'),
            'user_type' => 'admin',
            'refer_code' => uniqid(),
        ]);
    }
}
