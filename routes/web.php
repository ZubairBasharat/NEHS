<?php

use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\CoursecatController;
use App\Http\Controllers\Admin\CourseStatistics;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\Departments;
use App\Http\Controllers\Admin\WorkersController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Admin\Folder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::get('/', function () { return redirect()->route('login'); })->middleware(['auth','verified']);


Route::group(['as' => 'master.','middleware' => ['masterauth']],function () {

    Route::resource('master/companies', CompaniesController::class);
    Route::get('master/login',[\App\Http\Controllers\Master\MasterController::class,'index'])->name('index');
    Route::get('master/dashboard',[\App\Http\Controllers\Master\MasterController::class,'dashboard'])->name('dashboard');
    Route::get('master/secret/login/{id}',[\App\Http\Controllers\Master\MasterController::class,'secret_login'])->name('secret.login');

});
Route::post('master/loginto',[\App\Http\Controllers\Master\MasterController::class,'login'])->name('master.login');
Route::post('master/logout',[\App\Http\Controllers\Master\MasterController::class,'logout'])->name('master.logout');







Route::group(['middleware' => ['auth','role:Admin']], function() {


    Route::get('/dashboard2',function(){ return view('dashboard2.dashboard'); });
    Route::resource('manager',\App\Http\Controllers\Admin\ManagerController::class);

    Route::resource('workercourse', \App\Http\Controllers\Admin\WorkerCoursesController::class);

    Route::resource('course', \App\Http\Controllers\Admin\CourseController::class);
    Route::resource('course-category', CoursecatController::class);
    Route::resource('video-library', VideoController::class);
    Route::get('play_youtube_video',[ VideoController::class,'play_youtube_video']);
    Route::resource('video-library-category', \App\Http\Controllers\Admin\VideoLibraryCategoryController::class);
    Route::resource('course-statics', CourseStatistics::class);
    Route::resource('certificate', CertificateController::class);
    Route::resource('certificatetype', \App\Http\Controllers\Admin\CertificatesTypeController::class);
    Route::resource('video-category', \App\Http\Controllers\Admin\VideoCategoryController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class);

    Route::resource('personnel', WorkersController::class);
    Route::resource('question', QuestionController::class);
    Route::get('questions/{id}/{lng}', [QuestionController::class,'shows']);
    Route::post('add-truefalse-questions',[QuestionController::class,'store_true_false'])->name('question.true-false');
    Route::post('true-false/update/{id}',[QuestionController::class,'update_true_false']);
    Route::post('delete-course-questions',[QuestionController::class,'delete_course_questions'])->name('questions.del');
    Route::resource('admin-resources', \App\Http\Controllers\ResourcesController::class);
    Route::get('admin-resources-signature/{id}',[\App\Http\Controllers\ResourcesController::class,'v_all_signs'])->name('v.all.signs');
    Route::get('worker-resend-mail/{id}',[\App\Http\Controllers\Admin\WorkersController::class,'resend_mail'])->name('worker.resend_mail');
    Route::get('Export/{type}/{table}',[\App\Http\Controllers\ExportController::class,'Export_Record'])->name('Export_Record');

    });

