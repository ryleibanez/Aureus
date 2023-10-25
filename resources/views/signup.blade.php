<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>

select {
            width: 100%;
            display: block;
            border: none;
            border-bottom: 1px solid #999;
            padding: 6px 30px;
            font-family: Poppins;
            box-sizing: border-box;
            background-color: white; /* Set the background color of the dropdown */
        }
    </style>
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="signin.html">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="First Name"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Last Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Full Address"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Town/City"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="State/Province"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Postcode/Zip"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="email" id="email" placeholder="Phone Number"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                           
                            <div class="form-group">
                                <label for="combo-box"><i class="zmdi zmdi-lock-outline"></i></label>
                                <select id="combo-box" name="fruits">
                                    <option>Select a Security Question</option>
                                    <option value="apple">Who is your favorite Professor?</option>
                                    <option value="banana">What is your first car?</option>
                                    <option value="orange">What is the name of your first dog?</option>
                                    
                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="secanswer"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="secanswer" placeholder="Enter Your Answer"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/perfumehome_2.png" alt="sing up image"></figure>
                        <a href="signin.html" class="signup-image-link">I am already member</a>
                        <a href="index.html" class="signup-image-link">Return to Store</a>
                    </div>
                </div>
            </div>
        </section>

        


    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>