<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::get('map', 'MapController@map');
    Route::crud('reports', 'ReportsCrudController');
    Route::crud('subscribes', 'SubscribesCrudController');
    Route::crud('cameras', 'CamerasCrudController');
    Route::get("reports/{id}", "FireCrudController@getReport");
    Route::get("sendFireNotifyToNearbyUser/{fireId}", "FireCrudController@sendFireNotificationToNearbyUsers");

    Route::crud('fire', 'FireCrudController');
}); // this should be the absolute last line of this file
