<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>eShop | Toko Elektronik</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('akun/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('akun/css/style.css')}}">
    @livewireStyles
</head>

<body>
    <div class="header">
    </div>

    {{ $slot }}

    <script src="{{asset('akun/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('akun/js/main.js')}}"></script>
    <!-- Footer -->
    <div class="footer">
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
    @livewireScripts
</body>

</html>