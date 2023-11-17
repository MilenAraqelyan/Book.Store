@include('bookshop.layouts.header')

<section >

    <div class="logindiv">
            <h1>Registration</h1>
            <form class="login-form" action="{{route('user.registration')}}"  method="post">
                @csrf
                <input value="{{old('username')}}" id="username" name="username"  placeholder="UserName" type="text"/>
                @error('username')
                    <p class="text-danger">{{$message}} </p>
                @enderror
                <input value="{{old('email')}}" id="email" name="email" type="email" placeholder="Email"/><br>
                @error('email')
                <p class="text-danger">{{$message}} </p>
                @enderror
                <input value="{{old('phone')}}" id="phone" name="phone" type="text" placeholder="Phone"/><br>
                @error('phone')
                <p class="text-danger">{{$message}} </p>
                @enderror
                <input  id="password" name="password" type="password" placeholder="Password"/><br>
                @error('password')
                <p class="text-danger">{{$message}} </p>
                @enderror

                <input  style="height: 20px; width: 30px; margin: 10px" type="radio" name="gender" value="male"> Male
                <input  style="height: 20px; width: 40px" type="radio" name="gender" value="female"> Female
                <input  style="height: 20px; width: 40px" type="radio" name="gender" value="unknown"> Unknown
                @error('gender')
                <p class="text-danger">{{$message}} </p>
                @enderror
                <button type="submit" class="button button2">Registration</button>
            </form>

    </div>
</section>

@include('bookshop.layouts.footer')
