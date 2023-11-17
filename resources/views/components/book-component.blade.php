<div class="book">
    <img width='280px' height="420px" src="{{$image}}" alt="">
    <div style="background-color: #008CBA; text-align: center">
        <h1 style="color: white">{{$title}}</h1>
    </div>
    <h4>{{$author}}</h4>

    <h1 style="float: left">{{$price}}֏</h1>
    <div style="float: right">
        <a href="{{route('order', $id)}}">
            <img width="50px" src="https://previews.123rf.com/images/val2014/val20141603/val2014160300006/54302308-shopping-cart-icon.jpg?fj=1" alt="">
        </a>
    </div>
</div>
