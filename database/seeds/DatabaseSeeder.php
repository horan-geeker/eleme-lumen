<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call('SellersTableSeeder');
         $this->call('PicturesTableSeeder');
         $this->call('InfosTableSeeder');
         $this->call('SupportsTableSeeder');
         $this->call('GoodsTableSeeder');
         $this->call('RatingsTableSeeder');
    }
}
