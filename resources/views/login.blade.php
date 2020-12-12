@extends('master')
@section("content")


<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 sm-offset-4 " >
            <form >
                <div class="form-group">
                  <label for="exampleInputEmail1" class="font-weight-bolder">Email address</label>
                  <input type="email" class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1 " class="font-weight-bolder">Password</label>
                  <input type="password" class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
 
@endsection