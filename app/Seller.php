<?php
/**
 * Created by PhpStorm.
 * User: He
 * Date: 2017/1/9
 * Time: 16:33
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function infos()
    {
        return $this->hasMany(Info::class);
    }

    public function supports()
    {
        return $this->belongsToMany(Support::class);
    }

    /**
     * Get all of the seller's ratings.
     */
    public function ratings()
    {
        return $this->morphMany('App\Rating', 'commentable');
    }
}