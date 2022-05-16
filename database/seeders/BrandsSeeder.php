<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[];
        $faker = Factory::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        for($i=0;$i<20;$i++){
            $data[]=['name'=>$faker->vehicleBrand];
        }
        DB::table("brands")->insert($data);
    }
}
