<main>
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
                <img src="{{asset('img/menu.png')}}" class="menu-icon" width="50px" height="50px"
                    onclick="menutoggle()">
            </div>
        </div>
    </div>
    <div class="small-container">
        <br>
        @if(Session::has('success_massage'))
        <div class="alert alert-success">
            <strong>Success</strong> {{Session::get('success_massage')}}
        </div>
        @endif
        @if(Cart::count()>0)
        <div class="cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>SubTotal</th>
                    <th>Action</th>
                </tr>
                @foreach(Cart::content() as $item)
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="{{asset('img/produk')}}/{{$item->model->image}}" alt="{{$item->model->name}}"
                                width="200px">
                            <div>
                                <a href="{{route('product.details', ['slug' => $item->model->slug])}}">
                                    <p>{{$item->model->name}}</p>
                                </a>
                                <small>Price : Rp. {{$item->model->regular_price}}</small>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="{{$item->qty}}" min="1"
                            wire:click.prevent="increaseQuantity('{{$item->rowId}}')">
                    </td>
                    <td>Rp. {{number_format($item->subtotal, 3, '.', '.')}}</td>
                    <td>
                        <div>
                            <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>

                </tr>
                @endforeach
            </table>
            <div class="total-price">
                <table>
                    <tr>
                        <td class="title-total">SubTotal</td>
                        <td> Rp. {{number_format(Cart::subtotal(), 3, '.', '.')}}</td>
                    </tr>
                    <tr>
                        <td class="title-total">Tax</td>
                        <td> Rp. {{number_format(Cart::tax(), 3, '.', '.')}}</td>
                    </tr>
                    <tr>
                        <td class="title-total">Total</td>
                        <td> Rp. {{Cart::total()}}</td>
                    </tr>
                </table>
            </div>
            <div class="btn-checkout">
                <a href="/checkout" class="btn">Continue to Checkout <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
        @else
        <p>No item in cart</p>
        @endif
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