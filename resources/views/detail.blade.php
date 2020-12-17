@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
            <a href="{{ url()->previous() }}">Back</a>
            <h1>{{$product['product_name']}}</h1>
            <br><br>
            <h3> Price : {{$product['price']}}</h3>
            <h4>Details : {{$product['description']}}</h4>
            <h4>Category : {{$product['category']}}</h4>
            <hr>
            <button class="btn btn-primary">Add to Cart</button><br><br>
            <button class="btn btn-success">Buy now</button>
            </div>
        </div>
    </div>
@endsection