@include('bookshop.layouts.header')

<section >
    <div class="profile-div">
        <div>
            @if($user->image == null)
                <div class="profile-img">
                    <img style="margin: auto" width="250px" height="250px"
                         @if($user->gender == 'female') src = 'https://cdn3.iconfinder.com/data/icons/business-vol-26/100/Artboard_2-512.png'  @endif
                         @if($user->gender != 'female') src = 'https://cdn0.iconfinder.com/data/icons/management-1/100/business-05-512.png' @endif
                         alt="">

                    @endif
                    @if($user->image != null)
                        <img src = '{{$user->image}}' class = 'profile-img' alt="">
                    @endif
                </div>
        </div>


        <div style="text-align:left">
            <h1>{{$user->username}}</h1>
            <h3>Email: {{$user->email}}</h3>
            <h3>Phone: {{str_repeat ('*' , strlen($user->phone)-2)}}{{substr($user->phone, -2)}}</h3>
            <h3>Password: {{str_repeat ('*' , strlen($user->password))}}</h3>
            <h3>Gender: {{$user->gender}}</h3>

            <a href="{{route('edit')}}">
                <button  style="width: 150px; height: 50px" class="button button2">Edit</button>
            </a>
        </div>

    </div>
</section>

@include('bookshop.layouts.footer')
