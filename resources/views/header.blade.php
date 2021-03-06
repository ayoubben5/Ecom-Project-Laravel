<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(session()->has('user')){
  $total= ProductController::cartItem();
  }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">E-Comm
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</span></a>
        </li>
        @if (Session::has('user'))
        <li class="nav-item">
          <a class="nav-link" href="/myorders">Orders</a>
        </li>
        @endif
        <form action="/search" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </form>
        <li class="nav-item navbar-right">
          <a class="nav-link " href="/cart"><i class="fab fa-opencart"></i>({{$total}})</a>
        </li>
        @if (Session::has('user'))
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('user')['name']}} <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/logout">Logout <i class="fas fa-sign-out-alt"></i></a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Login <i class="fas fa-sign-in-alt"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
        @endif
      </ul>
    </div>
  </nav>