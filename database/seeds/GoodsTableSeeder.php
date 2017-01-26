<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: He
 * Date: 2017/1/10
 * Time: 15:44
 */
class GoodsTableSeeder extends Seeder
{
    public function run()
    {

        $json = app()->basePath() . '/public/data.json';
        $data = file_get_contents($json);
        $data = json_decode($data);
        foreach ($data->goods as $item) {
            $goods = \App\Goods::create([
                "name" => $item->name,
                "type" => $item->type,
            ]);
            foreach ($item->foods as $food) {
                $ratings = $food->ratings;
                unset($food->ratings);
                $food = $goods->foods()->create((array)$food);
                foreach ($ratings as $rating) {
                    $food->ratings()->create((array)$rating);
                }
            }
        }
    }
}