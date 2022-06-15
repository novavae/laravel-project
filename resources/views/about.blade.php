@extends('layouts.main')
@section('container')
{{-- <div class="card" style="80px">    --}}
<h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <p>Instagram: novadwlstr</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
{{-- </div>  --}}
@endsection