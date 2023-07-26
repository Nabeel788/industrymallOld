<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQ1Controller;
use App\Http\Controllers\FAQ2Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SizesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\TinyMceController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\TrainingsController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\TrackOrderController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\VendorAlbumController;
use App\Http\Controllers\AccountGroupController;
use App\Http\Controllers\BlogsSettingController;
use App\Http\Controllers\HomeSettingsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\FaqCategoriesController;
use App\Http\Controllers\VendorBannersController;
use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\PurchaseReportController;
use App\Http\Controllers\BlogsCategoriesController;
use App\Http\Controllers\BlogSubCategoryController;
use App\Http\Controllers\EventCategoriesController;
use App\Http\Controllers\TermsConditionsController;
use App\Http\Controllers\ShippingDeliveryController;
use App\Http\Controllers\SingleProductInfoController;
use App\Http\Controllers\TrainingCategoriesController;
use App\Http\Controllers\ReturnExchangePolicyController;

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


//WEBSITE ROUTES
Route::get('/', [WebsiteController::class, 'index']);
Route::get('search-product', [WebsiteController::class, 'searchProduct']);
Route::get('/about-us', [WebsiteController::class, 'AboutUs']);
Route::get('/contact-us', [WebsiteController::class, 'ContactUs']);
Route::match(['get','post'],'/sendContactMessage', [WebsiteController::class, 'SendContactMessage']);
Route::get('/shop-by-brand', [WebsiteController::class, 'ShopByBrand']);
Route::get('/blogs', [WebsiteController::class, 'Blogs']);
Route::get('/single/{id}/{slug}', [WebsiteController::class, 'SingleBlog']);
Route::get('/generate-pdf/{proid}',[WebsiteController::class,'generateSingleProductDetailsPDF'])->whereNumber('proid');
Route::get('/my-account', [WebsiteController::class, 'MyAccount']);
// Route::get('/tracklink/', [WebsiteController::class, 'TrackLink']);
Route::get('/order-receipt/{orderid}', [WebsiteController::class, 'PrintOrderReceipt'])->whereNumber('orderid');
Route::match(['get', 'post'], '/update-profile', [WebsiteController::class, 'UpdateProfile'])->name('change.password');
Route::get('/media-singature', [WebsiteController::class, 'MediaSignature']);
Route::get('/services',[WebsiteController::class,'Services']);
Route::get('/events',[WebsiteController::class,'Events']);
Route::get('/single-event/{slug}',[WebsiteController::class,'Events'])->where('slug', '^(?!.*dashboard).*$');
Route::get('/trainings',[WebsiteController::class,'Trainings']);
Route::get('/single-training/{id}/{slug}',[WebsiteController::class,'SingleTraining'])->where('slug', '^(?!.*dashboard).*$');
Route::get('/under-construction',[WebsiteController::class,'UnderConstruction']);
Route::get('/vendor-products/{vendor_id}',[WebsiteController::class,'VendorProducts'])->whereNumber('vendor_id');
Route::post('/vendor-contact-sendMessage',[WebsiteController::class,'VendorContactSendMessage']);

Route::get('/ratings',[WebsiteController::class,'Ratings']);
Route::match(['get','post'],'/submit-review',[WebsiteController::class,'AddReview']);
// Route::resource('/shop', ShopController::class);

Route::get('/shop/cat/{id}', [WebsiteController::class, 'FilterByCategories'])->whereNumber('id');
Route::get('/shop/subcat/{id}/{slug}', [WebsiteController::class, 'ShopSubCatProductList'])->whereNumber('id')->where('slug', '^(?!.*dashboard).*$');

Route::get('single-product/{id}/{slug}', [WebsiteController::class, 'SingleProduct'])->whereNumber('id')->where('slug', '^(?!.*dashboard).*$');
Route::match(['get', 'post'], '/product-contact-sendMessage', [WebsiteController::class, 'ProductContactSendMessage']);


