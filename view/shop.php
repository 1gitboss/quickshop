<?php
include("../controllers/product_controller.php");

// Fetch all brands
$products = view_products_ctr();

?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Eshop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/FontAwesome.css?h=8559af849d458c4c6439435f27a38e8e">
    <link rel="stylesheet" href="../assets/css/Poppins.css?h=86924a36e6a7e84d7726da5c580dd233">
    <link rel="stylesheet" href="../assets/css/themify.css?h=761ecc1989aa1eef65e85129b5ce13a0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css?h=72206c8bac47c259a95e6473d0eef779">
    <link rel="stylesheet" href="../assets/css/css/bootstrap.css?h=7e53cf3f506e92d51bae5ae66d483bb7">
    <link rel="stylesheet" href="../assets/css/css/magnific-popup.min.css?h=5fe9ddb6671eadd0e77bd8a8e23c8965">
    <link rel="stylesheet" href="../assets/css/css/font-awesome.css?h=ca882ac7168f66052c1c2470990746a5">
    <link rel="stylesheet" href="../assets/css/css/jquery.fancybox.min.css?h=54d602bd1b5dafb20d87a507393ee331">
    <link rel="stylesheet" href="../assets/css/css/themify-icons.css?h=0964455387ffc34fce328d55919d3c0f">
    <link rel="stylesheet" href="../assets/css/css/niceselect.css?h=cf4f2cab88a08129ac001550215411a8">
    <link rel="stylesheet" href="../assets/css/css/animate.css?h=429ec7298a1f3caf6564edd11d516eff">
    <link rel="stylesheet" href="../assets/css/css/flex-slider.min.css?h=e06450b0fb4e03a7c47243c90dae1c42">
    <link rel="stylesheet" href="../assets/css/css/slicknav.min.css?h=3c7c6aed78f7f37afbafa138e8d01834">
    <link rel="stylesheet" href="../assets/css/css/reset.css?h=4a7d691ecf85df88818366bb7e3a0391">
    <link rel="stylesheet" href="../assets/css/style.css?h=a00a621dea2812816ed6d8c7ced15e3a">
    <link rel="stylesheet" href="../assets/css/css/responsive.css?h=56b83484d5c7301930604b7bfd74a498">
</head>

