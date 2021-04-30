<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icon" => "icofont-computer",
                "titre" => "Lorem Ipsum",
                "texte" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at"=>now(),
            ],
           [
                "icon" => "icofont-chart-bar-graph",
                "titre" => "Dolor Sitema",
                "texte" => "Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata",
                "created_at"=>now(),
           ], 
           [
            "icon" => "icofont-earth",
            "titre" => "Sed ut perspiciatis",
            "texte" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
            "created_at"=>now(),
           ],
           [
            "icon" => "icofont-image",
            "titre" => "Magni Dolores",
            "texte" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            "created_at"=>now(),
           ],
           [
            "icon" => "icofont-settings",
            "titre" => "Nemo Enim",
            "texte" => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque",
            "created_at"=>now(),
           ],
           [
            "icon" => "icofont-tasks-alt",
            "titre" => "Eiusmod Tempor",
            "texte" => "Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi",
            "created_at"=>now(),
           ],
          
        ]);
    }
}
