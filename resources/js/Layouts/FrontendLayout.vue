<script setup>

import '../../css/frontend/frontend.css';



</script>

<template>
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    Cooking<i class="fas fa-bread-slice ms-1"></i>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classes.html">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <form action="#search" method="GET" class="d-flex search-header ms-lg-2">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>

        <slot />


     <!-- instagram-feeds -->
     <div class="projects" id="special">
        <div class="projects-grids">
            <div class="istagram-feeds">
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="images/blog-s1.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="images/blog-s2.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="images/blog-s6.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="images/blog-s4.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="images/blog-s5.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="images/blog-s3.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="images/blog-s7.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="images/blog-s8.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="w3l-footer-16">
        <div class="footer-top-16 py-5">
            <div class="container pt-lg-5 pt-md-4 pt-2 pb-lg-4 pb-2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h3>About Us</h3>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nerihe re impedit quo
                            minus id qd maxime aceat facere.</p>
                        <div class="columns-2 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 column ps-xl-5 mt-sm-0 mt-4">
                        <h3>Quick Link</h3>
                        <ul class="footer-gd-16">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="classes.html">Classes</a></li>
                            <li><a href="#support">Support</a></li>
                            <li><a href="#blog">Blog Posts</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-6 column ps-xl-5 pe-lg-0 mt-lg-0 mt-4">
                        <h3>Contact Info</h3>
                        <ul class="footer-contact-list">
                            <li class=""><i class="fas fa-map-marker-alt"></i><span>10001, 5th Avenue,
                                    #32841 block, USA</span></li>
                            <li class="mt-2"><i class="fas fa-phone-alt"></i><span><a href="tel:+12 23456790">+1223
                                        456 790</a></span></li>
                        </ul>
                        <div class="footer-botm mt-3">
                            <h6>Open Hours:</h6>
                            <p class="mt-2"><span>Mon – Sat</span> : 9Am – 6Pm</p>
                            <p> <span>Sunday</span> : CLOSED</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 column mt-lg-0 mt-4 ps-xl-5">
                        <h3>Subscribe</h3>
                        <form action="#" class="subscribe d-flex" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button class="button-style"><span class="fa fa-paper-plane"
                                    aria-hidden="true"></span></button>
                        </form>
                        <p class="mt-4">Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-section text-center py-4">
            <p class="copy-text py-1">&copy; 2022 Cooking. All rights reserved. Design by <a
                    href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
            </p>
        </div>
    </footer>

</template>

<style scoped>

</style>