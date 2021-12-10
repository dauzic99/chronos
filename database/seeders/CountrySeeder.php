<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use File;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();

        $json = File::get("database/data/country.json");
        $countries = json_decode($json);

        foreach ($countries as $key => $value) {
            Country::create([
                "name" => $value->Name,
                "code" => $value->Code
            ]);
        }
    }
}
