@extends('frontEnd.app')
@section('title')
    products
@endsection
@section('navbar')
    @include('frontEnd.layouts.navbar')
@endsection


@section('content')
    <h1 style="text-align: center">welcome to products </h1>


    <div class="container">
  {{-- {{dd($products)}} --}}
        <div class="row col">
            @foreach ($products as $product)
          
                <div class="col-4 col-sm-8 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img"  height="200px"
                        src="{{ asset('storage/'. $product->image) }}"

                            alt="{{ $product->image }}">
                      
            
                        <div class="d-flex justify-content-end">
                      
                     
                        </div>
                   
                   
                        <div class="card-body">
                            <a class="card-link" href="{{route('user.fav',auth()->user()->id)}}">{{$product->name}}</a>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->meta_keywords }}</h6>
                            <p class="card-text">
                                {{ $product->details }}
                            </p>

                            <div class="buy d-flex justify-content-between align-items-center">
                                <div class="price text-success">
                                    <h5 class="mt-4">${{ $product->price }}</h5>
                                </div>
                                <a href="#" class="btn btn-danger mt-3 "><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection

@section('footer')
    @include('frontEnd.layouts.footer')
@endsection
