<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [

                'name' =>'Dickson',
                'email' => 'kibedickson3@gmail.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' =>'John Doe',
                'email' => 'johndoe@gmail.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' =>'Jane Doe',
                'email' => 'janedoe@gmail.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' =>'Kirsten Shaffer',
                'email' => 'nijupe@mailinator.net',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' =>'Jane Beard',
                'email' => 'dujiq@mailinator.net',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' =>'Henry Horn',
                'email' => 'sapys@mailinator.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' =>'Ifeoma Larson',
                'email' => 'kyrop@mailinator.net',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' =>'Florence Baldwin',
                'email' => 'wupebez@mailinator.net',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' =>'Hadley Palmer',
                'email' => 'pyvemaq@mailinator.net',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' =>'Kelsie Mclean',
                'email' => 'dukozyxo@mailinator.net',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>'Hasad Hayden',
                'email' => 'rycomuvy@mailinator.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>'Baker Ballard',
                'email' => 'fibopabesu@mailinator.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>'Xena Lindsey',
                'email' => 'catihy@mailinator.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>'Vincent Morris',
                'email' => 'givury@mailinator.com',
                'password' => '$2y$10$7aq48yGSWnE0x3Qmvfmd/uuOJL4KQz73we97VxpAww1nYTxw/sib.',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        User::insert($users);
    }
}