Route::group(['prefix' => 'admin','as' => 'admin.','middleware' => ['auth','role:Admin']],function () {


    Route::get('/user-managment', [App\Http\Controllers\Admin\AdminController::class,'manage_users'])->name('managment');
    Route::post('/give-permissions', [App\Http\Controllers\Admin\AdminController::class,'manage_permissions'])->name('manage.permissions');
    Route::post('/show-permissions', [App\Http\Controllers\Admin\AdminController::class,'show_permissions'])->name('show.permissions');
    Route::get('/profile', [App\Http\Controllers\Admin\AdminController::class,'profile'])->name('profile');
    Route::post('/addrole', [App\Http\Controllers\Admin\AdminController::class,'add_role'])->name('addroles');
    Route::resource('assignment',\App\Http\Controllers\Admin\AssignmentController::class);
    Route::get('course-assignment/{id}/{language}', [App\Http\Controllers\Admin\CourseController::class,'courseAssignment']);
    Route::get('video-assignment/{id}/{language}', [App\Http\Controllers\Admin\CourseController::class,'videoassignment']);
    Route::get('file-assignment/{id}/{language}', [App\Http\Controllers\Admin\CourseController::class,'fileassignment']);
    Route::get('ack-form/edit/{id}/{c_id}', [App\Http\Controllers\Admin\AssignmentController::class,'edit_ack_form']);
    Route::post('ack-form/update', [App\Http\Controllers\Admin\AssignmentController::class,'update_ack_form'])->name('ack-form.update');
    Route::post('ack-form/destroy/{id}', [App\Http\Controllers\Admin\AssignmentController::class,'ack_destroy'])->name('form.ack-destroy');
    Route::get('question-assignment/{id}', [App\Http\Controllers\Admin\CourseController::class,'questionassignment']);
    Route::post('add-v-assignment', [App\Http\Controllers\Admin\AssignmentController::class,'addassignmentv']);
    Route::get('ajax-v-assignment', [App\Http\Controllers\Admin\AssignmentController::class,'ajax_assignmentv']);
    Route::post('destroy-assignment', [App\Http\Controllers\Admin\AssignmentController::class,'destroy_assignment']);
    Route::post('add-f-assignment', [App\Http\Controllers\Admin\AssignmentController::class,'addassignmentf']);
    Route::post('add-q-assignment', [App\Http\Controllers\Admin\AssignmentController::class,'addassignmentq']);
    Route::post('assign-common', [App\Http\Controllers\Admin\AssignmentController::class,'assigncommon']);
    Route::get('email-templates', [App\Http\Controllers\Admin\EmailTemplatesController::class,'index']);
    Route::get('edit-email-templates/{id}', [App\Http\Controllers\Admin\EmailTemplatesController::class,'edit_email_template']);
    Route::post('update-email-template', [App\Http\Controllers\Admin\EmailTemplatesController::class,'update_email_template']);
    Route::get('admin/ack-forms', [App\Http\Controllers\FormBuilder::class,'ack_forms'])->name('ack-forms.index');
    Route::get('admin/show-single-ack-form/{id}', [App\Http\Controllers\FormBuilder::class,'ack_form_single'])->name('ack-forms.show-single');

    });

Route::group(['prefix' => 'manager','as' => 'manager.','middleware' => ['auth','role:Admin|Manager|Fleet Manager|Human Resource|Supervisor / Forman|Software Project Manager|Office Managers|Accounting Managers|Safety Coordinator']],function () {

    Route::post('assign-common', [App\Http\Controllers\Admin\AssignmentController::class,'assigncommon']);
    Route::post('invite-common', [App\Http\Controllers\Admin\AssignmentController::class,'invitecommon']);
    Route::post('personel/show-ajax', [App\Http\Controllers\Admin\WorkersController::class,'show_ajax_data'])->name('show.personal.ajax-data');
    Route::post('personel/remove-add-group', [App\Http\Controllers\GroupsController::class,'add_remove_worker'])->name('add_remove.group');
    Route::post('folder/delete', [App\Http\Controllers\ResourcesController::class,'folder_delete'])->name('folder.delete');



});



        //endadmin
