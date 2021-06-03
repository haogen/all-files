<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//import db facade
use DB, Carbon;

class DogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'dog_tag_number' =>'JANUARY012021' ,
                'registration_number' => 88880000,
                'name' => 'Quilla',
                'kennel' => 'Circle',
                'breeder' => 'Tea Cup',
                'owner' => 'Zack',
                'color' => 'Black',
                'breed' => 'Labrador',
                'sire' => 3,
                'dam' => 2,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now()
            ],
            [
                'dog_tag_number' => 'JANUARY022021',
                'registration_number' => 88880001,
                'name' => 'Josh',
                'kennel' => 'Triangle',
                'breeder' => 'Dog 1',
                'owner' => 'Aya',
                'color' => 'White',
                'breed' => 'Special Dog',
                'sire' => 2,
                'dam' => 2,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now()
            ],
            [
                'dog_tag_number' => 'JANUARY032021',
                'registration_number' => 88880002,
                'name' => 'Stell',
                'kennel' => 'Octagon',
                'breeder' => 'Dog 2',
                'owner' => 'Zed',
                'color' => 'Pink',
                'breed' => 'Fantastic Dog',
                'sire' => 1,
                'dam' => 1,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now()
            ],
            [
                'dog_tag_number' => 'JANUARY042021',
                'registration_number' => 88880003,
                'name' => 'Pablo',
                'kennel' => 'Rectangle',
                'breeder' => 'Dog 3',
                'owner' => 'Zilca',
                'color' => 'Red',
                'breed' => 'Ultimate Dog',
                'sire' => 4 ,
                'dam' => 2,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now()
            ],
            [
                'dog_tag_number' => 'JANUARY052021',
                'registration_number' => 88880004,
                'name' => 'Justin',
                'kennel' => 'Oblique',
                'breeder' => 'Dog 4',
                'owner' => 'Kai-Kai',
                'color' => 'Green',
                'breed' => 'Classic Dog',
                'sire' => 3,
                'dam' => 3,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now()
            ]
        ];
        DB::table('dogs')->insert($data);
    }
}
