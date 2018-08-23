<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryTableSeeder extends Seeder
{
    public function run()
    {
        $countryJson = file_get_contents(public_path('/bower_components/countries/data/json/countries.json'));
        $obj = json_decode($countryJson, true);
        foreach ($obj as $country) {
            DB::table('countries')->insert([
                [
                    'name' => $country['name'],
                    'code' => $country['code2l'],
                    'flag_img' => asset('bower_components/countries/data/flags') . $country['flag_32'],
                ],
            ]);
        }
    }
}
