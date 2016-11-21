<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="description" content="">
<meta name="author" content="">
<title>Palmera &amp; Care</title>

<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" href="<?=asset('front')?>/css/animate.css" type="text/css">
<link rel="stylesheet" href="<?=asset('front')?>/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?=asset('front')?>/css/style.css" type="text/css">
<link rel="stylesheet" href="<?=asset('front')?>/css/revslider.css" type="text/css">
<link rel="stylesheet" href="<?=asset('front')?>/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?=asset('front')?>/css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="<?=asset('front')?>/css/font-awesome.css" type="text/css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="page"> 
  <!-- Header -->
  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6">
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="<?=asset('front')?>/images/english.png" alt="language"> English <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?=asset('front')?>/images/english.png" alt="language"> English </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?=asset('front')?>/images/english.png" alt="language"> Arabic </a></li>
                
              </ul>
            </div>
            
            <!-- End Header Language --> 
            
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
              </ul>
            </div>
            
            <!-- End Header Currency -->
            
            <div class="welcome-msg hidden-xs"> Welcome to palmera care </div>
          </div>
          <div class="col-xs-6"> 
            
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">Registration</span></a></div>
                {{-- <div class="wishlist"><a title="My Wishlist"  href="http://bit.do/bromq"><span class="hidden-xs">Wishlist</span></a></div> --}}
               {{--  <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div> --}}
                <div class="login"><a title="Login" href="login.html"><span  class="hidden-xs">Log In</span></a></div>
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="header container">
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-md-2"> 
          <!-- Header Logo --> 
          <a class="logo" title="Magento Commerce" href="#"><font color="white" size="3">PALMERACRE</font></a> 
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-8 col-sm-6 col-md-8"> 
          <!-- Search-col -->
          <div class="search-box">
            <form action="cat" method="POST" id="search_mini_form" name="Categories">
              <select name="category_id" class="cate-dropdown hidden-xs">
                <option value="0">All Categories</option>
                <option value="36">Camera</option>
                <option value="37">Electronics</option>
                <option value="42">&nbsp;&nbsp;&nbsp;Cell Phones</option>
                <option value="43">&nbsp;&nbsp;&nbsp;Cameras</option>
                <option value="44">&nbsp;&nbsp;&nbsp;Laptops</option>
                <option value="45">&nbsp;&nbsp;&nbsp;Hard Drives</option>
                <option value="46">&nbsp;&nbsp;&nbsp;Monitors</option>
                <option value="47">&nbsp;&nbsp;&nbsp;Mouse</option>
                <option value="48">&nbsp;&nbsp;&nbsp;Digital Cameras</option>
                <option value="38">Desktops</option>
                <option value="39">Computer Parts</option>
                <option value="40">Televisions</option>
                <option value="41">Featured</option>
              </select>
              <input type="text" placeholder="Search here..." value="" maxlength="70" class="" name="search" id="search">
              <button id="submit-button" class="search-btn-bg"><span>Search</span></button>
            </form>
          </div>
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
        <div class="col-lg-2 col-sm-3 col-md-2">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#"> <i class="glyphicon glyphicon-shopping-cart"></i>
                <div class="cart-box"><span class="title">cart</span><span id="cart-total">2 item </span></div>
                </a></div>
              <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                    <li class="item even"> <a class="product-image" href="#" title="Downloadable Product "><img alt="Downloadable Product " src="<?=asset('front')?>products-images/product1.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="<?=asset('front')?>/product_detail.html" title="Downloadable Product">Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$100.00</span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                      </div>
                    </li>
                    <li class="item last odd"> <a class="product-image" href="#" title="  Sample Product "><img alt="  Sample Product " src="<?=asset('front')?>/products-images/product1.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="  Sample Product "> Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$320.00</span> <span class="title-desc">Qty:</span> <strong>2</strong> </div>
                      </div>
                    </li>
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">$420.00</span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span>Checkout</span></button>
                    <button class="view-cart" type="button"><span>View Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div id="ajaxconfig_info"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
        </div>
        <!-- End Top Cart --> 
      </div>
    </div>
  </header>
  <!-- end header --> 
   <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="nav-inner">
        <div class="logo-small"> <a class="logo" title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="<?=asset('front')?>/images/logo.png"></a> </div>
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Menu</h2>
              </div>
              <ul class="submenu">
                <li>
                  <ul class="topnav">
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="#"> <span>Pages</span> </a>
                      <ul class="level0">
                        <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                        <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                        <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                        <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
                        <li class="level1 first"><a href="checkout.html"><span>Checkout</span></a> </li>
                        <li class="level1 nav-10-4"> <a href="http://bit.do/bromq"> <span>Wishlist</span> </a> </li>
                        <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                        <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                        <li class="level1"> <a href="about_us.html"> <span>T_H_E_M_E_L_O_C_K_._C_O_M</span> </a> </li>
                        <li class="level1"> <a href="compare.html"> <span>Compare</span> </a> </li>
                        <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
                        <li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>
                        <li class="level1"> <a href="quick_view.html"> <span>Quick view</span> </a> </li>
                        <li class="level1"><a href="blog.html"><span>Blog</span></a> </li>
                        <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
                        <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-7 level-top parent"> <a class="level-top" href="grid.html"> <span>Women</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-1-1 first parent"> <a href="grid.html"> <span>Clothing</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-1-1 first"> <a href="grid.html"> <span>Western Wear</span> </a> </li>
                            <li class="level2 nav-1-1-2"> <a href="grid.html"> <span>Night Wear</span> </a> </li>
                            <li class="level2 nav-1-1-3"> <a href="grid.html"> <span>Ethnic Wear</span> </a> </li>
                            <li class="level2 nav-1-1-4 last"> <a href="grid.html"> <span>Designer Wear</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-2 parent"> <a href="grid.html"> <span>Watches</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-2-5 first"> <a href="grid.html"> <span>Fashion</span> </a> </li>
                            <li class="level2 nav-1-2-6"> <a href="grid.html"> <span>Dress</span> </a> </li>
                            <li class="level2 nav-1-2-7"> <a href="grid.html"> <span>Sports</span> </a> </li>
                            <li class="level2 nav-1-2-8 last"> <a href="grid.html"> <span>Casual</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-3 parent"> <a href="grid.html"> <span>Styliest Bag</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-3-9 first"> <a href="grid.html"> <span>Clutch Handbags</span> </a> </li>
                            <li class="level2 nav-1-3-10"> <a href="grid.html"> <span>Diaper Bags</span> </a> </li>
                            <li class="level2 nav-1-3-11"> <a href="grid.html"> <span>Bags</span> </a> </li>
                            <li class="level2 nav-1-3-12 last"> <a href="grid.html"> <span>Hobo Handbags</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-4 last parent"> <a href="grid.html"> <span>Material Bag</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-4-13 first"> <a href="grid.html"> <span>Beaded Handbags</span> </a> </li>
                            <li class="level2 nav-1-4-14"> <a href="grid.html"> <span>Fabric Handbags</span> </a> </li>
                            <li class="level2 nav-1-4-15"> <a href="grid.html"> <span>Handbags</span> </a> </li>
                            <li class="level2 nav-1-4-16 last"> <a href="grid.html"> <span>Leather Handbags</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-8 level-top parent"> <a class="level-top" href="grid.html"> <span>Men</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-2-1 first parent"> <a href="grid.html"> <span>Clothing</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-1-1 first"> <a href="grid.html"> <span>Casual Wear</span> </a> </li>
                            <li class="level2 nav-2-1-2"> <a href="grid.html"> <span>Formal Wear</span> </a> </li>
                            <li class="level2 nav-2-1-3"> <a href="grid.html"> <span>Ethnic Wear</span> </a> </li>
                            <li class="level2 nav-2-1-4 last"> <a href="grid.html"> <span>Denims</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-2 parent"> <a href="grid.html"> <span>Shoes</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-2-5 first"> <a href="grid.html"> <span>Formal Shoes</span> </a> </li>
                            <li class="level2 nav-2-2-6"> <a href="grid.html"> <span>Sport Shoes</span> </a> </li>
                            <li class="level2 nav-2-2-7"> <a href="grid.html"> <span>Canvas Shoes</span> </a> </li>
                            <li class="level2 nav-2-2-8 last"> <a href="grid.html"> <span>Leather Shoes</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-3 parent"> <a href="grid.html"> <span>Watches</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-3-9 first"> <a href="grid.html"> <span>Digital</span> </a> </li>
                            <li class="level2 nav-2-3-10"> <a href="grid.html"> <span>Chronograph</span> </a> </li>
                            <li class="level2 nav-2-3-11"> <a href="grid.html"> <span>Sports</span> </a> </li>
                            <li class="level2 nav-2-3-12 last"> <a href="grid.html"> <span>Casual</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-4 parent"> <a href="grid.html"> <span>Jackets</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-4-13 first"> <a href="grid.html"> <span>Coats</span> </a> </li>
                            <li class="level2 nav-2-4-14"> <a href="grid.html"> <span>Formal Jackets</span> </a> </li>
                            <li class="level2 nav-2-4-15"> <a href="grid.html"> <span>Leather Jackets</span> </a> </li>
                            <li class="level2 nav-2-4-16 last"> <a href="grid.html"> <span>Blazers</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-5 last parent"> <a href="grid.html"> <span>Sunglasses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-5-17 first"> <a href="grid.html"> <span>Ray Ban</span> </a> </li>
                            <li class="level2 nav-2-5-18"> <a href="grid.html"> <span>Fasttrack</span> </a> </li>
                            <li class="level2 nav-2-5-19"> <a href="grid.html"> <span>Police</span> </a> </li>
                            <li class="level2 nav-2-5-20 last"> <a href="grid.html"> <span>Oakley</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-3 level-top parent"> <a href="grid.html" class="level-top"> <span>Jewellery</span> </a><em>+</em>
                      <ul class="level0">
                        <li class="level1 nav-3-1 first parent"> <a href="grid.html"> <span>Precious Jewellery</span> </a><em>+</em>
                          <ul class="level1">
                            <li class="level2 nav-3-1-1 first"> <a href="grid.html"> <span>Gitanjali</span> </a> </li>
                            <li class="level2 nav-3-1-2"> <a href="grid.html"> <span>Tara</span> </a> </li>
                            <li class="level2 nav-3-1-3"> <a href="grid.html"> <span>Orra</span> </a> </li>
                            <li class="level2 nav-3-1-4 last"> <a href="grid.html"> <span>Ahilya</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-2 parent"> <a href="grid.html"> <span>Fashion Jewellery</span> </a><em>+</em>
                          <ul class="level1">
                            <li class="level2 nav-3-2-5 first"> <a href="grid.html"> <span>Earrings</span> </a> </li>
                            <li class="level2 nav-3-2-6"> <a href="grid.html"> <span>Rings</span> </a> </li>
                            <li class="level2 nav-3-2-7"> <a href="grid.html"> <span>Bangles &amp; Bracelets</span> </a> </li>
                            <li class="level2 nav-3-2-8 last"> <a href="grid.html"> <span>Pendants</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-3 parent"> <a href="grid.html"> <span>Mens Jewellery</span> </a><em>+</em>
                          <ul class="level1">
                            <li class="level2 nav-3-3-9 first"> <a href="grid.html"> <span>Neck Wear</span> </a> </li>
                            <li class="level2 nav-3-3-10"> <a href="grid.html"> <span>Cufflinks</span> </a> </li>
                            <li class="level2 nav-3-3-11"> <a href="grid.html"> <span>Wrist Wear</span> </a> </li>
                            <li class="level2 nav-3-3-12 last"> <a href="grid.html"> <span>Rings</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-4 parent"> <a href="grid.html"> <span>Designer</span> </a><em>+</em>
                          <ul class="level1">
                            <li class="level2 nav-3-4-13 first"> <a href="grid.html"> <span>Bbling</span> </a> </li>
                            <li class="level2 nav-3-4-14"> <a href="grid.html"> <span>Ciana</span> </a> </li>
                            <li class="level2 nav-3-4-15"> <a href="grid.html"> <span>Bansri</span> </a> </li>
                            <li class="level2 nav-3-4-16 last"> <a href="grid.html"> <span>Arsya</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-5 last parent"> <a href="grid.html"> <span>Platinum</span> </a><em>+</em>
                          <ul class="level1">
                            <li class="level2 nav-3-5-17 first"> <a href="grid.html"> <span>Earrings</span> </a> </li>
                            <li class="level2 nav-3-5-18"> <a href="grid.html"> <span>Rings</span> </a> </li>
                            <li class="level2 nav-3-5-19"> <a href="grid.html"> <span>Bangles &amp; Bracelets</span> </a> </li>
                            <li class="level2 nav-3-5-20 last"> <a href="grid.html"> <span>Pendants</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-10 level-top "> <a class="level-top" href="blog.html"> <span>Custom</span> </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        
        <!--End mobile-menu -->
        <ul id="nav" class="hidden-xs">
          <li id="nav-home" class="level0 parent drop-menu"><a href="index.html" class="active"><span>Home</span> </a>
            <ul class="level1">
              <li class="level1 first parent"><a href="../../Variation1/blue/index.html"><span>Home Version 1</span></a> </li>
              <li class="level1 first parent"><a href="../../Variation2/blue/index.html"><span>Home Version 2</span></a> </li>
              <li class="level1 parent"><a href="../../Variation1/blue/index.html"><span>Blue</span></a> </li>
              <li class="level1 parent"><a href="../../Variation1/red/index.html"><span>Red</span></a> </li>
              <li class="level1 parent"><a href="../../Variation1/lavender/index.html"><span>Lavender</span></a> </li>
              <li class="level1 parent"><a href="../../Variation1/green/index.html"><span>Green</span></a> </li>
              <li class="level1 parent"><a href="../../Variation1/emerald/index.html"><span>Emerald</span></a> </li>
            </ul>
          </li>
          <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
            <ul class="level1">
              <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
              <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
              <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
              <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
              <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a> </li>
              <li class="level1 nav-10-4"> <a href="http://bit.do/bromq"> <span>Wishlist</span> </a> </li>
              <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
              <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
              <li class="level1"> <a href="about_us.html"> <span>T_H_E_M_E_L_O_C_K_._C_O_M</span> </a> </li>
              <li class="level1"> <a href="compare.html"> <span>Compare</span> </a> </li>
              <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
              <li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>
              <li class="level1"> <a href="quick_view.html"> <span>Quick view </span> </a> </li>
              <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                <ul class="level2">
                  <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog Detail</span></a></li>
                </ul>
              </li>
              <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
              <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
            </ul>
          </li>
          <li class="level0 nav-6 level-top parent"> <a href="grid.html" class="level-top"> <span>Women</span> </a>
            <div class="level0-wrapper dropdown-6col">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col"> 
                  
                  <!--mega menu-->
                  
                  <ul class="level0">
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Clothing</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Western Wear</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Night Wear</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Ethnic Wear</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Designer Wear</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Watches</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fashion</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dress</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sports</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casual</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Styliest Bag</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Clutch Handbags</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Diaper Bags</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bags</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hobo Handbags</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Material Bag</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Beaded Handbags</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fabric Handbags</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Handbags</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Handbags</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                  </ul>
                  <!--level0-->
                  
                  <div class="fur-des">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa.</p>
                  </div>
                </div>
                <div class="nav-block nav-block-right std grid12-4">
                  <div class="static-img-block"><a href="#"><img src="images/nav-img1.jpg" alt="Responsive"></a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="level0 nav-5 level-top first"> <a class="level-top" href="grid.html"> <span>Men</span> </a>
            <div class="level0-wrapper dropdown-6col">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center">
                  <ul class="level0">
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Clothing</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casual Wear</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Formal Wear</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Ethnic Wear</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Denims</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Shoes</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Formal Shoes</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sport Shoes</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Canvas Shoes</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Shoes</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Watches</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Digital</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Chronograph</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sports</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casual</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Jackets</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Coats</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Formal Jackets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Jackets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Blazers</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Sunglasses</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Ray Ban</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fasttrack</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Police</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Oakley</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                  </ul>
                  <!--level0--> 
                </div>
              </div>
              <div class="nav-add">
                <div class="push_item">
                  <div class="push_img"><a href="#"><img src="<?=asset('front')?>/images/menu-sunglass.png" alt="sunglass"></a></div>
                </div>
                <div class="push_item">
                  <div class="push_img"><a href="#"><img src="<?=asset('front')?>/images/menu-sunglass.png" alt="watch"></a></div>
                </div>
                <div class="push_item">
                  <div class="push_img"><a href="#"><img src="<?=asset('front')?>/images/menu-sunglass.png" alt="jeans"></a></div>
                </div>
                <div class="push_item">
                  <div class="push_img"><a href="#"><img src="<?=asset('front')?>/images/menu-sunglass.png" alt="shoes"></a></div>
                </div>
                <div class="push_item push_item_last">
                  <div class="push_img"><a href="#"><img src="<?=asset('front')?>/images/menu-sunglass.png" alt="swimwear"></a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="level0"> <a class="level-top" href="grid.html"><span>Jewellery</span></a>
            <div class="level0-wrapper dropdown-6col">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center"> 
                  
                  <!--mega menu-->
                  
                  <ul class="level0">
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Precious Jewellery</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Gitanjali</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Tara</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Orra</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Ahilya</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Fashion Jewellery</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Earrings</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Rings</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bangles &amp; Bracelets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pendants</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Mens Jewellery</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Neck Wear</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Cufflinks</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Wrist Wear</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Rings</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Designer</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bbling</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Ciana</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bansri</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Arsya</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Platinum</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Earrings</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Rings</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bangles &amp; Bracelets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pendants</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category--> 
                      
                    </li>
                    <!--level3 nav-6-1 parent item-->
                    
                  </ul>
                  <!--level0--> 
                  
                </div>
                <!--nav-block nav-block-center grid12-8 itemgrid itemgrid-4col--> 
                
              </div>
              <!--level0-wrapper2--> 
              
            </div>
            <!--level0-wrapper dropdown-6col--> 
            
            <!--mega menu--> 
            
          </li>
          <li class="level0 parent drop-menu"><a href="grid.html"><span>Sub menu </span> 
            <!--<span class="category-label-hot">Hot</span> --> 
            </a>
            <ul class="level1">
              <li class="level1 first parent"><a href="grid"><span>Submenu</span></a>
                <ul class="level2">
                  <li class="level2 first"><a href="#"><span>Menu1</span></a></li>
                  <li class="level2 nav-1-1-2"><a href="#"><span>Menu1</span></a></li>
                  <li class="level2 nav-1-1-3"><a href="#"><span>Menu2</span></a></li>
                  <li class="level2 nav-1-1-4"><a href="#"><span>Menu3</span></a></li>
                  <li class="level2 nav-1-1-5 last"><a href="#"><span>Menu4</span></a></li>
                </ul>
              </li>
              <li class="level1 first parent"><a href="#"><span>Submenu</span></a>
                <ul class="level2">
                  <li class="level2 first"><a href="#"><span>Menu1</span></a></li>
                  <li class="level2 nav-1-1-2"><a href="#"><span>Menu1</span></a></li>
                  <li class="level2 nav-1-1-3"><a href="#"><span>Menu2</span></a></li>
                  <li class="level2 nav-1-1-4"><a href="#"><span>Menu3</span></a></li>
                  <li class="level2 nav-1-1-5 last"><a href="#"><span>Menu4</span></a></li>
                </ul>
              </li>
              <li class="level1 parent"><a href="#"><span>Submenu</span></a> </li>
            </ul>
          </li>
          <li class="nav-custom-link level0 level-top parent"> <a class="level-top" href="#"><span>Custom</span></a>
            <div class="level0-wrapper custom-menu">
              <div class="header-nav-dropdown-wrapper clearer">
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="<?=asset('front')?>/images/custom-img1.jpg" alt="custom img1"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button type="button" title="Add to Cart" class="learn_more_btn"><span>Learn More</span></button>
                </div>
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="<?=asset('front')?>/images/custom-img2.jpg" alt="custom img2"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button type="button" title="Add to Cart" class="learn_more_btn"><span>Learn More</span></button>
                </div>
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="<?=asset('front')?>/images/custom-img3.jpg" alt="custom img3"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button type="button" title="Add to Cart" class="learn_more_btn"><span>Learn More</span></button>
                </div>
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="<?=asset('front')?>/images/custom-img4.jpg" alt="custom img4"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button type="button" title="Add to Cart" class="learn_more_btn"><span>Learn More</span></button>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav --> 
  
  <!-- Slider -->
  <div id="magik-slideshow" class="magik-slideshow">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-8 wow bounceInUp animated">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='<?=asset('front')?>/images/slider_img_2.jpg'><img src='<?=asset('front')?>/images/slide-img1.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                  <div    class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Exclusive of designer</div>
                  <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Handbags & Purses</div>
                  <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                    augue facilisis facilisis.</div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </li>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='<?=asset('front')?>/images/slider_img_2.jpg' class="black-text"><img src='<?=asset('front')?>/images/slide-img2.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Super Hot</div>
                  <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Go Lightly</div>
                  <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                    augue facilisis facilisis.</div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </li>
              </ul>
              <div class="tp-bannertimer"></div>
            </div>
          </div>
        </div>
        <aside class="col-xs-12 col-sm-12 col-md-4 wow bounceInUp animated">
          <div class="RHS-banner">
            <div class="add"><a href="#"><img alt="banner-img" src="<?=asset('front')?>/images/rhs-banner.jpg"></a>
              <div class="overlay"><a class="info" href="#">Learn More</a></div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <!-- end Slider --> 
  
  <!-- header service -->
  
  <div class="container">
    <div class="header-service wow bounceInUp animated">
      <div class="col-lg-3 col-sm-6 col-xs-3">
        <div class="content">
          <div class="icon-truck">&nbsp;</div>
          <span class="hidden-xs"><strong>FREE SHIPPING</strong> on order over $99</span></div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3">
        <div class="content">
          <div class="icon-support">&nbsp;</div>
          <span class="hidden-xs"><strong>Customer Support</strong> Service</span></div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3">
        <div class="content">
          <div class="icon-money">&nbsp;</div>
          <span class="hidden-xs">3 days <strong>Money Back</strong> Guarantee</span></div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3">
        <div class="content">
          <div class="icon-dis">&nbsp;</div>
          <span class="hidden-xs"><strong>5% discount</strong> on order over $199</span></div>
      </div>
    </div>
  </div>
  <!-- end header service --> 
  
  <!-- main container -->
  
  <section class="main-container col1-layout home-content-container">
    <div class="container">
      <div class="std">
        <div class="best-seller-pro wow bounceInUp animated">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Best Seller</h2>
            </div>
            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4"> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="<?=asset('front')?>/products-images/product1.jpg" class="img-responsive" alt="product-image" /> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="quick_view.html">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> $45.00 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="new-label new-top-right">New</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="<?=asset('front')?>/products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="quick_view.html">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="quick_view.html">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="quick_view.html">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> $45.00 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="quick_view.html">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> $45.00 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="new-label new-top-right">New</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="quick_view.html">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="<?=asset('front')?>products-images/product1.jpg"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="quick_view.html">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="quick_view.html">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> $45.00 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End main container --> 
  
  <!-- offer banner section -->
  
  <div class="offer-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner1" src="<?=asset('front')?>/images/offer-banner1.jpg"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner2" src="<?=asset('front')?>/images/offer-banner1.jpg"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner3" src="<?=asset('front')?>/images/offer-banner1.jpg"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- end offer banner section --> 
  
  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Featured Products</h2>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4"> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img src="<?=asset('front')?>/products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> $45.00 </span> </p>
                      <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="new-label new-top-right">New</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img src="<?=asset('front')?>/products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> $45.00 </span> </p>
                      <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> $45.00 </span> </p>
                      <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="new-label new-top-right">New</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> $45.00 </span> </p>
                      <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider --> 
  <!-- promo banner section -->
  <div class="promo-banner-section container wow bounceInUp animated">
    <div class="row">
      <div class="col-lg-12"> <img alt="promo-banner3" src="<?=asset('front')?>/images/jewelry-banner.jpg"></div>
    </div>
  </div>
  <!-- End promo banner section --> 
  <!-- middle slider -->
  <section class="middle-slider container wow bounceInUp animated">
    <div class="row">
      <div class="col-md-6">
        <div class="bag-product-slider small-pr-slider cat-section">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Bags</h2>
            </div>
            <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img src="<?=asset('front')?>/products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> $45.00 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img src="<?=asset('front')?>/products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> $45.00 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> $45.00 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="shoes-product-slider small-pr-slider cat-section">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Shoes</h2>
            </div>
            <div id="shoes-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img src="<?=asset('front')?>/products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> $45.00 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img src="<?=asset('front')?>/products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> $45.00 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="<?=asset('front')?>/products-images/product1.jpg"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="quick_view.html"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> $45.00 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End middle slider --> 
  
  <!-- Latest Blog -->
  <section class="latest-blog container wow bounceInUp animated">
    <div class="blog-title">
      <h2><span>Latest Blog</span></h2>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="blog-img"> <img src="<?=asset('front')?>/images/blog-img1.jpg" alt="Image">
        <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
      </div>
      <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
      <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="blog-img"> <img src="<?=asset('front')?>/images/blog-img1.jpg" alt="Image">
        <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
      </div>
      <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
      <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="blog-img"> <img src="<?=asset('front')?>/images/blog-img1.jpg" alt="Image">
        <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
      </div>
      <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
      <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
    </div>
  </section>
  <!-- End Latest Blog -->
  
  <footer class="footer wow bounceInUp animated">
    <div class="brand-logo ">
      <div class="container">
        <div class="slider-items-products">
          <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6"> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?=asset('front')?>/images/b-logo1.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?=asset('front')?>/images/b-logo2.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?=asset('front')?>/images/b-logo3.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?=asset('front')?>/images/b-logo4.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?=asset('front')?>/images/b-logo5.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?=asset('front')?>/images/b-logo6.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?=asset('front')?>/images/b-logo1.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?=asset('front')?>/images/b-logo4.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-7">
            <div class="block-subscribe">
              <div class="newsletter">
                <form>
                  <h4>newsletter</h4>
                  <input type="text" placeholder="Enter your email address" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter1" name="email">
                  <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-5">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-middle container">
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <div class="footer-logo"><a href="index.html" title="Logo"><img src="images/logo.png" alt="logo"></a></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu. </p>
          <div class="payment-accept">
            <div><img src="images/payment-1.png" alt="payment"> <img src="images/payment-2.png" alt="payment"> <img src="images/payment-3.png" alt="payment"> <img src="<?=asset('front')?>/images/payment-4.png" alt="payment"></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4>Shopping Guide</h4>
          <ul class="links">
            <li class="first"><a href="#" title="How to buy">How to buy</a></li>
            <li><a href="faq.html" title="FAQs">FAQs</a></li>
            <li><a href="#" title="Payment">Payment</a></li>
            <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
            <li><a href="#" title="Where is my order?">Where is my order?</a></li>
            <li class="last"><a href="#" title="Return policy">Return policy</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4>Style Advisor</h4>
          <ul class="links">
            <li class="first"><a title="Your Account" href="login.html">Your Account</a></li>
            <li><a title="Information" href="#">Information</a></li>
            <li><a title="Addresses" href="#">Addresses</a></li>
            <li><a title="Addresses" href="#">Discount</a></li>
            <li><a title="Orders History" href="#">Orders History</a></li>
            <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4>Information</h4>
          <ul class="links">
            <li class="first"><a href="#" title="privacy policy">Privacy policy</a></li>
            <li><a href="#/" title="Search Terms">Search Terms</a></li>
            <li><a href="#" title="Advanced Search">Advanced Search</a></li>
            <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
            <li><a href="#" title="Suppliers">Suppliers</a></li>
            <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-4">
          <h4>Contact us</h4>
          <div class="contacts-info">
            <address>
            <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
            &nbsp;CA 12345  USA
            </address>
            <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
            <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="#">support@magikcommerce.com</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2015. All Rights Reserved. Designed by <a href="#">magikcommerce.com</a> </div>
          <div class="col-sm-7 col-xs-12 company-links">
            <ul class="links">
              <li><a href="#" title="Magento Themes">Magento Themes</a></li>
              <li><a href="#" title="Premium Themes">Premium Themes</a></li>
              <li><a href="#" title="Responsive Themes">Responsive Themes</a></li>
              <li class="last"><a href="#" title="Magento Extensions">Magento Extensions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
  
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="<?=asset('front')?>/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?=asset('front')?>/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?=asset('front')?>/js/parallax.js"></script> 
<script type="text/javascript" src="<?=asset('front')?>/js/common.js"></script> 
<script type="text/javascript" src="<?=asset('front')?>/js/revslider.js"></script> 
<script type="text/javascript" src="<?=asset('front')?>/js/owl.carousel.min.js"></script> 
<script type='text/javascript'>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 770,
                startheight: 460,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
</body>
</html>