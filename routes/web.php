<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterUserController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    $project = App\Models\Project::Latest()->paginate(6);
    $blogs = App\Models\Blog::orderBy('id', 'ASC')->paginate(6);
    $testimonial = App\Models\Testimonial::All();
    return view('welcome', compact(['project', 'blogs', 'testimonial']));
})->name('home');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/aboutus', function () {
    return view('pages.aboutus');
})->name('aboutus');

Route::get('/projects', function () {
    $project = App\Models\Project::All();
    return view('pages.projects', compact('project'));
})->name('projects');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/sendemail', [ContactController::class, 'create'])->name('send.email');

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/dashboard', [AdminController::class, 'show']);

Route::post('/adlogin.php', [AdminController::class, 'store'])->name('admin-login');

Route::get('/viewallusers', [AdminController::class, 'allusers'])->name('all-users');

Route::get('/singleuser/{id}', [AdminController::class, 'viewusers']);


Route::post('/add-testimonial', [FrontEndController::class, 'testimonial'])->name('add-testimonial');

Route::post('/add-project', [FrontEndController::class, 'addProject'])->name('add-project');

Route::get('detail/{id}', [FrontEndController::class, 'prodView'])->name('vsprod');

Route::post('/addslider.php', [FrontEndController::class, 'store'])->name ('add-slider');

Route::post('/saveblog', [BlogController::class, 'store'])->name ('save-blog');

Route::get('/blog', [BlogController::class, 'show'])->name ('all-blog');

Route::get('/singleblog/{id}', [BlogController::class, 'singleBlog'])->name ('single-blog');

Route::get('/manageblog', [BlogController::class, 'manageBlog']);

Route::put('/blogs/{blogs}', [BlogController::class, 'update'])->name('blogs.update');

Route::delete('/blogs/{blogs}', [BlogController::class, 'destroy'])-> name('blogs.delete');

Route::get('blogs/{blogs}/edit', [BlogController::class, 'edit'])-> name('blogs.edit');

Route::get('/addblog', 'BlogController@addBlog');



// Route::get('/addcategory.php', 'CategoryController@addCategory');

// Route::post('/savecategory.php', 'CategoryController@saveCategory')->name ('add-category');

// Route::put('/category/{category}', [CategoryController::class, 'update'])->name('categories.update');

// Route::delete('/category/{category}', [CategoryController::class, 'destroy'])-> name('categories.delete');

// Route::get('category/{category}/edit', [CategoryController::class, 'edit'])-> name('categories.edit');




// Route::post('/saveproduct.php', 'ProductController@store')->name ('add-product');

// Route::get('/all-product', [ProductController::class, 'allProd'])->name('all-product');

// Route::put('/product/{product}', [ProductController::class, 'update'])->name('products.update');

// Route::delete('/product/{product}', [ProductController::class, 'destroy'])-> name('products.delete');

// Route::get('/product/{product}/edit', [ProductController::class, 'edit'])-> name('products.edit');


// Route::get('/profile', [ProfileController::class, 'index']);

// Route::get('/address', [ProfileController::class, 'create']);

// Route::post('/addprofile', [ProfileController::class, 'store'])->name('address-details');

// Route::get('/myorders', [ProfileController::class, 'myorders'])->name('my-orders');

// Route::get('/ordersdetail/{id}', [ProfileController::class, 'vieworders'])->name('view-orders');


// Route::post('/orderpage', [OrderController::class, 'placeOrder'])->name('place-order');

// Route::get('/pendingorders', [OrderController::class, 'viewOrder'])->name('view-order');

// Route::get('/admin/orderdetails/{id}', [OrderController::class, 'OrderDetails'])->name('order-details');

// Route::put('/update-order/{id}', [OrderController::class, 'updateorder'])->name('update-order');

// Route::get('/orderhistory', [OrderController::class, 'orderHistory'])->name('order-history');

// Route::get('/deliveredorders', [OrderController::class, 'deliveredorders'])->name('delivered-orders');



// Route::post('/addtowishlist', [WishlistController::class, 'store'])->name('add-to-wishlist');

// Route::get('/view-wishlist', [WishlistController::class, 'show'])->name('view-wishlist');

// Route::delete('/remove-saved-item/{wishlist}', [WishlistController::class, 'destroy'])->name('remove-saved-item');



// Route::post('/addtocart', [CartController::class, 'addProdtoCart'])->name('add-to-cart');

// Route::get('/viewcart', [CartController::class, 'viewCart'])->name('view-cart');

// Route::get('/checkout', [CartController::class, 'checkOut'])->name('check-out');

// Route::delete('/remove-cart-item/{cart}', [CartController::class, 'removeItem'])->name('remove-item');

// Route::put('/update-cart/{cart}', [CartController::class, 'updateCart'])->name('update-cart');




// Route::get('/login.php', [RegisterUserController::class, 'login'])->middleware('loggedIn');
// Route::get('/register.php', [RegisterUserController::class, 'registration'])->middleware('loggedIn');
// Route::post('/registeruser', [RegisterUserController::class, 'registeruser']) ->name ('register-user');
// Route::post('/loginuser', [RegisterUserController::class, 'loginuser']) ->name ('login-user');
// Route::get('/user', [RegisterUserController::class, 'userdashboard'])->middleware('isLoggedIn');
// Route::get('/logout', [RegisterUserController::class, 'logout']);