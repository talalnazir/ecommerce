@extends('master')
@section('content')
<div class="container">
<table class="table">
<tr>
    <td> price</td>
    <td> {{$total}}</td>
</tr>
<tr>
    <td> tax</td>
    <td> 0</td>
</tr>
<tr>
    <td> delivry </td>
    <td> 100</td>
</tr>
<tr>
    <td> total</td>
    <td> {{$total+100}}</td>
</tr>


    
   
</table>
<form action="/order" method="POST" >
    @csrf
    <div class="form-group">
<textarea  name="address" >enter your adress
</textarea><br><br>
<label> payment </label><br>
<p> <input type="radio" value="cash" name="r1"> online payment </p>
<p> <input type="radio" value="cash"  name="r1"> payment on delivery </p>
<button type="submit" value="cash" class="btn btn-primary"> submit </button>
</div>
</form>
</div>
@endsection