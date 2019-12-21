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
    $info = $request->request->all();
    if(!empty($info['visited'])){
        $logId = $info['logId'];
        $logInfo = \App\SiteVisitLogs::where([
            ['id', '=', $logId,],
            ['visitor_site_id', '=', $info['me'],],
        ])->first();
        if($logInfo && $logInfo->total_visit == null){
            $totalVisit = time() - strtotime($logInfo->created_at);
            $logInfo->total_visit = $totalVisit;
            $logInfo->save();
            \App\Sites::where('id', '=', $logInfo->visited_site_id)->update(['visited_me' => DB::raw('visited_me + ' . $totalVisit)]);
            \App\Sites::where('id', '=', $logInfo->visitor_site_id)->update(['visited_other_site' => DB::raw('visited_other_site + ' . $totalVisit)]);
        }
    }
    $return = [];
    $newSite = \App\Sites::where('id', '!=', $info['me'])->orderBy(DB::raw("`visited_other_site` - `visited_me`"), 'desc')->first();
    $log = new \App\SiteVisitLogs();
    $log->ip = \Request::getClientIp(true);
    $log->visitor_site_id = $info['me'];
    $log->visited_site_id = $newSite->id;
    $log->save();
    $return['logId'] = $log->id;
    $return['newSite'] = $newSite;
    $return['stats'] = \App\Sites::where('id', '=', $info['me'])->first();
    return $return;
});
