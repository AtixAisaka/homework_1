<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car')->insert([
            'brand' => 'Mercedes-Benz',
            'Model' => 'C63 AMG',
            'color' => 'Red',
            'VIN' => '1GB0G2BA9E1189721'
        ]);
    }
}
