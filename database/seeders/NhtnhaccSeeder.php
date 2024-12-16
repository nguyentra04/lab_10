<?php
namespace Database\Seeders;
use faker\factory as faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NhtnhaccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        foreach(range(1,100)as $index){
            DB::table('nhacc')->insert([
                'nhtmanhacc' => $faker->uuid(),
                'nhttennhacc' => $faker->sentences(5),
                'nhtdiachi' => $faker->address(),
                'nhtdienthoai' => $faker->phoneNumber(10),
                'nhtemail' => $faker->email(),
                'nhtstatus' => $faker->boolean(),
            ]);
        }
    }
}
