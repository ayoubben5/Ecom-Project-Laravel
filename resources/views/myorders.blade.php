@extends('master')
@section("content")
    

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            <br><br>
            @foreach ($orders as $item)
                <div class=" row searched-item">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img src="{{$item->gallery}}" alt="" class="trending-img">
                            </a>
                    </div>
                    <div class="col-sm-6">
                        
                            
                            <h2>Name :{{$item->product_name}}</h2>
                                <h6>Delivery Status : {{$item->status}}</h5>
                                <h6>Adress : {{$item->adress}}</h5>
                                <h6>Payment Status : {{$item->payment_status}}</h5>
                            
                        
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>








@endsection