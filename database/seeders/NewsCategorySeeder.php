<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsCategory::create([
            "name" => "Tournament",
            "slug" => "tournament",
        ]);
        NewsCategory::create([
            "name" => "Update",
            "slug" => "update",
        ]);
        NewsCategory::create([
            "name" => "Event",
            "slug" => "event",
        ]);
        NewsCategory::create([
            "name" => "Games",
            "slug" => "games",
        ]);
        NewsCategory::create([
            "name" => "Social Media",
            "slug" => "social-media",
        ]);
        NewsCategory::create([
            "name" => "Schedule",
            "slug" => "schedule",
        ]);
    }
}
