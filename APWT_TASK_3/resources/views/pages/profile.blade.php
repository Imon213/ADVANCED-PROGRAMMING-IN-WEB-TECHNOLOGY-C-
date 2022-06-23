@extends('layouts.app')
@section('content')
<br>
<div class="row  justify-content-center">
<div class="col-md-6 card text-success">
    <div class="card-title">
    <h2 class="text-center">Name: {{$students->name}}</h2>
    </div>
   <div class="card-body">
   <h2 class="text-center">Email: {{$students->email}}</h2>
    <h2 class="text-center">Phone: {{$students->phone}}</h2>
   </div>
   <div class="card-footer text-center">
    <a href="/edit/{{$students->id}}" class="btn btn-primary">Edit Profile</a>
   </div>
</div>
</div>
@endsection