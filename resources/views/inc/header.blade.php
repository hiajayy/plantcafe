<header>
        <!-- start header top -->
        <div class="header-top d-none d-md-block">
            <div class="container">
                <div class="cm-flex-center small">
                    <ul class="contact-info list-inline">
                        <li>
                            <a href="#"><i class="fas fa-phone-square-alt"></i> +91-9876543210</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-envelope"></i> info@plantcafe.com</a>
                        </li>
                    </ul>
                    <p class="mb-0 p-1"><i class="fas fa-truck"></i> Free shipping on order above ₹999</p>
                    <div>
                        <ul class="list-inline">
                            <!-- without login -->
                            <!-- <li><a href="#" class="p-1" data-toggle="modal" data-target="#form-wrapper">
                                <i class="fas fa-user"></i>
                                <span>Hi, Guest</span>
                            </a></li> -->

                            <!-- with login -->
                            <li class="dropdown">
                                <a href="#" class="p-1">
                                    <i class="fas fa-user"></i>
                                    <span>Hi, Jane Doe</span>
                                </a>
                                <ul class="dropdown-items">
                                    <li><a href="my-profile.html">My Profile</a></li>
                                    <li><a href="my-orders.html">My Order(s)</a></li>
                                    <li><a href="address.html">Address</a></li>
                                    <li><a href="notifications.html">Notification</a></li>
                                    <li><a href="#">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header top -->

        <div class="navbar">
            <div class="container position-relative">
                <div class="cm-flex-center w-md-100">
                    <button class="mobile-menu no-btn mr-0 mr-sm-3">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <a class="site-logo link" href="index.html">
                        <img src="{{asset('images/plantcafe.png')}}" alt="plantcafe">
                    </a>

                    <ul class="more-option list-inline d-md-none">
                        <li>
                            <a href="#" data-link="search">
                                <i class="fas fa-search"></i>
                                <span class="sr-only"> Search</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="wishlist.html" data-link="wishlist" class="wishlist">
                                <i class="fas fa-heart"></i>
                                <span class="sr-only">Wishlist</span>
                                <span class="count">4</span>
                            </a>
                        </li>
                        <li>
                            <a href="my-cart.html" data-link="cart" class="cart">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="sr-only">Cart</span>
                                <span class="count">5</span>
                            </a>
                        </li> -->
                    </ul>
                </div>

                <ul class="primary-menu d-none d-lg-flex">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">Placements
                            <i class="fas fa-sort-down d-none d-lg-inline-block"></i>
                            <div class="child-menu"><i class="fas fa-caret-up"></i></div>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item"><a class="nav-link" href="#">Bathroom</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Bed Room</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Hanging</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Living Room</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Office Desk</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Terrace & Balcony</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">Type
                            <i class="fas fa-sort-down d-none d-lg-inline-block"></i>
                            <div class="child-menu"><i class="fas fa-caret-up"></i></div>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item"><a class="nav-link" href="#">Lucky Bamboo</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Air Purifying Plants</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Bonsai Plants</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Flowering Plants</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Money Plants</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Terrariums</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Indoor Plants</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Outdoor Plants</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Seeds</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Hurbs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Garden Art</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="all-pots.html">Pots</a></li>
                </ul>

                <ul class="more-option list-inline d-none d-md-block">
                    <li>
                        <a href="#" data-link="search">
                            <i class="fas fa-search"></i>
                            <span class="sr-only"> Search</span>
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.html" data-link="wishlist" class="wishlist">
                            <i class="fas fa-heart"></i>
                            <span class="sr-only">Wishlist</span>
                            <span class="count">4</span>
                        </a>
                    </li>
                    <li>
                        <a href="my-cart.html" data-link="cart" class="cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="sr-only">Cart</span>
                            <span class="count">5</span>
                        </a>
                    </li>
                </ul>

                <!-- start wishlist popup -->
            <div class="shopping-cart-wrapper d-none d-md-block" id="wishlist-popup">
                <div class="shopping-cart">
                    <div class="cm-flex-center single-cart-header">
                        <h5>Wishlist</h5>
                        <button class="close no-btn">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="single-cart-body">
                        <div class="single-cart">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('images/art-botanical-cactus.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="product-details">
                                <h5><a href="#">Art Botanical Cactus</a></h5>
                                <p class="quantity">QTY: 1</p>
                                <p class="price">$105.00</p>
                            </div>
                            <button class="remove-item no-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <a href="#" class="button light-btn">Add to Cart</a>
                        </div>
                        <div class="single-cart">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('images/art-botanical-cactus.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="product-details">
                                <h5><a href="#">Art Botanical Cactus</a></h5>
                                <p class="quantity">QTY: 1</p>
                                <p class="price">$105.00</p>
                            </div>
                            <button class="remove-item no-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <a href="#" class="button light-btn">Add to Cart</a>
                        </div>
                        <div class="single-cart">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('images/art-botanical-cactus.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="product-details">
                                <h5><a href="#">Art Botanical Cactus</a></h5>
                                <p class="quantity">QTY: 1</p>
                                <p class="price">$105.00</p>
                            </div>
                            <button class="remove-item no-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <a href="#" class="button light-btn">Add to Cart</a>
                        </div>
                        <div class="single-cart">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('images/art-botanical-cactus.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="product-details">
                                <h5><a href="#">Art Botanical Cactus</a></h5>
                                <p class="quantity">QTY: 1</p>
                                <p class="price">$105.00</p>
                            </div>
                            <button class="remove-item no-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <a href="#" class="button light-btn">Add to Cart</a>
                        </div>
                    </div>

                    <div class="shopping-cart-footer">
                        <div class="shopping-btn-group">
                            <a href="#" class="button secondary-btn d-block">Go to Wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end wishlist popup -->

            <!-- start cart popup -->
            <div class="shopping-cart-wrapper d-none d-md-block" id="cart-popup">
                <div class="shopping-cart">
                    <div class="cm-flex-center single-cart-header">
                        <h5>Cart</h5>
                        <button class="close no-btn">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="single-cart-body">
                        <div class="single-cart">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('images/art-botanical-cactus.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="product-details">
                                <h5><a href="#">Art Botanical Cactus</a></h5>
                                <p class="quantity">QTY: 1</p>
                                <p class="price">$105.00</p>
                            </div>
                            <button class="remove-item no-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <div class="single-cart">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('images/art-botanical-cactus.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="product-details">
                                <h5><a href="#">Art Botanical Cactus</a></h5>
                                <p class="quantity">QTY: 1</p>
                                <p class="price">$105.00</p>
                            </div>
                            <button class="remove-item no-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <div class="single-cart">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('images/art-botanical-cactus.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="product-details">
                                <h5><a href="#">Art Botanical Cactus</a></h5>
                                <p class="quantity">QTY: 1</p>
                                <p class="price">$105.00</p>
                            </div>
                            <button class="remove-item no-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <div class="single-cart">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('images/art-botanical-cactus.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="product-details">
                                <h5><a href="#">Art Botanical Cactus</a></h5>
                                <p class="quantity">QTY: 1</p>
                                <p class="price">$105.00</p>
                            </div>
                            <button class="remove-item no-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <div class="single-cart">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('images/art-botanical-cactus.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="product-details">
                                <h5><a href="#">Art Botanical Cactus</a></h5>
                                <p class="quantity">QTY: 1</p>
                                <p class="price">$105.00</p>
                            </div>
                            <button class="remove-item no-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>

                    <div class="shopping-cart-footer">
                        <ul class="shoping-total cm-flex-center">
                            <li class="subtotal">Subtotal:</li>
                            <li class="total-price">$130.00</li>
                        </ul>
                        <div class="shopping-btn-group">
                            <a href="my-cart.html" class="button secondary-btn d-block">View Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end cart popup  -->
            </div>
        </div>
    </header>