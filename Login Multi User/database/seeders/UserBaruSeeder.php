<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_barus')->insert(
            [
                'name'=>'alfrenza',
                'username'=>'alfrenza',
                'password'=>bcrypt('dupal245')
            ]
        );
    }
}
