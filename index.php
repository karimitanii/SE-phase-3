<?php
require 'files/session.php';
ensureLoggedIn();



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/90ccdd32d7.js" crossorigin="anonymous"></script>
  <title>Monet Restaurant</title>

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/popup.css" rel="stylesheet">
  <link href="assets/css/cart.css" rel="stylesheet">
  

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+961 70 789 433</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 2AM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">Ar</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Monet</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Reviews</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
                    <li><a href="loyaltypage.php">Loyalty Program</a></li>


          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- Checkout cart-->
      <div id="checkoutCart">
        <div id="checkoutCartIcon" onclick="openAndDisplay()">
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <div id="checkoutCartModal" class="checkoutModal">
          <div class="modal-content">
              <span class="close" onclick="closeCheckoutCartModal()">&times;</span>
              <div id="cartResult"></div>
              <button class="btn-menu animated fadeInUp scrollto" onclick="closeCartModalAndAlert()"> Checkout </button>
          </div>
        </div>
      </div>

      
     
    <a href="#leave-a-review" class="book-a-table-btn scrollto d-none d-lg-flex">Leave a Review</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= Razan Done-->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Monet</span></h1>
          <h2>Delivering quality French food in the heart of Beirut!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>


      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>About Monet.</h3>
            <p class="fst-italic">
              Monet is not just a culinary establishment; it's a canvas where flavors come alive, inspired by
              the artistic genius of Claude Monet.

            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>  A fusion of traditional French recipes with modern Lebanese twists. 
                </li>
              <li><i class="bi bi-check-circle"></i> An oasis of tranquility in the bustling streets of Beirut.</li>
              <li><i class="bi bi-check-circle"></i> Embodies the essence of French art.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Monet</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Culinary Fusion</h4>
              <p>We pride ourselves on offering a culinary experience that marries the elegance of French cuisine with the exotic spices and rich traditions of Lebanon. Our menu is a symphony of flavors, each dish carefully crafted to delight the senses and transport you to the heart of two distinct yet harmonious culinary worlds.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Artistic Ambiance</h4>
              <p> Just as Claude Monet masterfully captured the essence of nature on his canvas, we strive to create a dining atmosphere that is both enchanting and immersive. Adorned with hints of Monet's artistic flair, our restaurant is a haven where food and art intertwine, inviting you to savor every moment.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Passionate Hospitality</h4>
              <p>Hospitality is at the heart of everything we do. From the moment you step through our doors, you'll be greeted with genuine warmth and hospitality, making you feel like part of the family from the first sip to the final bite.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section DONE-->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>A French Menu With a Lebanese Twist</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-mains">Main Courses</li>
              <li data-filter=".filter-desserts">Desserts</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mezze-platter.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Mezze Platter" data-price="18" data-id="1">Mezze Platter</a><span>$18</span>
            </div>
            <div class="menu-ingredients">
              Assorted Lebanese appetizers including hummus, baba ganoush, and muhammara served with warm pita bread.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/spinach.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Lebanese Spinach Fatayer" data-price="9" data-id="2">Lebanese Spinach Fatayer</a><span>$9</span>
            </div>
            <div class="menu-ingredients">
              Flaky pastry filled with sautéed spinach, onions, pine nuts, and Lebanese spices.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/frenchonion-soup.jpg.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="French-Lebanese Onion Soup au Za'atar" data-price="8" data-id="3">French-Lebanese Onion Soup au Za'atar</a><span>$8</span>
            </div>
            <div class="menu-ingredients">
              Classic French onion soup infused with Lebanese za'atar spice, topped with melted gruyere cheese and crispy croutons.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/grilled-halloumi.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Grilled Halloumi Salad" data-price="12" data-id="4">Grilled Halloumi Salad</a><span>$12</span>
            </div>
            <div class="menu-ingredients">
              Grilled halloumi cheese served on a bed of mixed greens, cherry tomatoes, cucumbers, and mint, dressed with a lemon-tahini dressing.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/fattoush.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Fattoush" data-price="9" data-id="5">Fattoush</a><span>$10</span>
            </div>
            <div class="menu-ingredients">
              A refreshing Lebanese salad made with mixed greens, tomatoes, cucumbers, radishes, and crispy pita chips, dressed with a tangy sumac vinaigrette.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/nicose-salad.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Niçoise Salad with Za'atar Crusted Tuna" data-price="14" data-id="6">Niçoise Salad with Za'atar Crusted Tuna</a><span>$14</span>
            </div>
            <div class="menu-ingredients">
              A French-inspired salad with seared tuna coated in za'atar seasoning, served over mixed greens, boiled eggs, olives, green beans, and potatoes, drizzled with lemon vinaigrette.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-mains">
            <img src="assets/img/menu/lamb-chops.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Grilled Lamb Chops with Harissa Sauce" data-price="24" data-id="7">Grilled Lamb Chops with Harissa Sauce</a><span>$24</span>
            </div>
            <div class="menu-ingredients">
              Succulent French-style lamb chops marinated with Lebanese spices, served with a spicy harissa sauce, roasted vegetables, and couscous.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-mains">
            <img src="assets/img/menu/braised-chicken.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Coq au Vin with Lebanese Spices" data-price="19" data-id="8">Coq au Vin with Lebanese Spices</a><span>$19</span>
            </div>
            <div class="menu-ingredients">
              Traditional French chicken braised in red wine, garlic, and onions, enhanced with Lebanese spices like sumac and cinnamon, served with mashed potatoes.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-mains">
            <img src="assets/img/menu/sea-bass.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Mediterranean Sea Bass" data-price="28" data-id="9">Mediterranean Sea Bass</a><span>$28</span>
            </div>
            <div class="menu-ingredients">
              Grilled sea bass fillet topped with a lemon-tahini sauce, served with a side of ratatouille and herbed couscous.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-mains">
            <img src="assets/img/menu/ratatouille.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Ratatouille" data-price="16" data-id="10">Ratatouille</a><span>$16</span>
            </div>
            <div class="menu-ingredients">
              A traditional French vegetable stew with eggplant, zucchini, bell peppers, tomatoes, onions, and garlic, simmered in a savory tomato sauce with aromatic herbs.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-mains">
            <img src="assets/img/menu/beef.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Beef Shawarma Platter" data-price="16" data-id="11">Beef Shawarma Platter</a><span>$16</span>
            </div>
            <div class="menu-ingredients">
              Marinated beef shawarma slices served with rice, grilled vegetables, and tahini sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-desserts">
            <img src="assets/img/menu/lavender-baklava.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Baklava with Lavender Honey" data-price="12" data-id="12">Baklava with Lavender Honey</a><span>$12</span>
            </div>
            <div class="menu-ingredients">
              Layers of flaky phyllo pastry filled with nuts and sweetened with Lebanese lavender-infused honey, served with a scoop of vanilla ice cream.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-desserts">
            <img src="assets/img/menu/creme-brulee.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#menu" class="menu-item-name" data-name="Crème Brûlée with Orange Blossom" data-price="13" data-id="13">Crème Brûlée with Orange Blossom</a><span>$13</span>
            </div>
            <div class="menu-ingredients">
              Classic French custard dessert infused with delicate orange blossom water and caramelized sugar crust, served with fresh berries.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-desserts" onclick="addToCart('Mezze Platter', 18)">
            <img src="assets/img/menu/rice-pudding.png" class="menu-img" alt="" >
            <div class="menu-content"> 
              <a href="#menu" class="menu-item-name" data-name="Rosewater Rice Pudding" data-price="9" data-id="14">Rosewater Rice Pudding</a><span>$9</span>
              
            </div>
            <div class="menu-ingredients">
              Creamy rice pudding flavored with rosewater, topped with chopped pistachios and a sprinkle of cinnamon.
            </div>

          </div>
          
        </div>
        
        <div id="cartModal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="closeCartModal()">&times;</span>
            <div id="result"></div>
            <div>
              <p> Item name: <span id="specific-name"></span></p>
              <span id="specific-price"></span></p>
              <form id="addToCartForm" action="BE/cart.php" method="POST">
                <input type="hidden" id="itemName" name="itemName">
                <input type="hidden" id="price" name="price">
                <input type="hidden" id="itemId" name="itemId">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1"><br><br>
                <label for="instructions">Special Instructions:</label><br>
                <textarea id="instructions" name="instructions" rows="4" cols="50"></textarea><br><br>
                <button type="submit" onclick="addToCart()">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
      
        
      </div>
   
    </section><!-- End Menu Section done need to add button-->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Weekly Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Duck</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Lamb</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Mixed Seafood</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Beef</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Lobster</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Duck Confit with Pomegranate Glaze</h3>
                    
                    <p>French duck leg slow-cooked in its own fat until tender, finished with a tangy pomegranate glaze, served with roasted vegetables.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/duck.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Lamb Tagine with Apricots and Almonds</h3>
                   
                    <p>Tender lamb stewed with dried apricots, almonds, and Moroccan spices, served with couscous.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/lamb.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Seafood Bouillabaisse</h3>
                    <p>A rich and flavorful seafood stew with fish, shrimp, mussels, and squid in a saffron-infused broth, served with rouille and crusty bread.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/mixed-seafood.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Grilled Beef Tenderloin with Za'atar Butter</h3>
                
                    <p>Juicy beef tenderloin steak seasoned with Lebanese za'atar spice blend, topped with a dollop of za'atar butter, served with roasted potatoes and grilled asparagus.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/beef.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Lobster Ravioli in Saffron Cream Sauce </h3>
                
                    <p>Homemade ravioli stuffed with lobster meat and ricotta cheese, served in a creamy saffron sauce with cherry tomatoes and basil.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/lobster.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section DONE -->



    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up"
          data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people"
                data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your
              reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->
     <!-- ======= Leave A Review Section ======= -->
    <section id="leave-a-review" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Review</h2>
          <p>Tell Us About Your Monet Experience</p>
        </div>

        <form class="php-email-form" action="submit_review.php" method="post">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your review was sent. Thank you for sharing!</div>
          </div>
          <div class="text-center"><button type="submit">Submit Review</button></div>
        </form>

      </div>
    </section><!-- Leave A Review Section -->


    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
    
        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>
    
        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "What a delightful fusion of French and Lebanese cuisine! Every bite was a journey through culinary artistry. The flavors were perfectly balanced, reminiscent of Monet's vibrant palette. A must-visit for food enthusiasts!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Emma Dubois</h3>
                <h4>Food Critic</h4>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "I've never experienced such a unique blend of flavors before! The Lebanese twist added an exciting dimension to classic French dishes. Dining here felt like stepping into one of Monet's paintings – truly magical."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Nicolas Dupont</h3>
                <h4>Art Enthusiast</h4>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Exquisite food, impeccable service! Each dish was a masterpiece, blending the best of French and Lebanese cuisine. The ambiance, reminiscent of Monet's garden, added a touch of elegance to the dining experience."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Amelie Martin</h3>
                <h4>Food Blogger</h4>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Absolutely phenomenal! The fusion of French and Lebanese flavors was executed with precision. It felt like a culinary journey through Monet's garden, with each dish bursting with color and flavor."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Antoine Chevalier</h3>
                <h4>Food Connoisseur</h4>
              </div>
            </div><!-- End testimonial item -->
    
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "A gastronomic masterpiece! The marriage of French and Lebanese cuisine here is a stroke of genius. Dining at [Restaurant Name] is like experiencing Monet's artistry through the palate – sublime and unforgettable."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Léa Bernard</h3>
                <h4>Gourmet Traveler</h4>
              </div>
            </div><!-- End testimonial item -->
    
          </div>
          <div class="swiper-pagination"></div>
        </div>
    
      </div>
    </section><!-- End Testimonials Section -->
    

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>


      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Gemmayze, Beirut, Lebanon</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2:00 AM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>monet@restaurantsinlebanon.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+961 70 789 433</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Monet</h3>
              <p>
                Gemmayze Street <br>
                Beirut, Lebanon<br><br>
                <strong>Phone:</strong> +961 70 789 433<br>
                <strong>Email:</strong> monet@restaurantsinlebanon.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Sign up to our newsletter to receive weekly updates on our specials and offers!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Monet- Phoenix Software Solutions</span></strong>. All Rights Reserved
      </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<script>
  function openCartModal(event) {
    const item = event.target;
    let itemName = item.dataset.name;
    let itemPrice = item.dataset.price;
    let itemId = item.dataset.id;
    const spanelement = document.getElementById("specific-name");
    const priceElement = document.getElementById("specific-price");

    spanelement.textContent = itemName;
    priceElement.textContent = itemPrice;

    document.getElementById("cartModal").style.display = "block";
    let name = document.getElementById("itemName");
    let price = document.getElementById("price");
    let Id = document.getElementById("itemId");
    name.value = itemName;
    price.value = itemPrice;
    Id.value = itemId;
  }
  
  const menu = document.querySelectorAll(".menu-item-name");
  for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", openCartModal);
  }

  
  function closeCartModal() {
    const spanelement = document.getElementById("specific-name");
    const priceElement = document.getElementById("specific-price");

    spanelement.textContent = "";
    priceElement.textContent = "";

    document.getElementById("cartModal").style.display = "none";
  }

  

  //Check out cart related stuff
  function openAndDisplay() {
    document.getElementById("checkoutCartModal").style.display = "block";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "BE/display.php", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("cartResult").innerHTML = xhr.responseText;
      } 
    };
    xhr.send();
  }
  function closeCartModalAndAlert() {
    closeCheckoutCartModal();
    alert("Your order has been confirmed. Our chefs have received your wishes!");
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                //alert('Cart emptied successfully');
            } else {
                //console.error('Failed to empty cart:', xhr.status);
            }
        }
    };
    xhr.open('GET', 'BE/emptyCart.php');
    xhr.send();
  }
  function closeCheckoutCartModal() {
    document.getElementById("checkoutCartModal").style.display = "none";
  }
</script>


</html>
