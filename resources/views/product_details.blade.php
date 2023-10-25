<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aureus | HOME OF LUXURY PERFUMES</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    .search-container {
        display: flex;
        align-items: center;
    }
    
    .search-container input[type="text"] {
        padding: 10px;
        border: none;
        border-radius: 5px 0 0 5px;
    }
    
    .search-container button {
        border: none;
        background-color: #f77f00;
        color: #fff;
        padding: 10px 15px;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
    }
    .dropdown {
    position: relative;
}

.dropdown-toggle::after {
    content: '\f0d7'; /* Angle down icon (Font Awesome) */
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
    <div class="container1">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/main-logo/header-logo.png" alt="logo" style="width: 150px !important;"></a>
            </div>
            
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="category.html">Categories</a></li>
                    <li><a href="about.html">About</a></li>
                    <li>
                        <a href="account.html"  >Account</a>
                     </li>
                    <li>
                        <a href="signin.html"  >Login</a>
                     
                    </li>
                </ul>
            </nav>
            
            <div class="search-icon" onclick="openSearchOverlay()">
                <a href="#">
                <i class="fas fa-search search-icon"></i>
            </a>
            </div>
            
            <div class="search-overlay" id="searchOverlay" onclick="closeSearchOverlay()">
               <form method="get" action="productsearch.html">
                <div class="search-box" onclick="event.stopPropagation();">
                    
                    <input type="text" placeholder="Search..." name="search">
                    &nbsp;<i class="fas fa-search search-icon"></i>
                </div>
            </form>
            </div>
            <a href="cart.html" class="cart-icon">
                <img src="images/cart.png" width="30px" height="30px">
                <span class="cart-count">5</span> <!-- Replace '5' with the actual cart count -->
            </a>
           
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!-- Single Products -->
    <div class="small-container single-product">
        <div class="row1">
            <div class="col-2">
                <img src="img/2.png" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="img/1.png" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/2.png" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        
                    </div>
                    <div class="small-img-col">
                        
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p>Home / Men</p>
                <h1>Dior Sauvage Eau de</h1>
                <h4>PHP 5,580.00</h4>
                
               
                <a href="" class="btn">Add To Cart</a>
                <a href="cart.html" class="btn">Buy Now</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>Dior Sauvage is a captivating men's fragrance that embodies the spirit of the wild and the modern. With its alluring blend of fresh bergamot, spicy Sichuan pepper, and warm woody notes, this fragrance exudes a sense of rugged elegance and undeniable confidence, making it a perfect choice for the contemporary man seeking a bold and distinctive scent.</p>
            </div>
        </div>
    </div>
   

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
            }
            else {
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

    <!-- product gallery -->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function () {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function () {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function () {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function () {
            ProductImg.src = SmallImg[3].src;
        }

    </script>
</body>

</html>