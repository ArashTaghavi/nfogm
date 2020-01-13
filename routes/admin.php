<?php
Route::middleware(['web', 'auth:web'])->group(function () {
    Route::get('/admin', 'DefaultController@index');
    Route::get('/admin/{all}', 'DefaultController@index')->where(['all' => '.*']);

    Route::prefix('api/admin')->name('admin.')->group(function () {
        // ================================ Users ================================
        Route::get('/', 'DefaultController@index')->name('index');

        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', 'UserController@index')->name('index');
            Route::post('/', 'UserController@store')->name('store');
            Route::get('/block/{id}', 'UserController@block')->name('block');
            Route::put('/role-update/{id}/{role}', 'UserController@roleUpdate')->name('role-update');
            Route::put('/field-update/{id}/{field}', 'UserController@fieldUpdate')->name('field-update');
            Route::delete('/{id}', 'UserController@destroy')->name('destroy');
        });
        // ================================ Users ================================

        // ================================ Roles ================================
        Route::prefix('roles')->name('roles.')->group(function () {
            Route::get('/', 'RoleController@index')->name('index');
            Route::get('/{role}', 'RoleController@get_by_id')->name('get-by-id');
            Route::post('/', 'RoleController@store')->name('store');
            Route::put('/{role}', 'RoleController@update')->name('update');
            Route::delete('/{role}', 'RoleController@destroy')->name('destroy');
        });
        // ================================ Roles ================================

        Route::prefix('base-information')->name('base-information.')->group(function () {
            Route::get('/permissions', 'BaseInformationController@permissions')->name('permissions');
        });
    });


});


