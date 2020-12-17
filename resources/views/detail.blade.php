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
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy now</button>
            </div>
        </div>
    </div>
@endsection