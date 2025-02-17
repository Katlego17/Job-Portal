<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jobs\JobsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us']);
Route::get('/how-i-apply', [App\Http\Controllers\HomeController::class, 'how_i_apply']);
Route::get('/my-journey', [App\Http\Controllers\HomeController::class, 'my_journey']);
Route::get('/where-i-work', [App\Http\Controllers\HomeController::class, 'where_i_work']);
Route::get('/guest-jobs', [App\Http\Controllers\HomeController::class, 'jobs']);
Route::post('/search-jobs', [App\Http\Controllers\HomeController::class, 'search'])->name('search.job.guest');
Route::group(['prefix' => 'jobs'], function() {
    Route::get('single/{id}', [App\Http\Controllers\Jobs\JobsController::class, 'single'])->name('single.job');

});
Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::group(['prefix' => 'jobs'], function() {
        Route::post('save', [App\Http\Controllers\Jobs\JobsController::class, 'saveJob'])->name('save.job');
        Route::post('apply', [App\Http\Controllers\Jobs\JobsController::class, 'jobApply'])->name('apply.job');
        Route::any('search', [App\Http\Controllers\Jobs\JobsController::class, 'search'])->name('search.job');

    });

    Route::group(['prefix' => 'categories'], function() {
        Route::get('/single/{name}', [App\Http\Controllers\Categories\CategoriesController::class, 'singleCategory'])->name('categories.single');
    });


    Route::group(['prefix' => 'users'], function() {
        Route::get('profile', [App\Http\Controllers\Users\UsersController::class, 'profile'])->name('profile');
        Route::get('applications', [App\Http\Controllers\Users\UsersController::class, 'applications'])->name('applications');
        Route::get('savedjobs', [App\Http\Controllers\Users\UsersController::class, 'savedJobs'])->name('saved.jobs');

        Route::get('edit-details', [App\Http\Controllers\Users\UsersController::class, 'editDetails'])->name('edit.details');
        Route::post('edit-details', [App\Http\Controllers\Users\UsersController::class, 'updateDetails'])->name('update.details');


        Route::get('edit-cv', [App\Http\Controllers\Users\UsersController::class, 'editCV'])->name('edit.cv');
        Route::post('/edit-cv', [App\Http\Controllers\Users\UsersController::class, 'updateFiles'])->name('update.cv');
    });
});

Route::get('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'viewLogin'])->name('view.login')->middleware('checkforauth');
Route::post('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'checkLogin'])->name('check.login');


Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {

    Route::get('/', [App\Http\Controllers\Admins\AdminsController::class, 'index'])->name('admins.dashboard');
    Route::get('/all-admins', [App\Http\Controllers\Admins\AdminsController::class, 'admins'])->name('view.admins');

    Route::get('/create-admins', [App\Http\Controllers\Admins\AdminsController::class, 'createAdmins'])->name('create.admins');
    Route::post('/create-admins', [App\Http\Controllers\Admins\AdminsController::class, 'storeAdmins'])->name('store.admins');


    Route::get('/display-categories', [App\Http\Controllers\Admins\AdminsController::class, 'displayCategories'])->name('display.categories');

    Route::get('/create-cates', [App\Http\Controllers\Admins\AdminsController::class, 'createCategories'])->name('create.categories');
    Route::post('/create-cates', [App\Http\Controllers\Admins\AdminsController::class, 'storeCategories'])->name('store.categories');

    //update cates
    Route::get('/edit-cates/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'editCategories'])->name('edit.categories');
    Route::post('/edit-cates/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'updateCategories'])->name('update.categories');


    Route::get('/delete-cates/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteCategories'])->name('delete.categories');

    //jobs

    Route::get('/display-jobs', [App\Http\Controllers\Admins\AdminsController::class, 'allJobs'])->name('display.jobs');
    Route::get('/create-jobs', [App\Http\Controllers\Admins\AdminsController::class, 'createJobs'])->name('create.jobs');
    Route::post('/create-jobs', [App\Http\Controllers\Admins\AdminsController::class, 'storeJobs'])->name('store.jobs');
    Route::get('/delete-jobs/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteJobs'])->name('delete.jobs');


    Route::get('/display-apps', [App\Http\Controllers\Admins\AdminsController::class, 'displayApps'])->name('display.apps');
    Route::get('/delete-apps/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteApps'])->name('delete.apps');

    Route::get('single/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'single'])->name('single.job.admin');

});

// Email Verification Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
