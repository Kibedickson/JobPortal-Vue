<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'title' => 'Admin',
            ],
            [
                'id' => 2,
                'title' => 'Employer',
            ],
            [
                'id' => 3,
                'title' => 'Candidate',
            ],

        ];

        Role::insert($roles);
    }
}
