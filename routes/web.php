<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/visit/{id}', function () {
    return view('view_site');
})->name('visit');

Route::post('/', function () {
    request()->validate([
        'site' => 'url|required|max:255',
    ]);
    $url = request()->request->get('site');
    $site = new \App\Sites();
    $row = $site->where('url', '=', $url)->first();
    if(!$row){
        $row = new \App\Sites();
        $row->url = request()->request->get('site');
        $row->visited_other_site = 0;
        $row->visited_me = 0;
        $row->save();
    }
    return redirect()->route('visit', ['id' => $row->id]);
    //return view('view_site');
});
