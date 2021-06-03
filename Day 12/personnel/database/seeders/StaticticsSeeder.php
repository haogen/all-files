<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB, Carbon;

class StaticticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->insert([
            'height' => '155.2',
            'weight' => '50',
            'bmi' => 25.9,
            'personnel_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('statistics')->insert([
            'height' => '158.2',
            'weight' => '48',
            'bmi' => 30.9,
            'personnel_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('statistics')->insert([
            'height' => '160.4',
            'weight' => '51',
            'bmi' => 22.5,
            'personnel_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('statistics')->insert([
            'height' => '165.4',
            'weight' => '53',
            'bmi' => 29.5,
            'personnel_id' => 4,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('statistics')->insert([
            'height' => '170.6',
            'weight' => '54',
            'bmi' => 32.5,
            'personnel_id' => 5,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('statistics')->insert([
            'height' => '168.1',
            'weight' => '55',
            'bmi' => 31.2,
            'personnel_id' => 6,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('statistics')->insert([
            'height' => '166.3',
            'weight' => '56',
            'bmi' => 39.2,
            'personnel_id' => 7,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('statistics')->insert([
            'height' => '163.3',
            'weight' => '52',
            'bmi' => 30.2,
            'personnel_id' => 8,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('statistics')->insert([
            'height' => '160.3',
            'weight' => '55',
            'bmi' => 32.5,
            'personnel_id' => 9,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('statistics')->insert([
            'height' => '163.3',
            'weight' => '56',
            'bmi' => 34.5,
            'personnel_id' => 10,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
    }
}
