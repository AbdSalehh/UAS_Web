<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="{{asset('img/logo.png')}}" width="125px"></a>
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
            <img src="{{asset('img/menu.png')}}" class="menu-icon" width="50px" height="50px" onclick="menutoggle()">
        </div>
    </div>
</div>
<div class="small-container">
    <br>
    <h2>Checkout</h2>
    <div class="row1">
        <div class="col-75">
            <div class="container1">
                <form id="validate" action="/action_page.php">
                    <div class="row1">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="fullname" placeholder="Soeng.Souy" required>
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="soeng.souy@gmail.com" required>
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="110 W. 15th Phnom Penh" required>
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="Phnom Penh" required>

                            <div class="row1">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="Phnom Penh" required>
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="12000" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>

                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="Soeng Souy" required>
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
                            <div class="row1">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2021" required>
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Shipping address same as billing</p>
                    <input type="checkbox" checked="checked" name="sameadr">
                    <input type="submit" value="Continue to checkout" class="btn1">
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- script validate js -->
<script>
$('validate').validate({
    roles: {
        fullname: {
            required: true,
        },
        email: {
            required: true,
        },
        address: {
            required: true,
        },
        city: {
            required: true,
        },
        state: {
            required: true,
        },
        zip: {
            required: true,
        },
        cardname: {
            required: true,
        },
        cardnumber: {
            required: true,
        },
        expmonth: {
            required: true,
        },
        expyear: {
            required: true,
        },
        cvv: {
            required: true,
        },

    },
    messages: {
        fullname: "Please input full name*",
        email: "Please input email*",
        city: "Please input city*",
        address: "Please input address*",
        state: "Please input state*",
        zip: "Please input address*",
        cardname: "Please input card name*",
        cardnumber: "Please input card number*",
        expmonth: "Please input exp month*",
        expyear: "Please input exp year*",
        cvv: "Please input cvv*",
    },
});
</script>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <a href="index.html"><img src="{{asset('img/logo.png')}}"></a>
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