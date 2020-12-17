@extends('master')
@section("content")

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Cart List</h4>
            @foreach ($cartlist as $item)
                <div class=" row searched-item">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img src="{{$item->gallery}}" alt="" class="trending-img">
                            </a>
                    </div>
                    <div class="col-sm-6">
                        
                            
                            <h2>{{$item->product_name}}</h2>
                                <h5>{{$item->price}}</h5>
                            
                        
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-danger">Remove From Cart</button>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>







@endsection