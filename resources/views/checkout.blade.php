<!DOCTYPE html>
<html lang="en">

<<<<<<< Updated upstream
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aureus | HOME OF LUXURY PERFUMES</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- Google Fonts for Banners only -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- Ion-Icons 4 -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Jquery-Ui-Range-Slider -->
    <link rel="stylesheet" href="css/jquery-ui-range-slider.min.css">
    <!-- Utility -->
    <link rel="stylesheet" href="css/utility.css">
    <!-- Main -->
    <link rel="stylesheet" href="css/bundle.css">
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
    .header {
    background: #fff; /* Set your desired background color */
    padding: 20px 0; /* Adjust the padding as needed */
}

.logo-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
=======
    <style>
        .header-logo-div {
            display: inline-block;
            width: auto;
            max-width: 250px;
            height: auto;
            text-align: center;
            margin-top: 1.5rem;



        }

        .header-logo {


            width: 150px;
            height: auto;
            margin-left: 1rem;


        }

        .back-link {
            margin: auto;
            width: auto;
            max-width: 80px;

            display: inline-block;
            margin: auto;



        }
    </style>



    <div class="container">

        <div class="header-logo-div">
            <div class="back-link">
                <a href="{{ route('index') }}" class="back-link">&#8592; Back</a>
            </div>
            <a href="#">
                <img src="images/main-logo/header-logo.png" class="header-logo" alt="Your Logo">
            </a>

        </div>

    </div>




>>>>>>> Stashed changes

.logo img {
    max-width: 100%;
    height: auto;
}

.back-button {
    text-decoration: none;
    font-weight: bold;
    color: #555;
}
</style>

</head>

<body>
    
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
<<<<<<< Updated upstream
                    <div class="logo-wrapper">
                        <a href="#" class="logo">
                            <img src="images/main-logo/header-logo.png" alt="Your Logo">
                        </a>
                        <a href="index.html" class="back-button">Back</a>
                    </div>
=======
                    <!-- First-Accordion -->

                    <!-- First-Accordion /- -->
                    <!-- Second Accordion -->

                    <!-- Second Accordion /- -->
                    <form action="{{ route('checkoutorder.post') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Billing-&-Shipping-Details -->
                            <div class="col-lg-6">
                                <h4 class="section-h4">Billing Details</h4>
                                <!-- Form-Fields -->
                                <div class="group-inline u-s-m-b-13">
                                    <div class="group-1 u-s-p-r-16">
                                        <label for="first-name">First Name
                                            <span class="astk"></span>
                                        </label>
                                        <p>{{ $user->fname }}</p>
                                    </div>
                                    <div class="group-2">
                                        <label for="last-name">Last Name
                                            <span class="astk"></span>
                                        </label>
                                        <p>{{ $user->lname }}</p>
                                    </div>
                                </div>
                                <div class="u-s-m-b-13">
                                    <label for="select-country">Country
                                        <span class="astk"></span>
                                    </label>
                                    <p>Philippines</p>
                                </div>
                                <div class="street-address u-s-m-b-13">
                                    <label for="req-st-address">Address
                                        <span class="astk"></span>
                                    </label>
                                    <p>{{ $user->address }}</p>
                                </div>

                                <div class="group-inline u-s-m-b-13">
                                    <div class="group-1 u-s-p-r-16">
                                        <label for="email">Email address
                                            <span class="astk"></span>
                                        </label>
                                        <p>{{ $user->email }}</p>
                                    </div>
                                    <div class="group-2">
                                        <label for="phone">Phone
                                            <span class="astk"></span>
                                        </label>
                                        <p>{{ $user->mobilenumber }}</p>
                                    </div>
                                </div>




                            </div>
                            <!-- Billing-&-Shipping-Details /- -->
                            <!-- Checkout -->
                            <div class="col-lg-6">
                                <h4 class="section-h4">Your Order</h4>
                                <div class="order-table">
                                    <table class="u-s-m-b-13">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="order-h6">{{ $Order->pdname }}</h6>
                                                    <span class="order-span-quantity">x {{ $Order->quantity }}</span>
                                                </td>
                                                <td>
                                                    <h6 class="order-h6">PHP
                                                        {{ number_format($Order->price * $Order->quantity, 2, '.', ',') }}
                                                    </h6>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="u-s-m-b-13">

                                        <label class="label-text" for="cash-on-delivery">Mode of Payment: Cash on
                                            Delivery</label>
                                    </div>
                                    <div class="u-s-m-b-13">

                                        <label class="label-text" for="cash-on-delivery">Total Price: </label>
                                        <span style="color: black">PHP
                                            {{ number_format($Order->totalprice, 2, '.', ',') }}</span>
                                    </div>



                                    <button type="submit" class="button button-outline-secondary">Place Order</button>
                                </div>
                            </div>
                            <!-- Checkout /- -->
                        </div>
                    </form>
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
    </header>

