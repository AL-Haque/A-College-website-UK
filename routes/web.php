<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\userController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\web\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/', [HomeController::class,'header'])->name('header');
//  Route::get('/', [HomeController::class,'footer'])->name('footer');

Route::get('/login', [adminController::class, 'login'])->name('login');
Route::POST('/login', [adminController::class, 'authCheck'])->name('authCheck');
Route::get('/logout', [adminController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [adminController::class, 'password'])->name('password');
Route::post('/forgot-password', [adminController::class, 'ForgotPassword'])->name('ForgotPassword');
Route::get('/reset-password/{token}', [adminController::class, 'ResetPassword'])->name('ResetPassword');
Route::post('/reset-password/{token}', [adminController::class, 'ResetPass'])->name('ResetPass');

Route::get('/register', [userController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [userController::class, 'register'])->name('register');

Route::get('/user-login', [userController::class, 'userShowLogin'])->name('userShowLogin');
Route::post('/user-login', [userController::class, 'userLogin'])->name('userLogin');

Route::get('/course/details', [HomeController::class, 'course'])->name('course');
Route::get('/course/details/{id}', [HomeController::class, 'courseDetails'])->name('course.details');

Route::get('/about-us', [HomeController::class, 'about'])->name('about');

Route::get('/services', [WebController::class, 'service'])->name('service');
Route::get('/services/details/{id}', [WebController::class, 'details'])->name('service.details');

Route::get('/news/events', [HomeController::class, 'newsEvents'])->name('newsEvents');
Route::get('/news/events/details/{id}', [HomeController::class, 'news'])->name('news');

Route::get('/photo_gallery', [HomeController::class, 'photoGallery'])->name('photoGallery');
Route::get('/web/video_gallery', [HomeController::class, 'videoGallery'])->name('videoGallery');
Route::get('/faculty', [HomeController::class, 'faculty'])->name('faculty');
Route::get('/faculty/details/{id}', [HomeController::class, 'facultyDetails'])->name('faculty.details');

Route::get('/contact_us', [HomeController::class, 'contact'])->name('contact.index');
Route::post('/contact_us/store', [HomeController::class, 'store'])->name('contact.store');
Route::get('/vacancy', [HomeController::class, 'vacancy'])->name('vacancy.index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard');

    Route::get('/company', [adminDashboardController::class, 'index'])->name('company.index');
    Route::post('/company/update', [adminDashboardController::class, 'update'])->name('company.update');

    Route::get('/slider', [sliderController::class, 'index'])->name('slider.index');
    Route::post('/slider/store', [sliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/{id}/edit', [sliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/{id}', [sliderController::class, 'update'])->name('slider.update');
    Route::get('/slider/delete/{id}', [sliderController::class, 'delete'])->name('slider.delete');

    Route::get('/service', [serviceController::class, 'index'])->name('service.index');
    Route::post('/service/store', [serviceController::class, 'store'])->name('service.store');
    Route::get('/service/edit/{id}', [serviceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update/{id}', [serviceController::class, 'update'])->name('service.update');
    Route::get('/service/delete/{id}', [serviceController::class, 'delete'])->name('service.delete');

    Route::get('/category', [categoryController::class, 'index'])->name('category.index');
    Route::post('/category/store', [categoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [categoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [categoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [categoryController::class, 'delete'])->name('category.delete');

    Route::get('/subCategory', [SubCategoryController::class, 'index'])->name('subCategory.index');
    Route::post('/subCategory/store', [SubCategoryController::class, 'store'])->name('subCategory.store');
    Route::get('/subCategory/edit/{id}', [SubCategoryController::class, 'edit'])->name('subCategory.edit');
    Route::post('/subCategory/update/{id}', [SubCategoryController::class, 'update'])->name('subCategory.update');
    Route::get('/subCategory/delete/{id}', [SubCategoryController::class, 'delete'])->name('subCategory.delete');

    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::POST('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::POST('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/course', [ProductController::class, 'index'])->name('product.index');

    Route::get('/course', [CourseController::class, 'index'])->name('course.index');
    Route::post('/course/store', [CourseController::class, 'store'])->name('course.store');
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');

    Route::get('/photo', [PhotoController::class, 'index'])->name('photo.index');
    Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store');
    Route::get('/photo/edit/{id}', [PhotoController::class, 'edit'])->name('photo.edit');
    Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update');
    Route::get('/photo/delete/{id}', [PhotoController::class, 'delete'])->name('photo.delete');

    Route::get('/news_event', [NewsEventController::class, 'index'])->name('news_event.index');
    Route::post('/news_event/store', [NewsEventController::class, 'store'])->name('news_event.store');
    Route::get('/news_event/edit/{id}', [NewsEventController::class, 'edit'])->name('news_event.edit');
    Route::post('/news_event/update/{id}', [NewsEventController::class, 'update'])->name('news_event.update');
    Route::get('/news_event/delete/{id}', [NewsEventController::class, 'delete'])->name('news_event.delete');

    Route::get('/video_gallery', [VideoController::class, 'index'])->name('video.index');
    Route::post('/video_gallery/store', [VideoController::class, 'store'])->name('video.store');
    Route::get('/video_gallery/edit/{id}', [VideoController::class, 'edit'])->name('video.edit');
    Route::post('/video_gallery/update/{id}', [VideoController::class, 'update'])->name('video.update');
    Route::get('/video_gallery/delete/{id}', [VideoController::class, 'delete'])->name('video.delete');

    Route::get('/map', [MapController::class, 'index'])->name('map.index');
    Route::post('/map/store', [MapController::class, 'store'])->name('map.store');
    Route::get('/map/edit/{id}', [MapController::class, 'edit'])->name('map.edit');
    Route::post('/map/update/{id}', [MapController::class, 'update'])->name('map.update');
    Route::get('/map/delete/{id}', [MapController::class, 'delete'])->name('map.delete');


});
