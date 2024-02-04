<?php


// use App\Models\Post;

use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminDashboardInvoicePesananController;
// use App\Http\Controllers\AdminItemBarangdanHargaController;
// use App\Http\Controllers\BarangbarangController;
// use App\Http\Controllers\UserTabelBarangbarangController;
// use App\Models\UserTabelBarangbarang;
// use GuzzleHttp\Middleware;

// use App\Models\Post;


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

// =======================================================================
// HALAMAAN DASHBOARD FRONTEND WEB USERS

Route::get('/', function () {
    return view('frontendweb/home', [
        "title"             => "Beranda",
        "active"            => "beranda",
        "imagehome"         =>  "frontendweb/home/feberanda.png",
        "imagehome2"        =>  "frontendweb/home/home2.png",
        "imagehome3"        =>  "frontendweb/home/berandabaru.png",
        "donasi1"           =>  "frontendweb/donasi/donasi1.jpg",
        "donasi2"           =>  "frontendweb/donasi/donasi2.jpg",
        "donasi3"           =>  "frontendweb/donasi/donasi3.jpg",
        "donasi4"           =>  "frontendweb/donasi/donasi4.jpg",
        "donasi5"           =>  "frontendweb/donasi/donasi5.jpg",
        
    ]);
});


// =======================================================================
// HALAMAAN DASHBOARD FRONTEND WEB TENTANG

Route::get('/tentang', function () {
    return view('frontendweb/tentang', [
        "title"             => "Tentang",
        "active"            => 'tentang',
        "donasi5"           =>  "frontendweb/donasi/donasi5.jpg",
        "imagetentang"      =>  "frontendweb/tentang/fetentang.png",
        "imagetentang1"      =>  "frontendweb/tentang/tentang1.png",
    ]);
});

// =======================================================================
// HALAMAAN DASHBOARD FRONTEND WEB LAYANAN

Route::get('/layanan', function () {
    return view('frontendweb/layanan', [
        "title"             => "Layanan",
        "active"            => 'layanan',
        "imagelayanan"      =>  "frontendweb/layanan/felayanan.png",
    ]);
});



// =======================================================================
// HALAMAAN DONASI FRONTEND WEB LAYANAN

Route::get('/donasi', function () {
    return view('frontendweb/donasi', [
        "title"             => "Donasi",
        "active"            => 'donasi',
        "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
        "imagedoninfra"         =>  "frontendweb/donasi/doninfrastruktur.jpg",
        "imagedonpendidikan"    =>  "frontendweb/donasi/donpendidikan.jpg",
        "imagedonkesehatan"     =>  "frontendweb/donasi/donkesehatan.jpg",
        "imagedonmakanan"       =>  "frontendweb/donasi/donmakanan.jpg",
    ]);
});


// =======================================================================
// HALAMAAN PROJECT FRONTEND WEB PROJECT 

Route::get('/project', function () {
    return view('frontendweb/project', [
        "title"             => "Infrastruktur",
        "active"            => 'project',
        "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
        "imagedoninfra"         =>  "frontendweb/donasi/doninfrastruktur.jpg",
        "imagedonpendidikan"    =>  "frontendweb/donasi/donpendidikan.jpg",
        "imagedonkesehatan"     =>  "frontendweb/donasi/donkesehatan.jpg",
        "imagedonmakanan"       =>  "frontendweb/donasi/donmakanan.jpg",
    ]);
});

// =======================================================================
// HALAMAAN PROJECT FRONTEND WEB PROJECT 

Route::get('/projectpendidikan', function () {
    return view('frontendweb/projectpendidikan', [
        "title"             => "Pendidikan",
        "active"            => 'pendidikan',
        "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
        "imagedoninfra"         =>  "frontendweb/donasi/doninfrastruktur.jpg",
        "imagedonpendidikan"    =>  "frontendweb/donasi/donpendidikan.jpg",
        "imagedonkesehatan"     =>  "frontendweb/donasi/donkesehatan.jpg",
        "imagedonmakanan"       =>  "frontendweb/donasi/donmakanan.jpg",
    ]);
});

// =======================================================================
// HALAMAAN PROJECT FRONTEND WEB PROJECT 

Route::get('/projectkesehatan', function () {
    return view('frontendweb/projectkesehatan', [
        "title"             => "Kesehatan",
        "active"            => 'kesehatan',
        "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
        "imagedoninfra"         =>  "frontendweb/donasi/doninfrastruktur.jpg",
        "imagedonpendidikan"    =>  "frontendweb/donasi/donpendidikan.jpg",
        "imagedonkesehatan"     =>  "frontendweb/donasi/donkesehatan.jpg",
        "imagedonmakanan"       =>  "frontendweb/donasi/donmakanan.jpg",
    ]);
});

// =======================================================================
// HALAMAAN PROJECT FRONTEND WEB PROJECT 

Route::get('/projectmakanan', function () {
    return view('frontendweb/projectmakanan', [
        "title"             => "Makanan",
        "active"            => 'makanan',
        "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
        "imagedoninfra"         =>  "frontendweb/donasi/doninfrastruktur.jpg",
        "imagedonpendidikan"    =>  "frontendweb/donasi/donpendidikan.jpg",
        "imagedonkesehatan"     =>  "frontendweb/donasi/donkesehatan.jpg",
        "imagedonmakanan"       =>  "frontendweb/donasi/donmakanan.jpg",
    ]);
});




