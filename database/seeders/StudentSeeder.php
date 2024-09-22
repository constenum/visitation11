<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Oakley',
            'first_name'  => 'Kayleigh',
            'street_address'  => '548 Indian Ridge Tr.',
            'apt_suite'  => '',
            'city'  => 'Rossford',
            'state'  => 'OH',
            'zip_code'  => '43460',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Ridenour',
            'first_name'  => 'Genevieve',
            'street_address'  => '15760 Chamberlain Rd',
            'apt_suite'  => '',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Smith',
            'first_name'  => 'Marena',
            'street_address'  => '140 Bergin St.',
            'apt_suite'  => '',
            'city'  => 'Rossford',
            'state'  => 'OH',
            'zip_code'  => '43460',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Battle',
            'first_name'  => 'Tamyla ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Brandon',
            'first_name'  => 'Myla ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Brown',
            'first_name'  => 'Vie\'anna ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Bussard ',
            'first_name'  => 'Andurea ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Clark',
            'first_name'  => 'Kylie ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Durfey-Ramirez',
            'first_name'  => 'Kendall ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Garrett',
            'first_name'  => 'Kimari ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Gibson',
            'first_name'  => 'Trinitey ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Green',
            'first_name'  => 'Amya ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Hill',
            'first_name'  => 'Amari ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Jones',
            'first_name'  => 'Jade ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Keller ',
            'first_name'  => 'Jaleiah ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'King',
            'first_name'  => 'Malaysa ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'McCall',
            'first_name'  => 'Angel ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Smith',
            'first_name'  => 'Ramona ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Stringer',
            'first_name'  => 'Neveah ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Vrooman',
            'first_name'  => 'Mackenzie ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Wells ',
            'first_name'  => 'Ciara ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Fedynich',
            'first_name'  => 'Nadya',
            'street_address'  => '2617 Castleton Ave.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Hurst',
            'first_name'  => 'Mila',
            'street_address'  => '2230 Rood St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'King',
            'first_name'  => 'Mya',
            'street_address'  => '1752 Talbot St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Mata',
            'first_name'  => 'Mia',
            'street_address'  => '929 Woodward Ave.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Poellnitz',
            'first_name'  => 'Savannah',
            'street_address'  => '4224 Dahlia Dr.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43611',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Seabron',
            'first_name'  => 'Ny\'Air',
            'street_address'  => '1617 Twin Oaks Dr.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Simpson',
            'first_name'  => 'Philicia',
            'street_address'  => '4437 Burnham Ave.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Bell',
            'first_name'  => 'Lily',
            'street_address'  => '2804 Densmore',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Burle',
            'first_name'  => 'Clara',
            'street_address'  => '4918 Elmhurst',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Demski',
            'first_name'  => 'Sophia',
            'street_address'  => '3865 Barleyton Circle',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Dilworth',
            'first_name'  => 'Khloe',
            'street_address'  => '4762 296th St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43611',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Elchert',
            'first_name'  => 'Lucianna',
            'street_address'  => '6102 Atwell',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Emerine',
            'first_name'  => 'Keira',
            'street_address'  => '3740 Cavalear',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Giammarco-Mitchell',
            'first_name'  => 'Giovanna',
            'street_address'  => '4610 Tradition Way',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Harman',
            'first_name'  => 'Emerson',
            'street_address'  => '3461 Queenswood Blvd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Hiegert',
            'first_name'  => 'Josie',
            'street_address'  => '623 Waybridge Rd.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Howard',
            'first_name'  => 'Gretel',
            'street_address'  => '7255 Copperwood Lane',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Hunyor',
            'first_name'  => 'Natalie',
            'street_address'  => '6065 Barkwood Lane',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Klaiber',
            'first_name'  => 'Krystina',
            'street_address'  => '3919 Imperial Blvd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Lawson',
            'first_name'  => 'Ella',
            'street_address'  => '411 W. Poinsetta Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'MacDonald',
            'first_name'  => 'Murren',
            'street_address'  => '7986 Douglas Rd',
            'apt_suite'  => '',
            'city'  => 'Lambertville',
            'state'  => 'MI',
            'zip_code'  => '48144',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Marchal',
            'first_name'  => 'Anna',
            'street_address'  => '2908 Densmore Dr.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Moody',
            'first_name'  => 'Demi',
            'street_address'  => '2157 Castlewood',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Roper',
            'first_name'  => 'Anna',
            'street_address'  => '3651 Rose Glenn',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Tomasi',
            'first_name'  => 'Claire',
            'street_address'  => '2446 Drummond Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Tomlinson',
            'first_name'  => 'Eliza',
            'street_address'  => '2546 Glenwood Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43610',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Vargas',
            'first_name'  => 'Aliyah',
            'street_address'  => '403 Pasadena',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Vasquez',
            'first_name'  => 'Addison',
            'street_address'  => '3429 Aldringham Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Waltz',
            'first_name'  => 'Ava',
            'street_address'  => '2682 Letchworth Pkwy',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Weisner',
            'first_name'  => 'Kylie',
            'street_address'  => '6122 Meteor Avenue',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Brock',
            'first_name'  => 'Da\'Sanie',
            'street_address'  => '3725 Hoiles',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Foster',
            'first_name'  => 'Amiya',
            'street_address'  => '2136 Airport Hwy.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Lawrence',
            'first_name'  => 'Marionna',
            'street_address'  => '1854 Booth Ave.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Matthews',
            'first_name'  => 'Haniah',
            'street_address'  => '4220 Birchall rd.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Owusu',
            'first_name'  => 'Isabel',
            'street_address'  => '1741 Wyndhurst Rd.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Pittman',
            'first_name'  => 'Laela',
            'street_address'  => '710 Barclay Drive',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Sawyer',
            'first_name'  => 'I\'Yonna',
            'street_address'  => '2139 Dana Street',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 6,
            'last_name'  => 'Comar',
            'first_name'  => 'Faith',
            'street_address'  => '3855 W. Mulberry Rd.',
            'apt_suite'  => '',
            'city'  => 'Sand Creek',
            'state'  => 'MI',
            'zip_code'  => '49279',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 6,
            'last_name'  => 'Cromly',
            'first_name'  => 'Isabella',
            'street_address'  => '4090 Washburn Rd',
            'apt_suite'  => '',
            'city'  => 'Berkey',
            'state'  => 'OH',
            'zip_code'  => '43504',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 7,
            'last_name'  => 'Fineske',
            'first_name'  => 'Mary',
            'street_address'  => '4236 Back Ridge Way',
            'apt_suite'  => '',
            'city'  => 'Monclova',
            'state'  => 'OH',
            'zip_code'  => '43542',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 7,
            'last_name'  => 'Hinojosa',
            'first_name'  => 'Trinity',
            'street_address'  => '7032 Windy Hill',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 7,
            'last_name'  => 'Horrigan',
            'first_name'  => 'Sandy',
            'street_address'  => '4330 Coder Road',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 7,
            'last_name'  => 'Janiak',
            'first_name'  => 'Corrigan',
            'street_address'  => '6445 White Oak Lane',
            'apt_suite'  => '',
            'city'  => 'Whitehouse',
            'state'  => 'OH',
            'zip_code'  => '43571',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 7,
            'last_name'  => 'Ladd',
            'first_name'  => 'Gwyndolyn',
            'street_address'  => '5075 Chaudhary Lane',
            'apt_suite'  => '',
            'city'  => 'Swanton',
            'state'  => 'OH',
            'zip_code'  => '43558',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 7,
            'last_name'  => 'Malczewski',
            'first_name'  => 'Natalie',
            'street_address'  => '9064 Frankfort Road',
            'apt_suite'  => '',
            'city'  => 'Holland',
            'state'  => 'OH',
            'zip_code'  => '43528',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 7,
            'last_name'  => 'Ryan',
            'first_name'  => 'Anna',
            'street_address'  => '1106 Brookwoode Road',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 7,
            'last_name'  => '',
            'first_name'  => 'Amelia',
            'street_address'  => '19750 Otsego-Pike',
            'apt_suite'  => '',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Dixon',
            'first_name'  => 'Mickensey',
            'street_address'  => '2920 Copland Blvd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Gutierrez',
            'first_name'  => 'Kiriko',
            'street_address'  => '415 Hiett Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Jackson',
            'first_name'  => 'Salena',
            'street_address'  => '631 Acklin Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43620',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Mclane',
            'first_name'  => 'La\'Keiah',
            'street_address'  => '1322 Pennelwood Dr.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Montesinos',
            'first_name'  => 'Gaby',
            'street_address'  => '951 Wright Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Rood',
            'first_name'  => 'Everleigh',
            'street_address'  => '2715 Claredale Road',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Smallwood',
            'first_name'  => 'Olivia',
            'street_address'  => '2110 Belvedere Dr.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 9,
            'last_name'  => 'Fench',
            'first_name'  => 'Chen\'nyla',
            'street_address'  => '135 E Woodruff Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43604',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 9,
            'last_name'  => 'Huerta',
            'first_name'  => 'Gabriella',
            'street_address'  => '826 Walbridge Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 9,
            'last_name'  => 'Martinez',
            'first_name'  => 'Dulce',
            'street_address'  => '1437 Walbridge Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 9,
            'last_name'  => 'Obregon',
            'first_name'  => 'Gabriella',
            'street_address'  => '538 E Lake St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 9,
            'last_name'  => 'Padilla',
            'first_name'  => 'Guadalupe',
            'street_address'  => '944 Prouty Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 9,
            'last_name'  => 'Parga',
            'first_name'  => 'Alisiana',
            'street_address'  => '1702 Gill St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43605',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 9,
            'last_name'  => 'Porter',
            'first_name'  => 'Valencia',
            'street_address'  => '1114 Norwood Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 9,
            'last_name'  => 'Reyes',
            'first_name'  => 'Maleah',
            'street_address'  => '3106 Scottwood Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43610',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 9,
            'last_name'  => 'Ruiz',
            'first_name'  => 'Jalina',
            'street_address'  => '209 Eastern Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Appelhans',
            'first_name'  => 'Bailleigh',
            'street_address'  => '517 Southover Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Dixon',
            'first_name'  => 'Re\'Niya',
            'street_address'  => '443 E. Park St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Lane',
            'first_name'  => 'Isabella',
            'street_address'  => '2561 Portsmouth',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Leach',
            'first_name'  => 'Alivia',
            'street_address'  => '7544 Trotter Rd.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43617',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Miranda',
            'first_name'  => 'Zoey',
            'street_address'  => '3713 Dixie Dr.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43611',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Perez',
            'first_name'  => 'Gabriella',
            'street_address'  => '2941 117th St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43611',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Salazar',
            'first_name'  => 'Natalia',
            'street_address'  => '27 W. Streicher St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Sulaica',
            'first_name'  => 'Isabella',
            'street_address'  => '164 Palmer St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Lincoln',
            'first_name'  => 'Aubrey',
            'street_address'  => '4429 Burnham Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Lonas',
            'first_name'  => 'Anajia',
            'street_address'  => '4220 Burnham Ave.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'McGee',
            'first_name'  => 'Unique',
            'street_address'  => '4317 Westway',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Merritt',
            'first_name'  => 'Mi\'ah',
            'street_address'  => '339 Rockingham St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43610',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Perez',
            'first_name'  => 'Jasmine',
            'street_address'  => '1111 Page St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Roberts',
            'first_name'  => 'Courtney',
            'street_address'  => '1923 Cone st',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Rodriguez-Tapia',
            'first_name'  => 'Ariadna',
            'street_address'  => '805 Orchard',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Slay',
            'first_name'  => 'E\'Myla',
            'street_address'  => '235 E. Streicher St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Watts',
            'first_name'  => 'Adrionna',
            'street_address'  => '862 Prouty Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Anzenbacher',
            'first_name'  => 'Isabella',
            'street_address'  => '721 Sand Ridge Rd.',
            'apt_suite'  => '',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Karlovec',
            'first_name'  => 'Natalie',
            'street_address'  => '971 W. Wooster',
            'apt_suite'  => '',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Loeffler',
            'first_name'  => 'Alexis',
            'street_address'  => '601 Saint Annes Court',
            'apt_suite'  => '',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Lopez',
            'first_name'  => 'Jennifer',
            'street_address'  => '1048 N. Main St.',
            'apt_suite'  => 'Lot 58',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Meade',
            'first_name'  => 'Kaylee',
            'street_address'  => '912 S. Wintergarden Rd.',
            'apt_suite'  => '',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Sayer',
            'first_name'  => 'Ellabeth',
            'street_address'  => '524 S. Grove St.',
            'apt_suite'  => '',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Stierwalt',
            'first_name'  => 'Addison',
            'street_address'  => '6397 Muir Road',
            'apt_suite'  => '',
            'city'  => 'Pemberville',
            'state'  => 'OH',
            'zip_code'  => '43450',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Waddington',
            'first_name'  => 'Mackenzie',
            'street_address'  => '19150 Hull Prairie Rd.',
            'apt_suite'  => '',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 13,
            'last_name'  => 'Allen',
            'first_name'  => 'Brianna',
            'street_address'  => '2643 Pine Trace Drive',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 13,
            'last_name'  => 'Ball',
            'first_name'  => 'Molly',
            'street_address'  => '4311 S. Watercrest Dr.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 13,
            'last_name'  => 'Brownfield',
            'first_name'  => 'Maggie',
            'street_address'  => '1020 Harrow Rd.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 13,
            'last_name'  => 'Dominguez',
            'first_name'  => 'Alizabeth',
            'street_address'  => '729 Magnolia',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43604',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 13,
            'last_name'  => 'Lubomirski',
            'first_name'  => 'Kateri',
            'street_address'  => '6838 Williamsburg Dr.',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 13,
            'last_name'  => 'Smith',
            'first_name'  => 'Lorna',
            'street_address'  => '3713 River Road',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 13,
            'last_name'  => 'Watson',
            'first_name'  => 'Kayden',
            'street_address'  => '3436 Jeanette',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 14,
            'last_name'  => 'Pedersen',
            'first_name'  => 'Hollie',
            'street_address'  => '719 Whisperwood Pkwy.',
            'apt_suite'  => '',
            'city'  => 'Holland',
            'state'  => 'OH',
            'zip_code'  => '43528',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 14,
            'last_name'  => 'Rippke',
            'first_name'  => 'Miah',
            'street_address'  => '2258 Marengo St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 14,
            'last_name'  => 'Schriner',
            'first_name'  => 'Emerson',
            'street_address'  => '8514 Snapdragon Ln.',
            'apt_suite'  => '',
            'city'  => 'Monclova',
            'state'  => 'OH',
            'zip_code'  => '43542',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Beck',
            'first_name'  => 'Audrey',
            'street_address'  => '4613 S. Detroit Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Chabra',
            'first_name'  => 'Mallory',
            'street_address'  => '2934 Copland Blvd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Dilworth',
            'first_name'  => 'Isabella',
            'street_address'  => '5913 Walnut Circle',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Durkalec',
            'first_name'  => 'Emily',
            'street_address'  => '7642 Long View Dr.',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Moor',
            'first_name'  => 'Faith',
            'street_address'  => '2218 River Road',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Schrickel',
            'first_name'  => 'Tessa Mae',
            'street_address'  => '1162 Holgate Avenue',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Stanley',
            'first_name'  => 'Winnie',
            'street_address'  => '3217 Glanzman #28',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Watkins',
            'first_name'  => 'Fiona',
            'street_address'  => '5910 Finzel Road',
            'apt_suite'  => '',
            'city'  => 'Whitehouse',
            'state'  => 'OH',
            'zip_code'  => '43571',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Wren',
            'first_name'  => 'Hannah',
            'street_address'  => '7040 Anthony Wayne Trail',
            'apt_suite'  => '',
            'city'  => 'Waterville',
            'state'  => 'OH',
            'zip_code'  => '43571',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Diaz',
            'first_name'  => 'Genavieve',
            'street_address'  => '4439 Imperial Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Estes',
            'first_name'  => 'Arianna',
            'street_address'  => '9609 S. County Line Hwy',
            'apt_suite'  => '',
            'city'  => 'Riga',
            'state'  => 'MI',
            'zip_code'  => '49276',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Gomez-Castro',
            'first_name'  => 'Isabella',
            'street_address'  => '8737 Palermo Cir',
            'apt_suite'  => '',
            'city'  => 'Monclova',
            'state'  => 'OH',
            'zip_code'  => '43542',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Henk',
            'first_name'  => 'Ellison',
            'street_address'  => '2727 Meadowwood Dr.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Hoffmann',
            'first_name'  => 'Lauren',
            'street_address'  => '4810 Westcliffe Ct.',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Kunkel',
            'first_name'  => 'Anna',
            'street_address'  => '5039 Fairway Ln.',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Kunz',
            'first_name'  => 'Chloe',
            'street_address'  => '8040 Millford Drive',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'LeBlanc',
            'first_name'  => 'Stella',
            'street_address'  => '6024 Kinnis Ct.',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Mayhall',
            'first_name'  => 'Emily',
            'street_address'  => '5114 Cambrian Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'McIntyre',
            'first_name'  => 'Mia',
            'street_address'  => '4204 Partridge Lane',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Morgan',
            'first_name'  => 'Kennedy',
            'street_address'  => '7529 Rymoor Ct',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Poturalski',
            'first_name'  => 'Libbie',
            'street_address'  => '3833 Ten Mile Creek Drive',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Ramirez',
            'first_name'  => 'Lydia',
            'street_address'  => '6955 Dorr St Suite 74',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Saxton',
            'first_name'  => 'Sydney',
            'street_address'  => '3238 Haughton Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Schlageter',
            'first_name'  => 'Paige',
            'street_address'  => '5255 Rymoor Dr',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Seymour',
            'first_name'  => 'Valerie',
            'street_address'  => '2358 Willesden Green Rd.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43617',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Szenderski',
            'first_name'  => 'Annabel',
            'street_address'  => '7145 Timber Ridge Ct.',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Burks',
            'first_name'  => 'Payton',
            'street_address'  => '2900 Airport Hwy',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Campos',
            'first_name'  => 'Savannah',
            'street_address'  => '1442 Abbott ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Gibert',
            'first_name'  => 'Madison',
            'street_address'  => '1732 Birchwood Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Gragg',
            'first_name'  => 'Alexa',
            'street_address'  => '6058 Jeffery Ln',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Hansen',
            'first_name'  => 'Clementine',
            'street_address'  => '1312 E Beverly Hills Dr.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Oshodin',
            'first_name'  => 'Victoria',
            'street_address'  => '1933 Alvin St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Royster',
            'first_name'  => 'Rhema',
            'street_address'  => '2335 Ward St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Tahir',
            'first_name'  => 'Emma',
            'street_address'  => '3798 Driftwood',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Turner',
            'first_name'  => 'Taylynn',
            'street_address'  => '4743 Overland Pkwy ',
            'apt_suite'  => '103',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Young',
            'first_name'  => 'Eliza',
            'street_address'  => '624 Humboldt St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43604',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 19,
            'last_name'  => 'Basas',
            'first_name'  => 'Hermione',
            'street_address'  => '850 Carver Blvd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 19,
            'last_name'  => 'Curry',
            'first_name'  => 'Jen\'niyah',
            'street_address'  => '2088 N 12th St.',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43620',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 19,
            'last_name'  => 'Dorn',
            'first_name'  => 'Melody-Marie',
            'street_address'  => '4143 Eastway St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 19,
            'last_name'  => 'Ryerson',
            'first_name'  => 'Elilah',
            'street_address'  => '315 Boston',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43610',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 19,
            'last_name'  => 'Sykes',
            'first_name'  => 'Elliette',
            'street_address'  => '3752 Drummond',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Cleveland',
            'first_name'  => 'Sabrina',
            'street_address'  => '14812 Prairie Lake Drive',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Kesler',
            'first_name'  => 'Kaitlyn',
            'street_address'  => '25092 Saddle Horn Dr',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Ketelaar',
            'first_name'  => 'Myla',
            'street_address'  => '14976 Stonebridge Lane',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'MacBride',
            'first_name'  => 'Mia',
            'street_address'  => '752 Cricket Lane',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Spencer',
            'first_name'  => 'Lillya',
            'street_address'  => '7931 N Woodbridge Rd',
            'apt_suite'  => '',
            'city'  => 'Monclova',
            'state'  => 'OH',
            'zip_code'  => '43542',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Taylor',
            'first_name'  => 'Mary Kate',
            'street_address'  => '2 Maple Street',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Warren',
            'first_name'  => 'Grace',
            'street_address'  => '25199 River View Place',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Welch',
            'first_name'  => 'Sophia',
            'street_address'  => '29096 Belmont Farms Rd',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Ball',
            'first_name'  => 'Jayden',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Bey-Douglas-Reed',
            'first_name'  => 'Victoria',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Bryant',
            'first_name'  => 'Daziya',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Davis',
            'first_name'  => 'Kieara',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Dennis',
            'first_name'  => 'Yemoja',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Fisher',
            'first_name'  => 'DeBorah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Frey',
            'first_name'  => 'Ivy',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Gordon',
            'first_name'  => 'Makayla',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Marrufo',
            'first_name'  => 'Grace',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Norwood',
            'first_name'  => 'Danasia',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Parker',
            'first_name'  => 'Ja’Viana',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Ransey',
            'first_name'  => 'Jai’Zynn',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Smith',
            'first_name'  => 'Nemiyah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'White',
            'first_name'  => 'Island',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Avina',
            'first_name'  => 'Kira',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Klear',
            'first_name'  => 'Maggie',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Roberts',
            'first_name'  => 'Sophia',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Teets',
            'first_name'  => 'Angelica',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Zajac',
            'first_name'  => 'Anelia',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Anderson',
            'first_name'  => 'Ny\'Keesha',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Belcher',
            'first_name'  => 'Tomonia',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Burroughs',
            'first_name'  => 'Kymestri',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Carter',
            'first_name'  => 'A\'more',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Childress',
            'first_name'  => 'LaRissa',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Clegg',
            'first_name'  => 'Layla',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Evans',
            'first_name'  => 'Danyia',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Findley',
            'first_name'  => 'Makayla',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Johnson',
            'first_name'  => 'Rylee',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Jones',
            'first_name'  => 'Gionna',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Kerns',
            'first_name'  => 'Imani',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Lewis',
            'first_name'  => 'Dawn',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Maben',
            'first_name'  => 'Madison',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Martin',
            'first_name'  => 'Egypt',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Peterson',
            'first_name'  => 'Nylah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Piloseno',
            'first_name'  => 'Trinity',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Ryals',
            'first_name'  => 'Ahbre',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Searcy',
            'first_name'  => 'Roddaja',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Shields',
            'first_name'  => 'Blessing',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Stenson',
            'first_name'  => 'DaMiyah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Taylor',
            'first_name'  => 'Jaslynn',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Thompson',
            'first_name'  => 'Cherish',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Toensing',
            'first_name'  => 'Aubrey',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Welch',
            'first_name'  => 'Tanaeah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Williams',
            'first_name'  => 'Cherish',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Williams',
            'first_name'  => 'O\'Maria',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 24,
            'last_name'  => 'Wilson',
            'first_name'  => 'Amarie',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => 'OH',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
