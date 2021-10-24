<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Estose',
                'fname' => 'Julius Jess',
                'address' => 'Danao, Bohol',
                'phone' => '09457261192',
                'email' => 'juls@email.com',
                'password' => bcrypt('123456'),
            ],
            [
                'id' => 2,
                'lname' => 'Casol',
                'fname' => 'Quin Don',
                'address' => 'Bohol',
                'phone' => '09457261192',
                'email' => 'juls123@email.com',
                'password' => bcrypt('123456'),
            ],
            [
                'id' => 3,
                'lname' => 'Mediano',
                'fname' => 'Kennan',
                'address' => 'Danao',
                'phone' => '09457261192',
                'email' => 'juls21@email.com',
                'password' => bcrypt('123456'),
            ]
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);
        }
    }
}
