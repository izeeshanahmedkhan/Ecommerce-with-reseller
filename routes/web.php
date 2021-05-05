<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','checkStatus']], function (){

    Route::get('/admin',[App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/user',[App\Http\Controllers\UserController::class, 'index'])->name('user.index')->middleware('permission:show users');
    Route::get('/admin/user/create',[App\Http\Controllers\UserController::class, 'create'])->name('user.create')->middleware('permission:create users');
    Route::post('/admin/user/store',[App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/admin/user/{user}/edit',[\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit')->middleware('permission:edit users');
    Route::put('/admin/user/{user}/update',[\App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::delete('/admin/user/{user}/delete',[\App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy')->middleware('permission:delete users');
    Route::put('/admin/user/{user}/status',[\App\Http\Controllers\UserController::class, 'status'])->name('user.status')->middleware('permission:users status');

//admin roles
    Route::get('/admin/role',[App\Http\Controllers\RoleController::class, 'index'])->name('role.index')->middleware('permission:show roles');
    Route::get('/admin/role/create',[App\Http\Controllers\RoleController::class, 'create'])->name('role.create')->middleware('permission:create roles');
    Route::post('/admin/role/store',[App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
    Route::get('/admin/role/{role}/edit',[\App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit')->middleware('permission:edit roles');
    Route::put('/admin/role/{role}/update',[\App\Http\Controllers\RoleController::class, 'update'])->name('role.update');
    Route::delete('/admin/role/{role}/delete',[\App\Http\Controllers\RoleController::class, 'destroy'])->name('role.destroy')->middleware('permission:delete roles');

//admin category
    Route::get('/admin/category',[App\Http\Controllers\CategoryController::class, 'index'])->name('category.index')->middleware('permission:show categories');
    Route::get('/admin/category/create',[App\Http\Controllers\CategoryController::class, 'create'])->name('category.create')->middleware('permission:create categories');
    Route::post('/admin/category/store',[App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/admin/category/{category}/edit',[App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit')->middleware('permission:edit categories');
    Route::put('/admin/category/{category}/update',[App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::delete('/admin/category/{category}/delete',[App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy')->middleware('permission:delete categories');



//admin colours
    Route::get('/admin/colour',[App\Http\Controllers\ColourController::class, 'index'])->name('colour.index')->middleware('permission:show colours');
    Route::get('/admin/colour/create',[App\Http\Controllers\ColourController::class, 'create'])->name('colour.create')->middleware('permission:create colours');
    Route::post('/admin/colour/store',[App\Http\Controllers\ColourController::class, 'store'])->name('colour.store');
    Route::get('/admin/colour/{colour}/edit',[App\Http\Controllers\ColourController::class, 'edit'])->name('colour.edit')->middleware('permission:edit colours');
    Route::put('/admin/colour/{colour}/update',[App\Http\Controllers\ColourController::class, 'update'])->name('colour.update');
    Route::delete('/admin/colour/{colour}/delete',[App\Http\Controllers\ColourController::class, 'destroy'])->name('colour.destroy')->middleware('permission:delete colours');

//admin sizes
    Route::get('/admin/size',[App\Http\Controllers\SizeController::class, 'index'])->name('size.index')->middleware('permission:show sizes');
    Route::get('/admin/size/create',[App\Http\Controllers\SizeController::class, 'create'])->name('size.create')->middleware('permission:create sizes');
    Route::post('/admin/size/store',[App\Http\Controllers\SizeController::class, 'store'])->name('size.store');
    Route::get('/admin/size/{size}/edit',[App\Http\Controllers\SizeController::class, 'edit'])->name('size.edit')->middleware('permission:edit sizes');
    Route::put('/admin/size/{size}/update',[App\Http\Controllers\SizeController::class, 'update'])->name('size.update');
    Route::delete('/admin/size/{size}/delete',[App\Http\Controllers\SizeController::class, 'destroy'])->name('size.destroy')->middleware('delete sizes');

//admin batches
    Route::get('/admin/batch',[App\Http\Controllers\BatchController::class, 'index'])->name('batch.index')->middleware('permission:show batches');
    Route::get('/admin/batch/create',[App\Http\Controllers\BatchController::class, 'create'])->name('batch.create')->middleware('permission:create batches');
    Route::post('/admin/batch/store',[App\Http\Controllers\BatchController::class, 'store'])->name('batch.store');
    Route::get('/admin/batch/{batch}/edit',[App\Http\Controllers\BatchController::class, 'edit'])->name('batch.edit')->middleware('permission:edit batches');
    Route::put('/admin/batch/{batch}/update',[App\Http\Controllers\BatchController::class, 'update'])->name('batch.update');
    Route::delete('/admin/batch/{batch}/delete',[App\Http\Controllers\BatchController::class, 'destroy'])->name('batch.destroy')->middleware('permission:delete batches');
    Route::get('/admin/batch/{batch}/show',[App\Http\Controllers\BatchController::class, 'show'])->name('batch.show')->middleware('permission:view batches');

//admin Product

    Route::get('/admin/product',[App\Http\Controllers\ProductController::class, 'index'])->name('product.index')->middleware('permission:show products');
    Route::get('/admin/product/create',[App\Http\Controllers\ProductController::class, 'create'])->name('product.create')->middleware('permission:create products');
    Route::post('/admin/product/store',[App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/product/{product}/edit',[App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit')->middleware('permission:edit products');
    Route::put('/admin/product/{product}/update',[App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::delete('/admin/product/{product}/delete',[App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy')->middleware('permission:delete products');
    Route::put('/admin/product/{product}/status',[App\Http\Controllers\ProductController::class, 'status'])->name('product.status')->middleware('permission:Products status');

//admin ColourImageProductSize
    Route::delete('/admin/colourimageproductsize/{id}/delete',[App\Http\Controllers\ColourImageProductSizeController::class, 'destroy'])->name('colourimageproductsize.destroy');

//admin SaleCenter

    Route::get('/admin/salecenter',[App\Http\Controllers\SaleCenterController::class, 'index'])->name('saleCenter.index')->middleware('permission:show sale centers');
    Route::get('/admin/salecenter/create',[App\Http\Controllers\SaleCenterController::class, 'create'])->name('saleCenter.create')->middleware('permission:create sale centers');
    Route::post('/admin/salecenter/store',[App\Http\Controllers\SaleCenterController::class, 'store'])->name('saleCenter.store');
    Route::get('/admin/salecenter/{salecenter}/edit',[App\Http\Controllers\SaleCenterController::class, 'edit'])->name('salecenter.edit')->middleware('permission:edit sale centers');
    Route::put('/admin/salecenter/{salecenter}/update',[App\Http\Controllers\SaleCenterController::class, 'update'])->name('salecenter.update');
    Route::delete('/admin/salecenter/{salecenter}/delete',[App\Http\Controllers\SaleCenterController::class, 'destroy'])->name('salecenter.destroy')->middleware('permission:delete sale centers');

//admin Rider

    Route::get('/admin/rider',[App\Http\Controllers\RiderController::class, 'index'])->name('rider.index')->middleware('permission:show riders');
    Route::get('/admin/rider/create',[App\Http\Controllers\RiderController::class, 'create'])->name('rider.create')->middleware('permission:create riders');
    Route::post('/admin/rider/store',[App\Http\Controllers\RiderController::class, 'store'])->name('rider.store');
    Route::get('/admin/rider/{rider}/edit',[App\Http\Controllers\RiderController::class, 'edit'])->name('rider.edit')->middleware('permission:edit riders');
    Route::put('/admin/rider/{rider}/update',[App\Http\Controllers\RiderController::class, 'update'])->name('rider.update');
    Route::delete('/admin/rider/{rider}/delete',[App\Http\Controllers\RiderController::class, 'destroy'])->name('rider.destroy')->middleware('permission:delete riders');

//admin Supplier

    Route::get('/admin/supplier',[App\Http\Controllers\SupplierController::class, 'index'])->name('supplier.index')->middleware('permission:show suppliers');
    Route::get('/admin/supplier/create',[App\Http\Controllers\SupplierController::class, 'create'])->name('supplier.create')->middleware('permission:create suppliers');
    Route::post('/admin/supplier/store',[App\Http\Controllers\SupplierController::class, 'store'])->name('supplier.store');
    Route::get('/admin/supplier/{supplier}/edit',[App\Http\Controllers\SupplierController::class, 'edit'])->name('supplier.edit')->middleware('permission:edit suppliers');
    Route::put('/admin/supplier/{supplier}/update',[App\Http\Controllers\SupplierController::class, 'update'])->name('supplier.update');
    Route::delete('/admin/supplier/{supplier}/delete',[App\Http\Controllers\SupplierController::class, 'destroy'])->name('supplier.destroy')->middleware('permission:delete suppliers');


//admin home settings

// --- logo

    Route::get('/admin/logo',[App\Http\Controllers\HomeSettingController::class, 'logo_index'])->name('logo.index')->middleware('permission:show logos');
    Route::get('/admin/logo/create',[App\Http\Controllers\HomeSettingController::class, 'logo_create'])->name('logo.create')->middleware('permission:create logos');
    Route::get('/admin/logo/{logo}/edit',[App\Http\Controllers\HomeSettingController::class, 'logo_edit'])->name('logo.edit')->middleware('permission:edit logos');

// --- address phone email
    Route::get('/admin/ape',[App\Http\Controllers\HomeSettingController::class, 'ape_index'])->name('ape.index')->middleware('permission:show ape');
    Route::get('admin/ape/create',[App\Http\Controllers\HomeSettingController::class, 'ape_create'])->name('ape.create')->middleware('permission:create ape');
    Route::get('/admin/ape/{ape}/edit',[App\Http\Controllers\HomeSettingController::class, 'ape_edit'])->name('ape.edit')->middleware('permission:edit ape');

// --- slider
    Route::get('/admin/slider',[App\Http\Controllers\HomeSettingController::class, 'slider_index'])->name('slider.index')->middleware('permission:show sliders');
    Route::get('admin/slider/create',[App\Http\Controllers\HomeSettingController::class, 'slider_create'])->name('slider.create')->middleware('permission:create sliders');
    Route::get('/admin/slider/{slider}/edit',[App\Http\Controllers\HomeSettingController::class, 'slider_edit'])->name('slider.edit')->middleware('permission:edit sliders');

// --- banner
    Route::get('/admin/banner',[App\Http\Controllers\HomeSettingController::class, 'banner_index'])->name('banner.index')->middleware('permission:show banners');
    Route::get('admin/banner/create',[App\Http\Controllers\HomeSettingController::class, 'banner_create'])->name('banner.create')->middleware('permission:create banners');
    Route::get('/admin/banner/{banner}/edit',[App\Http\Controllers\HomeSettingController::class, 'banner_edit'])->name('banner.edit')->middleware('permission:edit banners');

// --- service
    Route::get('/admin/service',[App\Http\Controllers\HomeSettingController::class, 'service_index'])->name('service.index')->middleware('permission:show services');
    Route::get('admin/service/create',[App\Http\Controllers\HomeSettingController::class, 'service_create'])->name('service.create')->middleware('permission:create services');
    Route::get('/admin/service/{service}/edit',[App\Http\Controllers\HomeSettingController::class, 'service_edit'])->name('service.edit')->middleware('permission:edit services');

// ---floor
    Route::get('/admin/floor',[App\Http\Controllers\HomeSettingController::class, 'floor_index'])->name('floor.index')->middleware('permission:show floors');
    Route::get('admin/floor/create',[App\Http\Controllers\HomeSettingController::class, 'floor_create'])->name('floor.create')->middleware('permission:create floors');
    Route::get('/admin/floor/{floor}/edit',[App\Http\Controllers\HomeSettingController::class, 'floor_edit'])->name('floor.edit')->middleware('permission:edit floors');
    Route::put('/admin/floor/{floor}/update',[App\Http\Controllers\HomeSettingController::class, 'floor_update'])->name('floor.update');
    Route::delete('/admin/floor/{floor}/delete',[App\Http\Controllers\HomeSettingController::class, 'floor_destroy'])->name('floor.destroy')->middleware('permission:delete floors');
    Route::put('/admin/floor/{floor}/status',[App\Http\Controllers\HomeSettingController::class, 'floor_status'])->name('floor.status')->middleware('permission:floors status');

// --- general routes
    Route::post('/admin/homesetting/store',[App\Http\Controllers\HomeSettingController::class, 'store'])->name('homesetting.store');
    Route::put('/admin/homesetting/{homesetting}/update',[App\Http\Controllers\HomeSettingController::class, 'update'])->name('homesetting.update');
    Route::delete('/admin/homesetting/{homesetting}/delete',[App\Http\Controllers\HomeSettingController::class, 'destroy'])->name('homesetting.destroy')->middleware('permission:delete logos|delete ape|delete sliders|delete banners|delete services|delete floors');
    Route::put('/admin/homesetting/{homesetting}/status',[App\Http\Controllers\HomeSettingController::class, 'status'])->name('homesetting.status')->middleware('permission:logos status|ape status|sliders status|banners status|services status|floors status');

//admin courier

    Route::get('/admin/courier',[App\Http\Controllers\CourierController::class, 'index'])->name('courier.index')->middleware('permission:show couriers');
    Route::get('/admin/courier/create',[App\Http\Controllers\CourierController::class, 'create'])->name('courier.create')->middleware('permission:create couriers');
    Route::post('/admin/courier/store',[App\Http\Controllers\CourierController::class, 'store'])->name('courier.store');
    Route::get('/admin/courier/{courier}/edit',[App\Http\Controllers\CourierController::class, 'edit'])->name('courier.edit')->middleware('permission:edit couriers');
    Route::put('/admin/courier/{courier}/update',[App\Http\Controllers\CourierController::class, 'update'])->name('courier.update');
    Route::delete('/admin/courier/{courier}/delete',[App\Http\Controllers\CourierController::class, 'destroy'])->name('courier.destroy')->middleware('permission:delete couriers');

//admin Reseller

    Route::get('/admin/reseller',[App\Http\Controllers\ResellerController::class, 'index'])->name('reseller.index');
    Route::get('/admin/reseller/create',[App\Http\Controllers\ResellerController::class, 'create'])->name('reseller.create');
    Route::post('/admin/reseller/store',[App\Http\Controllers\ResellerController::class, 'store'])->name('reseller.store');
    Route::get('/admin/reseller/{reseller}/edit',[App\Http\Controllers\ResellerController::class, 'edit'])->name('reseller.edit');
    Route::put('/admin/reseller/{reseller}/update',[App\Http\Controllers\ResellerController::class, 'update'])->name('reseller.update');
    Route::delete('/admin/reseller/{reseller}/delete',[App\Http\Controllers\ResellerController::class, 'destroy'])->name('reseller.destroy');


//admin discounts

//deals

    Route::get('/admin/deal',[App\Http\Controllers\DealController::class, 'index'])->name('deal.index')->middleware('permission:show deals');
    Route::get('/admin/deal/create',[App\Http\Controllers\DealController::class, 'create'])->name('deal.create')->middleware('permission:create deals');
    Route::post('/admin/deal/store',[App\Http\Controllers\DealController::class, 'store'])->name('deal.store');
    Route::get('/admin/deal/{deal}/edit',[App\Http\Controllers\DealController::class, 'edit'])->name('deal.edit')->middleware('permission:edit deals');
    Route::put('/admin/deal/{deal}/update',[App\Http\Controllers\DealController::class, 'update'])->name('deal.update');
    Route::delete('/admin/deal/{deal}/delete',[App\Http\Controllers\DealController::class, 'destroy'])->name('deal.destroy')->middleware('permission:delete deals');
    Route::put('/admin/deal/{deal}/status',[App\Http\Controllers\DealController::class, 'deal_status'])->name('deal.status')->middleware('permission:deals status');

// get sizes for deals product

    Route::post('sizes',[App\Http\Controllers\DealController::class, 'getSize']);

//offers

    Route::get('/admin/offer',[App\Http\Controllers\OfferController::class, 'index'])->name('offer.index');

//offers   //Buy One Get One Free

    Route::get('/admin/buyonegetone/create',[App\Http\Controllers\OfferController::class, 'buy_1_get_1_offer_create'])->name('buy_1_get_1_offer.create');
    Route::post('/admin/buyonegetone/store',[App\Http\Controllers\OfferController::class, 'buy_1_get_1_offer_store'])->name('buy_1_get_1_offer.store');
    Route::get('/admin/buyonegetone/{buyonegetone}/edit',[App\Http\Controllers\OfferController::class, 'buy_1_get_1_offer_edit'])->name('buy_1_get_1_offer.edit');
    Route::put('/admin/buyonegetone/{buyonegetone}/update',[App\Http\Controllers\OfferController::class, 'buy_1_get_1_offer_update'])->name('buy_1_get_1_offer.update');
    Route::delete('/admin/buyonegetone/{buyonegetone}/delete',[App\Http\Controllers\OfferController::class, 'buy_1_get_1_offer_destroy'])->name('buy_1_get_1_offer.destroy');
    Route::put('/admin/buyonegetone/{buyonegetone}/status',[App\Http\Controllers\OfferController::class, 'buy_1_get_1_offer_status'])->name('buy_1_get_1_offer.status');

//offers  //free delivery

    Route::get('/admin/freedelivery/create',[App\Http\Controllers\OfferController::class, 'free_delivery_create'])->name('free_delivery.create');
    Route::post('/admin/freedelivery/store',[App\Http\Controllers\OfferController::class, 'free_delivery_store'])->name('free_delivery.store');
    Route::get('/admin/freedelivery/{freedelivery}/edit',[App\Http\Controllers\OfferController::class, 'free_delivery_edit'])->name('free_delivery.edit');
    Route::put('/admin/freedelivery/{freedelivery}/update',[App\Http\Controllers\OfferController::class, 'free_delivery_update'])->name('free_delivery.update');
    Route::delete('/admin/freedelivery/{freedelivery}/delete',[App\Http\Controllers\OfferController::class, 'free_delivery_destroy'])->name('free_delivery.destroy');
    Route::put('/admin/freedelivery/{freedelivery}/status',[App\Http\Controllers\OfferController::class, 'free_delivery_status'])->name('free_delivery.status');

//offers  //voucher code

    Route::get('/admin/vouchercode/create',[App\Http\Controllers\OfferController::class, 'voucher_code_create'])->name('voucher_code.create');
    Route::post('/admin/vouchercode/store',[App\Http\Controllers\OfferController::class, 'voucher_code_store'])->name('voucher_code.store');
    Route::get('/admin/vouchercode/{vouchercode}/edit',[App\Http\Controllers\OfferController::class, 'voucher_code_edit'])->name('voucher_code.edit');
    Route::put('/admin/vouchercode/{vouchercode}/update',[App\Http\Controllers\OfferController::class, 'voucher_code_update'])->name('voucher_code.update');
    Route::delete('/admin/vouchercode/{vouchercode}/delete',[App\Http\Controllers\OfferController::class, 'voucher_code_destroy'])->name('voucher_code.destroy');
    Route::put('/admin/vouchercode/{vouchercode}/status',[App\Http\Controllers\OfferController::class, 'voucher_code_status'])->name('voucher_code.status');

//general discount

    Route::get('/admin/generaldiscount',[App\Http\Controllers\GeneralDiscountController::class, 'index'])->name('general_discount.index');

//general discount //product

    Route::get('/admin/productdiscount/create',[App\Http\Controllers\GeneralDiscountController::class, 'product_discount_create'])->name('product_discount.create');
    Route::post('/admin/productdiscount/store',[App\Http\Controllers\GeneralDiscountController::class, 'product_discount_store'])->name('product_discount.store');
    Route::get('/admin/productdiscount/{productdiscount}/edit',[App\Http\Controllers\GeneralDiscountController::class, 'product_discount_edit'])->name('product_discount.edit');
    Route::put('/admin/productdiscount/{productdiscount}/update',[App\Http\Controllers\GeneralDiscountController::class, 'product_discount_update'])->name('product_discount.update');
    Route::delete('/admin/productdiscount/{productdiscount}/delete',[App\Http\Controllers\GeneralDiscountController::class, 'product_discount_destroy'])->name('product_discount.destroy');
    Route::put('/admin/productdiscount/{productdiscount}/status',[App\Http\Controllers\GeneralDiscountController::class, 'product_discount_status'])->name('product_discount.status');

//general discount //category

    Route::get('/admin/categorydiscount/create',[App\Http\Controllers\GeneralDiscountController::class, 'category_discount_create'])->name('category_discount.create');
    Route::post('/admin/categorydiscount/store',[App\Http\Controllers\GeneralDiscountController::class, 'category_discount_store'])->name('category_discount.store');
    Route::get('/admin/categorydiscount/{categorydiscount}/edit',[App\Http\Controllers\GeneralDiscountController::class, 'category_discount_edit'])->name('category_discount.edit');
    Route::put('/admin/categorydiscount/{categorydiscount}/update',[App\Http\Controllers\GeneralDiscountController::class, 'category_discount_update'])->name('category_discount.update');
    Route::delete('/admin/categorydiscount/{categorydiscount}/delete',[App\Http\Controllers\GeneralDiscountController::class, 'category_discount_destroy'])->name('category_discount.destroy');
    Route::put('/admin/categorydiscount/{categorydiscount}/status',[App\Http\Controllers\GeneralDiscountController::class, 'category_discount_status'])->name('category_discount.status');

//general discount //customer

    Route::get('/admin/customerdiscount/create',[App\Http\Controllers\GeneralDiscountController::class, 'customer_discount_create'])->name('customer_discount.create');
    Route::post('/admin/customerdiscount/store',[App\Http\Controllers\GeneralDiscountController::class, 'customer_discount_store'])->name('customer_discount.store');
    Route::get('/admin/customerdiscount/{customerdiscount}/edit',[App\Http\Controllers\GeneralDiscountController::class, 'customer_discount_edit'])->name('customer_discount.edit');
    Route::put('/admin/customerdiscount/{customerdiscount}/update',[App\Http\Controllers\GeneralDiscountController::class, 'customer_discount_update'])->name('customer_discount.update');
    Route::delete('/admin/customerdiscount/{customerdiscount}/delete',[App\Http\Controllers\GeneralDiscountController::class, 'customer_discount_destroy'])->name('customer_discount.destroy');
    Route::put('/admin/customerdiscount/{customerdiscount}/status',[App\Http\Controllers\GeneralDiscountController::class, 'customer_discount_status'])->name('customer_discount.status');

//general discount //reseller

    Route::get('/admin/resellerdiscount/create',[App\Http\Controllers\GeneralDiscountController::class, 'reseller_discount_create'])->name('reseller_discount.create');
    Route::post('/admin/resellerdiscount/store',[App\Http\Controllers\GeneralDiscountController::class, 'reseller_discount_store'])->name('reseller_discount.store');
    Route::get('/admin/resellerdiscount/{resellerdiscount}/edit',[App\Http\Controllers\GeneralDiscountController::class, 'reseller_discount_edit'])->name('reseller_discount.edit');
    Route::put('/admin/resellerdiscount/{resellerdiscount}/update',[App\Http\Controllers\GeneralDiscountController::class, 'reseller_discount_update'])->name('reseller_discount.update');
    Route::delete('/admin/resellerdiscount/{resellerdiscount}/delete',[App\Http\Controllers\GeneralDiscountController::class, 'reseller_discount_destroy'])->name('reseller_discount.destroy');
    Route::put('/admin/resellerdiscount/{resellerdiscount}/status',[App\Http\Controllers\GeneralDiscountController::class, 'reseller_discount_status'])->name('reseller_discount.status');

//front-end home

    Route::get('/home',[App\Http\Controllers\FrontEndController::class, 'home']);

//single-product rating

    Route::post('/rating',[App\Http\Controllers\ReviewController::class, 'store'])->name('rating');
    Route::post('/reply',[App\Http\Controllers\ReviewReplyController::class, 'store'])->name('reply');

//cart

    Route::post('/cart',[App\Http\Controllers\CartController::class, 'store'])->name('cart');
    Route::get('/cart/{cart}/delete',[App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');

//checkout

    Route::get('/checkout',[App\Http\Controllers\FrontEndController::class, 'checkout'])->name('checkout');

//city - state

    Route::post('states',[App\Http\Controllers\CountryStateCityController::class, 'getState']);
    Route::post('cities',[App\Http\Controllers\CountryStateCityController::class, 'getCity']);

//order

    Route::get('/admin/order',[App\Http\Controllers\OrderController::class, 'index'])->name('order.index')->middleware('permission:show orders');
    Route::get('/admin/order/{order}/edit',[App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit')->middleware('permission:edit orders');
    Route::put('/admin/order/{order}/update',[App\Http\Controllers\OrderController::class, 'update'])->name('order.update');
    Route::delete('/admin/order/{order}/delete',[App\Http\Controllers\OrderController::class, 'destroy'])->name('order.destroy')->middleware('permission:delete orders');
    Route::get('/admin/order/{order}/show',[App\Http\Controllers\OrderController::class, 'show'])->name('order.show')->middleware('permission:view orders');

// -- order for frontend
    Route::post('/order',[App\Http\Controllers\OrderController::class, 'store'])->name('order');

});


//front-end

Route::get('/',[App\Http\Controllers\FrontEndController::class, 'index']);
Route::get('/about',[App\Http\Controllers\FrontEndController::class, 'about'])->name('about');
Route::get('/category',[App\Http\Controllers\FrontEndController::class, 'category'])->name('category');
Route::get('/contact',[App\Http\Controllers\FrontEndController::class, 'contact'])->name('contact');
//Route::get('/order',[App\Http\Controllers\FrontEndController::class, 'order'])->name('order');
Route::get('/single/{product}/product',[App\Http\Controllers\FrontEndController::class, 'single_product'])->name('single_product');
Route::get('/single/{colour}/colour/{product}/product',[App\Http\Controllers\FrontEndController::class, 'single_colour'])->name('single_colour');
