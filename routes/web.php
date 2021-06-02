<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertylistController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\rentcontroller;
use App\Http\Controllers\frontEndController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\ImageUploadController;




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

// Route::get('/', function () {
//     return view('front-end.partisals.index');
// });
Route::post('update/image',[rentcontroller::class,'image_update'])->name('update/image');


Route::get('/', [App\Http\Controllers\HomeController::class, 'image']);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);


    Route::resource('roles', RoleController::class);

    Route::resource('permissions', PermissionController::class);
// Route::get('/user', [UserController::class, 'index']);

Route::resource('posts', 'PostController');
Route::get('admin',[AdminController::class,'index']);
//////////////////

Route::get('/Auction',[AuctionController::class,'auction']);
// Route::get('/Auction',[AuctionController::class,'show2']);
Route::get('/AuctionForm/{id}',[AuctionController::class,'editData']);
Route::post('/Auction_edit',[AuctionController::class,'editData']);
Route::get('/AuctionForm',[AuctionController::class,'auctionform']);
Route::get('/Auctionlist',[AuctionController::class,'auctionlist']);
Route::post('/Auctionlist',[AuctionController::class,'addData']);
Route::get('/Auctionlist',[AuctionController::class,'show']);

/////////////////////
Route::get('/search', [PropertylistController::class, 'index']);
Route::get('/Search',[PropertylistController::class,'Search']);
Route::get('/detail', [frontEndController::class, 'view']);
Route::get('/agent', [frontEndController::class, 'agent']);
Route::get('/about', [frontEndController::class, 'about']);
Route::get('/contact', [frontEndController::class, 'contact']);
Route::get('/blog', [frontEndController::class, 'blog']);
// Route::get('/newregister',[frontEndController::class, 'NewRegister']);
Route::get('/blogdetail', [frontEndController::class, 'blogdet']);
Route::get('/Detail/{id}', [PropertylistController::class, 'Detail']);
Route::get('/register', [AuctionController::class, 'register']);

// Route::get('/new-register',function(){
// 	return view('Registernew');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/index', [DashboardController::class, 'index']);
Route::get('/reg', [DashboardController::class, 'Registerform']);
Route::get('/sellerform',[DashboardController::class,'SellerForm']);
Route::get('/propertylist',[DashboardController::class,'View']);
Route::get('/click_edit',[DashboardController::class,'Edit']);
Route::get('/propertycategoryform',[DashboardController::class,'propertycategory']);
//Route::get('/customerform',[DashboardController::class,'cusform']);

Route::get('/propertydetail',[DashboardController::class,'book']);
Route::get('/propertyview',[DashboardController::class,'PropertyDisplay']);


/////////////////Prperty CRUD////////////////////////

Route::post('/property_list_add',[PropertylistController::class,'addData']);
Route::post('/property_image',[PropertylistController::class,'property_image'])->name('property_image');
Route::get('property_id/{id}', [PropertylistController::class,'property_id']);
Route::get('/propertylist',[PropertylistController::class,'show']);
Route::get('/click_delete/{id}',[PropertylistController::class,'delete']);
Route::get('/click_edit/{id}',[PropertylistController::class,'editData']);
Route::get('/click_status/{id}',[PropertylistController::class,'status']);
Route::get('/click_cancellation/{id}',[PropertylistController::class,'cancellation']);
Route::get('/sellerlist',[PropertylistController::class,'Sellerpropertyview']);



// Route::resource('AdminOperations', 'PropertylistController');

Route::post('/click_edit',[PropertylistController::class,'update']);
////////////////////////////////////////////////////////////////////
Route::post('/addCustomer',[CustomerController::class,'AddCustomer']);
Route::get('/customerform',[CustomerController::class,'Cusform']);
Route::get('/customerlist',[CustomerController::class,'index']);
Route::get('/customerlist',[CustomerController::class,'show']);
////////////////////////////////////////Rent/////////
Route::get('/rentform',[rentcontroller::class,'RentForm']);
Route::post('/rentaddData',[rentcontroller::class,'rentaddData']);
Route::get('/Rentlist',[rentcontroller::class,'Show']);
Route::get('/Click_Edit',[rentcontroller::class,'Edit']);
Route::get('/Click_Edit/{id}',[rentcontroller::class,'EditData']);
Route::get('/Click_Delete/{id}',[rentcontroller::class,'Delete']);
Route::post('/Click_Edit',[rentcontroller::class,'Update']);
Route::get('/view_image/{id}',[rentcontroller::class,'view_image']);


//////////////////////////
Route::get('/Buyer', [BuyerController::class, 'index']);



///////////////////////Image/////////
// Route::get('/image-upload','ImageUploadController@index')->name('image.upload');
Route::get('/image-upload',[ImageUploadController::class,'index'])->name('image.upload');

// Route::get('/image-upload-list','ImageUploadController@List')->name('image.list');
Route::get('/image-upload-list',[ImageUploadController::class,'List'])->name('image.list');

// Route::post('/image-upload-store','ImageUploadController@ImageStore')->name('image.store');
Route::get('/image-upload-store',[ImageUploadController::class,'ImageStore']);
