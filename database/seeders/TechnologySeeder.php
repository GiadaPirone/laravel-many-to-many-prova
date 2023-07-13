<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $technologies = ["Microsoft .NET", "CMS","Linux","Apache","Tomcat","JBoss","Java","PHP",];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();

            $newTechnology->name = $technology;
            $newTechnology->save();
        }

        
        // $technologies = config("store.tecnologies");

        // for ($i=0; $i < count($technologies); $i++) { 

        //     $newTechnology = new Technology();
        //     $newTechnology->name = $technologies[$i];
        //     $newTechnology->save();

        // }
    }
}
