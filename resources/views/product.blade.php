@extends('master')
@section("content")

<div class="container-fluid custom-product">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          @foreach ($products as $product)
          <a href="detail/{{$product['id']}}">
          <div class="carousel-item {{$product['id']==1 ? 'active' : ''}}">
            <img src="{{$product['gallery']}}" class="d-block w-100 slider-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bolder">{{$product['product_name']}}</h5>
                <p >{{$product['description']}}</p>
              </div>
            </a>
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="trending-wrapper">
          <h3>Trending Products</h3>
          @foreach ($products as $product)
          <a href="detail/{{$product['id']}}">
            <div class="trending-item">
              <img src="{{$product['gallery']}}" class="trending-img" alt="...">
              <div class="smtn">
                  <h5 class="font-weight-bolder">{{$product['product_name']}}</h5>
                </div>
          </a>
          </div>
          @endforeach
      </div>
</div>



@endsection