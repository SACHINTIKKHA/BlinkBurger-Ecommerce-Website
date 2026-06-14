<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('index','index');
Route::view('register','register');
Route::post('registerdata',[EcommerceController::class,'add']);
Route::view('login','login');
Route::post('loginuser',[EcommerceController::class,'login']);
Route::view('userdashboard','cutomer.userdashboard');
Route::view('admindashboard','admin.admindashboard');
Route::view('additem','admin.additem');
Route::post('addnewitem',[EcommerceController::class,'addfooditem']);
Route::view('offer','admin.offer');
Route::post('addoffer',[EcommerceController::class,'newoffer']);
Route::view('customerdashboard','customer.dashboard');
Route::view('update','customer.update');
Route::get('update',[EcommerceController::class,'change']);
Route::get('logout',[EcommerceController::class,'logout']);
Route::post('changecustomer',[EcommerceController::class,'newupdate']);
Route::view('newindex','customer.newindex');
Route::view('membership','admin.membership');
Route::post('addmembership',[EcommerceController::class,'createmembership']);
Route::get('burger',[EcommerceController::class,'allburger']);
Route::get('chowmein',[EcommerceController::class,'allchowmein']);
Route::get('momos',[EcommerceController::class,'allmomos']);
Route::get('rice',[EcommerceController::class,'allrice']);
Route::get('chaap',[EcommerceController::class,'allchaap']);
Route::get('allitem',[EcommerceController::class,'allitem']);
Route::get('cart',[EcommerceController::class,'cartitem']);
Route::get('roll',[EcommerceController::class,'allroll']);
Route::get('addtocart/{id}',[EcommerceController::class,'addcart']);
Route::get('deletecart/{id}',[EcommerceController::class,'delitem']);
Route::post('coupan',[EcommerceController::class,'addcoupan']);
Route::post('checkout',[EcommerceController::class,'checkoutitem']);

