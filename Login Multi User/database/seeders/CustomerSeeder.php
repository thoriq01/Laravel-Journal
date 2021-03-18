<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker::create('da_DK');
        for($i=41;$i<=50;$i++){
            DB::table('provinsis')->insert([
                'idProvinsi'=>$i,
                'namaProvinsi'=>$faker->region,
                'namaIbuKotaProvinsi'=>$faker->city,
                'namaGubernur'=>$faker->name(),
                'Id_negara'=>'ne',
            ]);
        }
        
    }
}
