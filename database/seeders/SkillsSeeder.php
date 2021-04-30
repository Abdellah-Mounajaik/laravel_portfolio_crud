<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                "competence" => "html",
                "niveau"=> 100,
                "created_at"=>now(),

            ],
            [
                "competence" => "css",
                "niveau"=> 90,
                "created_at"=>now(),

            ],
            [
                "competence" => "js",
                "niveau"=> 75,
                "created_at"=>now(),

            ],
            [
                "competence" => "php",
                "niveau"=> 80,
                "created_at"=>now(),

            ],
            [
                "competence" => "cms",
                "niveau"=> 90,
                "created_at"=>now(),

            ],
            [
                "competence" => "pohtoshop",
                "niveau"=> 55,
                "created_at"=>now(),

            ],
            
        ]);
    }
}
