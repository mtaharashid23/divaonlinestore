<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="topBar">
            <p>
                <marquee>Free Shipping on all orders to USA . Use Code and checkout</marquee>
            </p>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="img">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">shop</a>
                        </li>
                        <li class="nav-item drop-down">
                            <a class="nav-link" href="">jewelry</a>
                            <ul>
                                <li><a href="earrings.php">Earrings</a></li>
                                <li><a href="shop.php">Rings</a></li>
                                <li><a href="necklace.php">Necklace</a></li>
                                <li><a href="bracelet.php">Bracelets</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">faq</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact us</a>
                        </li>
                    </ul>
                    <div class="form-inline">
                        <a href="#search"><i class="fal fa-search"></i></a>
                        <a href="#"><i class="fal fa-user"></i></a>
                        <a href="#"><i class="fal fa-heart"></i></a>
                        <a href="#" class="cart"><i class="fal fa-shopping-cart"></i><span>$0.00</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>