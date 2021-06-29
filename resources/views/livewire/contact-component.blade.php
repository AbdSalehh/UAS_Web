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
                <form method="post" wire:submit.prevent="sendMessage">
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
<!-- Map -->
<h1 class="title">Address</h1>
<div class="map"><iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.7466367044626!2d112.5951762141559!3d-7.921511581056131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881f5405daac1%3A0xb39e4847109109e4!2sUniversitas%20Muhammadiyah%20Malang%2C%20Kampus%20III!5e0!3m2!1sid!2sid!4v1619442382414!5m2!1sid!2sid"
        width="90%" height="500" style="display: flex; border:0; padding-bottom: 100px; margin: 30px; "
        allowfullscreen="" loading="lazy"></iframe></div>
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