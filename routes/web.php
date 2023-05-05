<?php

use App\Http\Livewire\Client\Dashboard\Dashboard;
use App\Http\Livewire\Client\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Livewire\Admin\Dashboard\AdminHome;
use App\Http\Livewire\Admin\Dashboard\Home as DashboardHome;
use App\Http\Livewire\Client\Dashboard\HealthRecords;
use App\Http\Livewire\Client\Dashboard\Home;
use App\Http\Livewire\Client\Dashboard\Inbox;
use App\Http\Livewire\Client\Dashboard\Profile;
use App\Http\Livewire\Client\Dashboard\Settings;

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
      Route::get('/', Home::class)->name('client.home');
      // Route::get('/dashboard', Dashboard::class)->name('client.dashboard'); 
      // Route::get('/profile', Profile::class)->name('client.profile');
      Route::get('/inbox', Inbox::class)->name('client.inbox'); 
      //Route:get('endpoint', Classname::class)->name('route.name');
      Route::get('/dashboard', Dashboard::class)->name('client.dashboard'); 
      Route::get('/profile', Profile::class)->name('client.profile');
      Route::get('/settings', Settings::class)->name('client.settings');
      Route::get('/healthrecords', HealthRecords::class)->name('client.health-records');
   });
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
   Route::prefix('dashboard')->group(function () {

      //url:port/client/dashboard
      Route::get('/', AdminHome::class)->name('admin.dashbaord');
      //Route:get('endpoint', Classname::class)->name('route.name');
   });
});


//provider, example github, google, facebook, etc.
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback',[ProviderController::class, 'callback']);