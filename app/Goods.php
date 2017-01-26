<?php
/**
 * Created by PhpStorm.
 * User: He
 * Date: 2017/1/9
 * Time: 16:33
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public function foods()
    {
        return $this->hasMany(Food::class);
    }

}