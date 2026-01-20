<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyProfile;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyProfile::create([
            'title'       => 'About Our Company',
            'sub_title'   => 'Committed to Quality & Sustainability',
            'description'=> 'We are a leading agro-based company dedicated to delivering high-quality agricultural products while maintaining sustainability and innovation.',
            'file'        => null, // later upload from admin panel
            'is_active'   => 1,
        ]);
    }
}
