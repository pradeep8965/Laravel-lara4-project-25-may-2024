<title>Login Page</title>
@extends('layouts.app')
@section('content')
    <h1 class="text-center mt-5">Login Form</h1>
    <form method="POST" action=""  >
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="name@example123.com">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="XXXXXXXX">
        </div> 
        <button type="submit" class="btn btn-dark">Submit</button></br>
        <div class="text-center fs-5">
            <a>If You Don't Have Login i'd</a>
            <a  href="{{route('registerroute')}}">Go to the Registration form</a>
        </div>
    </form>
@endsection