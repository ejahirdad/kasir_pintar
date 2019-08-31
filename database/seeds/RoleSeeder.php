<?php

use Illuminate\Database\Seeder;

use App\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat role 
        $roles = [
            'owner',
            'staff',
            'admin'
        ];
        $displays = [
            'Owner',
            'Staff',
            'Admin'
        ];

        foreach($roles as $key => $role){

            $newRole = new Role();
            $newRole->name = $role;
            $newRole->display_name = $displays[$key];
            $newRole->save();
        }
    }
}
