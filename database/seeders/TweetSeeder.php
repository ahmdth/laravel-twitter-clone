<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Database\Factories\TweetFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tweet::factory()->count(50);
    }
}
