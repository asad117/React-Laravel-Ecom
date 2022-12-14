<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

route::get('/visitor_details',[VisitorController::class,'getVisitorDetails']);
route::post('/post_contact',[ContactController::class,'addContact']);