<body class="js">
    <header class="header shop">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="top-left">
                            <ul class="list-main"></ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-user"></i><a href="#">My account</a></li>
                                <li><i class="ti-power-off"></i><a href="login.php">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-2 col-lg-2">
                        <div class="logo"><a href="shop.php"><img src="../assets/img/logo.png?h=36eecde42b89113e5bfc01eba5517c07" alt="logo"></a></div>
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <div class="search-top">
                                <form class="search-form"><input type="text" name="search" placeholder="Search here..."><button value="search" type="submit"><i class="ti-search"></i></button></form>
                            </div>
                        </div>
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-8">
                        <div class="search-bar-top">
                            <div class="search-bar"><select>
                                    <option value="" selected="">All Category</option>
                                    <option value="">watch</option>
                                    <option value="">mobile</option>
                                    <option value="">kid’s item</option>
                                </select>
                                <form><input type="search" name="search" placeholder="Search Products Here....."><button class="btnn"><i class="ti-search"></i></button></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-12 col-lg-9">
                            <div class="menu-area">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="#">Home</a></li>
                                                <li><a href="#">Product</a></li>
                                                <li><a href="#">Service</a></li>
                                                <li><a href="#">Shop</a><i class="ti-angle-down"></i><span class="new">New</span>
                                                    <ul class="dropdown">
                                                        <li><a href="cart.php">Cart</a></li>
                                                        <li><a href="#">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pages</a></li>

                                                <li><a href="contact.html">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="hero-slider">
        <div class="single-slider">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-9 offset-lg-3">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="hero-text">
                                        <h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
                                        <p><br>Discover unbeatable deals on <br/>high-quality men's shirts. <br/>Perfect for work or casual wear, <br/>crafted for comfort and style.<br><br></p>
                                        <div class="button"><a class="btn" role="button" href="#">Shop Now!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="small-banner section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-banner"><img src="../assets/img/summer-collection.webp" alt="#">
                        <div class="content">
                            <p>Man's Collectons</p>
                            <h3>Summer travel <br> collection</h3><a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-banner"><img src="../assets/img/bag-img.webp" alt="#">
                        <div class="content">
                            <p>Bag Collectons</p>
                            <h3>Awesome Bag <br> 2024</h3><a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="single-banner tab-height"><img src="../assets/img/promo-pic.jpeg" alt="#">
                        <div class="content">
                            <p>Flash Sale</p>
                            <h3>Mid Season <br> Up to <span>40%</span> Off</h3><a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Shopping Aisle</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Items</a></li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div id="products" class="tab-pane fade show active" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <?php foreach ($products as $product): ?>
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="default-img" src="<?= $product['product_image'] ?>" alt="<?= $product['product_title'] ?>" />
                                                        <img class="hover-img" src="<?= $product['product_image'] ?>" alt="<?= $product['product_title'] ?>" />
                                                        <?php if (strpos(strtolower($product['product_title']), 'new') !== false): ?>
                                                        <span class="new">New</span>
                                                        <?php elseif (strpos(strtolower($product['product_title']), 'hot') !== false): ?>
                                                        <span class="out-of-stock">Hot</span>
                                                        <?php endif; ?>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="../actions/add_to_cart_action.php?product_id=<?= $product['product_id'] ?>">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.php?id=<?= $product['product_id'] ?>"><?= $product['product_title'] ?></a></h3>
                                                    <div class="product-price">
                                                        <?php if (strpos(strtolower($product['product_keywords']), 'discount') !== false): ?>
                                                        <span class="old">$<?= $product['product_price'] * 1.2 ?></span>
                                                        <span>$<?= $product['product_price'] ?></span>
                                                        <?php else: ?>
                                                        <span>$<?= $product['product_price'] ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section free-version-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 col-xs-12">
                    <div class="section-title mb-60">
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility:visible;animation-delay:0.4s;animation-name:fadeInUp;">Unlock Full Access to Eshop.</h2>
                        <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible;animation-delay: 0.6s;animation-name: fadeInUp;margin-left: 78px;">Upgrade to the full version for access to all features, exclusive designs, and a commercial license. Don’t miss out on premium perks!</p>
                        <div class="button"><a class="btn wow fadeInUp" role="button" href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" rel="nofollow" data-wow-delay=".8s">Upgrade Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service"><i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service"><i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service"><i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-service"><i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner"><input type="email" name="EMAIL" placeholder="Your email address" required=""><button class="btn">Subscribe</button></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true" class="ti-close"></span></button></div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <h4 style="margin-top:100px;font-size:14px;font-weight:500;color:#F7941D;display:block;margin-bottom:5px;">Eshop Free Lite</h4>
                            <h3 style="font-size:30px;color:#333;">Currently You are using free lite Version of Eshop.</h3>
                            <h3><p style="display:block;margin-top:20px;color:#888;font-size:14px;font-weight:400;">Please, purchase full version of the template to get all pages, features and commercial license</p><div class="button" style="margin-top:30px;"><a class="btn" href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" style="color:#fff;" target="_blank">Buy Now!</a></div></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="single-footer about">
                            <div class="logo"><a href="shop.php"><img src="../assets/img/logo2.png?h=36eecde42b89113e5bfc01eba5517c07" alt="#"></a></div>
                            <p class="text">The Best One stop pshop to gt all the clothes you need for your home, family and friends.</p>
                            <p class="call">Got Question? Call us 24/7<span><a>+233 453 7689</a></span></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2">
                        <div class="single-footer links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2">
                        <div class="single-footer links">
                            <h4>Customer Service</h4>
                            <ul>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-footer social">
                            <h4>Get In Touch</h4>
                            <div class="contact">
                                <ul>
                                    <li>NO. 34 - Dansoman Pamplo Street.</li>
                                    <li> Accra,Ghana.</li>
                                    <li>info@eshop.com</li>
                                    <li>+233 3456 7890</li>
                                </ul>
                            </div>
                            <ul>
                                <li><i class="ti-facebook"></i></li>
                                <li><i class="ti-twitter"></i></li>
                                <li><i class="ti-flickr"></i></li>
                                <li><i class="ti-instagram"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="left">
                                <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="right"><img src="../assets/img/payments.png?h=36eecde42b89113e5bfc01eba5517c07" alt="#"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.min.js?h=27a8f25e65bfe1872ebd62e021a0c6ca"></script>
    <script src="../assets/js/jquery-migrate-3.0.0.js?h=809b0656a1474373ca3e71d573f1b0f5"></script>
    <script src="../assets/js/jquery-ui.min.js?h=f332a94c6195a106be1aa0b8b8191357"></script>
    <script src="../assets/js/popper.min.js?h=499c736b389842485292bd8cd0b9b3fd"></script>
    <script src="../assets/js/bootstrap.min.js?h=43ef4106b4831ea0ee5f0d9b555e4f4f"></script>
    <script src="../assets/js/slicknav.min.js?h=929b31107d637beba055e6eece61ae13"></script>
    <script src="../assets/js/owl-carousel.js?h=70c2ef210f452a994b4940a01166b193"></script>
    <script src="../assets/js/magnific-popup.js?h=95701ac1eb700717f5500f8bbabe824a"></script>
    <script src="../assets/js/facnybox.min.js?h=4501e0a480a7a15941f78aa2ad1ce2cf"></script>
    <script src="../assets/js/waypoints.min.js?h=4fe14337a62d710389f42e8a5d1043f7"></script>
    <script src="../assets/js/finalcountdown.min.js?h=9f3ecf90bff7c65482e600429af907d6"></script>
    <script src="../assets/js/nicesellect.js?h=8aa229d2967e3291f910e650713d43ad"></script>
    <script src="../assets/js/ytplayer.min.js?h=8badb8b0512fff612238be1dca81a6e5"></script>
    <script src="../assets/js/flex-slider.js?h=ad376aa371dba76f4da76edbef739ce2"></script>
    <script src="../assets/js/scrollup.js?h=6d9c3ed411bccc5b08ea654ac275a984"></script>
    <script src="../assets/js/onepage-nav.min.js?h=cdc57619be32502f2b4e3377cc1dc163"></script>
    <script src="../assets/js/easing.js?h=9f685389e590926655414053cda81bbd"></script>
    <script src="../assets/js/active.js?h=fdb30a301fdd0813428fd979e5b2c69d"></script>
    <script src="../assets/js/gmap.min.js?h=054db3a1dbe5750e89ce1d62ee60dc85"></script>
    <script src="../assets/js/map-script.js?h=2b4bf8f370e4282cbebe6eb7b799d9e0"></script>
</body>

</html>