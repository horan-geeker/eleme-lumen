<?php
/**
 * Created by PhpStorm.
 * User: He
 * Date: 2017/1/9
 * Time: 16:33
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $casts = ["recommend" => "array"];

    /**
     * Get all of the owning commentable models.
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}