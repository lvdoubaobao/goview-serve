<?php
Route::post('sys/login', [\Xczn\GoViewServe\Http\Controller\AuthController::class, 'login']);
Route::get('sys/getOssInfo', [\Xczn\GoViewServe\Http\Controller\IndexController::class, 'getOssInfo']);
Route::get('project/getData',[\Xczn\GoViewServe\Http\Controller\ProjectController::class,'getData']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('project/upload',[\Xczn\GoViewServe\Http\Controller\ProjectController::class,'upload']);
    Route::get('project/list', [\Xczn\GoViewServe\Http\Controller\ProjectController::class, 'list']);
    Route::post('project/create', [\Xczn\GoViewServe\Http\Controller\ProjectController::class, 'create']);
    Route::post('project/save/data',[\Xczn\GoViewServe\Http\Controller\ProjectController::class,'saveData']);
});
