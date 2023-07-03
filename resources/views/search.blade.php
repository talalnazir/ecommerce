@extends('master')
@section('content')
<section style="background-color: #eee;">
  <div class="container py-5">
 
    <div class="row justify-content-center">
    @foreach($product as $product)
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card text-black">
          <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
         
          <img class="detail-img" src="{{$product['gallary']}}"
            class="card-img-top" alt="Apple Computer" />
            
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title">{{$product['name']}}</h5>
              <p class="text-muted mb-4">{{$product['discription']}}</p>
              <span>price:</span><span>{{$product['price']}}</span>
     
            </div><br> <br>
            <div style="align-items:center">
            <button type="button" class="btn btn-primary">add to cart</button><br> <br>
            <button type="button" class="btn btn-success"><a href="/"> go back</a></button>
<button type="button" class="btn btn-success">buy now</button><br> <br>

</div>
@endforeach
@endsection