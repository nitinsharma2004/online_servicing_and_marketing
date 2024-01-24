<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Service And Marketing</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--font awesome-->
    <!-- <link rel="stylesheet" href="css/custom.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,300&family=Ubuntu:ital@1&display=swap"
        rel="stylesheet"><!--font-family-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fa fa-lightbulb-o" aria-hidden="true"></i> Online Service and Marketing. </a>
    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>
        <a href="#home">Home</a>
        <a href="#category">Services</a>
        <a href="#registration">Registration</a>
        <a href="requester/requesterlogin.php">Login</a>
        <a href="#contact">Contact</a>
        <a href="shop.php">Shop</a>
    </nav>
    <div class="icons">
        <div id="menu-btn" class="fas fa-bars "></div>
    </div>

</header>

<!-- header section ends -->


<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(images/home-bg-1.jpg) no-repeat;">
                    <div class="content">
                        <span>Never Stop</span>
                        <h3>Doing Hardwork</h3>
                        <p>When you work in customer success, your days might be filled with emails, phone calls, and meetings, but those tasks aren't what defines your career. After all, you weren't hired to answer a phone -- you were hired to help customers succeed by solving problems and educating and empowering them.!</p>
                        <a href="#registration" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url(images/home-bg-2.jpg) no-repeat;">
                    <div class="content">
                        <span>Do Not</span>
                        <h3>Give Up</h3>
                        <p> if you're having a tough day, take a break from the process and think about the people you're helping. Customer success is integral to the success of a company -- and when you help customers succeed, you do too.!</p>
                        <a href="#registration" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(images/home-bg-3.jpg) no-repeat;">
                    <div class="content">
                        <span>Find Happiness</span>
                        <h3>Of Customers</h3>
                        <p>"I believe in the power of recognition and empowerment leading to great employee engagement. And employee engagement is critical to guest engagement. Employee empowerment and recognition is the core of our culture and how we achieve outstanding customer service."</p>
                        <a href="#registration" class="btn">get started</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- category section starts  -->

<section class="category" id="category">

    <h1 class="heading">Services Available!</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/category-1.jpg" alt="">
            <h3>Electronic services</h3>
            <p>We providefull electronic commerce, maintaining relationships and conducting business transactions that include selling information and goods by means of computer telecommunications networks.</p>
            <a href="https://en.wikipedia.org/wiki/E-services" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/category-2.jpg" alt="">
            <h3>Home Services</h3>
            <p>In a home service, you provide various services directly to customers in the comfort of their homes. The specific services you offer will depend on your expertise, industry. .</p>
            <a href="https://en.wikipedia.org/wiki/HomeServices_of_America" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/category-3.jpg" alt="">
            <h3>Vehicle Services</h3>
            <p>In a vehicle service, you provide a range of services related to automobiles, ensuring their proper functioning, maintenance, and repair we provide Regular Maintenance.</p>
            <a href="https://en.wikipedia.org/wiki/Service_(motor_vehicle)" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/category-4.jpg" alt="">
            <h3>Fault Services</h3>
            <p>In a fault service business, you specialize in identifying and repairing faults or issues in various systems or equipment like Electrical Fault Service,HVAC Fault Service etc.</p>
            <a href="https://en.wikipedia.org/wiki/Predictive_maintenance" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- about section starts  -->

<?php include('userRegistration.php')?>

<!-- about section ends -->



