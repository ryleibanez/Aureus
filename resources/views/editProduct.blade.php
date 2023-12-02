@extends('includes.adminlayout')
@section('title', 'Edit a Product')
    
@section('content')
    

<!--====== Main App ======-->
<div id="app">


    <!--====== App Content ======-->
    <div class="app-content">
        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">
            <!--====== Section Content ======-->

        </div>
        <!--====== End - Section 1 ======-->

        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">
                                    EDIT A PRODUCT
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row row--center">
                        <div class="col-lg-6 col-md-8 u-s-m-b-30">
                            <div class="l-f-o">
                                <div class="l-f-o__pad-box">
                                  
                                    <form class="l-f-o__form" method="POST" id="myForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="gl-s-api">


                                        </div>
                                        <div>
                                            <input type="file" name="image" value="Upload Image"
                                                accept="image/jpeg,image/png" required>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="reg-fname">PRODUCT NAME *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="reg-fname" name = "pdname" value="{{$pd->pdname}}" required/>
                                        </div>
                                        <input type="hidden" value="{{request()->query('id')}}" name="id">


                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="gender">CATEGORY</label><select
                                                class="select-box select-box--primary-style u-w-100" id="gender" name="category"
                                                required>
                                              
                                                <option value="Men" @if($pd->category === "Male")selected @endif>Male</option>
                                                <option value="Female" @if($pd->category === "Female")selected @endif>Female</option>
                                                <option value="Unisex" @if($pd->category === "Unisex")selected @endif>Unisex</option>
                                                <option value="Brands" @if($pd->category === "Brands")selected @endif>Brands</option>
                                            </select>
                                        </div>

                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="reg-email" >STOCKS *</label>

                                            <input class="input-text input-text--primary-style" type="number"
                                                id="reg-email" name="stocks" value="{{$pd->stocks}}" required/>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="reg-password">PRICE *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="reg-password" name="price" value="{{$pd->price}}" required/>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="reg-password">DESCRIPTION *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="reg-password" name="description" value="{{$pd->description}}" required/>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <button class="btn btn--e-transparent-brand-b-2" type="submit">
                                                CREATE
                                            </button>
                                        </div>

                                        <a class="gl-link" href="{{route('manageproducts')}}">Return to Manage Products</a>
                                    </form>
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
    <!--====== End - App Content ======-->

   
</div>
<!--====== End - Main App ======-->

<!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
<script>
    document.getElementById('myForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('/editProductAction', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                var dataUser = data.status;
                
               
                if (dataUser == 'success') {


                    window.location.replace('/manageproducts');
                    

                } else {
                    Toastify({
                        text: dataUser,
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
<script>



    window.ga = function() {
        ga.q.push(arguments);
    };
    ga.q = [];
    ga.l = +new Date();
    ga("create", "UA-XXXXX-Y", "auto");
    ga("send", "pageview");
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>

<!--====== Vendor Js ======-->
<script src="js/vendor.js"></script>

<!--====== jQuery Shopnav plugin ======-->
<script src="js/jquery.shopnav.js"></script>

<!--====== App ======-->
<script src="js/app.js"></script>

<!--====== Noscript ======-->
<noscript>
    <div class="app-setting">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="app-setting__wrap">
                        <h1 class="app-setting__h1">
                            JavaScript is required in your browser.
                        </h1>

                        <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                            JavaScript-capable browser.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</noscript>
@endsection
