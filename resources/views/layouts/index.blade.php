@extends('inc.master')
@section('title','onlineShop')
@section('content')

    @include('parts.home-menu')

    <button id="myBtnScroll"><i class='material-icons'>arrow_upward</i></button>
    <div class="hero">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="offer">
                                    <h1>New Arrivals  <span>Start Shopping</span></h1>
                                    <button class="btn btn-lg"> <a href="{{ route('categories') }}">Start Buying</a> </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="img/slideShow/hero-1.png" class="d-block" alt="electronic">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="offer">
                                    <h1>New Arrivals  <span>Start Shopping</span></h1>
                                    <button class="btn btn-lg"><a href="{{ route('categories') }}">Start Buying</a></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="img/slideShow/hero-2.png" class="d-block" alt="electronic">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="offer">
                                    <h1>New Arrivals  <span>Start Shopping</span></h1>
                                    <button class="btn btn-lg"><a href="{{ route('categories') }}">Start Buying</a></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="img/slideShow/hero-3.png" class="d-block" alt="electronic">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    
    
    <section class="how-it-works">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="works">
                    <i class="fal fa-gift"></i>
                    <p>Gifts Start From<span>TND 500</span></p>
                    </div>
                </div>
    
                <div class="col-sm-6 col-md-3">
                    <div class="works">
                    <i class="far fa-users"></i>
                    <p>99 % Customer<span> Feedbacks</span></p>
                    </div>
                </div>
    
                <div class="col-sm-6 col-md-3">
                    <div class="works">
                    <i class="fal fa-undo-alt"></i>
                    <p>30 Days<span>for free return</span></p>
                    </div>
                </div>
    
                <div class="col-sm-6 col-md-3">
                    <div class="works last">
                    <i class="fal fa-money-check-alt"></i>
                    <p>Payment<span>Secure System</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('parts.items')
    
    @include('parts.new-items')
    

    
    <section class="brand">
        <div class="container">
            <h2>Our B<span>ran</span>ds</h2>
            <hr>
            <div class="row">
                <div class="col-md-3 col-lg-2 text-center">
                    <div class="brand-container">
                        <img src="img/brands/brand-sumsgg.jpg">
                        
                    </div>  
                </div>
    
                <div class="col-md-3 col-lg-2 text-center">
                    <div class="brand-container">
                        <img src="img/brands/brand-micro.jpg">
                        
                    </div>
                </div>
    
                <div class="col-md-3 col-lg-2 text-center">
                    <div class="brand-container">
                        <img src="img/brands/brand-dell.png">
                        
                    </div>
                </div>
    
                <div class="col-md-3 col-lg-2 text-center">
                    <div class="brand-container">
                        <img src="img/brands/brand-apple.png">
                        
                    </div>
                </div>
    
                <div class="col-md-3 col-lg-2 text-center">
                    <div class="brand-container">
                        <img src="img/brands/brand-huaw.webp">
                        
                    </div>
                </div>
    
                <div class="col-md-3 col-lg-2 text-center">
                    <div class="brand-container">
                         <img src="img/brands/apple.png">
                         
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('parts.footer-info')
@endsection




