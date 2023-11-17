@include('bookshop.layouts.header')

<section >
    @foreach($books as $book)

        <div class="book">
            <img width='280px' height="420px" src="{{$book -> image}}" alt="">
            <div style="background-color: #008CBA; text-align: center">
                <h1 style="color: white; ">{{$book->title}}</h1>
            </div>
            <h4><a href="{{route('authorInfo', $book->author->id)}}">{{$book->author->name}}</a></h4>
            <div>
            @foreach($book->categories as $category)
                 <span><a href="{{route('category', $category->id)}}">{{$category->title}}</a> </span>
            @endforeach
            </div>
            <h1 style="float: left">{{$book ->price}}  ֏</h1>
            <div style="float: right">
                <a href="{{route('order', $book->id)}}">
                    @if( in_array($book->id, $books_id))
                        <img style="margin-top: 10px" width="40px" src="https://cdn-icons-png.flaticon.com/512/25/25619.png" alt="">

                    @else()
                        <img width="50px" src="https://previews.123rf.com/images/val2014/val20141603/val2014160300006/54302308-shopping-cart-icon.jpg?fj=1" alt="">

                    @endif

                </a>
            </div>
        </div>


    @endforeach

</section>
@include('bookshop.layouts.footer')
