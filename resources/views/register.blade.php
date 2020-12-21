@extends('master')
@section("content")


<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 sm-offset-4 " >
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                 
                    <label for="name" class="font-weight-bolder">Username</label>
                    <input type="text" name="name" class="form-control shadow-sm p-3 mb-5 bg-white rounded"  placeholder="Username" required> 
                  </div>
                <div class="form-group">
                 
                  <label for="exampleInputEmail1" class="font-weight-bolder">Email address</label>
                  <input type="email" name="email" class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1 " class="font-weight-bolder">Password</label>
                  <input type="password" name="password" class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
    </div>
</div>
 
@endsection