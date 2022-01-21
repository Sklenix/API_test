<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerCustomerGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_customer_group')->insert([
            'customer_id' => '1',
            'customer_group_id' => '2',
        ]);

        DB::table('customer_customer_group')->insert([
            'customer_id' => '2',
            'customer_group_id' => '1',
        ]);

        DB::table('customer_customer_group')->insert([
            'customer_id' => '1',
            'customer_group_id' => '3',
        ]);

        DB::table('customer_customer_group')->insert([
            'customer_id' => '3',
            'customer_group_id' => '2',
        ]);

        DB::table('customer_customer_group')->insert([
            'customer_id' => '1',
            'customer_group_id' => '4',
        ]);
    }
}
