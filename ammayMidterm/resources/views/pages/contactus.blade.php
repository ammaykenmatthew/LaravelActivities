@extends('layouts.master')
@section('css')
    
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      Contact Us
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Email Us</a>
    </div>
    <div class="card">
        <div class="card-body">
         Developer: {{ $name }} - {{$email}}
        </div>
      </div>
  </div>
@endsection

@section('script')

@endsection