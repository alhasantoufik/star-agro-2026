<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CSRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('c_s_r_s')->insert([
            [
                'title'       => 'Community Support Program',
                'sub_title'   => 'Helping Local Communities',
                'description' => 'We actively support local communities through education, healthcare, and environmental initiatives.',
                'image'       => 'uploads/csr/community.jpg',
                'whatsapp'    => '+8801700000001',
                'assesment'   => 'Annual impact assessment completed',
                'created_at'  => now(),
                'updated_at'  => now(),
            ]
           
        ]);
    }
}
