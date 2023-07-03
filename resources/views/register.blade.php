@extends('master')
@section('content')
<div class="container custom-style">
    <div class="row">
<div class="col-sm-4 col-sm-offset-4">
<form action="/register" method="POST">
 @csrf 
  <div class="form-group">
  <div class="form-group">
    <label for="exampleInputPassword1">name</label>
    <input type="password"  name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter name">
  </div>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  
</div>
</div>
</div>
@endsection