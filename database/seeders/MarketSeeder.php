<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('markets')->insert([
            'name'=>Str::random(20),
            'address'=>Str::random(30),
            'value'=>floatval(random_int(1000,9999999)),
            'employees_quantity'=>floatval(random_int(0,1000)),
            'occupancy_rate'=>floatval(random_int(0,100)),
            'status'=>boolval(round(random_int(0,1),0))

        ]);
    }
}
