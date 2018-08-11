@extends('layout.app')

@section('content')
<div class="jumbotron">
<h1> Services</h1>
@if(count($services)>0)
<ul class="list-group">
   @foreach($services as $service)
        <li class="list-group-item">{{$service}}</li>
   @endforeach
</ul>
@endif

</div>
@endsection