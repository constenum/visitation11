<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schools')->insert([
            'name' => 'All Saints Catholic School',
            'short_name' => 'All Saints',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Bennett Venture Academy',
            'short_name' => 'Bennett Venture Academy',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Blessed Sacrament School',
            'short_name' => 'Blessed Sacrament',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Christ the King School',
            'short_name' => 'Christ the King',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Gesu Catholic School',
            'short_name' => 'Gesu',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Holy Trinity Catholic School',
            'short_name' => 'Holy Trinity',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Lial Catholic School',
            'short_name' => 'Lial Catholic School',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'OLPH Catholic School',
            'short_name' => 'OLPH',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Pius X School',
            'short_name' => 'St. Pius',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Queen of Apostles Catholic School',
            'short_name' => 'Queen of Apostles',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Regina Coeli Catholic School',
            'short_name' => 'Regina Coeli',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Rosary Cathedral Catholic School',
            'short_name' => 'Rosary Cathedral',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Aloysius Catholic School',
            'short_name' => 'St. Aloysius',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Benedict Catholic School',
            'short_name' => 'St. Benedict',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Joan of Arc School',
            'short_name' => 'St. Joan of Arc',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Joseph Catholic School, Maumee',
            'short_name' => 'St. Joseph - Maumee',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Saint Joseph Parish School, Sylvania',
            'short_name' => 'St. Joseph - Sylvania',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Patrick of Heatherdowns Catholic School',
            'short_name' => 'St. Patrick of Heatherdowns',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Richard Catholic School',
            'short_name' => 'St. Richard',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Saint Rose Catholic School',
            'short_name' => 'St. Rose',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Toledo Preparatory and Fitness Academy',
            'short_name' => 'Toledo Preparatory and Fitness Academy',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'West Side Montessori',
            'short_name' => 'West Side Montessori',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Winterfield Venture Academy',
            'short_name' => 'Winterfield Venture Academy',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