Route::get('/shop/subcat/filterbyname', [WebsiteController::class, 'FilterProductByName']);
Route::get('/shop/subcat/filterbycondition', [WebsiteController::class, 'FilterProductByCondition']);
Route::get('/shop/subcat/filterbymaker', [WebsiteController::class, 'FilterProductByMaker']);
Route::get('/shop/subcat/filterbytype', [WebsiteController::class, 'FilterProductByType']);
Route::get('shop/subcat/filterbyprice/{id}/{filterNo}', [WebsiteController::class, 'FilterProductByPrice'])->whereNumber('id')->whereNumber('filterNo');

Route::get('shop/subcat/filterbyprice-min-max', [WebsiteController::class, 'FilterProductByPriceMinMax']);
Route::get('shop/subcat/filterbyBrand', [WebsiteController::class, 'FilterProductByBrand']);
Route::get('shop/subcat/filterbyLocation', [WebsiteController::class, 'FilterProductByLocation']);

Route::get('/add-to-wishlist/{id}', [WebsiteController::class, 'AddToWishlist'])->whereNumber('id');
Route::get('/wishlist', [WebsiteController::class, 'Wishlist']);
Route::get('/remove-wishlist-item/{id}', [WebsiteController::class, 'RemoveWishlistItem'])->whereNumber('id');

Route::get('cart', [WebsiteController::class, 'cart']);
Route::post('addtocart', [WebsiteController::class, 'addtocart']);
Route::get('addtocart', [WebsiteController::class, 'addtocart']);
Route::get('view-cart', [WebsiteController::class, 'cart']);
Route::get('/trash-cart/{id}', [WebsiteController::class, 'TrashCart'])->whereNumber('id');
Route::get('/update-cart/{proid}', [WebsiteController::class, 'updateCart'])->name('update-cart')->whereNumber('proid');
Route::get('/clear-cart', [WebsiteController::class, 'ClearCart']);


Route::group(['middleware' => 'checkoutAuth'], function () {
    Route::get('checkout', [ShopController::class, 'CheckOut']);
    Route::match(['get', 'post'], 'order-submit', [ShopController::class, 'OrderSubmit']);
});

Route::get('/thankyou/{id}', [ShopController::class, 'thanks']);
Route::get('/track-order', [WebsiteController::class, 'TrackOrder']);
Route::match(['get', 'post'], '/search-track-order', [WebsiteController::class, 'SearchTrackOrder']);

Route::get('/faqs', [WebsiteController::class, 'FAQS1']);
Route::get('/faqs-2', [WebsiteController::class, 'FAQS2']);
Route::get('/faqs-2', [WebsiteController::class, 'FAQS2']);
Route::get('/terms-conditions', [WebsiteController::class, 'TermsConditions']);
Route::get('/returns-exchanges', [WebsiteController::class, 'ReturnsExchanges']);

//track order
Route::resource('trackorder', TrackOrderController::class);
Route::get('trackorder/create', [TrackOrderController::class, 'create']);

Route::resource('brand', BrandController::class);
Route::get('brand/{id}/destroy', [BrandController::class, 'destroy']);

Route::resource('partners', PartnersController::class);
Route::get('partners/{id}/destroy', [PartnersController::class, 'destroy']);


