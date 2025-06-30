@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Welcome to the Home Page</h1>
    <p>You are logged in as: <strong>{{ Auth::user()->name }}</strong></p>
@endsection
