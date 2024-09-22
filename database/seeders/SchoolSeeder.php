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
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Bennett Venture Academy',
            'short_name' => 'Bennett Venture',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Blessed Sacrament School',
            'short_name' => 'Blessed Sacrament',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Christ the King School',
            'short_name' => 'Christ the King',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Gesu Catholic School',
            'short_name' => 'Gesu',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Holy Trinity Catholic School',
            'short_name' => 'Holy Trinity',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Lial Catholic School',
            'short_name' => 'Lial Catholic School',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'OLPH Catholic School',
            'short_name' => 'OLPH',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Queen of Apostles Catholic School',
            'short_name' => 'Queen of Apostles',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Regina Coeli Catholic School',
            'short_name' => 'Regina Coeli',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Rosary Cathedral Catholic School',
            'short_name' => 'Rosary Cathedral',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Aloysius Catholic School',
            'short_name' => 'St. Aloysius',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Benedict Catholic School',
            'short_name' => 'St. Benedict',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Joan of Arc School',
            'short_name' => 'St. Joan of Arc',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Joseph Catholic School, Erie MI',
            'short_name' => 'St. Joseph - Erie, MI',
            'is_active' => false,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Joseph Catholic School, Maumee',
            'short_name' => 'St. Joseph - Maumee',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Joseph Parish School, Sylvania',
            'short_name' => 'St. Joseph - Sylvania',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Patrick of Heatherdowns Catholic School',
            'short_name' => 'St. Patrick of Heatherdowns',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Pius X School',
            'short_name' => 'St. Pius',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Richard Catholic School',
            'short_name' => 'St. Richard',
            'is_active' => false,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'St. Rose Catholic School',
            'short_name' => 'St. Rose',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Toledo Preparatory and Fitness Academy',
            'short_name' => 'Toledo Prep and Fitness',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'West Side Montessori',
            'short_name' => 'West Side Montessori',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('schools')->insert([
            'name' => 'Winterfield Venture Academy',
            'short_name' => 'Winterfield',
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