Route::group(['middleware' => 'prevent-back-history'], function () {
    Auth::routes();
    Route::match(['get','post'],'/logout',[App\Http\Controllers\Auth\LoginController::class,'logout']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('total')
        ->name('total.')
        ->controller(HomeController::class)
        ->group(function(){
            Route::get('/vendors','TotalVendors')->name('vendors');
            Route::get('/orders','TotalOrders')->name('orders');
            Route::get('/pending-orders','TotalPendingOrders')->name('pending-orders');
            Route::get('/complete-orders','TotalCompleteOrders')->name('complete-orders');
            Route::get('/product-queries','TotalProductQueries')->name('product-queries');
            Route::get('/out-of-stock-items','OutOfStockProductsList')->name('out-of-stock-items');
        });


    Route::resource('menus', MenuController::class);
    Route::get('menus/{id}/destroy', [MenuController::class, 'destroy']);


    Route::resource('categories', CategoryController::class);
    Route::get('categories/{id}/destroy', [CategoryController::class, 'destroy']);

    Route::resource('sub-category', SubCategoryController::class);
    Route::get('sub-category/{id}/destroy', [SubCategoryController::class, 'destroy']);

    Route::resource('products', ProductController::class);
    Route::get('products/{id}/dupe', [ProductController::class, 'dupe']);
    Route::post('products/{id}/duplicate', [ProductController::class, 'duplicate']);
    Route::get('products/{id}/destroy', [ProductController::class, 'destroy']);
    Route::post('upload_image_ajax', [ProductController::class, 'UploadImageAJax']);
    Route::get('delete_image_ajax', [ProductController::class, 'DeleteImageAJax']);
    Route::get('upload_attachment_ajax', [ProductController::class, 'UploadAttachmentAJax']);
    Route::get('/product-contacts', [ProductController::class, 'ProductsContacts']);
    Route::resource('/product-info',SingleProductInfoController::class);
    Route::get('product-reviews', [ReviewsController::class,'index']);
    Route::get('approve-review/{id}', [ReviewsController::class,'approveReview'])->whereNumber('id');
    Route::get('delete-review/{id}', [ReviewsController::class,'DeleteReview'])->whereNumber('id');

    Route::get('/get-categories', [ProductController::class, 'GetCategories']);
    Route::get('/get-subcategories', [ProductController::class, 'GetSubCategories']);

    Route::get('/get-blogsubcategories', [BlogsController::class, 'getSubCategories']);

    Route::resource('accounts', 'AccountController');
    Route::get('accounts/{id}/destroy', [AccountController::class, 'destroy']);

    Route::resource('roles', RoleController::class);
    Route::resource('account-setting', AccountSettingController::class);

    Route::post('roles/assignroles', [RoleController::class, 'Assign']);
    Route::get('roles/{id}/destroy', [RoleController::class, 'destroy']);
    Route::get('settings/{id}/edit', [SettingsController::class, 'edit']);
    // Route::get('settings/{id}/edit', 'SettingsController@edit');
    Route::patch('settings/{id}', [SettingsController::class, 'update']);


    //appointment
    Route::resource('appointment', AppointmentController::class);
    Route::get('appointment/{id}/destroy', [AppointmentController::class, 'destroy']);

    //employee
    Route::resource('employee', EmployeeController::class);
    //leave
    Route::resource('leave', LeaveController::class);
    Route::get('leave/{id}/destroy', [LeaveController::class, 'destroy']);
    //account group
    Route::resource('account-group', AccountGroupController::class);
    Route::get('account-group/{id}/destroy', [AccountGroupController::class, 'destroy']);
    //accounts
    Route::resource('accounts', AccountsController::class);
    Route::get('accounts/{id}/destroy', [AccountsController::class, 'destroy']);




    //Route::get('/report', [PurchaseReportController::class, 'create']);
    Route::resource('purchase', PurchaseController::class);
    Route::get('purchase/{id}/destroy', [PurchaseController::class, 'destroy']);
    Route::get('purchase/{id}/edit', [PurchaseController::class, 'edit']);
    // ajax Purchase
    Route::get('purchasebill-ajax', [PurchaseController::class, 'showbill']);
    //by date stock list
    Route::resource('report', PurchaseReportController::class);

    //orders
    Route::resource('orders', OrderController::class);
    Route::get('/vendor-orders', [OrderController::class, 'VendorOrders']);
    Route::get('orders-receipt/{id}', [OrderController::class, 'VendorOrderReceipt']);

    // Route::resource('/our-aboutus', AboutUsController::class);
    Route::get('/our-aboutus/{id}/edit', [AboutUsController::class, 'edit']);
    Route::patch('/our-aboutus/{id}', [AboutUsController::class, 'update']);

    Route::resource('/our-team', TeamController::class);
    Route::get('/our-team/destroy/{id}', [TeamController::class, 'destroy'])->whereNumber('id');

    Route::resource('/faq-categories', FaqCategoriesController::class);
    Route::get('/faq-categories/destroy/{id}', [FaqCategoriesController::class, 'destroy']);

    Route::resource('/our-faq1', FAQ1Controller::class);
    Route::get('/our-faq1/destroy/{id}', [FAQ1Controller::class, 'destroy'])->whereNumber('id');

    Route::resource('/our-faq2', FAQ2Controller::class);
    Route::get('/our-faq2/destroy/{id}', [FAQ2Controller::class, 'destroy'])->whereNumber('id');

    Route::resource('/our-terms-conditions', TermsConditionsController::class);
    Route::get('/our-terms-conditions/destroy/{id}', [TermsConditionsController::class, 'destroy'])->whereNumber('id');

    Route::resource('/return-exchange-policy', ReturnExchangePolicyController::class);
    Route::get('/return-exchange-policy/destroy/{id}', [ReturnExchangePolicyController::class, 'destroy'])->whereNumber('id');

    Route::resource('/our-shipping-delivery', ShippingDeliveryController::class);
    Route::get('/our-shipping-delivery/destroy/{id}', [ShippingDeliveryController::class, 'destroy'])->whereNumber('id');

    Route::resource('/our-sizes', SizesController::class);
    Route::get('/our-sizes/destroy/{id}', [SizesController::class, 'destroy'])->whereNumber('id');

    Route::resource('/blogs-categories', BlogsCategoriesController::class);
    Route::get('/blogs-categories/destroy/{id}', [BlogsCategoriesController::class, 'destroy'])->whereNumber('id');

    Route::resource('/blogs-sub-categories', BlogSubCategoryController::class);
    Route::get('/blogs-sub-categories/destroy/{id}', [BlogSubCategoryController::class, 'destroy'])->whereNumber('id');

    Route::resource('/our-blogs', BlogsController::class);
    Route::get('/our-blogs/destroy/{id}', [BlogsController::class, 'destroy'])->whereNumber('id');

    Route::post('/uploads', [TinyMceController::class, 'uploadImage']);

    Route::resource('/our-services', ServicesController::class);
    Route::get('/our-services/destroy/{id}', [ServicesController::class, 'destroy'])->whereNumber('id');

    Route::resource('/our-testimonials', TestimonialsController::class);
    Route::get('/our-testimonials/destroy/{id}', [TestimonialsController::class, 'destroy'])->whereNumber('id');

    Route::resource('/our-locations', LocationsController::class);
    Route::get('/our-locations/destroy/{id}', [LocationsController::class, 'destroy'])->whereNumber('id');

    Route::resource('/our-skills', SkillsController::class);
    Route::get('/our-skills/destroy/{id}', [SkillsController::class, 'destroy'])->whereNumber('id');

    Route::get('/home-settings', [HomeSettingsController::class, 'index']);
    Route::post('/update-home-settings', [HomeSettingsController::class, 'UpdateHomeSettings']);

    Route::get('/blogs-settings', [BlogsSettingController::class, 'index']);
    Route::post('/update-blogs-settings', [BlogsSettingController::class, 'UpdateBlogsSettings']);

    Route::resource('/banners', BannersController::class);
    Route::get('/banners/destroy/{id}', [BannersController::class, 'destroy'])->whereNumber('id');

    Route::resource('/training-categories', TrainingCategoriesController::class);
    Route::get('/training-categories/destroy/{id}', [TrainingCategoriesController::class, 'destroy'])->whereNumber('id');
    ///InstructorController///
    Route::resource('/intructor', InstructorController::class);
    Route::get('/intructor/destroy/{id}', [InstructorController::class, 'destroy']);

    Route::resource('/our-trainings', TrainingsController::class);
    Route::get('/our-trainings/destroy/{id}', [TrainingsController::class, 'destroy'])->whereNumber('id');

    Route::resource('/events-categories', EventCategoriesController::class);
    Route::get('/events-categories/destroy/{id}', [EventCategoriesController::class, 'destroy'])->whereNumber('id');

    Route::resource('/our-events', EventsController::class);
    Route::get('/our-events/destroy/{id}', [EventsController::class, 'destroy'])->whereNumber('id');

    Route::resource('/vendors', VendorsController::class);
    Route::get('/vendors/destroy/{id}', [VendorsController::class, 'destroy'])->whereNumber('id');

    Route::resource('/vendor-banners', VendorBannersController::class);

    Route::resource('/vendor-album', VendorAlbumController::class);
    Route::post('upload_vendor_album_image_ajax', [VendorAlbumController::class, 'UploadImageAJax']);
    Route::get('delete_vendor_album_image_ajax', [VendorAlbumController::class, 'DeleteImageAJax']);
});


Route::get('/test',[TestController::class,'GetUSersRelations']);