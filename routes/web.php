<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';



Route::get('/dashboard', function (Request $request){
    // return "dashboard";
    return view('dashboard.dashboard');
})->name('dashboard');


// Movement routes
Route::get('/purchase', function (Request $request){
    return view('dashboard.pages.purchase.index');
})->name('purchase');



// Programs routes
Route::get('/programs', function (Request $request){
    // return "dashboard";
    return view('dashboard.pages.programs.index');
})->name('programs');

Route::get('/programs', function (Request $request){
    // return "dashboard";
    return view('dashboard.pages.programs.index');
})->name('programs.index');

Route::get('/programs/show', function (Request $request){
    // return "dashboard";
    return view('dashboard.pages.programs.show');
})->name('programs.show');


// Movement routes
Route::get('/movements', function (Request $request){
    return view('dashboard.pages.movements.index');
})->name('movements.index');



// Transaction routes
Route::get('/transactions', function (Request $request){
    // return "dashboard";
    return view('dashboard.pages.transactions.index');
})->name('transactions.index');
Route::get('/transactions/about', function (Request $request){
    // return "dashboard";
    return view('dashboard.pages.transactions.about');
})->name('transactions.about');






// Guest Pages
Route::get('/users', function (){
    return view('dashboard.users.index');
})->name('home');






// Route::prefix('/app')->middleware(['auth'])->group(function (){
//     Route::resource('/account-profile', UserProfileController::class);

//     // Dashboard
//     Route::get('/dashboard', function () {
//         return view('/dashboard.dashboard');
//     })->name('app.dashboard');

// });




// Dashboard role: user and admin
Route::prefix('/dashboard')->middleware('auth')->group(function (){

    // Users
    // Route::resource('users', UserController::class)->only(['index', 'show']);

    // Lost assets
    // Route::resource('lost-assets', LostAssetController::class)->except(['destroy']);

    // Account profile
    // Route::get('/profile-account', [UserProfileController::class, 'show'])->name('dashboard.profile.show');
    // Route::get('/profile-setting', [UserProfileController::class, 'edit'])->name('dashboard.profile.edit');
    // Route::put('/profile-setting', [UserProfileController::class, 'update'])->name('dashboard.profile.update');

});


Route::post('logout', function(Request $request){
    $request->user()->logout();
})->name('logout');

// INFO  The [public/storage] link has been connected to [storage/app/public]
Route::get('/link-storage', function () {
    Artisan::call('storage:link');
});




// Fallback routes
Route::get('/fallback', function () {
    return redirect()->back();
})->name('fallback');
