<?php
/**
 * Created by PhpStorm.
 * User: He
 * Date: 2017/1/9
 * Time: 16:33
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /**
     * Get all of the food's ratings.
     */
    public function ratings()
    {
        return $this->morphMany('App\Rating', 'commentable');
    }
}