<?php


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Artisan;

Route::get('/migrate/achu', function () {
    try {
        $migrate =  Artisan::call('migrate');
        if ($migrate == 0) {
            echo " migration was successful";
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
});




Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\HomeCtrl@index')->name('admin_home');

    Route::get('/maintainance/mode', 'Live\LiveController@index')->name('maintainance');
    Route::get('live', 'Live\LiveController@activate');

    Route::resource('permissions', 'Admin\Permission\PermissionsController', ['names' => 'permissions']);


    Route::resource('banners', 'Admin\Design\BannersController', ['names' => 'banners']);
    Route::get('customers',  'Admin\Users\UsersController@customers')->name('customers');
    Route::resource('posts',  'Admin\Blog\BlogController', ['names' => 'posts']);

    Route::get('post/{post_id}/comments',  'Admin\Comments\CommentsController@comments');
    Route::delete('comments/{comment}',  'Admin\Comments\CommentsController@destroy');

    Route::resource('settings', 'Admin\Settings\SettingsController', ['names' => 'settings']);

    Route::resource('pictures', 'Admin\Pictures\PicturesController', ['names' => 'pictures']);
    Route::resource('contacts', 'Admin\Contact\ContactsController', ['names' => 'contacts']);
    Route::resource('salutations', 'Admin\Salutation\SalutationsController', ['names' => 'salutations']);
    Route::resource('consolations', 'Admin\Consolation\ConsolationsController', ['names' => 'consolations']);
    Route::resource('videos', 'Admin\Videos\VideosController', ['names' => 'videos']);


    Route::get('delete/uploads/{id}', 'Admin\Pictures\PicturesController@deleteImage');

    Route::resource('category', 'Admin\Category\CategoryController', ['names' => 'category']);
    Route::post('category/delete/image', 'Admin\Category\CategoryController@undo');

    Route::resource('media', 'Admin\Media\MediaController', ['names' => 'media']);

    Route::get('search-products', 'Admin\Product\ProductController@search')->name('search_products');
    Route::delete('variation/delete/{id}',  'Admin\Product\ProductController@destroyVariation');
    Route::get('related/products',     'Admin\Product\ProductController@getRelatedProducts');
    Route::delete('delete/{id}/related_products',     'Admin\Product\ProductController@destroyRelatedProduct');

    Route::post('upload/image', 'Admin\Image\ImagesController@store');
    Route::post('delete/image', 'Admin\Image\ImagesController@undo');

    Route::post('upload', 'Admin\Uploads\UploadsController@store');
    Route::get('delete/upload', 'Admin\Uploads\UploadsController@destroy');



    /* INFORMATION */
    Route::resource('pages', 'Information\InformationController', ['name' => 'pages']);
    /* INFORMATION */

    Route::post('page/banner', 'Admin\PageBanner\PageBannerController@store');
    Route::post('blog/delete/image', 'Admin\PageBanner\PageBannerController@undo');


    Route::post('products/delete', 'Admin\Product\ProductController@destroy')->name('delete_products');
    Route::post('variation/create', 'Admin\Product\ProductController@saveVariation');
    Route::post('logout',  'Auth\LoginController@logout')->name('admin_users_logout');

    Route::get('register', 'Admin\Users\UsersController@create')->name('create_admin_users');
    Route::post('register', 'Auth\RegisterController@register');

    Route::resource('users',  'Admin\Users\UsersController', ['names' => 'admin.users']);
    Route::resource('customers', 'Admin\Customers\CustomersController', ['name' => 'customers']);
});






Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/download',  [App\Http\Controllers\HomeController::class, 'downloadFile']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();
Route::get('pages/{information}', [App\Http\Controllers\Information\InformationController::class, 'show']);
Route::post('file/uploads',      [App\Http\Controllers\Uploads\UploadsController::class, 'upload']);
Route::post('file/uploads/videos',      [App\Http\Controllers\Uploads\UploadsController::class, 'uploadVideos']);

Route::resource('picture',       App\Http\Controllers\Pictures\PicturesController::class);
Route::get('{category}',         [App\Http\Controllers\Products\ProductsController::class, 'index']);
