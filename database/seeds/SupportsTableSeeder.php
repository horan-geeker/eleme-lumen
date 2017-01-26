<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: He
 * Date: 2017/1/10
 * Time: 15:44
 */
class SupportsTableSeeder extends Seeder
{

    public function run()
    {
        \App\Support::insert([
            [
                "type" => 0,
                "description" => "在线支付满28减5"
            ],
            [
                "type" => 1,
                "description" => "VC无限橙果汁全场8折"
            ],
            [
                "type" => 2,
                "description" => "单人精彩套餐"
            ],
            [
                "type" => 3,
                "description" => "该商家支持发票,请下单写好发票抬头"
            ],
            [
                "type" => 4,
                "description" => "已加入“外卖保”计划,食品安全保障"
            ]
        ]);

        \Illuminate\Support\Facades\DB::table('seller_support')->insert([
            ['seller_id' => '1', 'support_id' => '1'],
            ['seller_id' => '1', "support_id" => '2'],
            ['seller_id' => '1', "support_id" => '3'],
            ['seller_id' => '1', "support_id" => '4'],
            ['seller_id' => '1', "support_id" => '5'],
        ]);
    }

}