<?php

use App\Proposal;
use Illuminate\Database\Seeder;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proposals = [
            [
                'candidate_id' => 3,
                'job_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'candidate_id' => 5,
                'job_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'candidate_id' => 7,
                'job_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        Proposal::insert($proposals);
    }
}