Route::group(['middleware' => ['auth']],function() {
    Route::resource('department', Departments::class);
    Route::post('/savepass', [App\Http\Controllers\HomeController::class, 'savepass'])->name('savepass');
    Route::post('/savedata', [App\Http\Controllers\HomeController::class, 'savedata'])->name('savedata');
    Route::get('form/build', [App\Http\Controllers\FormBuilder::class, 'showBuilder'])->name('form.build');
    Route::get('form', [App\Http\Controllers\FormBuilder::class, 'index'])->name('form.index');
    Route::post('form/show', [App\Http\Controllers\FormBuilder::class, 'show'])->name('form.show');
    Route::get('form/view/{id}', [App\Http\Controllers\FormBuilder::class, 'view'])->name('form.view');
    Route::get('form/edit/{id}', [App\Http\Controllers\FormBuilder::class, 'edit'])->name('form.edit');
    Route::post('form/update', [App\Http\Controllers\FormBuilder::class, 'update'])->name('form.update');
    Route::post('form-add-to', [App\Http\Controllers\FormBuilder::class, 'added_to'])->name('form.addto');
    Route::post('form/destroy/{id}', [App\Http\Controllers\FormBuilder::class, 'destroy'])->name('form.destroy');
    Route::post('form/save', [App\Http\Controllers\FormBuilder::class, 'save'])->name('form.save');
    Route::get('file-import-export', [UserController::class, 'fileImportExport']);
    Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
    Route::get('file-export', [UserController::class, 'fileExport'])->name('file-export');
    Route::get('toolbox-talk', [\App\Http\Controllers\ToolBoxController::class, 'show']);
    Route::get('toolbox-addnew', [\App\Http\Controllers\ToolBoxController::class, 'addnew']);
    Route::post('toolbox-delfolder', [\App\Http\Controllers\ToolBoxController::class, 'delfolder']);
    Route::post('toolbox-delfile', [\App\Http\Controllers\ToolBoxController::class, 'destroy']);
    Route::post('toolbox-edit', [\App\Http\Controllers\ToolBoxController::class, 'edit']);
    Route::post('toolbox-store', [\App\Http\Controllers\ToolBoxController::class, 'store'])->name('toolbox-store');
    Route::post('toolbox-talk-get-single', [\App\Http\Controllers\ToolBoxController::class, 'single']);
    Route::post('toolbox-talk-assign', [\App\Http\Controllers\ToolBoxController::class, 'assign']);
    Route::post('toolbox-sign-single', [\App\Http\Controllers\ToolBoxController::class, 'sign'])->name('sign.toolbox');
    Route::post('toolbox-sign-by-type', [\App\Http\Controllers\ToolBoxController::class, 'get_sign_by_type'])->name('sign.get_sign_by_type');
    Route::post('toolbox-sendmail', [\App\Http\Controllers\ToolBoxController::class, 'sendmail'])->name('sendmail.toolbox');
    Route::get('user-forms', [\App\Http\Controllers\User\UserController::class, 'forms']);
    Route::resource('faq',\App\Http\Controllers\Admin\FaqController::class);

});


    Route::get('User-Card-Detail/{id}',[\App\Http\Controllers\CardDetailController::class,'show'])->name('User.Card.Detail');

    //user
    Route::group(['middleware' => ['auth','role:User|Manager|Fleet Manager|Human Resource|Supervisor / Forman|Software Project Manager|Office Managers|Accounting Managers|Safety Coordinator|Admin'] ], function() {

    Route::resource('usercertificate', \App\Http\Controllers\User\UserCertificateController::class);
    Route::get('usercertificate/assigned/{id}', [App\Http\Controllers\User\UserCertificateController::class,'assigned'])->name('assigned.certificate');
    Route::post('personel/add-locations', [App\Http\Controllers\Admin\WorkersController::class,'add_location'])->name('personal.addlocation');
    Route::post('personel/locations', [App\Http\Controllers\Admin\WorkersController::class,'location'])->name('show.personal.location');
    Route::get('personel/dellocations/{id}', [App\Http\Controllers\Admin\WorkersController::class,'del_location']);
    Route::get('worker-print-card/{id}',[\App\Http\Controllers\Admin\WorkersController::class,'print_card'])->name('worker.print_card');
    Route::get('partnerlib-user',[\App\Http\Controllers\Admin\PartnerLibraryController::class,'view'])->name('partnerlib-user.index');
    Route::resource('partnerlibrary', \App\Http\Controllers\Admin\PartnerLibraryController::class);


    });

Route::group(['middleware' => ['auth','role:User|Manager|Fleet Manager|Human Resource|Supervisor / Forman|Software Project Manager|Office Managers|Accounting Managers|Safety Coordinator|Admin'] ], function() {

    Route::get('group', [\App\Http\Controllers\GroupsController::class,'index_admin'])->name('group');
    Route::post('assign-groups', [\App\Http\Controllers\GroupsController::class,'assigns'])->name('groups.assigns');
    Route::get('group-workers/{id}', [\App\Http\Controllers\GroupsController::class,'group_workers']);
    Route::post('add-remove-worker', [\App\Http\Controllers\GroupsController::class,'add_remove_worker']);
    Route::post('group-user-filter-ajax', [\App\Http\Controllers\GroupsController::class,'group_user_filter_ajax']);
    Route::resource('groups', \App\Http\Controllers\GroupsController::class);
    Route::post('assign-single', [App\Http\Controllers\Admin\AssignmentController::class,'invite_single']);


});


