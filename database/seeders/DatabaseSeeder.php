<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        DB::table('customer')->insert([
            'customer_name' => 'George',
            'customer_surname' => 'Butler',
            'customer_phone' => '123456789',
            'customer_email' => 'butler@gmail.com',
            'customer_position' => 'Skladník',
        ]);

        DB::table('customer')->insert([
            'customer_name' => 'Josh',
            'customer_surname' => 'Pearl',
            'customer_phone' => '159159159',
            'customer_email' => 'pearl@gmail.com',
            'customer_position' => 'Mechanik',
        ]);

        DB::table('customer')->insert([
            'customer_name' => 'Albert',
            'customer_surname' => 'Xander',
            'customer_phone' => '987654321',
            'customer_email' => 'xander@gmail.com',
            'customer_position' => 'HR asistent',
        ]);

        DB::table('customer')->insert([
            'customer_name' => 'Benjamin',
            'customer_surname' => 'Felix',
            'customer_phone' => '147147147',
            'customer_email' => 'felix@gmail.com',
            'customer_position' => 'Mechanik',
        ]);

        DB::table('customer')->insert([
            'customer_name' => 'Andre',
            'customer_surname' => 'Bush',
            'customer_phone' => '258258258',
            'customer_email' => 'bush@gmail.com',
            'customer_position' => 'HR asistent',
        ]);

        DB::table('customer')->insert([
            'customer_name' => 'Esme',
            'customer_surname' => 'Maxwell',
            'customer_phone' => '123123123',
            'customer_email' => 'maxwell@gmail.com',
            'customer_position' => 'Vedoucí',
        ]);

        DB::table('customer')->insert([
            'customer_name' => 'Erik',
            'customer_surname' => 'Laurent',
            'customer_phone' => '157157157',
            'customer_email' => 'laurent@gmail.com',
            'customer_position' => 'Manažer',
        ]);

        DB::table('customer')->insert([
            'customer_name' => 'Fergus',
            'customer_surname' => 'Bale',
            'customer_phone' => '252252252',
            'customer_email' => 'bale@gmail.com',
            'customer_position' => 'Správce IT',
        ]);

        DB::table('customer_group')->insert([
            'customer_group_name' => 'První',
        ]);

        DB::table('customer_group')->insert([
            'customer_group_name' => 'Druhá',
        ]);

        DB::table('customer_group')->insert([
            'customer_group_name' => 'Třetí',
        ]);

        DB::table('customer_group')->insert([
            'customer_group_name' => 'Čtvrtá',
        ]);
    }
}
