@extends('master')
@section("content")

<div class="container-fluid custom-product">
      <div class="trending-wrapper">
          <h3>Search Results:</h3>
          @foreach ($products as $product)
          <a href="detail/{{$product['id']}}">
            <div class="trending-item">
              <img src="{{$product['gallery']}}" class="trending-img" alt="...">
              <div class="smtn">
                  <h2 class="font-weight-bolder">{{$product['product_name']}}</h2>
                <h5>{{$product['category']}}</h5>
                </div>
          </a>
          </div>
        
          @endforeach
        </div>




@endsection