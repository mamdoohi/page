<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/visit', function (Request $request) {

    return \App\Sites::orderBy(DB::raw("`visited_other_site` - `visited_me`"), 'desc')->first();
});
