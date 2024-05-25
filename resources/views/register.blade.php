<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<title>Register Page</title>
@extends('layouts.app')
@section('content')
    <h1 class="text-center mt-5">Registration Form</h1>
    
    <form method="POST" action="/user"  >
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label"> Full Name</label>
            <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Enter Your Name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input  name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example123.com">
        </div>
        <div class="mb-3">
            <label for="InputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control pass" id="exampleInputPassword1" placeholder="XXXXXXXX">
        </div>
        <div class="mb-3">
            <label for="cpassword" class="form-label">Confirm Password</label>
            <input  name="cpassword" type="cpassword" class="form-control cpass" id="cpassword" placeholder="XXXXXXXX">
        </div>
        <input type="submit" onclick="return true" class="btn btn-dark"/>
        </br>
        <div class="text-center fs-5">
            <a href="{{route('loginroute')}}">Go To The Login Form</a>
        </div>
    </form>
    
    <script>
         function pradeep(){
            //Get the password value
            var p = document.querySelector('.pass').value;

            console.log('p>>',p);

            //Get the password value
            var cp = document.querySelector('.cpass').value;

            console.log('cp>>',cp);

            if(p == cp){
                   
                Swal.fire({
                title: 'Success!',
                text: 'ID Register Successfully',
                icon: 'success',
                confirmButtonText: 'OK'
            });
            return true
            }else {
                Swal.fire({
                    title: "Error",
                    text: "Password doesn't match",
                    icon: 'error',
                    confirmButtonText: 'Try Again'
                });
                return false;
            }
        }

    </script>
  
@endsection