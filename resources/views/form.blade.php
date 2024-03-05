<form action="/post" method="POST">
    @csrf
    <p>Username</p>
    <div>
        <input type="text" name="username" id="" value="{{old('username')}}">
    </div>
    <p>Password</p>
    <div>
        <input type="password" name="password" id="">
    </div>
    <br>
    <div>
        <button type="submit">Login</button>
    </div>
</form>