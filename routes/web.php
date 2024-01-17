<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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
//Route::get('/','HomeControllere@showWelcome');

Route::get('/', function () {
    return view('welcome');
});


Route::get('about', function () {
    return 'About Content';
});

Route::get('about/directions', function () {
    return 'Directions go here';
});

Route::any('submit-form', function () {
    return 'Process Form';
});

Route::get('about/{theSubject}', function ($theSubject) {
    return $theSubject. ' content goes here';
});

Route::get('about/classes/{theSubject}', function ($theSubject) {
    return " Content on $theSubject ";
});

Route::get('about/classes/{theArt}/{thePrice}', function ($theArt, $thePrice) {
    return " The product: $theArt and $thePrice";
});

Route::get('where', function (){
    return Redirect::route("directions");
});


// Route::class('/showWelcome', 'HomeController/@showWelcome');
Route::get('/showWelcome', [HomeController::class, 'showWelcome']);
Route::get('/user/{id}', [TestController::class, 'show']);
