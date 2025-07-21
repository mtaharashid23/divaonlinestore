<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Diva Online Store | Handbags,Wallets, &amp; More | Shop Now';  ?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
</head>

<body class="modal-menu">
    <!-- HEADER -->
    <header class="header">
        <div class="container-fluid p-0">
            <div class="header_top">
                <ul class="header_top_info">
                    <li>
                        <a href="tel:+923152225970"><i class="fab fa-whatsapp"></i></a>
                    </li>
                    <li>
                        <a href="mailto:orders@divaonlinestore.com"><i class="fas fa-envelope"></i></a>
                    </li>
                </ul>
                <div class="swiper header_top_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="header_top_slider_content">
                                <p>SHOP CUSTOMER'S TOP RATED</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="header_top_slider_content">
                                <p>SHOP CUSTOMER'S TOP RATED</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="header_top_slider_content">
                                <p>SHOP CUSTOMER'S TOP RATED</p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="header_top_link">
                    <li>
                        <a href=""><span><i class="far fa-heart"></i></span> Wishlist</a>
                    </li>
                    <li>
                        <a href=""><span><i class="fas fa-sign-in-alt"></i></span> Login</a>
                    </li>
                </ul>
            </div>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fal fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item mega-menu">
                            <a href="#" class="nav-link">WOMEN <span><i class="fal fa-angle-down"></i></span></a>
                            <div class="mega-dropdown">
                                <div class="mega-content">
                                    <div class="mega-column">
                                        <h4>Clothing</h4>
                                        <a href="#">Active & Workout</a>
                                        <a href="#">Blazers</a>
                                        <a href="#">Cashmere</a>
                                        <a href="#">Coats & Jackets</a>
                                        <a href="#">Dresses</a>
                                        <a href="#">Jeans & Denim</a>
                                        <a href="#">Jumpsuits & Rompers</a>
                                        <a href="#">Lingerie, Bras, Panties & Hosiery</a>
                                        <a href="#">Loungewear</a>
                                        <a href="#">Maternity</a>
                                    </div>
                                    <div class="mega-column">
                                        <h4>Dresses</h4>
                                        <a href="#">Cocktail & Party</a>
                                        <a href="#">Evening & Formal Gowns</a>
                                        <a href="#">Summer Dresses</a>
                                        <a href="#">Wedding Guest</a>
                                        <h4>What To Wear For</h4>
                                        <a href="#">Back to Campus</a>
                                        <a href="#">Bride to Be</a>
                                        <a href="#">Going Out</a>
                                        <a href="#">Vacation</a>
                                    </div>
                                    <div class="mega-column">
                                        <h4>New & Noteworthy</h4>
                                        <a href="#">New Arrivals</a>
                                        <a href="#">Best Sellers</a>
                                        <a href="#">Most Wanted Styles: Under $200</a>
                                        <a href="#">The Linen Shop</a>
                                        <h4>Summer Essentials</h4>
                                        <a href="#">Butter Yellow</a>
                                        <a href="#">Cotton Poplin</a>
                                        <a href="#">Gingham</a>
                                        <a href="#">White Denim</a>
                                    </div>
                                    <div class="mega-column">
                                        <h4>Featured Designers</h4>
                                        <a href="#">Alice and Olivia</a>
                                        <a href="#">AQUA</a>
                                        <a href="#">Cinq à Sept</a>
                                        <a href="#">FARM Rio</a>
                                        <a href="#">FRAME</a>
                                        <a href="#">MOTHER</a>
                                        <a href="#">STAUD</a>
                                        <a href="#">Veronica Beard</a>
                                    </div>
                                    <div class="mega-column mega-image">
                                        <img src="images/bride.jpg" alt="Bride to Be">
                                        <p>Bride to Be</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                SHOES
                                <span><i class="fal fa-angle-down"></i></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                HANDBAGS
                                <span><i class="fal fa-angle-down"></i></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                JEWELRY & ACCESSORIES
                                <span><i class="fal fa-angle-down"></i></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                BEAUTY
                                <span><i class="fal fa-angle-down"></i></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                MEN
                                <span><i class="fal fa-angle-down"></i></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                KIDS
                                <span><i class="fal fa-angle-down"></i></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                SALE
                                <span><i class="fal fa-angle-down"></i></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                DESIGNERS
                                <span><i class="fal fa-angle-down"></i></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                EDITORIAL
                                <span><i class="fal fa-angle-down"></i></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                GIFTS
                                <span><i class="fal fa-angle-down"></i></span>
                            </a>
                        </li>
                    </ul>
                    <div class="form-inline">
                        <a href="#search"><i class="fal fa-search"></i></a>
                        <a href="#" class="cart">
                            <i class="fal fa-shopping-cart"></i><span>0</span>
                        </a>
                        <a href=""><i class="fal fa-bars"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>