<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">popular packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>half yearly service package</h3>
                <p>"Get a massive 40% discount on our top-quality [service/product]. Experience the exceptional quality you deserve at an unbeatable price. Limited slots available, so act fast!".</p>
                <div class="price">$250 - $450</div>
                <a href="shop.php" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Limited-Time Discounts:</h3>
                <p> Highlight exclusive discounts for a limited period. For example, "Enjoy a 20% discount on our services for the next 7 days only!".</p>
                <div class="price">$250</div>
                <a href="shop.php" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Seasonal Promotions:</h3>
                <p> Tailor your offers to specific seasons or holidays.  "Get a free winter maintenance check with any service booked during the holiday season."</p>
                <div class="price">$300</div>
                <a href="shop.php" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Yearly service package</h3>
                <p>"Hurry! Take advantage of 50% discount on our services/products. This is an exclusive offer for customers. so book now and enjoy incredible savings!".</p>
                <div class="price">$250 - $450</div>
                <a href="shop.php" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>First-Time Customer Discounts:</h3>
                <p> Attract new customers by offering a special discount on their first service. For example, "New customers get 15% off their first appointment.".</p>
                <div class="price">$20 - $25</div>
                <a href="shop.php" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>featured service package</h3>
                <p>"Get ready for big savings! Stay tuned for an upcoming discount of on our services/products. Follow us or sign up for our newsletter to be the first to know!".</p>
                <div class="price">$100 - $200</div>
                <a href="shop.php" class="btn">explore now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading">client's reviews</h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p class="text">"I have been using this online services management company for a few months now, and I have to say I am impressed with their services. Their team is responsive, knowledgeable, and always willing to go the extra mile to help me achieve my online goals."</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">"I highly recommend this online services management company! They have helped me increase my online visibility and attract more customers to my business Their team is professional, friendly, and easy to work with."</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">"I was hesitant to hire an online services management company at first, but I am so glad I did! This company has been instrumental in helping me grow my business online.. I highly recommend their services to anyone looking to improve their online presence."</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">"I highly recommend this online services management company! They have helped me increase my online visibility and attract more customers to my business Their team is professional, friendly, and easy to work with."</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">"I have worked with several online services management companies in the past, but this company stands out for their exceptional services and expertise. T Their team is highly skilled and always stays up-to-date with the latest online marketing trends. I highly recommend them to anyone looking to take their online business to the next level."</p>
                <div class="user">
                    <img src="images/pic-5.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">"I was hesitant to hire an online services management company at first, but I am so glad I did! This company has been instrumental in helping me grow my business online.. I highly recommend their services to anyone looking to improve their online presence."</p>
                <div class="user">
                    <img src="images/pic-6.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- reviews section ends -->

<!-- services section starts  -->

<section class="services">

    <h1 class="heading"> what we offer </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/serv-1.png" alt="">
            <h3>complete guide</h3>
            <p>In the "Complete Guide" section, our comprehensive and detailed resources provide valuable information to help you navigate [industry/topic]. Whether you're a beginner or an experienced professional, our step-by-step instructions, expert advice, and best practices will empower you to [achieve desired outcome].</p>
            <a href="https://en.wikipedia.org/wiki/Category:Online_services" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/serv-2.png" alt="">
            <h3>custom packages</h3>
            <p>Our custom packages are designed to provide you with a personalized and tailored solution that meets your specific needs. We understand that every customer is unique, with distinct requirements and preferences</p>
            <a href="https://en.wikipedia.org/wiki/Online_service_provider" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/serv-3.png" alt="">
            <h3>Discounts</h3>
            <p> we are delighted to offer exclusive discounts to our valued customers. We believe in providing exceptional value for money, and our discount offers are our way of expressing gratitude for your continued support. </p>
            <a href="https://en.wikipedia.org/wiki/Discounting" class="btn">read more</a>
        </div>
    </div>

</section>

<!-- services section ends -->



<!-- newsletter section  -->

<section class="newsletter">

    <!-- <div class="content">
        <h1 class="heading">subscirbe now</h1>
        <p>to stay up-to-date with the latest news, exclusive offers, and valuable insights from online services company. By subscribing to our newsletter, you'll gain access to a wealth of information and resources in your inbox. Be the first to know about new product launches, upcoming events, and industry trends that can benefit you and your business. </p>
        <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscirbe" class="btn">
        </form>
    </div> -->
<?php include('subsc.php') ?>
</section>

<section class="clients">

    <div class="swiper clients-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide silde"><img src="images/client-logo-1.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-2.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-3.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-4.png" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section starts  -->

<section class="footer" id="contact">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="shop.php">shop</a>
            <a href="#packages">packages</a>
            <a href="#reviews">reviews</a>
            <a href="#newsletter">blogs</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my wishlist</a>
            <a href="#">ask questions</a>
            <a href="#">terms of use</a>
            <a href="#">privacy policy</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> ns1292210@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Beriparao, india - 263139 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/profile.php?id=100017312500578"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://www.twitter.com"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.linkedin.com/in/nitin-sharma-baa190247"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-github"></i> github </a>
        </div>

    </div>

    <div class="credit">created by <span>Nitin Sharma</span> | all rights reserved!</div>
    <div class="credit" ><a href="admin/login.php" class="ml-2 text-dark">Admin login</a></div>

</section>

<!-- footer section ends -->



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<!-- javascript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>