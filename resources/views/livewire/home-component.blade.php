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
            <div class="row">
                <div class="col-2">
                    <h1>Belanja Murah dan Aman !</h1>
                    <p>eShop menyediakan aksesoris HP dengan kualitas terpercaya dan harga yang terjangkau.</p>
                    <a href="/product" class="btn">Explore Now</a>
                </div>
                <div class="col-2">
                    <img src="{{asset('img/casing.png')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title">About</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="about">
                    <h2>Tujuan Kami</h2>
                    <p>eShop merupakan sebuah perusahaan yang bergerak dalam bidang penjualan. eShop menyediakan
                        barang-barang
                        elektronik original dengan harga yang terjangkau dan terpercaya, yang pastinya
                        sesuai dengan kebutuhan customer. Tujuan perusahaan ini didirikan yaitu untuk membantu customer
                        dalam membeli
                        barang dengan cara yang mudah.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="small-container">
        <h1 class="title">Produk yang Tersedia</h1>
        <div class="row">
            @foreach ($lproducts as $lproduct)
            <div class="col-4">
                <a href="{{ route('product.details', ['slug' => $lproduct->slug])}}"><img
                        src="{{asset('img/produk')}}/{{$lproduct->image}}" width="200px"></a>
                <a href="{{ route('product.details', ['slug' => $lproduct->slug])}}">
                    <h4>{{$lproduct->name}}</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp. {{$lproduct->regular_price}}</p>
                <a href="#"
                    wire:click.prevent="store('{{$lproduct->id}}', '{{$lproduct->name}}','{{$lproduct->regular_price}}')"><button
                        type="submit" class="product__btn">Add To Cart</button></a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="{{asset('img/produk/case.PNG')}}" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Olshop kami menyediakan keperluan elektronik anda</p>
                    <h1>Custom Alcantara iPhone 11 Pro Case</h1>
                    <small>Case Alcantara Tidak Licin Ketika Dipakai dan Lembut Ditangan Memberikan Kesan Elegan dan
                        Berkelas Pada
                        Saat Digunakan. Produk Kualitas Import Premium Terbaik Dengan Harga Terjangkau Yang Harus
                        Anda Beli !
                    </small>
                    <a href="" class="btn">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fitur -->
    <div class="wrapper">
        <h1 class="title">Layanan Kami</h1>
        <div class="team">
            <div class="team_member">
                <div class="team_img">
                    <img src="{{asset('img/truck.png')}}" alt="Team_image">
                </div>
                <h3>Gratis Ongkir</h3>
                <br>
                <p>Kami akan menyediakan fitur gratis ongkir untuk wilayah Malang dan sekitarnya</p>
            </div>
            <div class="team_member">
                <div class="team_img">
                    <div class="gambar">
                        <img src="{{asset('img/phone.png')}}" alt="Team_image">
                    </div>
                </div>
                <h3>Melayani 24 jam</h3>
                <br>
                <p>Kami akan siap melayani customer jika ada kendala terkait pembelian barang di olshop kami</p>
            </div>
            <div class="team_member">
                <div class="team_img">
                    <div class="gambar">
                        <img src="{{asset('img/like.png')}}" alt="Team_image">
                    </div>
                </div>
                <h3>Terpercaya</h3>
                <br>
                <p>Kami menjamin transaksi yang Anda lakukan di olshop kami Aman dan terpercaya</p>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="contact">
        <h1 class="title">Contact us</h1>
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        <br>
        @endif
        <div class="d-grid contact-view">
            <div class="cont-details">
                <div class="cont-top">
                    <div class="cont-left text-center">
                        <span class="fa fa-phone text-primary"></span>
                    </div>
                    <div class="cont-right">
                        <h6>Call Us</h6>
                        <p><a href="#">+62 822-4509-9542</a></p>
                    </div>
                </div>
                <div class="cont-top margin-up">
                    <div class="cont-left text-center">
                        <span class="fa fa-envelope-o text-primary"></span>
                    </div>
                    <div class="cont-right">
                        <h6>Email Us</h6>
                        <p><a href="mailto:example@mail.com" class="mail">abdshaleh124@gmail.com</a></p>
                    </div>
                </div>
                <div class="cont-top margin-up">
                    <div class="cont-left text-center">
                        <span class="fa fa-map-marker text-primary"></span>
                    </div>
                    <div class="cont-right">
                        <h6>Address</h6>
                        <p>Malang, Jawa Timur, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="map-content">
                <form wire:submit.prevent="sendMessage">
                    <div class="twice-two">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required=""
                            wire:model="name">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required=""
                            wire:model="email">
                    </div>

                    <div class="twice">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number"
                            required="" wire:model="phone">
                    </div>

                    <textarea name="message" class="form-control" id="message" placeholder="Message" required=""
                        wire:model="message"></textarea>
                    <button type="submit" class="btn btn-contact">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</main>
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