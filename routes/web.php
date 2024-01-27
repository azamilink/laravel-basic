<?php

use App\Mail\TestMail;
use App\PaymentGateway\Payment;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StubController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ComponentController;

# 1. Routing
Route::get('/', function () {
    // App::setLocale($locale);
    return view('welcome');
});

# 2. Component, Props and Passing Data
Route::get('component', [ComponentController::class, 'index'])->name('component.index');

// 3. Cotroller
Route::get('home/{name?}', [HomeController::class, 'index'])->name('home.index');

// 4. View
Route::get('user', [UserController::class, 'index'])->name('user.index');

// 6. Client Htpp
Route::get('posts', [ClientController::class, 'getAllPost'])->name('posts.getallpost');
Route::get('posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');
Route::get('add-post', [ClientController::class, 'addPost'])->name('posts.addpost');
Route::get('update-post', [ClientController::class, 'updatePost'])->name('posts.updatepost');
Route::get('delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.deletepost');

# 7. fluent string
Route::get('fluent', [FluentController::class, 'index'])->name('fluent');

# 8. stub
Route::get('stub', [StubController::class, 'index'])->name('stub');

# 9. HTTP request and Html form
Route::get('req', [ReqController::class, 'index'])->name('req.index');
Route::get('login', [ReqController::class, 'login'])->name('req.login');
Route::post('login', [ReqController::class, 'submitLogin'])->name('req.submitLogin');

# 10. Session
Route::get('session', [SessionController::class, 'getSessionData'])->name('session.get');
Route::get('session/set', [SessionController::class, 'storeSessionData'])->name('session.store');
Route::get('session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

# 11. Connect to Database
Route::get('posts', [PostController::class, 'getAllPost'])->name('posts.all');
Route::get('posts-add', [PostController::class, 'addPost'])->name('posts.create');
Route::post('posts-add', [PostController::class, 'postSubmit'])->name('posts.submit');
Route::get('posts-show/{id}', [PostController::class, 'getPostById'])->name('posts.show');
Route::get('posts-delete/{id}', [PostController::class, 'deletePost'])->name('posts.delete');
Route::get('posts-edit/{id}', [PostController::class, 'editPost'])->name('posts.edit');
Route::post('posts-update', [PostController::class, 'updatePost'])->name('posts.update');

// Join Clause
Route::get('inner-join', [PostController::class, 'innerJoinClause'])->name('posts.innerjoin');
Route::get('left-join', [PostController::class, 'leftJoinClause'])->name('posts.leftjoin');
Route::get('right-join', [PostController::class, 'rightJoinClause'])->name('posts.rightjoin');

// Model
Route::get('blog', [BlogController::class, 'getAllPost'])->name('blog.getall');

// upload file
Route::get('upload', [UploadController::class, 'uploadForm'])->name('upload.form');
Route::post('upload', [UploadController::class, 'uploadfile'])->name('upload.file');

// Provider custom
Route::get('payment', function () {
    return Payment::process();
});

// Test Email
Route::get('send-email', function () {
    $email = new TestMail();
    Mail::to('azamiwandi@hotmail.com')->send($email);

    return 'success';
});
