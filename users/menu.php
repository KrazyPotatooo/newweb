<?php
    //include auth_session.php file on all user panel pages
    include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Brews</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2Hhh_14Uam62GXGaTMcXWhhVkYg0EbDY&callback=initMap" async defer></script>

        <!-- Custom CSS File Link -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/convo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><!-- font awesome cdn link -->
        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico"><!-- Favicon / Icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Google font cdn link -->
    </head>
    <body>
        <!-- HEADER SECTION -->
        <header class="header">
            <a href="#" class="logo">
                <img src="../assets/images/logo2.png" class="img-logo" alt="KapeTann Logo">
            </a>

            <!-- MAIN MENU FOR SMALLER DEVICES -->
            <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="home.php" class="text-decoration-none">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="text-decoration-none">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="menu.php" class="text-decoration-none">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="text-decoration-none">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="text-decoration-none">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="icons">
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fas fa-shopping-cart" id="cart-btn"></div>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>

            <!-- SEARCH TEXT BOX -->
            <div class="search-form">
                <input type="search" id="search-box" class="form-control" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
            </div>

            <!-- CART SECTION -->
            <div class="cart">
                <h2 class="cart-title">Your Cart:</h2>
                <div class="cart-content">
                    
                </div>
                <div class="total">
                    <div class="total-title">Total: </div>
                    <div class="total-price">₱0</div>
                </div>
                <!-- BUY BUTTON -->
                <button type="button" class="btn-buy">Checkout Now</button>
            </div>
        </header>

        <!-- MENU SECTION -->
        <section class="menu" id="menu">
            <h1 class="heading">Our <span>Menu</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-1.png" alt="" class="product-img">
                                <h3 class="product-title">Americano - Hot Espresso (12 OZ)</h3>
                                <div class="price">₱45.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-2.png" alt="" class="product-img">
                                <h3 class="product-title">Colombian Supremo Cup (12 OZ)</h3>
                                <div class="price">₱40.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-3.png" alt="" class="product-img">
                                <h3 class="product-title">Nitro Cold Brews w/ Straw (12 OZ)</h3>
                                <div class="price">₱50.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-4.png" alt="" class="product-img">
                                <h3 class="product-title">Seasonal Single-Origin (12 OZ)</h3>
                                <div class="price">₱30.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-5.png" alt="" class="product-img">
                                <h3 class="product-title">Indonesian Sumatra Mandheling (12 OZ)</h3>
                                <div class="price">₱40.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-6.png" alt="" class="product-img">
                                <h3 class="product-title">Mint Mojito Iced Coffee (12 OZ)</h3>
                                <div class="price">₱55.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row row-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-7.png" alt="" class="product-img">
                                <h3 class="product-title">Iced Americano (12 OZ)</h3>
                                <div class="price">₱35.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-8.png" alt="" class="product-img">
                                <h3 class="product-title">Specialty Brews (12 OZ)</h3>
                                <div class="price">₱85.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-9.png" alt="" class="product-img">
                                <h3 class="product-title">Seasonal Origin (12 OZ)</h3>
                                <div class="price">₱80.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row row-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-10.png" alt="" class="product-img">
                                <h3 class="product-title">Ethiopian Yirgacheffe Cup (12 OZ)</h3>
                                <div class="price">₱55.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-11.png" alt="" class="product-img">
                                <h3 class="product-title">Cold Brews Tonic In a Cup (12 OZ)</h3>
                                <div class="price">₱35.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/cart-item-12.png" alt="" class="product-img">
                                <h3 class="product-title">Caramel Cold Foam Cold Brews (12 OZ)</h3>
                                <div class="price">₱55.00</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <center>
                        <button id="showHideBtn" class="btn btn-dark">SHOW MORE</button>
                    </center> 
                </div>
            </div>
        </section>




        <!-- FOOTER SECTION -->
        <section class="footer">
            <div class="footer-container">
                <div class="logo">
                <img src="../assets/images/Logo2.png" alt="" class="img-fluid"><br />
                    <i class="fas fa-envelope"></i>
                    <p>202180134@psu.palawan.edu.ph</p><br />
                    <i class="fas fa-phone"></i>
                    <p>09876545152</p><br />
                    <i class="fab fa-facebook-messenger"></i>
                    <p>@BrewShop</p><br />
                </div>
                <div class="support">
                    <h2>Support</h2>
                    <br /> 
                    <a href="contact.php">Contact Us</a>
                    <a href="#">Customer Service</a>
                </div>
                <div class="company">
                    <h2>Company</h2>
                    <br /> 
                    <a href="#">About Us</a>
                </div>
                <div class="newsletters">
                    <h2>Newsletters</h2>
                    <br /> 
                    <p>Subscribe to our newsletter for news and updates!</p>
                    <div class="input-wrapper">
                        <input type="email" class="newsletter" placeholder="Your email address">
                        <i id="paper-plane-icon" class="fas fa-paper-plane"></i>
                    </div>
                </div>

                <div class="credit">
                    <hr /><br/>
                    <h2>BrewShop © 2024 | All Rights Reserved.</h2>
                    <h2>Designed by 202180134@psu.palawan.edu.ph<h2>Computer Science</h2> Student</h2>
                </div>
            </div>
        </section>

        <!-- CHAT BAR BLOCK -->
        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">Chat with us! &nbsp;
                <i id="chat-icon" style="color: #fff;" class="fas fa-comments"></i>
            </button>
            <div class="content">
                <div class="full-chat-block">
                    <!-- Message Container -->
                    <div class="outer-container">
                        <div class="chat-container">
                            <!-- Messages -->
                            <div id="chatbox">
                                <h5 id="chat-timestamp"></h5>
                                <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                            </div>
                            <!-- User input box -->
                            <div class="chat-bar-input-block">
                                <div id="userInput">
                                    <input id="textInput" class="input-box" type="text" name="msg"
                                        placeholder="Tap 'Enter' to send a message">
                                    <p></p>
                                </div>
                                <div class="chat-bar-icons">
                                    <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-paper-plane"
                                        onclick="sendButton()"></i>
                                </div>
                            </div>
                            <div id="chat-bar-bottom">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS File Link -->
        <script src="../assets/js/googleSignIn.js"></script>
        <script src="../assets/js/script.js"></script>
        <script src="../assets/js/responses.js"></script>
        <script src="../assets/js/convo.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            // CODE FOR THE FORMSPREE
            window.onbeforeunload = () => {
                for(const form of document.getElementsByTagName('form')) {
                    form.reset();
                }
            }

            // CODE FOR THE GOOGLE MAPS API
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 14.99367271992383, lng: 120.17629231186626},
                    zoom: 9
                });

                var marker = new google.maps.Marker({
                    position: {lat: 14.99367271992383, lng: 120.17629231186626},
                    map: map,
                    title: 'Your Location'
                });
            }

            // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN MENU
            $(document).ready(function() {
                $(".row-to-hide").hide();
                $("#showHideBtn").text("SHOW MORE");
                $("#showHideBtn").click(function() {
                    $(".row-to-hide").toggle();
                    if ($(".row-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });

            // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN GALLERY
            $(document).ready(function() {
                $(".pic-to-hide").hide();
                $("#showBtn").text("SHOW MORE");
                $("#showBtn").click(function() {
                    $(".pic-to-hide").toggle();
                    if ($(".pic-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });
        </script> 
    </body>
</html><?php

