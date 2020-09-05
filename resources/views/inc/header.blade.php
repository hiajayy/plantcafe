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
                                <ul class="my-account-options dropdown-items">
                                    <li><a href="/my-profile"><i class="fas fa-user mr-2"></i> My Profile</a></li>
                                    <li><a href="/my-orders"><i class="fas fa-folder mr-2"></i> My Order(s)</a></li>
                                    <li><a href="/address"><i class="fas fa-home mr-2"></i> Address</a></li>
                                    <li><a href="/notifications"><i class="fas fa-bell mr-2"></i> Notification</a></li>
                                    <li><a href="#"><i class="fas fa-sign-out-alt mr-2"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header top -->

    <div class="navbar header-nav">
            <div class="container position-relative">
                <div class="cm-flex-center w-100">
                    <div class='d-flex'>
                        <button class="mobile-menu no-btn mr-3">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <a class="site-logo link" href="/">
                            <img src="{{asset('images/plantcafe.png')}}" alt="plantcafe">
                        </a>
                    </div>

                    <div class="d-none d-lg-flex">
                        <!-- start nav -->
                        @include('inc.primary-nav')
                        <!-- end nav -->
                    </div>

                    <ul class="more-option list-inline">
                        <li>
                            <a href="#" data-link="search">
                                <i class="fas fa-search"></i>
                                <span class="sr-only"> Search</span>
                            </a>
                        </li>
                        <li class='d-none d-md-inline-block'>
                            <a href="/wishlist" data-link="wishlist" class="wishlist">
                                <i class="fas fa-heart"></i>
                                <span class="sr-only">Wishlist</span>
                                <span class="count">4</span>
                            </a>
                        </li>
                        <li>
                            <a href="/my-cart" data-link="cart" class="cart">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="sr-only">Cart</span>
                                <span class="count">5</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
</header>