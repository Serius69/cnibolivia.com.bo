<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Latest;
use App\Models\User;
use App\Models\Typelatest;
use App\Models\Banner;
use App\Models\Course;
use App\Models\Service;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Typelatest::factory(10)->create();
        User::factory(20)->create();
        Latest::factory(20)->create();
        Banner::factory(20)->create();
        Service::factory(20)->create();
        Course::factory(20)->create();
        
    }
}
