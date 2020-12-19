@extends('frontEnd.app')
@section('title')
    products
@endsection
@section('navbar')
    @include('frontEnd.layouts.navbar')
@endsection

@section('gallery')
    @include('frontEnd.layouts.gallery')
@endsection

@section('content')
    <h1 style="text-align: center">welcome to products </h1>


    <div class="container">

        <div class="row col">
            @foreach ($products as $product)
            {{-- {{dd($product)}} --}}
                <div class="col-4 col-sm-8 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img"  height="200px"
                        src="{{ $product->image }}"

                            alt="{{ $product->image }}">
                 
                      @auth
                        <div class="d-flex justify-content-end">
                        @if (!$product->favouritBy(auth()->user()))
                        <form action="{{route('fav.add',$product['id'])}}" method="POST">
                            @csrf
                                <button  type="submit"> 
                                    <i id="white" class="far fa-heart"></i>
                                </button>
                            </form>
                    
                            {{-- <button   type="button"  onclick="addToWishList({{$product->id}})">
                                <i id="white" class="far fa-heart"></i>
                            
                            </button> --}}
                         
                        @else                          
                        <form action="{{route('fav.delete',$product['id'])}}" method="POST">
                            @csrf
                            @method('delete')
                                <button  type="submit">
                                   
                                    <i class="fa fa-heart "></i>
                                </button>
                            </form>
                        @endif   
                        </div>
                        @endauth    
                   
                        <div class="card-body">
                            {{-- <a class="card-link" href="{{route('user.fav',auth()->user()->id)}}">{{$product->name}}</a> --}}
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
{{-- @section('script')
    <script>
      function addToWishList(id) { 
           
       
            $.ajax({
            type: "Post",
            url: "{{route('fav.add',$product['id'])}}",
            data: {
                '_token' : "{{csrf_token()}}",
              },
           
            success: function (response) {
                alert(response.message);
            }
        });
    }
     


    </script> --}}
@endsection
@section('footer')
    @include('frontEnd.layouts.footer')
@endsection
