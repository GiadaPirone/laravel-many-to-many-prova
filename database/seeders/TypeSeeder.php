<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = config("store.types");
        
        for ($i=0; $i < count($types) ; $i++) { 
            
            $newType= new Type();

            $newType->name = $types[$i];
            $newType->save();
        }
    }
}
