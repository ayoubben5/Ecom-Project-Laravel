@extends('master')
@section("content")

<div class="custom-product">
    <div class="row">
        <div class="col-sm-6 mt-4">
            <form>
                <div class="form-group ml-4">
                  <label class="font-weight-bold" for="adress">Adress</label>
                  <textarea type="textarea" class="form-control" placeholder="Enter Your Address"></textarea>
                </div>
                <div class="form-group ml-4">
                  <label class="font-weight-bold" for="pwd">Payment Method</label> <br><br>
                  <input type="radio"  name="payment" id="pwd"><span> online payment</span><br><br>
                  <input type="radio"  name="payment" id="pwd"><span> Emi payment</span><br><br>
                  <input type="radio"  name="payment" id="pwd"><span> Cash On delivery</span>
                </div>
                <button type="submit" class="btn btn-success ml-4">Order now</button>
              </form>
          </div>
    <div class="col-sm-6 mt-4">
        <table class="table mt-4 ml-4">
            <tbody>
              <tr>
                <th scope="row">Amount</th>
                <td>{{$totalprice}} $</td>
              </tr>
              <tr>
                <th scope="row">Tax</th>
                <td>{{$totalprice*20/100}} $</td>
              </tr>
              <tr>
                <th scope="row">Delivery</th>
                <td>10 $</td>
              </tr>
              <tr class="table-success">
                <th scope="row">Total Amount</th>
                <td class="font-weight-bolder">{{$totalprice+10}} $</td>
              </tr>
            </tbody>
          </table>
        </div>
          
</div>
</div>







@endsection