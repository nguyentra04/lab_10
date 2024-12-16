<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class nhtvattu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            NhtvattuSeeder::class  
         ]);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
    }
}
