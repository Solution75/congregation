<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\DepartmentsController;

Route::get('/member', function (){
    return 'false';
});
Route::post('/members', [MembersController::class, 'create']);
Route::post('/departments', [DepartmentsController::class, 'create']);
