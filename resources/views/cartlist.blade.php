@extends('master')
@section('content')

<div class="row">
@foreach($cart as $product)
  <div class="col-sm-8 border">
  
  <img class="detail-img" src="{{$product->gallary}}"/>
  </div>
  <div class="col-sm-2 border">
    <h3> {{$product->name}} </h3>
  </div>
  <div class="col-sm-2 border">
    <button >  <a href="removecart/{{$product->cart_id}}"> remove product </a></button>
    <button >  <a href="/ordernow"> order now </a></button>
  </div>
</div>

  @endforeach


          

@endsection