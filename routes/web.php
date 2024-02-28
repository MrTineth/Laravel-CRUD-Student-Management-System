<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {       //Route home/home
    return view('pages.home.home');
});

// Route::get('/student', function () {     //Route student/home
//     return view('pages.student.home');
// });


Route::get('/student',[StudentController::class,'showData'])->name('student.show'); 

Route::post('/student/save',[StudentController::class,'saveData'])->name('student.save');  //Route form

Route::get('/student/{stu_id}delete',[StudentController::class, 'deleteData'])->name('student.delete');  // Delete Data

Route::get('/student/{stu_id}edit',[StudentController::class, 'editData'])->name('student.edit');  // edit Data

Route::post('/student/{stu_id}update',[StudentController::class, 'updateData'])->name('student.update');  //Update data

Route::get('/student/{stu_id}manage',[StudentController::class, 'viewRecords'])->name('student.manage');  //Manage Student data

Route::post('/student/saveRecord',[StudentController::class, 'saveRecord'])->name('student.saveRecord'); 


