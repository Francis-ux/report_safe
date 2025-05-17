<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Report;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $samples = [
            [
                'uuid'                 => Str::uuid(),
                'anonymous'            => true,
                'reporter_name'        => null,
                'reporter_email'       => null,
                'reporter_phone'       => null,
                'victim_name'          => 'Ada Nwosu',
                'victim_age'           => 7,
                'victim_address'       => '12 Palm Street, Lagos',
                'abuse_type'           => 'physical',
                'incident_description' => 'Neighbour witnessed repeated slapping and kicking.',
                'datetime'             => Carbon::parse('2025-05-10 14:30:00'),
                'evidence'             => null,
                'status'               => 'Open',
            ],
            [
                'uuid'                 => Str::uuid(),
                'anonymous'            => false,
                'reporter_name'        => 'Chidi Okeke',
                'reporter_email'       => 'chidi@example.com',
                'reporter_phone'       => '+2348012345678',
                'victim_name'          => 'Ifeanyi Obi',
                'victim_age'           => 5,
                'victim_address'       => '25 Unity Road, Abuja',
                'abuse_type'           => 'neglect',
                'incident_description' => 'Child left alone for long periods without food.',
                'datetime'             => Carbon::parse('2025-05-12 09:15:00'),
                'evidence'             => null,
                'status'               => 'In Review',
            ],
            [
                'uuid'                 => Str::uuid(),
                'anonymous'            => true,
                'reporter_name'        => null,
                'reporter_email'       => null,
                'reporter_phone'       => null,
                'victim_name'          => 'Blessing Ade',
                'victim_age'           => 9,
                'victim_address'       => '3 Market Lane, Port Harcourt',
                'abuse_type'           => 'emotional',
                'incident_description' => 'Teacher constantly humiliates the child in class.',
                'datetime'             => Carbon::parse('2025-05-14 11:45:00'),
                'evidence'             => null,
                'status'               => 'Resolved',
            ],
        ];

        foreach ($samples as $data) {
            Report::create($data);
        }
    }
}
