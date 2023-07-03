@extends('master')
@section('content')
<div class="custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
 
  <div class="carousel-inner ">
  @foreach($product as $pro)
 
    <div class="item {{$pro ['id']==1?'active':''}}">
    <a href="detail/{{$pro['id']}}">
      <img style="height: 400px;width: 1200px; " src="{{$pro['gallary']}}" alt="Los Angeles">
      <div class="Carousel-caption ">
        <h3> {{$pro['name']}}</h3>
        <p> {{$pro['discription']}} </p>
        <h3>{{$pro['price']}} </h3>
</div>
    </div>
</a>
    @endforeach
  </div>
 

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<section style="background-color: #eee;">
  <div class=" py-5">
  @foreach($product as $pro)
  <a href="detail/{{$pro['id']}}">
  <div>
  <img class="img" src="{{$pro['gallary']}}"/>
  <div>
</a>
</div>
</div>
           
            @endforeach
           
        </div>
      </div>
    </div>
  </div>

</section>

 
    

@endsection()