// MENAMBAHKAN FITUR MIDLEWARE -> PENGGUNAAN GUEST UNTUK HALAMAN YANG BELUM TERAUTENTIKASI ATAU TERDAFTAR
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); // PENAMBAHAN FITUR GUEST 
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title"        => "Dashboard",
    ]);
})->middleware('auth');

















// =======================================================================
// Route::get('/', function () {
//     return view('Home', [
//         "title" => "Beranda",
//         "active" => 'beranda',
//     ]);
// });

// ========================================================================
Route::get('/about', function () {
    return view('about', [
        "title"     => "Tentang",
        "nama"      => "Sigit Septiadi Prasetyo",
        "email"     => "Sigit@gmail.com",
        "image"     => "istriku.jpg ",
        "active" => 'tentang'
    ]);
});

// ========================================================================


Route::get('/blog', [PostController::class, 'index']);
// Route::get('/blog', function () {

//     // return view('post', [
    //     "title"    => "Blog",
//     //     "post"     => Post::all()
//     // ]);
// });

// ========================================================================
//HALAMAN SINGLE POST 

Route::get('posts/{post:slug}', [PostController::class, 'show']);

//{
// $blog_post = [
//     [
//         "title" => "Artikel Judul Pertama",
//         "slug" => "artikel-judul-pertama",
//         "author"   => "Sigit Septiadi",
//         "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos natus quae vitae optio similique ab dignissimos illo, ipsam pariatur praesentium porro! Neque numquam sed ad, veniam dolorum necessitatibus quia cum, quis labore quo ratione soluta officia excepturi inventore pariatur velit doloribus exercitationem molestiae modi voluptatum dolores repudiandae? Earum hic amet accusantium, ducimus non eaque quae dolorum asperiores provident saepe a quia ad officiis vel at! Quaerat quisquam facere voluptate repellat corrupti aut blanditiis corporis a suscipit maxime at ipsam cupiditate fugiat quo, doloremque quidem natus iure, officia ut numquam aliquid accusantium! Provident voluptates non dignissimos officia saepe beatae recusandae?"
//     ],
//     [
//         "title" => "Artikel Judul Kedua",
//         "slug" => "artikel-judul-kedua",
//         "author"   => "Iqlima Nur Izzati",
//         "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos natus quae vitae optio similique ab dignissimos illo, ipsam pariatur praesentium porro! Neque numquam sed ad, veniam dolorum necessitatibus quia cum, quis labore quo ratione soluta officia excepturi inventore pariatur velit doloribus exercitationem molestiae modi voluptatum dolores repudiandae? Earum hic amet accusantium, ducimus non eaque quae dolorum asperiores provident saepe a quia ad officiis vel at! Quaerat quisquam facere voluptate repellat corrupti aut blanditiis corporis a suscipit maxime at ipsam cupiditate fugiat quo, doloremque quidem natus iure, officia ut numquam aliquid accusantium! Provident voluptates non dignissimos officia saepe beatae recusandae?"
//     ],
// ];

// $new_post = [];
// foreach ($blog_post as $post) {
//     if ($post["slug"] === $slug) {
//         $new_post = $post;
//     }
// }

// return view('posts', [
//     "title" => "Single Post",
//     "post" => Post::find($slug)

//         // ]);
//     }
// // );


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('post', [
        'title' => "Post Category By $category->nama_kategori",
        "active" => 'categories',
        'post' => $category->posts,
        'category' => $category->nama_kategori
    ]);
});


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('authordetails', [
        'title' => "Author By : $author->name",
        "active" => 'posts',
        // N+1 Problem Menggunakan lazy Eiger Loading 
        'posts' => $author->posts->load('category', 'user')

    ]);
});

// Route::get('/dashboard/posts/checkSLug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');


// ROUTE MENGGUNAKAN METODE RESOURCES UNTUK KEPERLUAN CRUD YANG SUDAH DISEDIAKAN OLEH LARAVEL 

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


// ROUTE UNTUK MENAMBAHKAN KATEGORI YANG ADA SESUAI DENGAN KEBUTUHAN ADMINISTRASI WEB 
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');


// =================================================================================================================== 
// Route::resource('/admin_itembarangdanharga/all_category', AdminItemBarangdanHargaController::class);

//ROUTE MENUJU ADMIN_DASHBOARDINVOCEPESANAN 
Route::resource('/admin_dashboardinvoicepesanan/all_invoicepesanan', AdminDashboardInvoicePesananController::class)->middleware('admin');

//ROUTE MENUJU ADMIN_DASHBOARDINVOCEPESANAN 
// Route::resource('/admin_dashboardinvoicepesanan/all_invoice', AdminDashboardInvoicePesananController::class, 'history')->middleware('admin');

//ROUTE UNTUK PROGRESS INVOICE PENJUALAN 
// Route::resource('/admin_dashboardinvoicepesananprogress/all-data', ProgressController::class)->middleware('auth');



//ROUTE UNTUK HISTORY PESANAN
// /admin_dashboardinvoicepesanan/historyinvoicepesanan

//Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/admin_dashboardinvoicepesanan/historyinvoicepesanan', function () {
//     return view('dashboard.index');
// })->middleware('auth');


// ROUTE INVOICE PESANAN PROGRESS
// Route::get('/admin_dashboardinvoicepesanan/progress', [InvoicepesananProgressController::class, 'index'])->middleware('auth');
