<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedicalRecords;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'John Doe';
        $user->username = 'John';
        $user->email = 'johndoe@example.com';
        $user->password = Hash::make('secret');
        $user->save();

        MedicalRecords::create([
            'userId' => "1",
            'xRay' => json_encode([
                'chest' => 1,
                'cervical_vertebrea' => 1,
                'thoracic_vertebrae' => 1,
                'lumbo_sacral_vertebrae' => 1,
                'thoraco_lumbar_vertebrea' => 1,
                'wrist_joint' => 1,
                'pelvic_joint' => 1,
                'hip_joint' => 1,
                'shoulder_joint' => 1,
                'elbow_joint' => 1,
                'knee_joint' => 1,
                'fermoral' => 1,
                'humerus' => 1,
                'radius_ulner' => 1,
                'foot' => 1,
                'fingers' => 1,
                'toes' => 1,
            ]),
            'ultrasoundScan' => json_encode([
                'description' => 1,
                'obstetric' => 1,
                'abdioninal' => 1,
                'pelvis' => 1,
                'breast' => 1,
                'thyroid' => 1,
            ]),
            'ctScan' => "results",
            'mri' => "results",
        ]);
    }
}
