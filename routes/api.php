<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'sayHi'])->name("say-hi");
Route::get('/bye', [TestController::class, 'sayBye'])->name("say-bye");
Route::get('/palendrom', [TestController::class, 'palendrom1'])->name("palendrom");
Route::get('/time', [TestController::class, 'time'])->name("sec");
Route::get('/pablo', [TestController::class, 'pablo'])->name("pab");
Route::get('/student', [TestController::class, 'students'])->name("students");
