<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order($id){



        if(\Illuminate\Support\Facades\Auth::check() == 0){


            $url = url()->full();

            session(['url' => $url]);
            return redirect(route('user.login'));
        }

        $categories = Category::all();
        $authors = Author::all();
        $books = Book::all();
        $book = Book::find($id);
        return view('bookshop.order', compact('books', 'categories', 'authors', 'book'));

    }

    public function SaveOrder(Request $request){


        $order = Order::query()->where('user_id', '=',  Auth::id())
                      ->where('book_id',  '=', ($request->id))
                      ->first();


        if($order == null){
            Order::create([
                'user_id' => Auth::id(),
                'book_id' => ($request->id),
                'amount' => ($request->amount)
            ]);
        }else{
            $order->update(['amount' => $request->amount + $order->amount]);
        }
        return  redirect('books');

    }
}
