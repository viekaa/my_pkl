<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// import

use DB;
use App\Models\User;
class UsersSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        
        user::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rahasia'),
            'isAdmin' =>1,
        ]);
         user::create([
            'name' => 'Member',
            'email' => 'member@gmail.com',
            'password' => bcrypt('rahasia'),
            'isAdmin' =>0,
        ]);
    }
}
