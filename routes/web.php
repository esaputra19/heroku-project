<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\Admin\AdminLearnController as AdminLearn;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserLearnController as UserLearn;
use Dotenv\Parser\Lexer;
use Faker\Guesser\Name;
use PhpParser\Node\Name as NodeName;
// use App\Http\Controllers\User\LearningController as UserLearning;
// use App\Http\Controllers\Admin\LearningController as AdminLearning;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::resource('learnings', LearningController::class);
Route::get('admin.adminlearning',[LearningController::class, 'index'])->name('learning');
Route::get('admin.edit{learnings}',[LearningController::class, 'edit'])->name('edit');
Route::post('admin.update{learnings}',[LearningController::class, 'update'])->name('update');
Route::get('admin.destroy/{learnings}',[LearningController::class, 'destroy'])->name('destroy');
Route::get('admin.create',[LearningController::class, 'create'])->name('create');
Route::post('admin.store',[LearningController::class, 'store'])->name('store');
Route::get('admin.show',[LearningController::class, 'show'])->name('show');
Route::get('/mail-send', [WelcomeController::class, 'mailSend']);
Route::resource('mentors', MentorController::class);
Route::get('mentor.index', [MentorController::class, 'index'])->name('mentor');
// Route::get('/learning', function () {
//     return view('user.learning');
// })->name('user.learning');
Route::resource('leaderboards', LeaderboardController::class);
Route::get('admin.leaderboard.index', [LeaderboardController::class, 'index'])->name('leaderboard.index');
Route::get('leaderboard.edit{leaderboards}',[LeaderboardController::class, 'edit'])->name('edit');
Route::post('leaderboard.update{leaderboards}',[LeaderboardController::class, 'update'])->name('leaderboard.update');
Route::get('leaderboard.destroy/{leaderboards}',[LeaderboardController::class, 'destroy'])->name('destroy');
Route::get('leaderboard.show',[LeaderboardController::class, 'show'])->name('leaderboard.user');
Route::get('admin.leaderboard.create', [LeaderboardController::class, 'create'])->name('create');
Route::post('leaderboard.store',[LeaderboardController::class, 'store'])->name('store');

//Route::resource('adminlearn', AdminLearningController::class);
//Route::resource('admin', LearningController::class);


// Route::get('/jadwal', function () {
//     return view('admin.jadwal');
// })->name('jadwal');

// Route::get('/masterlearning', function () {
//     return view('admin.masterlearning');
// })->name('masterlearning');

// socialite routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

// midtrans routes
Route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
Route::post('payment/success', [CheckoutController::class, 'midtransCallback']);


Route::middleware(['auth'])->group(function () {
    // checkout routes
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create')->middleware('ensureUserRole:user');
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('ensureUserRole:user');



    // dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // user dashboard
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function(){
        Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
    //    Route::get('/', [UserLearning::class, 'index'])->name('learning');
    });

    // admin dashboard
    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function(){
        Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');

        // admin checkout
        Route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');
    });

    // Route::prefix('admin/learning')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function(){
    //     Route::get('/', [AdminLearning::class, 'index'])->name('learning');
    // });

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
