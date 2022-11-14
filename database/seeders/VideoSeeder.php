<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class VideoSeeder extends Seeder
{
    public $faker;

    public function __construct(Faker $faker)
    {
            $this->faker = $faker;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<100; $i++){
            Video::create([
                'name' => $this->faker->sentence(30)
            ]);
        }
    }
}