<!-- Checkout-Page -->
<div class="page-checkout u-s-p-t-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- First-Accordion -->
                
                <!-- First-Accordion /- -->
                <!-- Second Accordion -->
                
                <!-- Second Accordion /- -->
                <form action="dash-my-order.html">
                    <div class="row">
                        <!-- Billing-&-Shipping-Details -->
                        <div class="col-lg-6">
                            <h4 class="section-h4">Billing Details</h4>
                            <!-- Form-Fields -->
                            <div class="group-inline u-s-m-b-13">
                                <div class="group-1 u-s-p-r-16">
                                    <label for="first-name">First Name
                                        <span class="astk"></span>
                                    </label>
                                    <p>Ryle</p>
                                </div>
                                <div class="group-2">
                                    <label for="last-name">Last Name
                                        <span class="astk"></span>
                                    </label>
                                    <p>Ibanez</p>
                                </div>
                            </div>
                            <div class="u-s-m-b-13">
                                <label for="select-country">Country
                                    <span class="astk"></span>
                                </label>
                               <p>Philippines</p>
                            </div>
                            <div class="street-address u-s-m-b-13">
                                <label for="req-st-address">Street Address
                                    <span class="astk"></span>
                                </label>
                                <p>Sample Address</p>
                            </div>
                            <div class="u-s-m-b-13">
                                <label for="town-city">Town / City
                                    <span class="astk"></span>
                                </label>
                               <p>Rodriguez</p>
                            </div>
                            <div class="u-s-m-b-13">
                                <label for="select-state">State / Province
                                    <span class="astk"></span>
                                </label>
                                <p>Rizal</p>
                            </div>
                            <div class="u-s-m-b-13">
                                <label for="postcode">Postcode / Zip
                                    <span class="astk"></span>
                                </label>
                                <p>1860</p>
                            </div>
                            <div class="group-inline u-s-m-b-13">
                                <div class="group-1 u-s-p-r-16">
                                    <label for="email">Email address
                                        <span class="astk"></span>
                                    </label>
                                    <p>sample@gmail.com</p>
                                </div>
                                <div class="group-2">
                                    <label for="phone">Phone
                                        <span class="astk"></span>
                                    </label>
                                    <p>09998887777</p>
                                </div>
                            </div>
                            
                           
                           
                            
                        </div>
                        <!-- Billing-&-Shipping-Details /- -->
                        <!-- Checkout -->
                        <div class="col-lg-6">
                            <h4 class="section-h4">Your Order</h4>
                            <div class="order-table">
                                <table class="u-s-m-b-13">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="order-h6">Dior Sauvage Eau de</h6>
                                                <span class="order-span-quantity">x 1</span>
                                            </td>
                                            <td>
                                                <h6 class="order-h6">PHP 5,580.00</h6>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <div class="u-s-m-b-13">
                                    <input type="radio" class="radio-box" name="payment-method" id="cash-on-delivery" required>
                                    <label class="label-text" for="cash-on-delivery">Cash on Delivery</label>
                                </div>
                               
                                
                                
                                <button type="submit" class="button button-outline-secondary">Place Order</button>
                            </div>
                        </div>
                        <!-- Checkout /- -->
                    </div>
                </form>
            </div>
        </div>
    </div>
<<<<<<< Updated upstream
</div>
<!-- Checkout-Page /- -->
    
  
  
=======
    <br>
    <!-- Checkout-Page /- -->




>>>>>>> Stashed changes

   

    <!-- javascript -->

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            }
            else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
window.ga = function() {
    ga.q.push(arguments)
};
ga.q = [];
ga.l = +new Date;
ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview')
</script>

</body>

</html>