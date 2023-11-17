<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('cssfile/bookshop.css')}}">


</head>
<body>


<nav role="navigation" class="primary-navigation">


    <div class="flex-container">
        <div>
            <ul>
            <li><a href="">Home</a></li>
            <li><a href="{{route('books')}}">Books</a></li>
            <li><a href="#">Categories &dtrif;</a>
                <ul class="dropdown">
                    @foreach($categories as $category)
                        <li><a href="{{route('category', $category->id )}}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#">Authors &dtrif;</a>
                <ul class="dropdown">
                    @foreach($authors as $author)
                        <li><a href="{{route('author', $author->id )}}">{{$author->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            </ul>
        </div>
        <div>
            <form method="get" action="{{route('search')}}">
                <input  value="{{old('search')}}" class="search"  type="text" id="search" placeholder="Search books, authors, ca..." name="search" onfocus="this.value=''">
                <button class="button button2" style="margin: 0px; padding: 8px" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <div style="float:right;margin-right: 200px">

            <a href="{{route('orders')}}">
                <img style="margin-top: 5px" width="50px" src="https://previews.123rf.com/images/val2014/val20141603/val2014160300006/54302308-shopping-cart-icon.jpg?fj=1" alt="">
            </a>
            @if(Auth::check())
                <a href="{{route('user.private')}}">
                    <img  width="50px" src="https://static.vecteezy.com/system/resources/previews/020/765/399/non_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg" alt="">
                </a>
            @endif
        </div>
        <div >
            @if(Auth::check())
                <a href="{{route('user.logout')}}">
                    <button  class="button button2">Logout</button>
                </a>
            @endif
            @if(Auth::check() == 0)
                <a href="{{route('user.login')}}">
                    <button class="button button2">Login</button>
                </a>
            @endif
        </div>

    </div>


</nav>
