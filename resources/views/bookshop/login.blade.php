@include('bookshop.layouts.header')

<section >

    <div class="logindiv">

        <h1>Login</h1>
        <form action="{{route('user.login')}}" method="post" class="login-form">
            @csrf
            <input name="username" type="text" placeholder="Username"/><br>
            @error('username')
            <p class="text-danger">{{$message}} </p>
            @enderror
            <input name="password" type="password" placeholder="Password"/><br>
            @error('password')
            <p class="text-danger">{{$message}} </p>
            @enderror
            <button type="submit"  class="button button2">Sign in</button>
            <p class="message">Not registered? <a href="{{route('user.registration')}}">Create an account</a></p>
        </form>

    </div>
</section>

@include('bookshop.layouts.footer')
