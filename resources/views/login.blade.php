@extends('layout.app')

@section('home')
<div>
    <hr>
    <h5 class="login-title">Login To WCB</h5>
    <hr  style="margin-bottom: 1rem;">
        <form action="{{ route('login') }}" method="post">
            <label for="name" class="label">UserName:</label><br>
            <input type="text" name="name" class="login-input" required> <br>
            <label for="password" class="label">Password:</label><br>
            <input type="password" name="password" class="login-input" required> <br>
            <input type="submit" value="Login" class="submit-btn">
        </form>
</div>
@endsection()