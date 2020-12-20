@extends('frontEnd.app')
@section('title')
    products
@endsection
@section('navbar')
@include('frontEnd.layouts.navbar')
@endsection


@section('content')	
<div class="review bg-blue-200 p-2 rounded-md">
   {{-- {{dd($review)}} --}}
    <form action="{{route('update.review',$review)}}" method="POST">
        @csrf
        @method('put')
        <textarea name="comment" id="" cols="80" rows="5" class="bg-white rounded-md" placeholder="Write Your Comment Here" value="">{{$review->comment}}</textarea><br>
        <label class="fs-2" for="rate">Your rate here</label>
        <input class="m-2 rounded-lg" style="border: black 1px solid" type="text" name="rate" value="{{$review['rate']}}"><br>
        <button class="btn btn-success" type="submit">Send Review</button>
    </form>	
                           
   </div>

@endsection


@section('footer')
@include('frontEnd.layouts.footer')
@endsection
