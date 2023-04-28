<?php

use App\Http\Livewire\Client\Dashboard\Dashboard;
use App\Http\Livewire\Client\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProviderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Landing Page
Route::get('/', Index::class)->name('index');

//Client
Route::prefix('client')->middleware(['auth'])->group(function () {
   Route::prefix('dashboard')->group(function () {

      //url:port/client/dashboard
      Route::get('/', Dashboard::class)->name('client.dashboard'); //view dashboard

      //Route:get('endpoint', Classname::class)->name('route.name');
   });
});

//provider, example github, google, facebook, etc.
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback',[ProviderController::class, 'callback']);
