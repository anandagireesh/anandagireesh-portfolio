<?php

use App\Livewire\Admin\Login;
use App\Livewire\Admin\Pages\AddBlog;
use App\Livewire\Admin\Pages\Blogs;
use App\Livewire\Admin\Pages\Dashboard;
use App\Livewire\Admin\Pages\MyAccount;
use Illuminate\Support\Facades\Route;
use App\Livewire\Web\Home;
use App\Livewire\Web\ProtfolioDetail;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', Home::class);
Route::get('/protfolio/{id}', ProtfolioDetail::class);
Route::get('user-login', Login::class);

Route::get('dashboard',Dashboard::class);
Route::get('my-account',MyAccount::class);
Route::get('blogs', Blogs::class);
Route::get('add-blog', AddBlog::class);
