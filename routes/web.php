<?php

<<<<<<< Updated upstream
=======
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\forgotPasswordController;
use App\Http\Controllers\forgotSecurityController;
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
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

Route::get('/signin', [LoginController::class, 'signin'])->name('signin');
Route::get('/signout', [LoginController::class, 'logout'])->name('logout');
Route::post('/signinAuth', [LoginController::class, 'signinAuth'])->name('signinAuth');
Route::get('/signup', [SignupController::class, 'signup'])->name('signup');

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('index');
});
=======
//forgot pass

Route::get('/forgotpassword', [forgotPasswordController::class, 'forgot'])->name('forgotpassword')->middleware(['signinMiddleware','buynowChecker']);
Route::post('/forgotpassword', [forgotPasswordController::class, 'emailVerify'])->name('emailverify')->middleware(['signinMiddleware','buynowChecker']);

//forgot security


Route::get('/securityvalidation', [forgotPasswordController::class, 'getSecurityQuestion'])->name('secvalidation')->middleware(['securityvalidation','buynowChecker']);
Route::post('/securityvalidation', [forgotPasswordController::class, 'validateAnswer'])->name('answerverify')->middleware(['securityvalidation','buynowChecker']);

//newpass
Route::get('/newpassword', [forgotPasswordController::class, 'newPassword'])->name('newpassword')->middleware('newpasswordMiddleware');
Route::post('/newpassword', [forgotPasswordController::class, 'postPassword'])->name('postPassword')->middleware('newpasswordMiddleware');

//cartactions
Route::get('/getCartCount', [CartController::class, 'getCartCount'])->name('getCartCount');

Route::get('/addtocart', [CartController::class, 'addtocart'])->name('addtocart')->middleware('auth');

Route::get('/updateCart', [CartController::class, 'updateCart'])->name('updateCart')->middleware('auth');

Route::get('/removeCart', [CartController::class, 'removeCart'])->middleware('auth');

Route::get('/removeAll', [CartController::class, 'removeAll'])->name('removeAll')->middleware(['auth']);

//Cart Page
Route::get('/mycart', [CartController::class, 'cart'])->name('mycart')->middleware(['auth','buynowChecker']);
Route::get('/mycartupdate', [CartController::class, 'checkForUpdate'])->name('mycartupdate1');
Route::post('/cartcheckout', [OrderController::class, 'cartCheckout'])->name('checkoutcart.post')->middleware(['auth', 'cartCheckoutMiddleware']);


//Account Page
Route::get('/myaccount', [AccountController::class, 'account'])->name('myaccount')->middleware(['auth','buynowChecker']);

//My Profile
Route::get('/myprofile', [ProfileController::class, 'myprofile'])->name('myprofile')->middleware(['auth','buynowChecker']);
//Edit Profile
Route::get('/editprofile', [ProfileController::class, 'editProfilePage'])->name('editProfile')->middleware(['auth','buynowChecker']);
Route::post('/editprofile', [ProfileController::class, 'updateProfile'])->name('editprofile.post')->middleware(['auth','buynowChecker']);
//address
Route::get('/myaddress', [AddressController::class, 'addresspage'])->name('myaddress')->middleware(['auth','buynowChecker']);
Route::get('/addAddress', [AddressController::class, 'addAddressPage'])->name('addAddress')->middleware(['auth','buynowChecker']);
Route::post('/addAddressPost', [AddressController::class, 'addAddress'])->name('addAddress.post')->middleware(['auth','buynowChecker']);
Route::get('/manageAddress', [AddressController::class, 'manageAddress'])->name('manageAddress')->middleware(['auth','buynowChecker']);

//edit address
Route::get('/editaddress', [AddressController::class, 'editAddressPage'])->name('editaddress')->middleware(['auth','buynowChecker']);
Route::post('/editaddress', [AddressController::class, 'updateAddress'])->name('updateAddress')->middleware(['auth','buynowChecker']);

//order
Route::get('/myorders', [OrderController::class, 'myOrder'])->name('myorders')->middleware(['auth','buynowChecker']);
Route::get('/getOrders', [OrderController::class, 'getAllOrders']);
Route::get('/cancelOrder', [OrderController::class, 'CancelOrder'])->middleware('auth');
Route::get('/updateDisplayOrder', [OrderController::class, 'updateOrder'])->middleware('auth');

