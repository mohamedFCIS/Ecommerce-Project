@extends('backEnd.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">All Users</div>
                        <div class="stat-digit">{{\App\Models\User::count()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">All Products</div>
                    <div class="stat-digit">{{\App\Models\Product::count()}}</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Latest Products</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>

                        <th scope="col">Name</th>
                        <th scope="col">price</th>
                        <th scope="col">Category</th>
                        <th scope="col">image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>

                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>  <img src="{{ asset('storage/'. $product->image) }}" alt=""
                                   width="30px" height="30px"></td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
