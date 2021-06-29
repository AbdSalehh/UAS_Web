<main>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="/"><img src="{{asset('img/logo.png')}}" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="/">Home</a></li>
                        <li><a href="/product">Products</a></li>
                        <li><a href="/contact">Contact</a></li>
                        @if(Route::has('login'))
                        @auth
                        @if(Auth::user()->utype === 'ADM')
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Halo ({{Auth::user()->name}})
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="{{ route('admin.user')}}">Dashboard</a>
                                    <a href="{{ route('logout')}}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </div>
                                <form id="logout-form" method="POST" action="{{route ('logout')}}">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @else
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Hallo ({{Auth::user()->name}})
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="{{ route('user.dashboard')}}">Dashboard</a>
                                    <a href="{{ route('logout')}}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </div>
                                <form id="logout-form" method="POST" action="{{route ('logout')}}">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endif
                        @else
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn ">Account
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="{{route('login')}}">Login</a>
                                    <a href="{{route('register')}}">Register</a>
                                </div>
                            </div>
                        </li>
                        @endif
                        @endif
                    </ul>
                </nav>
                <a href="/cart"><img src="{{asset('img/cart.png')}}" class="cart-icon" width="30px" height="30px"
                        style="margin-top: 15px;"></a>
                <img src="{{asset('img/menu.png')}}" class="menu-icon" width="50px" height="50px"
                    onclick="menutoggle()">
            </div>
        </div>
    </div>
    <div class="smalll-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="{{asset('img/produk')}}/{{$product->image}}" width="65%">
            </div>
            <div class="col-2">
                <p><a href="/" class="fa fa-home"></a> / Aksesoris</p>
                <h1>{{$product->name}}</h1>
                <h4>Rp. {{$product->regular_price}}</h4>
                <select>
                    <option>Pilih Warna</option>
                    <option>Hitam</option>
                    <option>Putih</option>
                </select>
                <input type="number" value="1">
                <a href="#"
                    wire:click.prevent="store('{{$product->id}}', '{{$product->name}}', '{{$product->regular_price}}')"
                    class="btn"> Add To Cart </a>
                <h3>Stok : {{$product->stock_status}}</h3>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <p>{{$product->description}}</p>
            </div>
        </div>
    </div>
</main>
<div class="small-container">
    <div class="row row-2">
        <h2>Produk Lainnya</h2>
        <a href="/product">
            <p>View More</p>
        </a>
    </div>
</div>

<!-- Produk -->
<div class="small-container">
    <div class="row">
        @foreach ($related_products as $r_product)
        <div class="col-4">
            <a href="{{ route('product.details', ['slug' => $r_product->slug])}}"><img
                    src="{{asset('img/produk')}}/{{$r_product->image}}" width="200px"></a>
            <a href="{{ route('product.details', ['slug' => $r_product->slug])}}">
                <h4>{{$r_product->name}}</h4>
            </a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rp. {{$r_product->regular_price}}</p>
            <a href="#" wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})">
                <button type="submit" class="product__btn">Add To Cart</button></a>
        </div>
        @endforeach
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <a href="/"><img src="{{asset('img/logo.png')}}"></a>
                <p>Terima kasih telah mengunjungi Olshop kami.
                    Olshop ini menyediakan <br>barang-barang elektronik sesuai dengan kebutuhan anda.</p>
            </div>
            <div class="footer-col-2">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-3">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Whatsapp</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
    </div>
</div>