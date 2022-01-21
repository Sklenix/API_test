<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
