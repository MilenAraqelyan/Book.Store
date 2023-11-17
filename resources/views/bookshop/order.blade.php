@include('bookshop.layouts.header')

<section >
    <div class="order-div">
        <div style="width: 50%; float: left; ">
            <img style=" padding: 20px" width="400px" height="560px" src="{{$book->image}}" alt="">

        </div>
        <div style="margin-left: 50%; ">
            <h1>{{$book->title}}</h1>
            <h3>Written by <a href="">{{$book->author->name}}</a></h3>
            <p>{{$book->content}}</p>
            <h3>Cost: {{$book->price}}֏</h3>
            @if($book->is_available)
                <img width="100px" src="https://www.shuniah.org/wp-content/uploads/2020/03/Available-1.png" alt="">
                <form action="{{route('order', $book->id)}}" method="post">
                    @csrf
                    <input style="width: 50px; height: 10px" type="number" id="tentacles" name="amount" min="1" max="10" value="1" />

                    <button type="submit" style=" border-radius: 25px;" class="button button2">Order</button>
                </form>
            @endif
            @if(!($book->is_available))
                <img width="150px" src="https://st4.depositphotos.com/7819052/21803/v/450/depositphotos_218033152-stock-illustration-grunge-red-available-word-rubber.jpg" alt="">
            @endif
        </div>

    </div>
    <button  class="button button2" onclick="history.back()">Go Back</button>

</section>
@include('bookshop.layouts.footer')
