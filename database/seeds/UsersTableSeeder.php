<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


                User::create([
                 'role_id'=>1,
                 'email'=>'Admin@gmail.com',
                 'password'=>bcrypt('Admin'),
                 'fname'=>'John',
                 'mname'=>'Cabral',
                 'lname'=>'David',
    
                'remember_token'=>str_random(10)


            ]); 
/*        User::create([
                 'role_id'=>1,
                 'active'=>1,
                 'username'=>'Admin@gmail.com',
                 'email'=>'Admin@gmail.com',
                 'password'=>bcrypt('Admin'),
        		 'first_name'=>'John',
                 'middle_name'=>'Cabral',
                 'last_name'=>'David',
                 'address'=>'sample',
                 'gender'=>'male',
        		  'city'=>'sample',
                  'zip_code'=>'sample',
                  'contact_no'=>'09124941',
                  'birth_date'=>'1997-10-14',
        		'remember_token'=>str_random(10)


        	]); */
           /*  User::create([
                'role_id'=>3,
                'active'=>1,
                'username'=>'staff',
                 'email'=>'staff@gmail.com',
                 'password'=>bcrypt('staff'),
                 'first_name'=>'Ian',
                 'middle_name'=>'Kobra',
                 'last_name'=>'Avena',
                 'address'=>'sample',
                  'city'=>'sample',
                  'zip_code'=>'sample',
                  'contact_no'=>'09124941',
                  'birth_date'=>'1997-10-14',
                'remember_token'=>str_random(10)

            ]); */
             /* User::create([
                'role_id'=>3,
                'active'=>1,
                'first_name'=>'Elisha',
                 'middle_name'=>'',
                  'last_name'=>'David',
                 'username'=>'Staff',
                 'email'=>'Elisha@gmail.com',
                 'password'=>bcrypt('Staff'),
                 'remember_token'=>str_random(10)


            ]);*/
    }
}
