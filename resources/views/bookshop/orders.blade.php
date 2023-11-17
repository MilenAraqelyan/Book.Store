@include('bookshop.layouts.header')

<?php $sum = 0 ?>
<section >

    <div class="order-div">
        @foreach($orders as $order)
            <div class="order-item-div" >
                <div style="float:left;">
                    <img style=" margin-right: 10px" width="50px" src="{{$order->book->image}}" alt="">
                </div>
                <div style="float:left;">
                    <h2 style="margin: 1px">{{$order->book->title}}</h2>
                    <h4 style="margin: 1px">Amount : <span style="color: red">{{$order->amount}}</span></h4>
                    <h4 style="margin: 1px">Price : <span style="color: red">{{$order->book->price}} ֏</span></h4>
                </div>
                <div style="float:right;">

                    <h1>{{($order->amount) * ($order->book->price) }} ֏</h1>
                        <?php $sum = $sum +  ($order->amount) * ($order->book->price)?>
                </div>

            </div>
        @endforeach
        <div><button style="float:right;" class="button button2"> Pay {{$sum}}֏ </button></div>



            <div class="w3-container">
                <h2>W3.CSS Modal</h2>
                <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

                <div id="id01" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                            <p>Some text. Some text. Some text.</p>
                            <p>Some text. Some text. Some text.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
@include('bookshop.layouts.footer')
