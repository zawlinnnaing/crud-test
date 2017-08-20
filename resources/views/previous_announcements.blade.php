@extends('layout')
@section('stylesheets')
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection
@section('content')

@foreach($announcements as $announcement)
<div class="w3-container">
  <div class="w3-card-4" style="width:100%; margin-bottom: 3rem !important;">
    <header class="w3-container w3-blue">
      <h1></h1>
    </header>

    <div class="w3-container" style="padding: 1.5rem !important">
    <p>{{ $announcement->content }}</p>
    </div>
	 <footer class="w3-container w3-blue">
      <h5>Published at: {{$announcement->created_at}}</h5>
    </footer>
  </div>
</div>
@endforeach

@endsection