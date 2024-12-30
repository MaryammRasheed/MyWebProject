<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AllRoomsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RoomDetailsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SpaController;
use App\Http\Controllers\TeamController;

use App\Http\Controllers\AdminController;


//Admin Routes

Route::get('/admin', [AdminController::class,'index']);
Route::get('/expenses', [AdminController::class,'expenses']);
Route::get('/add-expense', [AdminController::class, 'showAddExpense'])->name('add.expense');
Route::get('/profile', [AdminController::class,'profile']);
Route::get('/login', [AdminController::class,'login']);
Route::get('/settings', [AdminController::class,'settings']);
Route::get('/pricing', [AdminController::class,'pricing']);
Route::get('/index', [AdminController::class,'index']);
Route::get('/payments', [AdminController::class,'payments']);
Route::get('/register', [AdminController::class,'register']);
Route::get('/activities', [AdminController::class, 'activities']);


Route::get('/edit-pricing', [AdminController::class, 'showEditPricing'])->name('edit.pricing');
Route::get('/add-pricing', [AdminController::class, 'showAddPricing'])->name('add.pricing');
Route::get('/all-booking', [AdminController::class, 'showAllBooking'])->name('all.booking');
Route::get('/edit-booking', [AdminController::class, 'showEditBooking'])->name('edit.booking');
Route::get('/add-booking', [AdminController::class, 'showAddBooking'])->name('add.booking');
Route::get('/all-customers', [AdminController::class, 'showAllCustomers'])->name('all.customers');
Route::get('/add-customer', [AdminController::class, 'showAddCustomer'])->name('add.customer');
Route::get('/edit-room', [AdminController::class, 'showEditRoom'])->name('edit.room');
Route::get('/admin-rooms', [AdminController::class, 'showAdminRooms'])->name('admin.rooms');
Route::get('/add-room', [AdminController::class, 'showAddRoom'])->name('add.room');
Route::get('/forgot-password', [AdminController::class, 'showForgotPassword'])->name('forgot.password');
Route::get('/edit-profile', [AdminController::class, 'showEditProfile'])->name('edit.profile');

Route::prefix('admin')->middleware('auth', 'is_admin')->group(function () {
    Route::get('rooms/create', [AdminController::class, 'createRoom'])->name('admin.createRoom');  // Form for adding room
    Route::post('rooms', [AdminController::class, 'storeRoom'])->name('admin.storeRoom');          // Store room data
});

//Customer Routes

Route::get('/about', [AboutController::class,'index']);
Route::get('/all-rooms', [AllRoomsController::class,'index']);
Route::get('/blog-details', [BlogDetailsController::class,'index']);
Route::get('/blog', [BlogController::class,'index']);
// Route::get('/checkout', [CheckoutController::class,'index']);


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');


// Route::post('/contact-submit', [ContactController::class, 'submitContactForm'])->name('contact.submit');

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/facilities', [FacilitiesController::class,'index']);
Route::get('/faq', [FaqController::class,'index']);
Route::get('/food', [FoodController::class,'index']);
Route::get('/gallery', [GalleryController::class,'index']);
Route::get('/', [IndexController::class,'index']);
Route::get('/room-details', [RoomDetailsController::class,'index']);
Route::get('/rooms', [RoomsController::class,'index']);
Route::get('/services', [ServicesController::class,'index']);

// Route::get('/signin', [SignInController::class,'index']);
Route::get('/signin', [SignInController::class, 'index']);
Route::post('/signin', [SignInController::class, 'store']);

Route::get('/signup', [SignUpController::class,'index']);
Route::get('/spa', [SpaController::class,'index']);
Route::get('/team', [TeamController::class,'index']);


