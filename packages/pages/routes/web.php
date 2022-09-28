<?php
Route::group([
    "middleware" => "web"
], function () {
    Route::get('gp/edit-page', 'Tech5s\PageGrapes\Controllers\PageController@edit');
    Route::post('gp/save-page/{id}', 'Tech5s\PageGrapes\Controllers\PageController@savePage');
    Route::get('gp/load-page/{id}', 'Tech5s\PageGrapes\Controllers\PageController@loadPage');
    Route::get('gp/get-block', 'Tech5s\PageGrapes\Controllers\BlockController@getBlock');
});
