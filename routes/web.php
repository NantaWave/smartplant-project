<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beanController;
use App\Http\Controllers\userController;
use App\Http\Controllers\countInfoController;

Route::redirect('/', '/dashboard');

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/watering', function () {
    return view('watering');
});
Route::get('/planting', function () {
    return view('planting');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/planting-add', function () {
    return view('planting-add');
});
Route::get('/user-add', function () {
    return view('user-add');
});
Route::get('/countInfo', function () {
    return view('countInfo');
});
Route::get('/planting-submit', function () {
    return view('planting-submit');
});
Route::get('/errors_permission',function(){
    return view('errors.permission');
});
Route::post('/user_login' , [userController::class,'userLogin']);
Route::get('/user_logout' , [userController::class,'userLogout']);
Route::get('/profile', [userController::class,'getShowUser']);
Route::get('/planting', [beanController::class,'getShowPlanting']);
Route::post('/plantingAdd' , [beanController::class,'plantingAdd']);
Route::get('/plantingEdit/{id}' , [beanController::class,'plantingEdit']);
Route::post('/plantingUpdate',[beanController::class,'plantingUpdate']);
Route::get('/plantingSubmit/{id}' , [beanController::class,'plantingSubmit']);
Route::post('/plantingSubmitUp',[beanController::class,'plantingSubmitUp']);
Route::get('/plantingDelete/{id}' , [beanController::class,'plantingDelete']);
Route::get('/planting' , [beanController::class,'showPlanting']);
Route::get('/download-data', [beanController::class,'downloadData']);
Route::post('/userAdd',[userController::class,'userAdd']);
Route::get('/userEdit/{id}' , [userController::class,'userEdit']);
Route::post('/userUpdate',[userController::class,'userUpdate']);
Route::get('/userDelete/{id}' , [beanController::class,'userDelete']);
Route::get('/countInfo',[countInfoController::class,'getInfo']);
Route::get('/dashboard', [beanController::class,'getShowMcDash']);
Route::get('/watering', [beanController::class,'getShowMcWR']);
Route::get('/statusMC/{status}', [beanController::class,'statusMC']);
Route::get('/statusWaterPump/{statusWP}', [beanController::class,'statusWaterPump']);
Route::get('/statusVaIn/{statusVin}', [beanController::class,'statusVaIn']);
Route::get('/statusVaOut/{statusVout}', [beanController::class,'statusVaOut']);
Route::get('/fetchData', [countInfoController::class, 'getData']);
Route::get('/menu', [userController::class, 'authUser']);