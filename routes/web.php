<?php

use App\Models\Jobpost;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicationController;

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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/loginpage', function () {
    return view('login');
});
Route::get('/registerpage', function () {
    return view('register');
});
Route::get('/newjob', function () {
    return view('newjob');
});
Route::get('/applicants', function () {
    $applications=Application::all();
    return view('applicants',['applications'=>$applications]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/adminHome', function () {
    $jobs=Jobpost::all();
    return view('employeeindex',['jobs'=>$jobs]);
});



Route::get('/profile', function () {
    $user = auth()->user();
    return view('profile', ['user' => $user]);
});

Route::post('/jobpost', [PostController::class, 'addJob']);
Route::get('/search', function (Request $request) {
    $query = $request->input('search');
    
    if ($query) {
        $jobs = Jobpost::where('title', 'like', "%$query%")
            ->get();
    }

    return view('jobs', ['jobs' => $jobs]);
});
Route::get('/jobs', function () {
    $jobs=Jobpost::all();
    return view('jobs',['jobs'=>$jobs]);
});


Route::get('/apply/{job}', [ApplicationController::class, 'application']);

Route::put('/changestatus/{application}', [ApplicationController::class, 'changeStatus']);
