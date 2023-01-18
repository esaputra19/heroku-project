<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
use App\Http\Controllers\DashboardController as MentorDashboardController;
use App\Http\Controllers\Admin\WelcomeController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\PenentuanController;
use App\Http\Controllers\UserLearnController as UserLearn;
use Dotenv\Parser\Lexer;
use Faker\Guesser\Name;
use phpDocumentor\Reflection\Types\Resource_;

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

// Route::get('user.penentuan', [PenentuanController::class, 'penentuan'])->name('penentuan');
// Route::post('user.penentuan', [PenentuanController::class, 'penentuan'])->name('user.penentuan');
Route::resource('learnings', LearningController::class);
Route::get('admin.adminlearning',[LearningController::class, 'index'])->name('learning');
Route::get('admin.edit{learnings}',[LearningController::class, 'edit'])->name('edit');
Route::post('admin.update{learnings}',[LearningController::class, 'update'])->name('update');
Route::get('admin.destroy/{learnings}',[LearningController::class, 'destroy'])->name('destroy');
Route::get('admin.create',[LearningController::class, 'create'])->name('create');
Route::post('admin.store',[LearningController::class, 'store'])->name('store');
Route::get('admin.show',[LearningController::class, 'show'])->name('show');
Route::get('/mail-send', [WelcomeController::class, 'mailSend']);

Route::get('/loginmentor', [MentorController::class, 'loginmentor'])->name('loginmentor');
// Route mentor

// Route::get('/learning', function () {
//     return view('user.learning');
// })->name('user.learning');
Route::resource('leaderboards', LeaderboardController::class);
Route::get('admin.leaderboard.index', [LeaderboardController::class, 'index'])->name('leaderboard.index');
Route::get('leaderboard.edit{leaderboards}',[LeaderboardController::class, 'edit'])->name('leaderboard.edit');
Route::post('leaderboard.update{leaderboards}',[LeaderboardController::class, 'update'])->name('leaderboard.update');
Route::get('leaderboard.destroy/{leaderboards}',[LeaderboardController::class, 'destroy'])->name('destroy');
Route::get('leaderboard.show',[LeaderboardController::class, 'show'])->name('leaderboard.user');
Route::get('admin.leaderboard.create', [LeaderboardController::class, 'create'])->name('create');
Route::post('leaderboard.store',[LeaderboardController::class, 'store'])->name('store');

//Route::resource('adminlearn', AdminLearningController::class);
//Route::resource('admin', LearningController::class);

Route::resource('decisions', DecisionController::class);
Route::get('mentor.decision.decision', [DecisionController::class, 'index'])->name('mentor.decision');
Route::get('mentor.createdecision', [DecisionController::class, 'create'])->name('mentor.createdecision');
Route::post('decision.store', [DecisionController::class, 'store'])->name('decision.store');
Route::get('decision.destroy{id}', [DecisionController::class, 'destroy'])->name('decision.destroy');
Route::get('decision.show{id}', [DecisionController::class, 'show'])->name('score.show');


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

    // Route::prefix('mentor/dashboard')->namespace('Mentor')->name('mentor.')->middleware('ensureUserRole:mentor')->group(function(){
    //     Route::get('/', [MentorDashboardController::class, 'index'])->name('dashboard');
    // });
        Route::resource('score', ScoreController::class);
    Route::get('mentor.dashboard', [MentorDashboardController::class, 'index'])->name('mentor.dashboard');
    Route::get('mentor.score.index', [ScoreController::class, 'index'])->name('mentor.score.index');
    Route::get('mentor.score.create', [ScoreController::class, 'create'])->name('mentor.score.create');
    Route::post('score.store', [ScoreController::class, 'store'])->name('score.store');
    Route::get('mentor.score.edit', [ScoreController::class, 'edit'])->name('mentor.score.edit');
    Route::post('score.update', [ScoreController::class, 'update'])->name('score.update');
    Route::get('score.destroy{id}', [ScoreController::class, 'destroy'])->name('score.destroy');
    Route::get('score.show', [ScoreController::class, 'show'])->name('score.show');
    // Route::get('mentor.score ', [MentorDashboardController::class, 'score'])->name('mentor.score');

    Route::resource('mentors', MentorController::class);
    Route::get('mentor.mentorindex', [MentorController::class, 'index'])->name('mentorindex');
    Route::get('mentor.mentorcreate', [MentorController::class, 'create'])->name('mentorcreate');
    Route::get('mentor.mentoredit', [MentorController::class, 'edit'])->name('mentoredit');
    Route::get('mentor.destroy{mentors}', [MentorController::class, 'destroy'])->name('mentordestroy');
    Route::post('mentor.store',[MentorController::class, 'store'])->name('mentorstore');
    Route::put('mentor.update', [MentorController::class, 'update'])->name('mentor.update');
    Route::get('mentor.show', [MentorController::class, 'show'])->name('mentor.show');


    // Route::prefix('admin/learning')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function(){
    //     Route::get('/', [AdminLearning::class, 'index'])->name('learning');
    // });

    //Route manage mentor (admin access)

});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
