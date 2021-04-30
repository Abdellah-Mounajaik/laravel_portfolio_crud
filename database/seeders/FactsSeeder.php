<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                "icon" => "icofont-simple-smile",
                "nom" => 'Happy Clients',
                "chiffre" => 232,
                "created_at"=>now(),

            ],
            [
                "icon" => "icofont-document-folder",
                "nom" => 'Projects Of Support',
                "chiffre" => 521,
                "created_at"=>now(),
            ],
            [
                "icon" => "icofont-live-support",
                "nom" => 'Hours Workers',
                "chiffre" => 1463,
                "created_at"=>now(),

            ],
            [
                "icon" => "icofont-users-alt-5",
                "nom" => 'hard',
                "chiffre" => 15,
                "created_at"=>now(),

            ],
        ]);
    }
}
