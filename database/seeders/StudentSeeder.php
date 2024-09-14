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
            'last_name'  => 'Hanudel',
            'first_name'  => 'Brynleigh',
            'street_address'  => '522 Bruns Dr',
            'apt_suite'  => '',
            'city'  => 'Rossford',
            'state'  => 'OH',
            'zip_code'  => '43460',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Hoff',
            'first_name'  => 'Eva',
            'street_address'  => '903 Carol Cir',
            'apt_suite'  => '',
            'city'  => 'Rossford',
            'state'  => 'OH',
            'zip_code'  => '43460',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Mochon',
            'first_name'  => 'Cara',
            'street_address'  => '818 Streamview Dr',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Murphy',
            'first_name'  => 'Mary',
            'street_address'  => '10387 Belmont Meadows Ln',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Pierce',
            'first_name'  => 'Grace',
            'street_address'  => '6813 N River Rd',
            'apt_suite'  => '',
            'city'  => 'Waterville',
            'state'  => 'OH',
            'zip_code'  => '43566',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Purpura',
            'first_name'  => 'Oliva',
            'street_address'  => '26318 Spring Trace Dr',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Santibanez',
            'first_name'  => 'Avah',
            'street_address'  => '24732 McCutcheonville Rd',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Swanson',
            'first_name'  => 'Sophia',
            'street_address'  => '1003 S Ironwood Dr',
            'apt_suite'  => '',
            'city'  => 'Rossford',
            'state'  => 'OH',
            'zip_code'  => '43460',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Vascik',
            'first_name'  => 'Brooklyn',
            'street_address'  => '1124 Lewis St',
            'apt_suite'  => '',
            'city'  => 'Rossford',
            'state'  => 'OH',
            'zip_code'  => '43460',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 1,
            'last_name'  => 'Williams',
            'first_name'  => 'Augusta',
            'street_address'  => '9827 Five Point Rd',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Alexander',
            'first_name'  => 'Neveah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Brighton ',
            'first_name'  => 'Alexis',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Carrillo ',
            'first_name'  => 'Essenyah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Deluze',
            'first_name'  => 'Lellani',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Fambro ',
            'first_name'  => 'Kei\'Myah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Ford',
            'first_name'  => 'Sarayah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Harris',
            'first_name'  => 'Shi-Ayr',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Jackson',
            'first_name'  => 'Kenyata',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Jones',
            'first_name'  => 'Abiah\'Brahni',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Lear',
            'first_name'  => 'Ja\'Niyah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Mills',
            'first_name'  => 'Der\'Miyah',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Moran',
            'first_name'  => 'Kylie',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Neville',
            'first_name'  => 'Aneeza',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Osley',
            'first_name'  => 'Halle',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Powell ',
            'first_name'  => 'Khassidi',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Robinson ',
            'first_name'  => 'Kamora',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Ross',
            'first_name'  => 'Carlie',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Schmidt',
            'first_name'  => 'Aviana',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Smith',
            'first_name'  => 'De\'Ja',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Smith',
            'first_name'  => 'Della',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Smith',
            'first_name'  => 'Haylee',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Smith',
            'first_name'  => 'Marlie',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Stribling',
            'first_name'  => 'Adrianna ',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Strong',
            'first_name'  => 'Jada',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Thompson',
            'first_name'  => 'Nayanni',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Weissenberger ',
            'first_name'  => 'Alexandria',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 2,
            'last_name'  => 'Woods ',
            'first_name'  => 'Aryanna',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Abrighach',
            'first_name'  => 'Saoirse',
            'street_address'  => '2301 Grantwood Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Banks',
            'first_name'  => 'Coryn',
            'street_address'  => '712 Ewing St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Barber',
            'first_name'  => 'Zyrah',
            'street_address'  => '2522 Rosedale Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Cready',
            'first_name'  => 'Kierra',
            'street_address'  => '2128 Grantwood Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Cromly',
            'first_name'  => 'Mae',
            'street_address'  => '2210 Portsmouth Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Davis',
            'first_name'  => 'Elizabeth',
            'street_address'  => '2235 Georgetown Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Gregory',
            'first_name'  => 'Amia',
            'street_address'  => '815 Kipling Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Jones',
            'first_name'  => 'Genesis',
            'street_address'  => '1347 Prospect Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Lockett',
            'first_name'  => 'Aryonna',
            'street_address'  => '12 E Lake St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Owens',
            'first_name'  => 'Cydney',
            'street_address'  => '754 Hammersmith Cir',
            'apt_suite'  => '',
            'city'  => 'Holland',
            'state'  => 'OH',
            'zip_code'  => '43528',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Shock',
            'first_name'  => 'Grace',
            'street_address'  => '2551 Wyndale Ct',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 3,
            'last_name'  => 'Weidner',
            'first_name'  => 'Skylar',
            'street_address'  => '2461 Grantwood Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Caputo',
            'first_name'  => 'Anna',
            'street_address'  => '5512 Ginger Tree Ln',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Coley',
            'first_name'  => 'Logan',
            'street_address'  => '4350 Deerwood Ln',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Fadahunsi',
            'first_name'  => 'Ifeoluwa',
            'street_address'  => '2340 Country Squire Ln',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Humphries',
            'first_name'  => 'JaLaya',
            'street_address'  => '435 Irving St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43620',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Klatt',
            'first_name'  => 'Peyton',
            'street_address'  => '4102 Talwood Ln',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Miller',
            'first_name'  => 'Makayla',
            'street_address'  => '2275 Chalmette Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43611',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Newell',
            'first_name'  => 'Riley',
            'street_address'  => '414 Sunset Blvd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Robertson',
            'first_name'  => 'Ashlynn',
            'street_address'  => '3921 Bellevue Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Schortgen',
            'first_name'  => 'Jacalyn',
            'street_address'  => '5406 S Wellsville Hwy',
            'apt_suite'  => '',
            'city'  => 'Blissfield',
            'state'  => 'MI',
            'zip_code'  => '49228',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Sifuentes',
            'first_name'  => 'Lillian',
            'street_address'  => '4142 Elmhurst Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Slade',
            'first_name'  => 'Vivienne',
            'street_address'  => '4546 Sulgrave Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Smith',
            'first_name'  => 'Emma',
            'street_address'  => '3744 Lainar Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Stallings',
            'first_name'  => 'Cassidy',
            'street_address'  => '341 Sentry Hill Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 4,
            'last_name'  => 'Zawisza',
            'first_name'  => 'Isabella',
            'street_address'  => '6036 Sylvan Ridge Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Dada',
            'first_name'  => 'Ayomide',
            'street_address'  => '3774 Hill Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Darnell',
            'first_name'  => 'Daisha',
            'street_address'  => '2807 Wayman Palmer Dr',
            'apt_suite'  => '#50',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Hitt',
            'first_name'  => 'Nyla',
            'street_address'  => '629 Walbridge Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Holton',
            'first_name'  => 'Makynzie',
            'street_address'  => '818 Brown Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Johnson',
            'first_name'  => 'Imani',
            'street_address'  => '3562 Cecelia Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Saum',
            'first_name'  => 'Olivia',
            'street_address'  => '1428 Macomber St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Stribling',
            'first_name'  => 'TaMiyah',
            'street_address'  => '1511 Upton Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Warts',
            'first_name'  => 'Cathryn',
            'street_address'  => '1880 Parkdale Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'West',
            'first_name'  => 'Riley',
            'street_address'  => '1003 Walbridge Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Williams',
            'first_name'  => 'Skyler',
            'street_address'  => '2910 Northwood Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 5,
            'last_name'  => 'Willis',
            'first_name'  => 'Tre\'mere',
            'street_address'  => '611 Indian Knoll Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 6,
            'last_name'  => 'Moeller',
            'first_name'  => 'Isabella',
            'street_address'  => '10401 Brint Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 7,
            'last_name'  => 'Chowdhary',
            'first_name'  => 'Rebecca',
            'street_address'  => '7842 Chestnut Rdg',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 7,
            'last_name'  => 'Tam',
            'first_name'  => 'Hannah',
            'street_address'  => '5842 Wainscot Ct',
            'apt_suite'  => '',
            'city'  => 'Monclova',
            'state'  => 'OH',
            'zip_code'  => '43542',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Bastian',
            'first_name'  => 'Claire',
            'street_address'  => '2839 Medford Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Bastian',
            'first_name'  => 'Zoe',
            'street_address'  => '2839 Medford Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Branham',
            'first_name'  => 'Laila',
            'street_address'  => '1429 Palmetto Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Duncan',
            'first_name'  => 'Kali',
            'street_address'  => '3622 Beechway Blvd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Kerchman',
            'first_name'  => 'Emelia',
            'street_address'  => '432 Jervis St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Osley',
            'first_name'  => 'Tonee',
            'street_address'  => '1250 Belmont Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Rojas',
            'first_name'  => 'Aniya',
            'street_address'  => '1147 Eastgate Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 8,
            'last_name'  => 'Russell',
            'first_name'  => 'Teriyah',
            'street_address'  => '630 Carlton St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Crespo',
            'first_name'  => 'Becky',
            'street_address'  => '1062 Klondike St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Elizondo',
            'first_name'  => 'Alannah',
            'street_address'  => '339 Eastern Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Fragozo',
            'first_name'  => 'Emily',
            'street_address'  => '1716 Mason St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43605',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Lozano',
            'first_name'  => 'Guadalupe',
            'street_address'  => '426 Bassett St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43611',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Santiago',
            'first_name'  => 'Sophia',
            'street_address'  => '1025 Orchard St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Velazquez',
            'first_name'  => 'Natalia',
            'street_address'  => '132 Roff St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 10,
            'last_name'  => 'Viegas',
            'first_name'  => 'Shine',
            'street_address'  => '1215 Ironwood Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43605',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Abigail',
            'first_name'  => 'Pietras',
            'street_address'  => '214 Avondale Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43604',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Addison',
            'first_name'  => 'Gawle',
            'street_address'  => '306 California Blvd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Aubrey',
            'first_name'  => 'Baker',
            'street_address'  => '5507 Thornbrook Trl',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43611',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Audrey',
            'first_name'  => 'Behan',
            'street_address'  => '3024 Grantwood Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Avery',
            'first_name'  => 'Kenney',
            'street_address'  => '520 Coeli Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Carmetta',
            'first_name'  => 'Collier',
            'street_address'  => '2105 Mansfield Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43613',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Danielle',
            'first_name'  => 'Hollstein',
            'street_address'  => '4101 Mockingbird Ln',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Gabby',
            'first_name'  => 'Blocking',
            'street_address'  => '4553 Manorwood Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Lucianna',
            'first_name'  => 'Hernandez',
            'street_address'  => '611 Waggoner Blvd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 11,
            'last_name'  => 'Payton',
            'first_name'  => 'Senn',
            'street_address'  => '1470 Sabra Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Edwards',
            'first_name'  => 'Ka\'myjah',
            'street_address'  => '2376 Lawrence Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43620',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Fonseca',
            'first_name'  => 'Shay\'na',
            'street_address'  => '237 Everett St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43608',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Hartfield',
            'first_name'  => 'Amarea',
            'street_address'  => '2466 N Detroit Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43620',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 12,
            'last_name'  => 'Nieto',
            'first_name'  => 'Santiana',
            'street_address'  => '2524 Lawrence Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43610',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 13,
            'last_name'  => 'Castro',
            'first_name'  => 'Tressa',
            'street_address'  => '200 Manville Ave',
            'apt_suite'  => '',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 13,
            'last_name'  => 'Wagner',
            'first_name'  => 'Lily',
            'street_address'  => '410 Donbar Dr',
            'apt_suite'  => '',
            'city'  => 'Bowling Green',
            'state'  => 'OH',
            'zip_code'  => '43402',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 14,
            'last_name'  => 'Adjebeng',
            'first_name'  => 'Kirsten',
            'street_address'  => '2554 Parkview Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 14,
            'last_name'  => 'Allen',
            'first_name'  => 'Nariah',
            'street_address'  => '1024 Loch Lomond Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 14,
            'last_name'  => 'Daugherty',
            'first_name'  => 'Emma',
            'street_address'  => '5526 Dorr St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 14,
            'last_name'  => 'Keel',
            'first_name'  => 'Gabrielle',
            'street_address'  => '735 Oak Park Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43617',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 14,
            'last_name'  => 'Pratt',
            'first_name'  => 'Maycie',
            'street_address'  => '2329 Lynn Park Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 14,
            'last_name'  => 'Taylor',
            'first_name'  => 'Kyrah',
            'street_address'  => '2216 Kenwood Blvd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 15,
            'last_name'  => 'Graciani',
            'first_name'  => 'Mia',
            'street_address'  => '1805 Airport Hwy',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 15,
            'last_name'  => 'Junkins',
            'first_name'  => 'Lillian',
            'street_address'  => '1964 Heatherlawn Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 15,
            'last_name'  => 'Kaintz-Ulrick',
            'first_name'  => 'Aubrey',
            'street_address'  => '2805 Scarlet Oak Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 15,
            'last_name'  => 'Madryzkowski',
            'first_name'  => 'Gabriella',
            'street_address'  => '6728 Brick Yard Ct',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 15,
            'last_name'  => 'Warejko',
            'first_name'  => 'Laila',
            'street_address'  => '3816 Lagrange St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Dippman',
            'first_name'  => 'Vayda',
            'street_address'  => '1751 Wildwood Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Earl',
            'first_name'  => 'Khloe',
            'street_address'  => '7010 Quail Lakes Dr',
            'apt_suite'  => '',
            'city'  => 'Holland',
            'state'  => 'OH',
            'zip_code'  => '43528',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Eberly',
            'first_name'  => 'Madalyn',
            'street_address'  => '7032 County Road D',
            'apt_suite'  => '',
            'city'  => 'Delta',
            'state'  => 'OH',
            'zip_code'  => '43515',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Hayden',
            'first_name'  => 'Alyssa',
            'street_address'  => '6853 Deer Ridge Rd',
            'apt_suite'  => '#84',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Holy',
            'first_name'  => 'Addison',
            'street_address'  => '14846 Saddle Horn Dr',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Isho',
            'first_name'  => 'Margette',
            'street_address'  => '26699 Amberwood Dr',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Jimenez',
            'first_name'  => 'Nadia',
            'street_address'  => '1910 Kelsey Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43605',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Kilpatrick',
            'first_name'  => 'Kaleigh',
            'street_address'  => '552 Sugar Maple Ct',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Malaczewski',
            'first_name'  => 'Lucy',
            'street_address'  => '216 N 4th St',
            'apt_suite'  => '',
            'city'  => 'Waterville',
            'state'  => 'OH',
            'zip_code'  => '43566',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Malczewski',
            'first_name'  => 'Morgan',
            'street_address'  => '3924 Magnolia Cir',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Minnick-Metcalf',
            'first_name'  => 'Tess',
            'street_address'  => '1378 Junior Dr',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Nguyen',
            'first_name'  => 'Sydney',
            'street_address'  => '6944 Torrey Pine Ct',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Nissen',
            'first_name'  => 'Alexa',
            'street_address'  => '1121 Village Trail Dr',
            'apt_suite'  => '',
            'city'  => 'Maumee',
            'state'  => 'OH',
            'zip_code'  => '43537',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Pappas',
            'first_name'  => 'Kaylen',
            'street_address'  => '1306 Tricia Ct',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Pappas',
            'first_name'  => 'Laney',
            'street_address'  => '1306 Tricia Ct',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Rawlins',
            'first_name'  => 'Isabella',
            'street_address'  => '115 Lincoln St',
            'apt_suite'  => '',
            'city'  => 'Delta',
            'state'  => 'OH',
            'zip_code'  => '43515',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Shaw',
            'first_name'  => 'Lola',
            'street_address'  => '7525 Berridge Rd',
            'apt_suite'  => '',
            'city'  => 'Whitehouse',
            'state'  => 'OH',
            'zip_code'  => '43571',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Smithfield',
            'first_name'  => 'Madison',
            'street_address'  => '107 S Munson Rd',
            'apt_suite'  => '',
            'city'  => 'Swanton',
            'state'  => 'OH',
            'zip_code'  => '43558',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Swiergosz',
            'first_name'  => 'Mallory',
            'street_address'  => '7856 Winterbourne Dr',
            'apt_suite'  => '',
            'city'  => 'Monclova',
            'state'  => 'OH',
            'zip_code'  => '43542',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 16,
            'last_name'  => 'Switlick',
            'first_name'  => 'Ella',
            'street_address'  => '9054 Orchard Lake Rd',
            'apt_suite'  => '',
            'city'  => 'Holland',
            'state'  => 'OH',
            'zip_code'  => '43528',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Bullard',
            'first_name'  => 'Isabel',
            'street_address'  => '4510 Richfield Center Rd',
            'apt_suite'  => '',
            'city'  => 'Berkey',
            'state'  => 'OH',
            'zip_code'  => '43504',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Burnard',
            'first_name'  => 'Isabella',
            'street_address'  => '4712 Brookhurst Rd',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Crandall',
            'first_name'  => 'Madison',
            'street_address'  => '5046 Olde Mill Ct',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Deisher',
            'first_name'  => 'Abigail',
            'street_address'  => '5234 Fairmeadow Dr',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Dudley',
            'first_name'  => 'Emma',
            'street_address'  => '7127 Timber Ridge Ct',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Harrison',
            'first_name'  => 'Claire',
            'street_address'  => '3011 Hopewell Pl',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Hill',
            'first_name'  => 'Kate',
            'street_address'  => '6061 Windy Ridge Ln',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Hunt',
            'first_name'  => 'Audrey',
            'street_address'  => '5222 Olde Ridge Rd',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Jennewine',
            'first_name'  => 'Jacqueline',
            'street_address'  => '4625 Golf Creek Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Juette',
            'first_name'  => 'Adelaide',
            'street_address'  => '6123 Durbin Rd',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Kasprzak',
            'first_name'  => 'Katherine',
            'street_address'  => '5628 Clear Crk',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Koop',
            'first_name'  => 'Karlee',
            'street_address'  => '4721 Rainier Ct',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Kristof',
            'first_name'  => 'Macy',
            'street_address'  => '4651 Crosstick Ct',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Peterson',
            'first_name'  => 'Kate',
            'street_address'  => '5828 Eaglewood Dr',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Russ',
            'first_name'  => 'Cecilia',
            'street_address'  => '4724 Skelly Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Saxton',
            'first_name'  => 'Susan',
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
            'last_name'  => 'Schoen',
            'first_name'  => 'Grace',
            'street_address'  => '4523 Ginger Trl',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43623',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Steward',
            'first_name'  => 'Rachel',
            'street_address'  => '5924 Gillingham Dr',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Syroka',
            'first_name'  => 'Vivian',
            'street_address'  => '10820 Brint Rd',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Tabb',
            'first_name'  => 'Jocelyn',
            'street_address'  => '7516 Rymoor Ct',
            'apt_suite'  => '',
            'city'  => 'Sylvania',
            'state'  => 'OH',
            'zip_code'  => '43560',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 17,
            'last_name'  => 'Tuck',
            'first_name'  => 'Caraline',
            'street_address'  => '2450 Carriage Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Burkett',
            'first_name'  => 'Sienna',
            'street_address'  => '4324 Asbury Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Cox',
            'first_name'  => 'Makayla',
            'street_address'  => '7664 Shoemaker Dr',
            'apt_suite'  => '',
            'city'  => 'Waterville',
            'state'  => 'OH',
            'zip_code'  => '43566',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Cruz',
            'first_name'  => 'Desirae',
            'street_address'  => '3136 Glanzman Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Cruz',
            'first_name'  => 'Destiny',
            'street_address'  => '3136 Glanzman Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Deloney',
            'first_name'  => 'Harmoni',
            'street_address'  => '1156 Pinebrook Pkwy',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Hudson',
            'first_name'  => 'Mary',
            'street_address'  => '3245 Escott Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Mays',
            'first_name'  => 'Kalyse',
            'street_address'  => '4245 Keygate Dr',
            'apt_suite'  => '#2',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Munoz',
            'first_name'  => 'Gianna',
            'street_address'  => '349 S Detroit Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Pettaway',
            'first_name'  => 'Jaela',
            'street_address'  => '343 S Detroit Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Sormana',
            'first_name'  => 'Marjoe',
            'street_address'  => '2339 Rockspring Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Underwood',
            'first_name'  => 'Brooklyne',
            'street_address'  => '1350 Melvin Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 18,
            'last_name'  => 'Williams',
            'first_name'  => 'La\'Myaha',
            'street_address'  => '3 Hidden Valley Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 19,
            'last_name'  => 'Stuart',
            'first_name'  => 'Lillie',
            'street_address'  => '223 Maddie St',
            'apt_suite'  => '',
            'city'  => 'Swanton',
            'state'  => 'OH',
            'zip_code'  => '43558',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Anderson',
            'first_name'  => 'Eleanor',
            'street_address'  => '3299 Chapel Creek Dr',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Burrow',
            'first_name'  => 'Anneliese',
            'street_address'  => '30106 Waterford Dr',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Chmiel',
            'first_name'  => 'Skylar',
            'street_address'  => '102 Taylors Mill Cir',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Dunbar',
            'first_name'  => 'Elise',
            'street_address'  => '4360 Turtle Creek Dr',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Goblirsch',
            'first_name'  => 'Kera',
            'street_address'  => '1503 Riverview Ct',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Johnson',
            'first_name'  => 'Evelyn (Evie)',
            'street_address'  => '28821 N Bramblewood Rd',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Kessler',
            'first_name'  => 'Kopelyn',
            'street_address'  => '25709 Willowbend Rd',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Rindler',
            'first_name'  => 'Eliza',
            'street_address'  => '3586 River Ridge Way',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Schoen',
            'first_name'  => 'Caroline',
            'street_address'  => '3747 Turtle Creek Dr',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Shroyer',
            'first_name'  => 'Samantha',
            'street_address'  => '947 Walnut St',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 20,
            'last_name'  => 'Wachowiak',
            'first_name'  => 'Madison',
            'street_address'  => '13598 Otusso Dr',
            'apt_suite'  => '',
            'city'  => 'Perrysburg',
            'state'  => 'OH',
            'zip_code'  => '43551',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Bailey',
            'first_name'  => 'Jorden',
            'street_address'  => '841 Toronto Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Bailey',
            'first_name'  => 'Kaelynn',
            'street_address'  => '1219 Gretna Green Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Belcher',
            'first_name'  => 'Cherie',
            'street_address'  => '1550 South Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Gaines',
            'first_name'  => 'Harmoni',
            'street_address'  => '3704 Berkeley Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Hadley-Boggess',
            'first_name'  => 'Jordyn',
            'street_address'  => '1420 Avondale Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Patterson',
            'first_name'  => 'Jermanie',
            'street_address'  => '205 Indiana Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43604',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Roper',
            'first_name'  => 'Amiah',
            'street_address'  => '4014 Lyman Ave',
            'apt_suite'  => 'uppr',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Torres',
            'first_name'  => 'Desiree',
            'street_address'  => '635 Knower St',
            'apt_suite'  => 'Apt A',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 21,
            'last_name'  => 'Turner',
            'first_name'  => 'Johnajah',
            'street_address'  => '3343 Maplewood Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43610',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Elea',
            'first_name'  => 'Stepnick',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 22,
            'last_name'  => 'Sarah',
            'first_name'  => 'Ridi',
            'street_address'  => '',
            'apt_suite'  => '',
            'city'  => '',
            'state'  => '',
            'zip_code'  => '',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Autman',
            'first_name'  => 'Andrea',
            'street_address'  => '3936 Hoiles Ave',
            'apt_suite'  => '',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43612',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Barbee',
            'first_name'  => 'Rudy',
            'street_address'  => '2040 Parkdale Ave',
            'apt_suite'  => '',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Brown',
            'first_name'  => 'Zania',
            'street_address'  => '1317 Shenandoah Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Duhart',
            'first_name'  => 'Maliyah',
            'street_address'  => '1816 Milburn Ave',
            'apt_suite'  => '',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Franklin',
            'first_name'  => 'A\'shi',
            'street_address'  => '723 Hamilton St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43604',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Hearn',
            'first_name'  => 'Orlana',
            'street_address'  => '1125 Warwick Ave',
            'apt_suite'  => '',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Hodge',
            'first_name'  => 'Janiya',
            'street_address'  => '2145 Dorr St',
            'apt_suite'  => '',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Johnson',
            'first_name'  => 'Cecelia',
            'street_address'  => '3815 Inverness Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Johnson',
            'first_name'  => 'Rihanna',
            'street_address'  => '337 Clifton Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Mays',
            'first_name'  => 'Malia',
            'street_address'  => '340 S Reynolds Rd',
            'apt_suite'  => 'Lot 196',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Moore',
            'first_name'  => 'Dalaya',
            'street_address'  => '1128 Pinebrook Pkwy',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Moore',
            'first_name'  => 'Talaya',
            'street_address'  => '1128 Pinebrook Pkwy',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Nash',
            'first_name'  => 'Ronetta',
            'street_address'  => '826 Burke Glen Rd',
            'apt_suite'  => '',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Perdue',
            'first_name'  => 'Ra\'Jaya',
            'street_address'  => '4123 S Terrace View St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Pope',
            'first_name'  => 'Alaysia',
            'street_address'  => '719 Wyman St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Rose',
            'first_name'  => 'Jasmine',
            'street_address'  => '803 Moran Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Royster',
            'first_name'  => 'Rylee',
            'street_address'  => '420 HEATHSHIRE DR',
            'apt_suite'  => '',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Scott',
            'first_name'  => 'Jermani',
            'street_address'  => '128 Bloomfield Ave',
            'apt_suite'  => '',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Sisson',
            'first_name'  => 'Terriana',
            'street_address'  => '815 Pinewood Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Spears',
            'first_name'  => 'Antanya',
            'street_address'  => '4409 Cherry Creek Ln',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Strode',
            'first_name'  => 'Deryiah',
            'street_address'  => '3563 Rushland Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43606',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Taylor',
            'first_name'  => 'Aja',
            'street_address'  => '1445 Vance St',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Tilghman',
            'first_name'  => 'Azariah',
            'street_address'  => '526 Toronto Ave',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Ulis',
            'first_name'  => 'Rynaisha',
            'street_address'  => '1556 Buckingham St',
            'apt_suite'  => '',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Vinson',
            'first_name'  => 'MiAngel',
            'street_address'  => '127 Gibbons St',
            'apt_suite'  => 'uppr',
            'city'  => 'TOLEDO',
            'state'  => 'OH',
            'zip_code'  => '43609',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Walton',
            'first_name'  => 'Skyler',
            'street_address'  => '1162 Pinebrook Pkwy ',
            'apt_suite'  => 'Apt 203',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43615',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'White',
            'first_name'  => 'Patricia',
            'street_address'  => '2163 Laurel Valley Dr',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43614',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('students')->insert([
            'school_id' => 23,
            'last_name'  => 'Young',
            'first_name'  => 'Seanna',
            'street_address'  => '561 Richards Rd',
            'apt_suite'  => '',
            'city'  => 'Toledo',
            'state'  => 'OH',
            'zip_code'  => '43607',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
