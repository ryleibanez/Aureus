<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="images/favicon.png" rel="shortcut icon">
        <title>My Profile | Aureus</title>
    
        <!--====== Google Font ======-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    
        <!--====== Vendor Css ======-->
        <link rel="stylesheet" href="css2/css/vendor.css">
    
        <!--====== Utility-Spacing ======-->
        <link rel="stylesheet" href="css2/css/utility.css">
        <link rel="stylesheet" href="style.css">
    
        <!--====== App ======-->
        <link rel="stylesheet" href="css2/css/app.css">
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
<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

<<<<<<< Updated upstream
            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>
=======
    <style>
        .upload-profile-div {
>>>>>>> Stashed changes

            height: 200px;
            max-height: 200px;
            text-align: center;


        }

        .img-class {

            margin: auto;
            height: 150px;
            width: 150px;
            border-radius: 50%;
            display: block;
        }
    </style>
    <!--====== Main App ======-->
    <div id="app">

        <!--====== Main Header ======-->
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
        <!--====== End - Main Header ======-->


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="dash">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">

                                    <!--====== Dashboard Features ======-->
                                    <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                        <div class="dash__pad-1">

                                            <span class="dash__text u-s-m-b-16">Hello, Ryle Ibanez</span>
                                            <ul class="dash__f-list">
                                                <li>

                                                    <a href="account.html">Manage My Account</a></li>
                                                <li>

                                                    <a  href="myprofile.html" class="dash-active">My Profile</a></li>
                                                <li>

                                                    <a href="dash-address-book.html" >Address Book</a></li>
                                                
                                                <li>

                                                    <a href="dash-my-order.html">My Orders</a></li>
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                   
                                    <!--====== End - Dashboard Features ======-->
                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14">Edit Profile</h1>

                                            <span class="dash__text u-s-m-b-30">Looks like you haven't update your profile</span>
                                            <div class="dash__link dash__link--secondary u-s-m-b-30">
                                                <form class="dash-edit-p" id="myForm" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="upload-profile-div" title="Click to Upload New Profile Picture">

<<<<<<< Updated upstream
                                                
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form class="dash-edit-p">
                                                        <div class="gl-inline">
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="reg-fname">FIRST NAME *</label>
=======
                                                    <span style="color:black; font-size: 1rem;">Profile Picture *</span>
                                                    <label for="image-input"><img class="img-class" id="selected-image"
                                                            src="{{ auth()->user()->profilepic }}" /></label>
                                                    <input type="file" id="image-input" name="profilepic" accept="image/jpeg, image/png"
                                                        style="display:none;" onchange="handleImageChange()">

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                       
                                                            <div class="gl-inline">
                                                                <div class="u-s-m-b-30">
>>>>>>> Stashed changes

                                                                <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="Ryle"></div>
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="reg-lname">LAST NAME *</label>

                                                                <input class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Ibanez"></div>
                                                        </div>
                                                        <div class="gl-inline">
                                                            
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="gender">GENDER</label><select class="select-box select-box--primary-style u-w-100" id="gender">
                                                                    <option selected>Select</option>
                                                                    <option value="male">Male</option>
                                                                    <option value="male">Female</option>
                                                                </select></div>
                                                        </div>
                                                        <div class="gl-inline">
                                                            <div class="u-s-m-b-30">
                                                                <h2 class="dash__h2 u-s-m-b-8">E-mail</h2>

                                                                <span class="dash__text">sample@domain.com</span>
                                                                <div class="dash__link dash__link--secondary">

                                                                    </div>
                                                            </div>
                                                            <div class="u-s-m-b-30">
                                                                <h2 class="dash__h2 u-s-m-b-8">Phone</h2>

                                                                <span class="dash__text">Please enter your mobile</span>
                                                                <div class="dash__link dash__link--secondary">
                                                                    <input class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="09998887777">
                                                                   </div>
                                                            </div>
                                                        </div>

                                                        <button class="btn btn--e-brand-b-2" type="submit">SAVE</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>

        <!--====== Main Footer ======-->
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
    </div>

        <!--====== Modal Section ======-->


        <!--====== Unsubscribe or Subscribe Newsletter ======-->
        

        <!--====== Unsubscribe or Subscribe Newsletter ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->

<<<<<<< Updated upstream
=======
    <script>
        document.getElementById('myForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('/editprofile', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    var dataUser = data.status;
                    var error = data.errors;
                    if (dataUser === "success") {


                        window.location.replace('/myprofile');
                        document.getElementById('invalid').style.display = "none";

                    } else {
                        Toastify({
                            text: "Invalid Input. Please Try Again!",
                            duration: 3000,


                            close: true,
                            gravity: "bottom", // `top` or `bottom`
                            position: "right", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                                background: "red",
                            }
                        }).showToast();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    </script>
>>>>>>> Stashed changes

    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="css2/js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="css2/js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="css2/js/app.js"></script>
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

<<<<<<< Updated upstream
        // Click event listener
        accountDropdown.addEventListener('click', function(e) {
            e.preventDefault();
            if (accountDropdownMenu.classList.contains('show')) {
                closeDropdown();
=======
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
        function handleImageChange() {
            const input = document.getElementById('image-input');
            const image = document.getElementById('selected-image');

            if (input.files && input.files[0]) {
                const selectedFile = input.files[0];

                // Check if the file type is JPEG or PNG
                if (selectedFile.type === 'image/jpeg' || selectedFile.type === 'image/png') {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        image.src = e.target.result;
                    };

                    reader.readAsDataURL(selectedFile);
                } else {
                    // Display an error message or take appropriate action for invalid file type
                    alert('Please select a valid JPEG or PNG image.');
                    // Reset the file input to clear the invalid selection
                    input.value = '';
                }
            }
        }

        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "300px"
>>>>>>> Stashed changes
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
</body>
</html>