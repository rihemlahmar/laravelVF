@extends('inc.master')
@section('title','OnlineShop Categories')
@section('content')
    @include('parts.navbar-categories')

    <section class="category">
    
        <div class="container">
                <h2>Category products</h2>
                <div class="row">
                <div class="col-md-3">
                <div class="filters">
                            <h5>Sort By :</h5>
                            <div class="col-md-5 mt-4 pt-2">
                            <div class="middle">                                
                                <div class="col-md-12 mb-3"> 
                    <a href= "{{ URL::current() }}" class="sort-font">All </a><br>
                    <a href= "{{ URL::current().'?sort=price_asc' }}" class="sort-font">Low to High </a><br>
                    <a href="{{ URL::current().'?sort=price_desc' }}" class="sort-font"> High to Low </a>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    <div class="col-md-9">
                        @foreach ($products as $product)
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset($product->image) }}" alt="">
                                    <div class="reduction">
                                        <p>-{{ $product->remise }}%</p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h4>{{ $product->name }}</h4>
                                    <div class="starts">
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </div>
                                    <p>{{ Str::limit($product->description, 50) }}</p>
                                </div>
                                <div class="col-md-3">
                                    <div class="item-links">
                                        <p class="price">{{ $product->price}} TND | <a href="{{ route('details-item', $product->id) }}">Details</a></p>
                                        
                                        <form action="{{ url('addcart', $product->id) }}" method="post">
                                            @csrf
                                            <input type="number" value="1" min="1" class="form-control" style="width:100px; margin-top: 1em;" name="quantity"><br>
                                            <i class="fal fa-shopping-cart"></i><input type="submit" class="btn btn-danger w-100" value="Add to Cart">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="d-flex">
                            {{ $products->links() }}
                        </div>
                    </div>
            </div>
        </div>
    </section>

    @include('parts.footer-info')
@endsection
    
