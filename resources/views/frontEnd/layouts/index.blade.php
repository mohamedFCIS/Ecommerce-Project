@extends('frontEnd.app')
@section('title')
    Home
@endsection
@section('navbar')
    @include('frontEnd.layouts.navbar')
@endsection

@section('gallery')
    @include('frontEnd.layouts.gallery')
@endsection

@section('content')
    <h1>welcome to home</h1>

@endsection

@section('footer')
    @include('frontEnd.layouts.footer')
@endsection
