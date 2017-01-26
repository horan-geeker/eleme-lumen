<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: He
 * Date: 2017/1/10
 * Time: 15:44
 */
class InfosTableSeeder extends Seeder
{

    public function run()
    {
        \App\Info::insert([
            ["seller_id" => "1", "content" => "该商家支持发票,请下单写好发票抬头",],
            ["seller_id" => "1", "content" => "品类:其他菜系,包子粥店",],
            ["seller_id" => "1", "content" => "北京市昌平区回龙观西大街龙观置业大厦底商B座102单元1340",],
            ["seller_id" => "1", "content" => "营业时间:10:00-20:30",],
        ]);
    }

}