Route::group(['middleware' => ['auth','role:User|Manager|Fleet Manager|Human Resource|Supervisor / Forman|Software Project Manager|Office Managers|Accounting Managers|Safety Coordinator'] ], function() {

    Route::resource('all-personnel', WorkersController::class);
    Route::resource('userpersonnel', \App\Http\Controllers\User\UserController::class);
    Route::resource('usertests', \App\Http\Controllers\User\UserCourseTestsController::class);
    Route::post('/usertests-resume', [\App\Http\Controllers\User\UserCourseTestsController::class,'usertest_pause']);
    Route::post('/usertests-sync', [\App\Http\Controllers\User\UserCourseTestsController::class,'usertest_sync']);
    Route::resource('equipments', \App\Http\Controllers\EquipmentController::class);
    Route::post('assign-equipment', [\App\Http\Controllers\EquipmentController::class,'assigns'])->name('equipments.assigns');
    Route::get('/home',[App\Http\Controllers\HomeController::class,'dashboard1'])->name('home');
    Route::get('/changepass', [App\Http\Controllers\HomeController::class, 'changepass'])->name('changepass');
    Route::get('/resource',[\App\Http\Controllers\ResourcesController::class,'index2']);
    Route::post('/sign-resource',[\App\Http\Controllers\ResourcesController::class,'sign'])->name('sign.resource');
    Route::resource('um-resource', \App\Http\Controllers\ResourcesController::class);
    Route::get('/group-class',function(){return view('dashboard1.groupclass'); });
    Route::get('/certificates',function(){return view('dashboard2.certificates'); });
    Route::get('/all-notification',[\App\Http\Controllers\NotificationController::class,'show_all'])->name('all.notifi');
    Route::post('/accept-invitaion',[\App\Http\Controllers\NotificationController::class,'accept_invitaion'])->name('accept.invitaion');
    Route::get('allassignments', [App\Http\Controllers\Admin\AssignmentController::class,'all_assignments'])->name('allassignmnet');




});
//enduseer



Route::get('/emm', function (){

    return view('mails.toolbox');

});





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
//    $permission = Permission::create(['name' => 'add resources']);
//    $permission = Permission::create(['name' => 'view resources']);
//    $permission = Permission::create(['name' => 'edit resources']);
//    $permission = Permission::create(['name' => 'delete resources']);
//    $permission = Permission::create(['name' => 'add certificate']);
//    $permission = Permission::create(['name' => 'view certificate']);
//    $permission = Permission::create(['name' => 'edit certificate']);
//    $permission = Permission::create(['name' => 'delete certificate']);

//    $permission = Permission::create(['name' => 'add personel']);
//    $permission = Permission::create(['name' => 'view personel']);
//    $permission = Permission::create(['name' => 'edit personel']);
//    $permission = Permission::create(['name' => 'delete personel']);
//
//    $permission = Permission::create(['name' => 'add course-stats']);
//    $permission = Permission::create(['name' => 'view course-stats']);
//    $permission = Permission::create(['name' => 'edit course-stats']);
//    $permission = Permission::create(['name' => 'delete course-stats']);

//    $permission = Permission::create(['name' => 'add assignment']);
//    $permission = Permission::create(['name' => 'view assignment']);
//    $permission = Permission::create(['name' => 'edit assignment']);
//    $permission = Permission::create(['name' => 'delete assignment']);
//
//    $permission = Permission::create(['name' => 'add groups']);
//    $permission = Permission::create(['name' => 'view groups']);
//    $permission = Permission::create(['name' => 'edit groups']);
//    $permission = Permission::create(['name' => 'delete groups']);
//
//    $permission = Permission::create(['name' => 'add equipment']);
//    $permission = Permission::create(['name' => 'view equipment']);
//    $permission = Permission::create(['name' => 'edit equipment']);
//    $permission = Permission::create(['name' => 'delete equipment']);

//    $permission = Permission::create(['name' => 'assign group']);
//    $permission = Permission::create(['name' => 'assign equipment']);
});

