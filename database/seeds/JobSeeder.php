<?php

use App\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            [
                'id' =>1,
                'employer_id'=>'2',
                'title'=> 'Accounting Clerks',
                'location' => 'Nairobi',
                'description' => 'Assist the Accounting Department with many of its administrative and clerical duties. They perform basic office tasks, assist with bookkeeping and reporting, and research and resolve discrepancies.',
                'category' => 'Finance',
                'deadline' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'employer_id'=>'4',
                'title'=> 'Library Assistant',
                'location' => 'London',
                'description' => 'Aid librarians in the management and operation of a library. Their primary duties include helping customers locate books, checking books in and out at the front desk and shelving books according to their categorization.',
                'category' => 'Education/Training',
                'deadline' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'employer_id'=>'6',
                'title'=> 'Film Director',
                'location' => 'London',
                'description' => 'Control and manage a film\'s creative components and form. Their primary duties include reading and editing scripts, motivating and directing actors and working with editors to produce the film in its final form.',
                'category' => 'Art/Design',
                'deadline' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'employer_id'=>'8',
                'title'=> 'Insurance Adviser',
                'location' => 'New York',
                'description' => 'Provides financial advice to clients on retirement planning, investing, and protecting against risks. Insurance Advisors complete a financial needs analysis with clients, which includes assets and liabilities, tax status, existing insurance and risk analysis.',
                'category' => 'Finance',
                'deadline' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'employer_id'=>'10',
                'title'=> 'Computer Engineer',
                'location' => 'Maldives',
                'description' => 'Manage and design the computer hardware and software systems of a company. These skilled individuals may specialize in hardware or software and are often referred to as programmers. Their duties include developing software systems, updating hardware, and designing new equipment.',
                'category' => 'IT & Engineering',
                'deadline' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'employer_id'=>'12',
                'title'=> 'Audiologist',
                'location' => 'Cape Town',
                'description' => 'Assist people with ear-related issues. Audiologists usually work in a health-care facility identify, assess and treat various hearing problems.',
                'category' => 'Healthcare',
                'deadline' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'employer_id'=>'14',
                'title'=> 'Anthropologist',
                'location' => 'Nigeria',
                'description' => 'Study past, current, and predictable patterns of human functioning, with a particular emphasis on the ways in which the human condition has come to be constructed and maintained. Anthropologists often approach pertinent phenomena by outlining similarities and differences that exist both within and between groups. Special Offer',
                'category' => 'Science',
                'deadline' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]

        ];

        collect($jobs)->each(function ($jobs) { Job::create($jobs); });
    }
}
