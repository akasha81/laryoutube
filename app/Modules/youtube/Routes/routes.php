<?php Route::group( [ 'namespace' => 'App\Modules\youtube\Controllers',
        'as' => 'youtube.',
    ], function(){
        Route::get('/youtube', ['uses' => 'youtubeController@index']);
    });