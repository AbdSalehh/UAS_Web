<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>eShop | Toko Elektronik</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="image/logo-title.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="image/logo.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="profil.html">Home</a></li>
                        <li><a href="produk.html">Produk</a></li>
                        <li><a href="kontak.html">Kontak</a></li>
                        <li><a href="akun.html">Akun</a></li>
                        <li><a class="aktif" href="admin/index.html">Admin</a></li>
                    </ul>
                </nav>
                <a href=""><img src="image/cart.png" width="30px" height="30px"></a>
                <img src="image/menu.png" class="menu-icon" width="50px" height="50px" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Belanja Murah dan Aman !</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.</p>
                    <a href="produk.html" class="btn">Jelajahi eShop</a>
                </div>
                <div class="col-2">
                    <img src="image/casing.png">
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Script bootstrap -->

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
                    <p>eShop merupakan sebuah perusahaan yang bergerak dalam bidang pemasaran. eShop menyediakan barang-barang 
                        elektronik original dengan harga yang terjangkau dan terpercaya, yang pastinya 
                        sesuai dengan kebutuhan customer. Tujuan perusahaan ini didirikan yaitu untuk membantu customer dalam membeli 
                        barang dengan cara yang mudah.
                        </p>
                </div>
            </div>
        </div>
    </div>

    <div class="small-container">
        <h1 class="title">Produk yang Tersedia</h1>
        <div class="row">
            <div class="col-4">
                <img src="image/produk/produk1.PNG" width="200px">
                <h4>Kabel Data</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp 60.000</p>
            </div>
            <div class="col-4">
                <img src="image/produk/produk2.PNG" width="200px">
                <h4>Headphone</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rp 350.000</p>
            </div>
            <div class="col-4">
                <img src="image/produk/produk3.PNG" width="200px">
                <h4>Adaptor HP</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Rp 135.000</p>
            </div>
        </div>
    </div>
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="image/produk/case.PNG" class="offer-img">
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
                    <img src="image/truck.png" alt="Team_image">
                </div>
                <h3>Gratis Ongkir</h3>
                <br>
                <p>Kami akan menyediakan fitur gratis ongkir untuk wilayah Malang dan sekitarnya</p>
            </div>
            <div class="team_member">
                <div class="team_img">
                    <div class="gambar">
                        <img src="image/phone.png" alt="Team_image">
                    </div>
                </div>
                <h3>Melayani 24 jam</h3>
                <br>
                <p>Kami akan siap melayani customer jika ada kendala terkait pembelian barang di olshop kami</p>
            </div>
            <div class="team_member">
                <div class="team_img">
                    <div class="gambar">
                        <img src="image/like.png" alt="Team_image">
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
                <form action="#" method="post">
                    <div class="twice-two">
                        <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Name"
                            required="">
                        <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email"
                            required="">
                    </div>

                    <div class="twice">
                        <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Subject"
                            required="">
                    </div>

                    <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message"
                        required=""></textarea>
                    <button type="submit" class="btn btn-contact">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <a href="index.html"><img src="image/logo.png"></a>
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
    <div class="footer-buttom">
        <p>All Right reserved by &copy;conceptial 2021</p>
    </div>

    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>

</html>