<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ToDoListController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

// Profil Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Order Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/order/{category}', [OrderController::class, 'index'])->name('order.index');
    Route::put('/order/edit/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::get('/order2/{id}', [OrderController::class, 'detailOrder'])->name('order2.detailOrder');
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/orderConfirmation', [OrderController::class, 'confirmation'])->name('orderConfirmation');
    Route::get('/orderHistory', [OrderController::class, 'orderHistory'])->name('order.orderHistory');
});

// Route::get('/', [PostingController::class, 'utama']);
// Route::resource('/backend', PostingController::class)->middleware('auth');
// Route::resource('/user', UserController::class);

// User Routes
Route::middleware(['auth', 'verified', 'userMiddleware'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('home');
});

// Admin Routes
Route::middleware(['auth', 'verified', 'adminMiddleware'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // PRODUCT ROUTES
    Route::get('/admin/product/home', [ProductController::class, 'index'])->name('admin.product.home');
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/admin/product/save', [ProductController::class, 'save'])->name('admin.product.save');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/admin/product/edit/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');
    
    // TO DO LIST ROUTE
    Route::get('/admin/dashboard', [ToDoListController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/tasks', [ToDoListController::class, 'store'])->name('tasks.store');
    Route::get('/admin/tasks/{id}', [ToDoListController::class, 'showTask'])->name('tasks.show');
    Route::delete('/admin/tasks/{id}', [ToDoListController::class, 'deleteTask'])->name('tasks.delete');
    
    // NOTIF ROUTES
    Route::get('/admin/dashboard', [OrderController::class, 'totalOrder'])->name('admin.dashboard');
    
    // CATEGORY ROUTES
    Route::get('/admin/category/home', [CategoryController::class, 'index'])->name('admin.category.home');
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/category/save', [CategoryController::class, 'save'])->name('admin.category.save');
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });

    // USER ROUTES
    Route::get('/admin/user/home', [AdminController::class, 'user'])->name('admin.user.home');
    
    require __DIR__ . '/auth.php';
    