<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aureus | @yield('title')</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    @if(request()->is(['addProduct','editProduct']))
     <!--====== Google Font ======-->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

     <!--====== Vendor Css ======-->
     <link rel="stylesheet" href="css/vendor.css">
 
     <!--====== Utility-Spacing ======-->
     <link rel="stylesheet" href="css/utility.css">
 
     <!--====== App ======-->
     <link rel="stylesheet" href="css/app.css">
    @endif

    <style>
        .container1 {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        th,
        td {

            text-align: center;
        }


        th:nth-child(7),
        td:nth-child(7) {
            text-align: center;
        }

        .table-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            /* Center align horizontally */
            padding: 2rem;
            background-color: white;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container {
            width: 100%;
            max-width: 1200px;
            padding: 2rem;
            background-color: white;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th,
        td {
            padding: 0.5rem;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #bd9a35;
            color: white;
        }

        .btn {
            padding: 0.5rem 1rem;
            background-color: #bd9a35;
            color: white;
            border: none;
            cursor: pointer;
        }

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 1rem 0;
        }

        .search-container input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 0 0px 5px 0;
        }

        .search-container button {
            border: 1px solid #ccc;
            background-color: #bd9a35;
            color: #fff;
            padding: 10px 15px;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-toggle::after {
            content: '\f0d7';
            /* Angle down icon (Font Awesome) */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            margin-left: 5px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .show {
            display: block;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #fff;

            display: flex;
            align-items: center;

            z-index: 1000;
        }

        .logo img {
            width: 125px;
            height: auto;
        }

        .menu-icon {
            cursor: pointer;
        }



        .search-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            align-items: center;
            justify-content: center;
            z-index: 1001;
        }

        .search-box {
            position: relative;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
        }

        .search-icon {
            margin-right: 10px;
            font-size: 20px;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .search-box input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }



        .cart-icon {
            position: relative;
            display: inline-block;
        }

        .cart-icon img {
            width: 30px;
            height: 30px;
        }

        .cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #bd9a35;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 12px;
            text-align: center;
            line-height: 20px;
        }
    </style>

</head>

<body>
    @if(!request()->is(['addProduct','editProduct']))
    <div class="header">
        <div class="container1">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="images/main-logo/header-logo.png" alt="logo"
                            style="width: 100px !important;"></a>
                </div>

                <nav>
                    <ul id="MenuItems">
                        <li><a href="{{route('adminhome')}}">Home</a></li>
                        <li><a href="{{route('manageproducts')}}">Manage Products</a></li>
                        <li><a href="{{route('manageorders')}}">Manage Orders</a></li>
                        
                        <li>
                            <a href="{{route('signin')}}">LOGOUT</a>

                        </li>
                    </ul>
                </nav>

                

                <div class="search-overlay" id="searchOverlay" onclick="closeSearchOverlay()">
                    <form method="get" action="productsearch.html">
                        <div class="search-box" onclick="event.stopPropagation();">

                            <input type="text" placeholder="Search..." name="search">
                            &nbsp;<i class="fas fa-search search-icon"></i>
                        </div>
                    </form>
                </div>


                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            @if(request()->is('adminhome'))
            <div class="row1">
                <div class="col-2">
                    <h1>Welcome Administrator</h1>
                    <p>
                    </p>


                </div>

                <div class="col-2">
                    <img src="images/perfumehome.png">
                </div>
            </div>
            @endif
        </div>
    </div>
    @endif

    @yield('content')










    <!-- Footer -->
    <div class="footer">
        <div class="container1">
            <div class="row1">

                <div class="footer-col-2">
                    <img src="images/main-logo/header-logo.png">

                </div>


            </div>
            <hr>
            <p class="copyright">Copyright 2023 - Group 1 - 4ITD</p>
        </div>
    </div>

    <!-- javascript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accountDropdown = document.getElementById('accountDropdown');
            const accountDropdownMenu = accountDropdown.nextElementSibling;

            // Function to open the dropdown
            function openDropdown() {
                accountDropdownMenu.classList.add('show');
            }

            // Function to close the dropdown
            function closeDropdown() {
                accountDropdownMenu.classList.remove('show');
            }

            // Click event listener
            accountDropdown.addEventListener('click', function(e) {
                e.preventDefault();
                if (accountDropdownMenu.classList.contains('show')) {
                    closeDropdown();
                } else {
                    openDropdown();
                }
            });

            // Hover event listeners
            accountDropdown.addEventListener('mouseenter', openDropdown);
            accountDropdownMenu.addEventListener('mouseleave', closeDropdown);

            // Close the dropdown if clicked outside
            document.addEventListener('click', function(e) {
                if (!accountDropdownMenu.contains(e.target) && !accountDropdown.contains(e.target)) {
                    closeDropdown();
                }
            });
        });
    </script>

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "300px"
            } else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>
    <script>
        function openSearchOverlay() {
            document.getElementById("searchOverlay").style.display = "flex";
        }

        function closeSearchOverlay() {
            document.getElementById("searchOverlay").style.display = "none";
        }
    </script>
</body>

</html>
