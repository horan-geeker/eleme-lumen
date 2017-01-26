<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: He
 * Date: 2017/1/10
 * Time: 15:44
 */
class RatingsTableSeeder extends Seeder
{

    public function run()
    {
        $json = app()->basePath() . '/public/data.json';
        $data = file_get_contents($json);
        $data = json_decode($data);
        foreach ($data->ratings as $rating) {
            \App\Seller::find(1)->ratings()->create((array)$rating);
        }
    }

}