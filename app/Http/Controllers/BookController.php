<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookShop\RegistrationRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Collection;
use function Laravel\Prompts\table;

class BookController extends Controller
{

    public function category($id){

        $categories = Category::all();
        $authors = Author::all();
        $books = Category::find($id)->books;

        $user = Auth::user();
        $books_id = [];
        if($user != null) {
            foreach ($user->orders as $order) {
                array_push($books_id, $order->book_id);
            }
        }


        return view('bookshop.books', compact('books', 'categories', 'authors', 'books_id'));
    }

    public function author($id){

        $categories = Category::all();
        $authors = Author::all();
        $books = Author::find($id)->books;

        $user = Auth::user();
        $books_id = [];
        if($user != null) {
            foreach ($user->orders as $order) {
                array_push($books_id, $order->book_id);
            }
        }

        return view('bookshop.books', compact('books', 'categories', 'authors', 'books_id'));

    }

    public function search(Request $request){
        $textSearch = $request->search;

        $categories = Category::all();
        $authors = Author::all();

        $books = Book::query()->where('title', 'like', '%' . $textSearch . '%')->get();

        $searchAuthors = Author::query()->where('name', 'like', '%' . $textSearch . '%')->get();
        $searchCategories = Category::query()->where('title', 'like', '%' . $textSearch . '%')->get();

        foreach ($searchAuthors as $searchAuthor){
            $books = $books->merge($searchAuthor->books);
        }
        foreach ($searchCategories as $searchCategory){
            $books = $books->merge($searchCategory->books);
        }
        $user = Auth::user();
        $books_id = [];
        if($user != null) {
            foreach ($user->orders as $order) {
                array_push($books_id, $order->book_id);
            }
        }
        $books = $books->unique();
        return view('bookshop.books', compact('books', 'categories', 'authors', 'books_id'));
    }

    public function authorInfo($id){

        $categories = Category::all();
        $authors = Author::all();
        $books = Book::all();
        $author = Author::find($id);
        return view('bookshop.author', compact('books', 'categories', 'authors', 'author'));
    }
}
