<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_in = new User();
        $user_in->name = 'Roy';
        $user_in->email = 'roy@gmail.com';
        $user_in->password = bcrypt('roy');
        $user_in->save();
        $user_in->attachRole('owner');
        
        $user_in = new User();
        $user_in->name = 'Eja';
        $user_in->email = 'eja@gmail.com';
        $user_in->password = bcrypt('eja');
        $user_in->save();
        $user_in->attachRole('staff');
        
        $user_in = new User();
        $user_in->name = 'Hirdad';
        $user_in->email = 'hirdad@gmail.com';
        $user_in->password = bcrypt('hirdad');
        $user_in->save();
        $user_in->attachRole('admin');

    }
}
