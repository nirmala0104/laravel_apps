@extends('layouts.app')

@section('content')
<h2>Biodata</h2>

@foreach($biodatas as $data)
    <p><strong>Nama:</strong> {{ $data->nama }}</p>
    <p><strong>Email:</strong> {{ $data->email }}</p>
    <p><strong>Alamat:</strong> {{ $data->alamat }}</p>
    <hr>
@endforeach
@endsection
