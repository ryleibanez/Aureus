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

        .img-profile-div {

            margin-left: auto;
            margin-right: auto;

            display: block;
            width: 250px;
            cursor: pointer;

            margin-bottom: 1.5rem;


        }

        .img-profile {
            display: block;
            margin: auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 1rem;
            margin-top: 1rem;

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
<<<<<<< Updated upstream
                        <form method="POST" class="register-form" id="register-form" action="signin.html">
=======
                        <form method="POST" class="register-form" id="register-form"
                            action="{{ route('signup.post') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="img-profile-div" id="uploadpic">
                                <span>Profile Picture *</span><br>
                                <img for="profile-pic" id="selected-image" class = "img-profile"
                                    src="uploads\1698565894_uwWzejhK6hDms3jCA4mNU6.jpg">

                                <input type="file" id="image-input" name="profilepic" accept="image/jpeg, image/png"
                                    style="opacity:0%;" onchange="handleImageChange()" />

                            </div>
>>>>>>> Stashed changes
                            <div class="form-group">

                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<<<<<<< Updated upstream
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
=======
                                <input type="text" name="fname" id="name" placeholder="First Name" required />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="lname" id="name" placeholder="Last Name" required />
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required />

                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="address" id="email" placeholder="Full Address"
                                    required />
>>>>>>> Stashed changes
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<<<<<<< Updated upstream
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
=======
                                <input type="number" name="mobilenumber" id="email" placeholder="Phone Number"
                                    pattern="/^09\d{8}$/" required />
                            </div>
                            @error('mobilenumber')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required />
>>>>>>> Stashed changes
                            </div>
                           
                            <div class="form-group">
                                <label for="combo-box"><i class="zmdi zmdi-lock-outline"></i></label>
<<<<<<< Updated upstream
                                <select id="combo-box" name="fruits">
=======
                                <select id="combo-box" name="gender" required>
                                    <option>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="combo-box"><i class="zmdi zmdi-lock-outline" required></i></label>
                                <select id="combo-box" name="secQuestion">
>>>>>>> Stashed changes
                                    <option>Select a Security Question</option>
                                    <option value="apple">Who is your favorite Professor?</option>
                                    <option value="banana">What is your first car?</option>
                                    <option value="orange">What is the name of your first dog?</option>
                                    
                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="secanswer"><i class="zmdi zmdi-lock-outline"></i></label>
<<<<<<< Updated upstream
                                <input type="password" name="re_pass" id="secanswer" placeholder="Enter Your Answer"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
=======
                                <input type="password" name="secAnswer" id="secanswer" placeholder="Enter Your Answer"
                                    required />

                            </div>
                            @error('secAnswer')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="hidden" value="Philippines" name="country">
                            <input type="hidden" value="" name="code">
                            <input type="hidden" value="user" name="type">
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit"
                                    value="Register" required />
                            </div>



>>>>>>> Stashed changes
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/perfumehome_2.png" alt="sing up image"></figure>
<<<<<<< Updated upstream
                        <a href="signin.html" class="signup-image-link">I am already member</a>
                        <a href="index.html" class="signup-image-link">Return to Store</a>
=======
                        <a href="{{ route('signin') }}" class="signup-image-link">I am already member</a>
                        <a href="{{ route('index') }}" class="signup-image-link">Return to Store</a>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </section>

        


    </div>

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


        // Trigger file input click when clicking on the image container
        document.getElementById('uploadpic').addEventListener('click', function() {
            document.getElementById('image-input').click();
        });
    </script>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>