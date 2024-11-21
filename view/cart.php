<?php
include ("../controllers/cart_controller.php");

$cartItems = view_items_ctr(); // Fetch cart items from the controller

$cartTotal = 0;

?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Eshop </title>
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
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
                                <li><i class="ti-email"></i> support@shophub.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-location-pin"></i> Store location</li>
                                <li><i class="ti-alarm-clock"></i><a href="#">Daily deal</a></li>
                                <li><i class="ti-user"></i><a href="#">My account</a></li>
                                <li><i class="ti-power-off"></i><a href="login.php">Login</a></li>
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
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="right-bar">
                            <div class="sinlge-bar"><a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                            <div class="sinlge-bar"><a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></div>
                            <div class="sinlge-bar shopping"><a href="#" class="single-icon"><i class="ti-bag"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-12">
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
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pages</a></li>
                                                <li><a href="#">Blog</a><i class="ti-angle-down"></i>
                                                    <ul class="dropdown">
                                                        <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
                                                    </ul>
                                                </li>
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
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="shop.php">Home</a><i class="ti-arrow-right"></i></li>
                            <li class="active"><a href="#">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <table class="table shopping-summery">
                            <thead>
                            <tr class="main-hading">
                                <th>PRODUCT</th>
                                <th>NAME</th>
                                <th class="text-center">UNIT PRICE</th>
                                <th class="text-center">QUANTITY</th>
                                <th class="text-center">TOTAL</th>
                                <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php


                            foreach ($cartItems as $item) {
                                $productTotal = (float)$item['product_price'] * (int)$item['qty'];
                                $cartTotal += $productTotal;

                                echo "
                                <tr>
                                    <td class='image' data-title='No'>
                                        <img alt='{$item['product_title']}' src='{$item['product_image']}' style='width:100px;height:100px;'>
                                    </td>
                                    <td class='product-des' data-title='Description'>
                                        <p class='product-name'><a href='#'>{$item['product_title']}</a></p>
                                    </td>
                                    <td class='price' data-title='Price'>
                                        <span>\${$item['product_price']}</span>
                                    </td>
                                    <td class='qty' data-title='Qty'>
                                        <form method='post' action='../actions/update_cart_action.php' class='d-inline'>
                                            <input type='hidden' name='product_id' value='{$item['product_id']}'>
                                            <div class='input-group'>
                                                <input class='input-number' data-max='100' data-min='1' name='quantity' type='number' value='{$item['qty']}' min='1'>
                                                <button type='submit' class='btn btn-primary'>Update</button>
                                            </div>
                                        </form>
                                    </td>
                                    <td class='total-amount' data-title='Total'>
                                        <span>\${$productTotal}</span>
                                    </td>
                                    <td class='action' data-title='Remove'>
                                        <form method='post' action='../actions/delete_cart_item_action.php' class='d-inline'>
                                            <input type='hidden' name='product_id' value='{$item['product_id']}'>
                                            <button type='submit' class='btn btn-danger'><i class='ti-trash remove-icon'></i></button>
                                        </form>
                                    </td>
                                </tr>
                                ";
                            }

                            if (empty($cartItems)) {
                                echo "
                                <tr>
                                    <td colspan='6' class='text-center'>Your cart is empty.</td>
                                </tr>
                                ";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-12 col-md-5 col-lg-8">
                                <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <input name="Coupon" placeholder="Enter Your Coupon">
                                            <button class="btn">Apply</button>
                                        </form>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2">
                                            <input type="checkbox" id="2" name="news"> Shipping (+10$)
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 col-lg-4">
                                <div class="right">
                                    <ul>
                                        <li>Cart Subtotal<span>$<?php echo $cartTotal; ?></span></li>
                                        <li>Shipping<span>Free</span></li>
                                        <li class="last">You Pay<span>$<?php echo $cartTotal; ?></span></li>
                                    </ul>
                                    <div class="button5">
                                        <a class="btn" role="button" href="#">Checkout</a>
                                        <a class="btn" role="button" href="products.php">Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="shop-services section">
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
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider"><img alt="#" src="images/modal1.jpg"></div>
                                    <div class="single-slider"><img alt="#" src="images/modal2.jpg"></div>
                                    <div class="single-slider"><img alt="#" src="images/modal3.jpg"></div>
                                    <div class="single-slider"><img alt="#" src="images/modal4.jpg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <div class="quickview-content">
                                <h2>Flared Shift Dress</h2>
                                <div class="quickview-ratting-review">
                                    <div class="quickview-ratting-wrap">
                                        <div class="quickview-ratting"><i class="fas fa-star yellow"></i><i class="fas fa-star yellow"></i><i class="fas fa-star yellow"></i><i class="fas fa-star yellow"></i><i class="fas fa-star"></i></div><a href="#"> (1 customer review)</a>
                                    </div>
                                    <div class="quickview-stock"><span><i class="fa fa-check-circle-o"></i> in stock</span></div>
                                </div>
                                <h3>$29.00</h3>
                                <div class="quickview-peragraph">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                </div>
                                <div class="size">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <h5 class="title">Size</h5><select>
                                                <option value="" selected="">s</option>
                                                <option value="">m</option>
                                                <option value="">l</option>
                                                <option value="">xl</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="title">Color</h5><select>
                                                <option value="" selected="">orange</option>
                                                <option value="">purple</option>
                                                <option value="">black</option>
                                                <option value="">pink</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <div class="input-group">
                                        <div class="input-group-text button minus"><button class="btn btn-primary disabled btn-number" data-field="quant[1]" data-type="minus" disabled="disabled" type="button"><i class="ti-minus"></i></button></div><input type="text" class="input-number" data-max="1000" data-min="1" name="quant[1]" value="1">
                                        <div class="input-group-text button plus"><button class="btn btn-primary btn-number" data-field="quant[1]" data-type="plus" type="button"><i class="ti-plus"></i></button></div>
                                    </div>
                                </div>
                                <div class="add-to-cart"><a class="btn" role="button" href="#">Add to cart</a><a class="btn min" role="button" href="#"><i class="ti-heart"></i></a><a class="btn min" role="button" href="#"><i class="fas fa-compress"></i></a></div>
                                <div class="default-social">
                                    <h4 class="share-now">Share:</h4>
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
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
                            <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                            <p class="call">Got Question? Call us 24/7<span><a>+0123 456 789</a></span></p>
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
                            <h4>Get In Tuch</h4>
                            <div class="contact">
                                <ul>
                                    <li>NO. 342 - London Oxford Street.</li>
                                    <li>012 United Kingdom.</li>
                                    <li>info@eshop.com</li>
                                    <li>+032 3456 7890</li>
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