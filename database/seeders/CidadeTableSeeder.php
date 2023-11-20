<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CidadeTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');
        return [
            'name' => $faker->name(),
            'uf' => $faker->stateAbbr(),
        ];
        
    }
}
