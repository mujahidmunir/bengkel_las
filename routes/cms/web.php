<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CMS\DashboardController;
use App\Http\Controllers\CMS\MasterController;


Route::post('postLogin', [LoginController::class, 'postLogin']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('/login', function() {
    return view('cms.auth.index');
});



Route::group(['midlleware' => ['web', 'cms']], function () {
    Route::get('/dashboard',[DashboardController::class, 'index']);

    Route::prefix('product')->group(function() {
        Route::get('/', [MasterController::class, 'indexProduct']);
        Route::get('/edit/{productId}', [MasterController::class, 'editProduct']);
        Route::post('/createOrUpdate', [MasterController::class, 'createOrUpdateProduct']);
        Route::get('/delete/{productId}', [MasterController::class, 'deleteProduct']);
    });

    Route::prefix('material')->group(function() {
        Route::get('/', [MasterController::class, 'indexMaterial']);
        Route::get('/edit/{materialId}', [MasterController::class, 'editMaterial']);
        Route::post('/createOrUpdate', [MasterController::class, 'createOrUpdateMaterial']);
        Route::get('/delete/{materialId}', [MasterController::class, 'deleteMaterial']);
    });

    Route::prefix('role')->group(function() {
        Route::get('/', [MasterController::class, 'indexRole']);
        Route::get('/edit/{roleId}', [MasterController::class, 'editRole']);
        Route::post('/createOrUpdate', [MasterController::class, 'createOrUpdateRole']);
        Route::get('/delete/{roleId}', [MasterController::class, 'deleteRole']);
    });

    Route::prefix('config')->group(function() {
        Route::get('/', [MasterController::class, 'indexConfig']);
        Route::get('/edit/{configId}', [MasterController::class, 'editConfig']);
        Route::post('/createOrUpdate', [MasterController::class, 'createOrUpdateConfig']);
        Route::get('/delete/{configId}', [MasterController::class, 'deleteConfig']);
    });

    Route::prefix('users')->group(function() {
        Route::get('/', [MasterController::class, 'indexUsers']);
        Route::get('/edit/{usersId}', [MasterController::class, 'editUsers']);
        Route::post('/createOrUpdate', [MasterController::class, 'createOrUpdateUsers']);
        Route::get('/delete/{usersId}', [MasterController::class, 'deleteUsers']);
    });





});
