<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: He
 * Date: 2017/1/10
 * Time: 15:44
 */
class SellersTableSeeder extends Seeder
{

    public function run()
    {
        \App\Seller::create([
            "name" => "粥品香坊（回龙观）",
            "description" => "蜂鸟专送",
            "deliveryTime" => 38,
            "score" => 4.2,
            "serviceScore" => 4.1,
            "foodScore" => 4.3,
            "rankRate" => 69.2,
            "minPrice" => 20,
            "deliveryPrice" => 4,
            "ratingCount" => 24,
            "sellCount" => 90,
            "bulletin" => "粥品香坊其烹饪粥料的秘方源于中国千年古法，在融和现代制作工艺，由世界烹饪大师屈浩先生领衔研发。坚守纯天然、0添加的良心品质深得消费者青睐，发展至今成为粥类的引领品牌。是2008年奥运会和2013年园博会指定餐饮服务商。",
            "avatar" => "http://static.galileo.xiaojukeji.com/static/tms/seller_avatar_256px.jpg",
        ]);
    }

}