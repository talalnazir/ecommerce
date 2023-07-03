@extends('master')
@section('content')

<div class="row">
@foreach($order as $product)
  <div class="col-sm-8 border">
  
  <img class="detail-img" src="{{$product->gallary}}"/>
  </div>
  <div class="col-sm-2 border">
    <h3> name: {{ $product->name}} </h3>
    <h5> discription:{{$product->discription}} </h5>
    <h5> status: {{$product->status}} </h5>
    <h5>payment method: {{$product->payment_method}} </h5>
    <h5>payment status: {{$product->payment_status}} </h5>
  </div>
  
</div>

  @endforeach


          

@endsection