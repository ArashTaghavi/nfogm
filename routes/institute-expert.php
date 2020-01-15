<?php
Route::middleware(['web', 'auth:web'])->group(function () {
    Route::get('/institute-expert', 'DefaultController@index');
    Route::get('/institute-expert/{all}', 'DefaultController@index')->where(['all' => '.*']);

    Route::prefix('api/institute-expert')->name('institute-expert.')->group(function () {
        Route::get('/', 'DefaultController@index')->name('index');
        // ================================ Users ================================
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
        });
        // ================================ Roles ================================

        // ================================ Devices ================================
        Route::prefix('devices')->name('devices.')->group(function () {
            Route::get('/', 'DeviceController@index')->name('index');
            Route::post('/', 'DeviceController@store')->name('store');
            Route::get('/{device}', 'DeviceController@get_by_id')->name('get-by-id');
            Route::put('/field-update/{id}/{field}', 'DeviceController@fieldUpdate')->name('field-update');
            Route::delete('/{device}', 'DeviceController@destroy')->name('destroy');
        });
        // ================================ Devices ================================

        // ================================ Detail Devices ================================
        Route::prefix('detail-devices')->name('detail-devices.')->group(function () {
            Route::get('/{id}', 'DetailDeviceController@index')->name('index');
            Route::post('/{id}', 'DetailDeviceController@store')->name('store');
            Route::put('/{id}', 'DetailDeviceController@update')->name('update');
        });
        // ================================ Detail Devices ================================

        // ================================ Rans ================================
        Route::prefix('rans')->name('rans.')->group(function () {
            Route::post('/{id}', 'RanController@store')->name('store');
            Route::put('/{id}', 'RanController@update')->name('update');
        });
        // ================================ Rans ================================

        Route::prefix('base-information')->name('base-information.')->group(function () {
            Route::get('/permissions', 'BaseInformationController@permissions')->name('permissions');
        });
    });


});