//product page
Route::get('/viewproduct', [ProductController::class, 'productPage'])->name('viewproduct');

//buy now page

Route::get('/buynow', [OrderController::class, 'buyNow'])->middleware(['auth','buynowChecker']);
Route::get('/createbuy', [OrderController::class, 'createBuy'])->middleware(['auth','buynowChecker']);
Route::get('/updateQuantity', [OrderController::class, 'updateQuantity']);
Route::get('/loadBuyNow', function () {
    return view('includes.buynowitems');
});

//checkout order
Route::get('/checkoutorder', [OrderController::class, 'checkoutOrder'])->name('checkoutOrder')->middleware(['auth','buynowChecker']);
Route::post('/checkoutorder', [OrderController::class, 'checkoutUpdateOrder'])->name('checkoutorder.post')->middleware(['auth','buynowChecker']);
Route::get('/cartcheckout', [OrderController::class, 'cartCheckout'])->name('cartcheckout')->middleware(['auth', 'cartCheckoutMiddleware']);
Route::post('/cartcheckout', [OrderController::class, 'createCartBuy'])->name('checkoutcart.post')->middleware(['auth', 'cartCheckoutMiddleware']);

Route::get('/products', [ProductController::class, 'productsPage'])->name('products');
Route::get('/searchProduct', [ProductController::class, 'searchProduct'])->name('search');
Route::get('/categoryProduct', [ProductController::class, 'searchProduct'])->name('categoryProduct');

Route::get('/category', [ProductController::class, 'category'])->name('category');



//admin side
Route::get('/adminhome', [AdminController::class, 'index'])->name('adminhome')->middleware(['auth','AdminCheck']);
Route::get('/manageproducts', [AdminController::class, 'manageproduct'])->name('manageproducts')->middleware(['auth','AdminCheck']);
Route::get('/viewProduct', [AdminController::class, 'viewProducts'])->name('viewProduct');
Route::get('/searchAdminProduct', [AdminController::class, 'searchProducts'])->name('searchAdminProduct')->middleware(['auth','AdminCheck']);
Route::get('/searchProducts', [AdminController::class, 'searchProduct'])->name('searchAdminProduct')->middleware(['auth','AdminCheck']);

//delete
Route::get('/deleteProduct', [AdminController::class, 'deleteProduct'])->name('deleteProduct')->middleware(['auth','AdminCheck']);

//add a product
Route::get('/addProduct', [AdminController::class, 'addProductPage'])->name('addProduct')->middleware(['auth','AdminCheck']);
Route::post('/createProduct', [AdminController::class, 'addProductx'])->name('addProductAction')->middleware(['auth','AdminCheck']);
Route::get('/editProduct', [AdminController::class, 'editProductPage'])->name('editProduct')->middleware(['auth','AdminCheck']);
Route::post('/editProductAction', [AdminController::class, 'editProduct'])->name('editProductAction')->middleware(['auth','AdminCheck']);


//manage orders
Route::get('/manageorders', [AdminController::class, 'manageOrderPage'])->name('manageorders')->middleware(['auth','AdminCheck']);
Route::get('/vieworder', [AdminController::class, 'viewOrder'])->name('vieworder')->middleware(['auth','AdminCheck']);
Route::get('/cancelAdminOrder', [AdminController::class, 'cancelOrder'])->name('cancelAdminOrder')->middleware(['auth','AdminCheck']);
Route::get('/setDeliveryFee', [AdminController::class, 'setDeliveryFee'])->name('setDeliveryFee')->middleware(['auth','AdminCheck']);
Route::get('/setDeliveryDate', [AdminController::class, 'setDeliveryDate'])->name('setDeliveryDate')->middleware(['auth','AdminCheck']);
Route::get('/shipped', [AdminController::class, 'Shipped'])->name('shipped')->middleware(['auth','AdminCheck']);
Route::get('/delivered', [AdminController::class, 'Delivered'])->name('delivered')->middleware(['auth','AdminCheck']);
Route::get('/viewsearchOrder', [AdminController::class, 'viewOrderSearch'])->name('viewsearchOrder')->middleware(['auth','AdminCheck']);
Route::get('/searchOrder', [AdminController::class, 'searchOrder'])->name('searchOrder')->middleware(['auth','AdminCheck']);


//Product Previews

>>>>>>> Stashed changes
