<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake  = Faker::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('news')->insert([
                'title' => $fake->name,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'email' => $fake->unique->email,
                'description' => $fake->sentence(15)
            ]);
        }
    }
}
