<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->group(['prefix' => 'api'], function () use ($app) {
    $app->get('/', function () use ($app) {
        return "router group api";
    });
    $app->get('/seller', function () {
        $seller = \App\Seller::with('infos')->with('pictures')->with('supports')->find(1);
        if ($seller) {
            $seller = $seller->toArray();
            $sellerInfo = [];
            foreach ($seller['infos'] as $info) {
                $sellerInfo[] = $info['content'];
            }
            $seller['infos'] = $sellerInfo;
            $sellerPics = [];
            foreach ($seller['pictures'] as $pic) {
                $sellerPics[] = $pic['src'];
            }
            $seller['pics'] = $sellerPics;
            return response()->json(['errno' => 0, 'data' => $seller]);
        } else {
            return response()->json(['errno' => 1]);
        }
    });
    $app->get('/ratings', function () {
        $seller = \App\Seller::find(1);
        $ratings = $seller->ratings;
        if ($ratings) {
            return response()->json(['errno' => 0, 'data' => $ratings]);
        } else {
            return response()->json(['errno' => 1]);
        }
    });
    $app->get('/goods', function () {
        $goods = \App\Goods::with('foods.ratings')->get();
        if ($goods) {
            return response()->json(['errno' => 0, 'data' => $goods]);
        } else {
            return response()->json(['errno' => 1]);
        }
    });
});

$app->get('/', function () use ($app) {
    return "only / router";
});
$app->get('/key', function () {
    return str_random(32);
});
