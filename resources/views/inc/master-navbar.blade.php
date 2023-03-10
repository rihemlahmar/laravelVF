<div class="menu">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('index') }}">
                    <div class="logo">
                        <h4><img src="{{ asset('img/logo.jfif') }}" style='width:110px;height:72px;'>Online<span style="color: #0066cc;">shop</span>
                        </h4>
                    </div>
                </a>
            </div>
            <div class="col-md-5">
                <form type=get action ="{{url('/search')}}">
                <div class="input-group">
                    <input type="search" name ="query" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="addon-wrapping">
                    <span class="input-group-text" id="addon-wrapping"><i class="far fa-search"></i></span>
                </div>
</form>
            </div> 
            <div class="col-md-4">
                <div class="user">
                    <div>
                        @auth
                        <button class="mybtn shopping-num"><a href="{{ url('wishlist') }}"><i class="fas fa-shopping-cart"></i></a><span>{{ $count }}</span></button> 
                        @endauth
                        <button class="mybtn"><a href="#"><i class="fas fa-user"></i></a></button>
                    </div>
                    <div class='a'>
                        <p>Welcome!</p>
                        @guest
                        <a href="{{ url('/login') }}">Sign in</a> |
                        <a href="{{ url('/register') }}"> Register</a>
                        @else 
                        <a href="{{ url('/logout') }}"> LogOut</a>
                        @endguest
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   