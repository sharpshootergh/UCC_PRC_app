<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\ElectiveController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

 Route::get('/', [ElectiveController::class,'index']);
 Route::post('postData',[PostController::class,'postData'])->name('postData');
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('getCourse/{id}', function ($id) {
//     $course = App\Models\Course::where('category_id',$id)->get();
//     return response()->json($course);
// });