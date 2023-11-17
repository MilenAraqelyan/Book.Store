@include('bookshop.layouts.header')

<section >
    <div class="order-div">
        <div style="float: left">
            <img style="margin: 20px" width="300px" src="{{$author->image}}" alt="">
        </div>
       <div>
           <div style="text-align: center"><h1>{{$author->name}}</h1></div>

           <p>{{$author->about}}</p>
       </div>

    </div>
    <button  class="button button2" onclick="history.back()">Go Back</button>


</section>
@include('bookshop.layouts.footer')
