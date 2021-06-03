<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB, Carbon;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnel')->insert([
            'first_name' => 'Zack',
            'last_name' => 'Castro',
            'middle_name' => 'De Vera',
            'age' => 16,
            'birthday' => ('2014-12-17'),
            'rating' => (99.00),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('personnel')->insert([
            'first_name' => 'Noreen',
            'last_name' => 'Lazo',
            'middle_name' => 'Castro',
            'age' => 23,
            'birthday' => ('2010-10-24'),
            'rating' => (80.00),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('personnel')->insert([
            'first_name' => 'Anthony',
            'last_name' => 'Lazo',
            'middle_name' => 'Rionda',
            'age' => 23,
            'birthday' => ('2010-07-24'),
            'rating' => (88.00),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('personnel')->insert([
            'first_name' => 'Alexis',
            'last_name' => 'Dela Cruz',
            'middle_name' => 'Dia',
            'age' => 17,
            'birthday' => ('2014-01-01'),
            'rating' => (85.00),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('personnel')->insert([
            'first_name' => 'Zaviah',
            'last_name' => 'Quilla',
            'middle_name' => 'Dizon',
            'age' => 18,
            'birthday' => ('2014-08-08'),
            'rating' => (90.00),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('personnel')->insert([
            'first_name' => 'Kiah',
            'last_name' => 'Quilana',
            'middle_name' => 'Placheta',
            'age' => 19,
            'birthday' => ('2010-05-08'),
            'rating' => (89.00),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('personnel')->insert([
            'first_name' => 'Dazzle',
            'last_name' => 'Punzalan',
            'middle_name' => 'Castro',
            'age' => 28,
            'birthday' => ('2009-04-04'),
            'rating' => (92.00),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('personnel')->insert([
            'first_name' => 'Star',
            'last_name' => 'Punzalan',
            'middle_name' => 'Castro',
            'age' => 27,
            'birthday' => ('2009-02-04'),
            'rating' => (93.00),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('personnel')->insert([
            'first_name' => 'Jeff',
            'last_name' => 'Punzalan',
            'middle_name' => 'Castro',
            'age' => 30,
            'birthday' => ('2009-03-04'),
            'rating' => (94.00),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        DB::table('personnel')->insert([
            'first_name' => 'Rose',
            'last_name' => 'Punzalan',
            'middle_name' => 'Cruz',
            'age' => 40,
            'birthday' => ('2009-09-04'),
            'rating' => (92.00),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
    }
}
