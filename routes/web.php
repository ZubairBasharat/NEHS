<?php

use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\CoursecatController;
use App\Http\Controllers\Admin\CourseStatistics;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\Departments;
use App\Http\Controllers\Admin\WorkersController;
use App\Http\Controllers\Admin\CertificateController;
use App\Models\Admin\Folder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;



Auth::routes();



Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Clear Cache cleared</h1>';
    // return what you want
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Config Cache cleared</h1>';
});

//link-storage
Route::get('/link-storage', function() {
    $exitCode = Artisan::call('storage:link');
    return '<h1>linked</h1>';
});
//link-storage
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Optimized</h1>';
});


Route::get('/', function () { return redirect()->route('login'); })->middleware('auth');



//admin

    Route::group(['middleware' => ['auth','role:Admin']], function() {


    Route::get('/dashboard2',function(){ return view('dashboard2.dashboard'); });
    Route::get('/manager',function(){return view('dashboard2.manager');});

    Route::resource('companie', CompaniesController::class);
    Route::resource('workercourse', \App\Http\Controllers\Admin\WorkerCoursesController::class);
    Route::resource('department', Departments::class);
    Route::resource('course', \App\Http\Controllers\Admin\CourseController::class);
    Route::resource('course-category', CoursecatController::class);
    Route::resource('video-library', VideoController::class);
    Route::resource('course-statics', CourseStatistics::class);
    Route::resource('certificate', CertificateController::class);
    Route::resource('video-category', \App\Http\Controllers\Admin\VideoCategoryController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);

    Route::resource('personnel', WorkersController::class);
    Route::resource('question', QuestionController::class);
    Route::post('delete-course-questions',[QuestionController::class,'delete_course_questions'])->name('questions.del');

    });
    Route::group(['prefix' => 'admin','as' => 'admin.','middleware' => ['auth','role:Admin']],function () {


    Route::get('/user-managment', [App\Http\Controllers\Admin\AdminController::class,'manage_users'])->name('managment');
    Route::get('/profile', [App\Http\Controllers\Admin\AdminController::class,'profile'])->name('profile');
    Route::post('/addrole', [App\Http\Controllers\Admin\AdminController::class,'add_role'])->name('addroles');
    Route::resource('assignment',\App\Http\Controllers\Admin\AssignmentController::class);
    Route::get('course-assignment/{id}', [App\Http\Controllers\Admin\CourseController::class,'courseAssignment']);
    Route::get('video-assignment/{id}', [App\Http\Controllers\Admin\CourseController::class,'videoassignment']);
    Route::get('file-assignment/{id}', [App\Http\Controllers\Admin\CourseController::class,'fileassignment']);
    Route::get('question-assignment/{id}', [App\Http\Controllers\Admin\CourseController::class,'questionassignment']);
    Route::post('add-v-assignment', [App\Http\Controllers\Admin\AssignmentController::class,'addassignmentv']);
    Route::post('destroy-assignment', [App\Http\Controllers\Admin\AssignmentController::class,'destroy_assignment']);
    Route::post('add-f-assignment', [App\Http\Controllers\Admin\AssignmentController::class,'addassignmentf']);
    Route::post('add-q-assignment', [App\Http\Controllers\Admin\AssignmentController::class,'addassignmentq']);
    Route::post('assign-common', [App\Http\Controllers\Admin\AssignmentController::class,'assigncommon']);


    });
        //endadmin
    Route::post('/savepass', [App\Http\Controllers\HomeController::class, 'savepass'])->name('savepass');
    Route::post('/savedata', [App\Http\Controllers\HomeController::class, 'savedata'])->name('savedata');
    Route::get('form/build', [App\Http\Controllers\FormBuilder::class, 'showBuilder'])->name('form.build');
    Route::post('form/show', [App\Http\Controllers\FormBuilder::class,'show'])->name('form.show');
    Route::post('/export-pdf', [App\Http\Controllers\FormBuilder::class, 'exportPdf']);
    Route::post('form/save', [App\Http\Controllers\FormBuilder::class,'save'])->name('form.save');
    Route::resource('admin-resources', \App\Http\Controllers\ResourcesController::class);


    //user
    Route::group(['middleware' => ['auth','role:User']], function() {

    Route::get('/home',[App\Http\Controllers\HomeController::class,'dashboard1'])->name('home');
    Route::get('/changepass', [App\Http\Controllers\HomeController::class, 'changepass'])->name('changepass');

    Route::get('/resource',function(){ $folders=Folder::all(); return view('dashboard1.resources.resources',compact('folders')); });
    Route::get('/group-class',function(){return view('dashboard1.groupclass'); });
    Route::get('/certificates',function(){return view('dashboard2.certificates'); });
    Route::resource('userpersonnel', \App\Http\Controllers\User\UserController::class);
    Route::resource('usertests', \App\Http\Controllers\User\UserCourseTestsController::class);
    Route::resource('usercertificate', \App\Http\Controllers\User\UserCertificateController::class);


    });
//enduseer







//Route::get('/course-list',function(){
//    return view('dashboard2.courselist');
//});

//Route::get('/departments',function(){
//    return view('dashboard1.departments');
//});

// Route::get('/course-category',function(){
//     return view('dashboard2.coursecateg');
// });
// Route::get('/video-library',function(){
//     return view('dashboard2.videolibrary');
// });

//Route::get('/companies',function(){
//    return view('dashboard2.companies');
//});


//Route::post('/comp', [App\Http\Controllers\Admin\AdminController::class,'comp'])->name('comp');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/rr', function () {

//    $permission = Permission::create(['name' => 'add manager']);
//    $permission = Permission::create(['name' => 'view manager']);
//    $permission = Permission::create(['name' => 'edit manager']);
//    $permission = Permission::create(['name' => 'delete manager']);
//    $permission = Permission::create(['name' => 'add course']);
//    $permission = Permission::create(['name' => 'view course']);
//    $permission = Permission::create(['name' => 'edit course']);
//    $permission = Permission::create(['name' => 'delete course']);
//    $permission = Permission::create(['name' => 'add course_cat']);
//    $permission = Permission::create(['name' => 'view course_cat']);
//    $permission = Permission::create(['name' => 'edit course_cat']);
//    $permission = Permission::create(['name' => 'delete course_cat']);
//    $permission = Permission::create(['name' => 'add department']);
//    $permission = Permission::create(['name' => 'view department']);
//    $permission = Permission::create(['name' => 'edit department']);
//    $permission = Permission::create(['name' => 'delete department']);

});
