<?php

use App\Models\Order;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/books', function (){
    $categories = Category::all();
    $authors = Author::all();
    $books = Book::all();
    $user = Auth::user();
    $books_id = [];
    if($user != null) {
        foreach ($user->orders as $order) {
            array_push($books_id, $order->book_id);
        }
    }
    return view('bookshop.books', compact('books', 'categories', 'authors', 'books_id'));
})->name('books');


Route::name('user.')->group(function (){
    Route::get('/private', function (){
        $categories = Category::all();
        $authors = Author::all();
        $books = Book::all();
        $user = Auth::user();
        return view('bookshop.private', compact('books', 'categories', 'authors', 'user'));

    })->middleware('auth')->name('private');

    Route::get('/login', function (){


        if(Auth::check()){
            return redirect(route('user.private'));
        }
        $categories = Category::all();
        $authors = Author::all();
        $books = Book::all();
        return view('bookshop.login', compact('books', 'categories', 'authors'));
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);
    Route::get('/logout', function (){
        Auth::logout();
        return redirect('books');
    })->name('logout');

    Route::get('/registration', function (){
        if(\Illuminate\Support\Facades\Auth::check()){
            return redirect(route('user.private'));
        }
        $categories = Category::all();
        $authors = Author::all();
        $books = Book::all();
        return view('bookshop.registration', compact('books', 'categories', 'authors'));
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);
});


Route::get('/category/{id}', 'App\Http\Controllers\BookController@category')->name('category');

Route::get('/author/{id}', 'App\Http\Controllers\BookController@author')->name('author');


Route::get('/orders', function (){
    if(!(Auth::check())){
        return redirect(route('user.login'));
    }
    $categories = Category::all();
    $authors = Author::all();

    $user = Auth::user();
    $orders = $user->orders;


    return view('bookshop.orders', compact('categories', 'authors', 'orders'));

})->name('orders');



Route::get('/order/{id}', 'App\Http\Controllers\OrderController@order')->name('order');

Route::post('/order/{id}', 'App\Http\Controllers\OrderController@SaveOrder')->name('SaveOrder');

Route::get('/private/edit', 'App\Http\Controllers\RegisterController@edit')->name('edit');

Route::post('/private/edit', 'App\Http\Controllers\RegisterController@update')->name('update');

Route::get('/search', 'App\Http\Controllers\BookController@search')->name('search');

Route::get('/author/info/{id}', 'App\Http\Controllers\BookController@authorInfo')->name('authorInfo');
