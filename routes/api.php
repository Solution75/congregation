<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\MembersController;

Route::get('/member', function (){
    return 'false';
});
Route::post('/members', [MembersController::class, 'create']);
