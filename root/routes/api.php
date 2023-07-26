<?php

use App\Http\Controllers\MobileAppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UserAPIController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::get('/profile/{id}', 'details')->whereNumber('id');
    Route::match(['patch', 'put'], '/update-profile', 'UpdateProfile');
});



// Route::get('get-all-menus',[WebsiteAPISController::class,'GetAllMenus']);
Route::get('/get-all-menus', [MobileAppController::class, 'GetAllMenus']);
Route::get('/menus', [MobileAppController::class, 'Menus']);
Route::get('/get-all-banners', [MobileAppController::class, 'GetAllBanners']);
Route::get('/categories/{menu_id}', [MobileAppController::class, 'SpecificCategories']);
Route::get('/subcategories/{category_id}', [MobileAppController::class, 'SpecificSubCategories'])->whereNumber('category_id');
Route::get('/products', [MobileAppController::class, 'Products']);
Route::get('/products/{subcatid}', [MobileAppController::class, 'GetSubcategoryProducts'])->whereNumber('subcatid');
Route::get('/single-product/{id}', [MobileAppController::class, 'GetSingleProduct'])->whereNumber('id');
Route::match(['get', 'post'], '/related-products/{subcategory_id}/{product_id}', [MobileAppController::class, 'GetRelatedProducts'])
    ->whereNumber('subcategory_id')
    ->whereNumber('product_id');

Route::match(['get', 'post'], 'send-product-contact-message', [MobileAppController::class, 'ProductContactSendMessage']);

Route::match(['get', 'post'], '/order-submit', [MobileAppController::class, 'OrderSubmit']);

Route::get('/get-reviews/{product_id}', [MobileAppController::class, 'GetProductReviews'])->whereNumber('product_id');
Route::match(['get', 'post'], '/add-product-review', [MobileAppController::class, 'AddProductReview']);

Route::get('/orders/{customer_id}', [MobileAppController::class, 'GetOrders'])->whereNumber('customer_id');
Route::get('/order-details/{order_id}', [MobileAppController::class, 'GetOrdersDetails'])->whereNumber('order_id');

Route::get('home-banner', [MobileAppController::class, 'Home_setting']);

Route::get('/search/product/{character}', [MobileAppController::class, 'SearchProduct']);



