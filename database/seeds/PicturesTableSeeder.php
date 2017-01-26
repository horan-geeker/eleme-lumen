<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: He
 * Date: 2017/1/10
 * Time: 15:44
 */
class PicturesTableSeeder extends Seeder
{

    public function run()
    {
        \App\Picture::insert([
            ["seller_id"=>"1", "src"=>"http://fuss10.elemecdn.com/8/71/c5cf5715740998d5040dda6e66abfjpeg.jpeg?imageView2/1/w/180/h/180"],
            ["seller_id"=>"1", "src"=>"http://fuss10.elemecdn.com/b/6c/75bd250e5ba69868f3b1178afbda3jpeg.jpeg?imageView2/1/w/180/h/180"],
            ["seller_id"=>"1", "src"=>"http://fuss10.elemecdn.com/f/96/3d608c5811bc2d902fc9ab9a5baa7jpeg.jpeg?imageView2/1/w/180/h/180"],
            ["seller_id"=>"1", "src"=>"http://fuss10.elemecdn.com/6/ad/779f8620ff49f701cd4c58f6448b6jpeg.jpeg?imageView2/1/w/180/h/180"]
        ]);
    }

}