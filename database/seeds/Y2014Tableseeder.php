<?php

use Illuminate\Database\Seeder;

class Y2014Tableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Y2014')->insert([
            [
                'Order Date' => '01-2014',
                'NameSeafood' => 'Shrimp',
                'Decision' => '400' ,
                'Order' => '370',
                'Stock' => '10',
                'Cost' => '100000'
            ],
            [
                'Order Date' => '01-2014',
                'NameSeafood' => 'zzzz',
                'Decision' => '400' ,
                'Order' => '370',
                'Stock' => '10',
                'Cost' => '100000'
            ]
        ]);
    }
}
