<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Detail;
use App\Comment;

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
Auth::routes(['verify' => true]);
    // --------------guest middleware-----------------------
Route::get('/', function () {

    //////////////////////////////////////////
        // Schema::create('users', function ($table) {
        //     $table->increments('id');
        //     $table->string('FirstName');
        //     $table->string('LastName');

        //     $table->string('email')->unique();
        //     $table->string('Number')->unique();

        //     $table->string('CNE')->unique()->nullable();
        //     $table->string('CNI')->unique()->nullable();
        //     $table->string('Feliere');

        //     $table->string('Gender');
        //     $table->string('Semester')->nullable();

        //     $table->string('usertype')->nullable();
        //     $table->string('password');

        //     $table->rememberToken();
        //     $table->timestamps();
        //     $table->timestamp('email_verified_at')->nullable();
        // });
        // Schema::create('details', function ($table) {

        //     $table->integer('user_id')->unsigned();
        //     $table->foreign('user_id')->references('id')->on('users');

        //     $table->longText('Biography')->nullable();
        //     $table->longText('Position')->nullable();
        //     $table->string('Facebook')->nullable();
        //     $table->string('Youtube')->nullable();
        //     $table->string('Twitter')->nullable();
        //     $table->string('Siteweb')->nullable();
        //     $table->mediumText('Bg_image')->nullable();
        //     $table->mediumText('Profil_image')->nullable();
        //     $table->string('SubjectDoctor')->nullable();
        //     $table->timestamps();
        // });
        // Schema::create('files', function ($table) {

        //     $table->integer('user_id')->unsigned();
        //     $table->foreign('user_id')->references('id')->on('users');

        //     $table->integer('NumberFile')->nullable();
        //     $table->string('Semester_data')->nullable();
        //     $table->mediumText('File')->nullable();
        //     $table->string('Title')->nullable();
        //     $table->longText('Description')->nullable();
        //     $table->longText('Statement')->nullable();
        //     $table->string('Subject')->nullable();
        //     $table->string('Typedata')->nullable();
        //     $table->string('Felieredata')->nullable();
        //     $table->timestamps();
        // });
        // Schema::create('comments', function ($table) {

        //     $table->integer('user_id')->unsigned();
        //     $table->foreign('user_id')->references('id')->on('users');

        //     $table->integer('NumberComment');
        //     $table->string('TypeData');
        //     $table->integer('NumberFile');
        //     $table->longText('Comment');
        //     $table->timestamps();

        // });
    //////////////////////////////////////////

    $users=User::all();
    return view('home.welcome')->with('users',$users);
});

Route::get('/home/{id}', 'HomeController@index')->name('home');
    // --------------admin middleware-----------------------
Route::group(['middleware' => ['auth','admin']],function(){

    Route::get('/Admin-data-edit/{id}','Admin\DashboardController@adminDataEdit');
    Route::put('/Admin-update/{id}','Admin\DashboardController@adminUpdate');

    Route::get('/Professors-admin','Admin\DashboardController@professorUser');
    Route::get('/Students-admin','Admin\DashboardController@studentUser');
    Route::get('/Edit-user/{id}','Admin\DashboardController@editUser');
    Route::get('/Statements-admin','Admin\DashboardController@statementProfessors');
    Route::get('/AddStatement/{id}','Admin\DashboardController@addStatement');
    Route::get('/AddProfessor/{id}','Admin\DashboardController@addProfessor');
    Route::get('/Comments-admin','Admin\DashboardController@commentsAll');
    Route::delete('/Delete-Comment-Admin/{id}','Admin\DashboardController@deleteCommentAdmin');


    Route::put('/Update-user/{id}','Admin\DashboardController@updateUser');
    Route::post('/UploadDataAdmin/{id}','Admin\DashboardController@uploadDataAdmin');

    Route::delete('/delete-user/{id}','Admin\DashboardController@deleteUser');

    Route::delete('/FileDeleteadmin/{id}','Admin\DashboardController@DeleteFileAdmin');

    ///////// mail sender
    Route::post('send-mail/{id}','MailSendController@mailsend');
});
    // --------------doctor middleware-----------------------
Route::group(['middleware'=>['auth','doctor']],function(){

    Route::get('/doctor-data/{id}','Teacher\TeacherController@doctorData');
    Route::get('/doctor-data-edit/{id}','Teacher\TeacherController@doctorEdit');
    Route::get('/doctor-data-profile/{id}','Teacher\TeacherController@doctorProfile');

    Route::put('/updateBgImage/{id}','Teacher\TeacherController@UpdateBgImage');
    Route::put('/updateProfileImage/{id}','Teacher\TeacherController@UpdateProfileImage');
    Route::put('/doctor-update/{id}','Teacher\TeacherController@updateEditInfos');
    Route::put('/doctor-update-semester/{id}','Teacher\TeacherController@doctorUpdateSemester');

    Route::put('/uploadData/{id}','Teacher\TeacherController@UploadData');
    Route::post('/addComment/{id}','Teacher\TeacherController@AddComment');
    Route::delete('/Delete-Comment/{id}','Teacher\TeacherController@deleteComment');

    Route::delete('/FileDelete/{id}','Teacher\TeacherController@DeleteFile');

});
    // --------------student middleware-----------------------
Route::group(['middleware'=>['auth','student']],function(){
    Route::get('/student-data/{id}','Student\StudentController@studentData');
    Route::get('/student-data-edit/{id}','Student\StudentController@studentEdit');
    Route::put('/student-update/{id}','Student\StudentController@studentUpdate');
    Route::put('/student-update-semester/{id}','Student\StudentController@studentUpdateSemester');


    Route::post('/addCommentstudent/{id}','Student\StudentController@AddCommentstudent');
    Route::delete('/Delete-Comment-student/{id}','Student\StudentController@deletCommentstudent');

});



////////////files////////////////////////
Route::get('/pdf-download','folders\PDFController@pdfDownloader');
Route::get('/pdf-view','folders\PDFController@pdfView');




