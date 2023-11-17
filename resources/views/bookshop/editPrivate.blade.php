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


        <form class = 'edit-form' action="{{route('update')}}"  method="post">
            @csrf
            <div class="label-div">
                <h3>UserName : </h3><br>
                <h3>Email : </h3><br>
                <h3>Phone : </h3><br>
                <h3>Password : </h3><br>
            </div>
            <div>
                <input id="username" name="username"  placeholder="UserName" type="text" value="{{$user->username}}"/>
                @error('username')
                <p class="text-danger">{{$message}} </p>
                @enderror
                <input id="email" name="email" type="email" placeholder="Email" value="{{$user->email}}"/><br>
                @error('email')
                <p class="text-danger">{{$message}} </p>
                @enderror
                <input id="phone" name="phone" type="text" placeholder="Phone" value="{{$user->phone}}"/><br>
                @error('phone')
                <p class="text-danger">{{$message}} </p>
                @enderror

                <input id="password" name="password" type="password" placeholder="Password" /><br>
                @error('password')
                <p class="text-danger">{{$message}} </p>
                @enderror


                <input  style="height: 20px; width: 30px; margin: 10px" type="radio" name="gender" value="male"> Male
                <input  style="height: 20px; width: 40px" type="radio" name="gender" value="female"> Female
                <input checked style="height: 20px; width: 40px" type="radio" name="gender" value="unknown" > Unknown
                @error('gender')
                <p class="text-danger">{{$message}} </p>
                @enderror
                <button type="submit" class="button button2">Edit</button>

            </div>
        </form>

    </div>
</section>

@include('bookshop.layouts.footer')
