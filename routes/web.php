<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ManagePagesController;
use App\Http\Controllers\MenuPage;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SliderController;
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

Route::group(['prefix' => 'manage', 'as' => 'admin.'], function(){
    Route::middleware(['auth'])->group(function(){
    Route::get('/', [AdminDashboardController::class, 'Index'])->name('index');
    Route::get('/index', [AdminDashboardController::class, 'Index'])->name('home');

    Route::controller(ManagePagesController::class)->group(function(){
        Route::get('/website/pages', 'Index')->name('manage.pages');
        Route::get('/website/pages/create/',  'PagesCreate')->name('Pages.Create');
        Route::post('/website/pages/store/', 'PagesStore')->name('PagesStore');
        Route::get('/website/pages/edit/{id}',  'PagesEdit')->name('PagesEdit');
        Route::post('/website/pages/update/{id}', 'PagesUpdate')->name('PagesUpdate');
        Route::get('/website/pages/delete/{id}',  'PagesDelete')->name('PagesDelete');
        Route::get('/website/pages/activate/{id}',  'PagesActivate')->name('PagesActivate');
        Route::get('/website/pages/disable/{id}',  'PagesDisable')->name('PagesDisable');
        Route::get('/website/pages/submenu/{id}',  'GetSubMenus')->name('page.getSubmenu');
    });

    Route::controller(BlogController::class)->group(function(){
        Route::get('/wesite/blog', 'Index')->name('blogs.index');
        Route::get('/wesite/blog/create', 'BlogsCreate')->name('BlogsCreate');
        Route::post('/website/blog/store', 'BlogsStore')->name('BlogsStore');
        Route::get('/website/blog/edit/{id}', 'BlogsEdit')->name('BlogsEdit');
        Route::post('/website/blog/update/{id}', 'BlogsUpdate')->name('BlogsUpdate');
        Route::get('/wensite/blog/delete/{id}', 'BlogsDelete')->name('BlogsDelete');
        Route::get('/website/blog/activate/{id}', 'BlogsActivate')->name('BlogsActivate');
        Route::get('/webiste/blog/diabled/{id}', 'BlogsDisable')->name('BlogsDisable');
    });
  
    Route::controller(SliderController::class)->group(function(){
        Route::get('/website/settings/sliders/index', 'Index')->name('settings.sliders');
        Route::get('/website/settings/sliders/create', 'CreateSlider')->name('sliderCreate');
        Route::post('/website/settings/sliders/store', 'StoreSlider')->name('sliderStore');
        Route::get('/website/settings/sliders/edit/{id}', 'EditSlider')->name('sliderEdit');
        Route::post('/website/settings/sliders/update/{id}', 'UpdateSlider')->name('sliderUpdate');
        Route::get('/website/settings/sliders/delete/{id}', 'DeleteSlider')->name('sliderDelete');
        Route::get('/website/settings/sliders/activate/{id}', 'ActivateSlider')->name('sliderActivate');
        Route::get('/website/settings/sliders/deactivate/{id}', 'DeactivateSlider')->name('sliderDeactivate');
    });

    Route::controller(SettingsController::class)->group(function(){
        Route::get('/website/settings/index', 'Index')->name('settings.index');
        Route::get('/website/settings/testimonias', 'Testimonials')->name('settings.testimonials');
        Route::get('/website/settings/socials', 'Socials')->name('settings.socials');
        Route::get('/website/settings/about', 'Abouts')->name('settings.abouts');
        Route::get('/website/settings/add/testimonial', 'CreateTestimonial')->name('settings.createTestimonial');
        Route::post('/website/settings/store/testimonial', 'StoreTestimonial')->name('settings.storeTestimonial');
        Route::get('/website/settings/edit/testimonial/{id}', 'EditTestimonial')->name('settings.editTestimonial');
        Route::post('/website/settings/update/testimonial/{id}', 'UpdateTestimonial')->name('settings.updateTestimonial');
        Route::get('/website/settings/delete/testimonial/{id}', 'DeleteTestimonial')->name('settings.deleteTestimonial');
        Route::post('/website/settings/update/socials', 'UpdateSocials')->name('settings.updateSocials');
        Route::post('/website/settings/update/settings', 'UpdateSettings')->name('settings.updateSettings');
        Route::get('/website/admin/user', 'UserAccount')->name('userAccount');
        Route::post('/website/admin/uuser/account', 'UpdateAccount')->name('UpdateAccount');
    });

});
});



Route::controller(HomePageController::class)->group(function ()
{
    Route::get('/', 'Index')->name('users.index');
    Route::get('/about-us', 'AboutUs')->name('users.about-us');
    Route::get('/contact-us', 'ContactUs')->name('users.contact-us');
    Route::get('/services/{service}', 'Services')->name('users.services');
    Route::get('/blogs', 'BlogIndex')->name('users.blogs');
    Route::get('/blog-details/{id}', 'BlogDetails')->name('users.blog.details');
});




require __DIR__.'/auth.php';
