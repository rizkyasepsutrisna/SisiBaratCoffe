<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url('index'); ?>"></a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#" data-nav-section="welcome">Home</a></li>
                <li><a href="#" data-nav-section="menu">Menu</a></li>
                <li><a href="#" data-nav-section="reservation">Reservation</a></li>
                <li><a href="#" data-nav-section="events">Events</a></li>
                <li><a href="#" data-nav-section="contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="flexslider" data-section="welcome">
    <ul class="slides">
        <li style="background-image: url(assets/img/slideshow1.jpeg)" class="overlay" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                            <h1 class="primary-heading">Coffe</h1>
                            <h3 class="secondary-heading">With Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(assets/img/slideshow2.jpeg)" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                            <h1 class="primary-heading">Dine</h1>
                            <h3 class="secondary-heading">With Us</h3>
                        </div>
                    </div>
                </div>
            </div>

        </li>
        <li style="background-image: url(assets/img/slideshow3.jpeg)" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                            <h1 class="primary-heading">Enjoy</h1>
                            <h3 class="secondary-heading">With Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>

<section class="probootstrap-section probootstrap-bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-center probootstrap-animate">
                <div class="probootstrap-heading dark">
                    <h1 class="primary-heading">Discover</h1>
                    <h3 class="secondary-heading">Sisi Barat</h3>
                    <span class="seperator">* * *</span>
                </div>
                <p>Sisi Barat Coffee, sebuah Cafe yang sangat cocok untuk tempat nongkrong dan menghabiskan waktu bersama keluarga, kerabat dan pasangan kalian. Dengan hadirnya Sisi Barat Coffee ini maka semakin bertambah tujuan hangout atau nongkrong kalian di bogor.</p>
                <p><a href="https://www.instagram.com/sisibaratcoffee/" class="probootstrap-custom-link">About Us</a></p>
            </div>
            <div class="col-md-6 col-md-push-1 probootstrap-animate">
                <p><img src="assets/img/discover.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></p>
            </div>
        </div>
        <!-- END row -->
    </div>
</section>

<section class="probootstrap-section-bg overlay" style="background-image: url(assets/img/slideshow3.jpeg);" data-stellar-background-ratio="0.5" data-section="menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center probootstrap-animate">
                <div class="probootstrap-heading">
                    <h2 class="primary-heading">Discover</h2>
                    <h3 class="secondary-heading">Coffe And Non Coffe</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- probootstrap-bg-white -->
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="probootstrap-cell-retro">
                <div class="half">

                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/minuman.jpg);"></div>
                        <div class="text text-center">
                            <h3>Es Kopi Sisi</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 21,000</p>
                        </div>
                    </div>
                    <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/minuman.jpg);"></div>
                        <div class="text text-center">
                            <h3>Es Kopi Sisi Barat</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 23,000</p>
                        </div>
                    </div>
                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/minuman.jpg);"></div>
                        <div class="text text-center">
                            <h3>Es Kopi Strawberry</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 23.000</p>
                        </div>
                    </div>
                </div>
                <div class="half">
                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/minuman.jpg);"></div>
                        <div class="text text-center">
                            <h3>Cappucino</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 25.000</p>
                        </div>
                    </div>
                    <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/minuman.jpg);"></div>
                        <div class="text text-center">
                            <h3>Caramel Latte</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 25.000</p>
                        </div>
                    </div>
                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/minuman.jpg);"></div>
                        <div class="text text-center">
                            <h3>Hazelnut Latte</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 25.000</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section-bg overlay" style="background-image: url(assets/img/slideshow3.jpeg);" data-stellar-background-ratio="0.5" data-section="menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center probootstrap-animate">
                <div class="probootstrap-heading">
                    <h2 class="primary-heading">Discover</h2>
                    <h3 class="secondary-heading">Our Meals</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- probootstrap-bg-white -->
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="probootstrap-cell-retro">
                <div class="half">
                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/makanan.jpg);"></div>
                        <div class="text text-center">
                            <h3>Nasi Goreng</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 25.000</p>
                        </div>
                    </div>
                    <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/makanan.jpg);"></div>
                        <div class="text text-center">
                            <h3>Nasi Goreng Special</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 30.000</p>
                        </div>
                    </div>
                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/makanan.jpg);"></div>
                        <div class="text text-center">
                            <h3>Mie Goreng Sibar</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 25.000</p>
                        </div>
                    </div>
                </div>
                <div class="half">
                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/makanan.jpg);"></div>
                        <div class="text text-center">
                            <h3>Chicken Karage</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 28.000</p>
                        </div>
                    </div>
                    <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/makanan.jpg);"></div>
                        <div class="text text-center">
                            <h3>Chicken Wings</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 27.000</p>
                        </div>
                    </div>
                    <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                        <div class="image" style="background-image: url(assets/img/makanan.jpg);"></div>
                        <div class="text text-center">
                            <h3>French Fries</h3>
                            <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                            <p class="price">Rp. 21.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
<section class="probootstrap-section-bg overlay" style="background-image: url(img/hero_bg_4.jpg);" data-stellar-background-ratio="0.5" data-section="menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center probootstrap-animate">
                <div class="probootstrap-heading">
                    <h2 class="primary-heading">Discover</h2>
                    <h3 class="secondary-heading">Our Menu</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="probootstrap-section probootstrap-bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="menus">
                    <li>
                        <figure class="image"><img src="img/img_square_1.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
                        <div class="text">
                            <span class="price">$22.99</span>
                            <h3>Fried Potatoes with Garlic</h3>
                            <p>Crab / Potatoes / Rice</p>
                        </div>
                    </li>
                    <li>
                        <figure class="image"><img src="img/img_square_2.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
                        <div class="text">
                            <span class="price">$22.99</span>
                            <h3>Tuna Roast Source</h3>
                            <p>Crab / Potatoes / Rice</p>
                        </div>
                    </li>
                    <li>
                        <figure class="image"><img src="img/img_square_3.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
                        <div class="text">
                            <span class="price">$22.99</span>
                            <h3>Roast Beef (4 sticks)</h3>
                            <p>Crab / Potatoes / Rice</p>
                        </div>
                    </li>
                    <li>
                        <figure class="image"><img src="img/img_square_4.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
                        <div class="text">
                            <span class="price">$22.99</span>
                            <h3>Salted Fried Chicken</h3>
                            <p>Crab / Potatoes / Rice</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="menus">
                    <li>
                        <figure class="image"><img src="img/img_square_5.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
                        <div class="text">
                            <span class="price">$22.99</span>
                            <h3>Baked Potato Pizza</h3>
                            <p>Crab / Potatoes / Rice</p>
                        </div>
                    </li>
                    <li>
                        <figure class="image"><img src="img/img_square_1.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
                        <div class="text">
                            <span class="price">$22.99</span>
                            <h3>Fried Potatoes with Garlic</h3>
                            <p>Crab / Potatoes / Rice</p>
                        </div>
                    </li>
                    <li>
                        <figure class="image"><img src="img/img_square_2.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
                        <div class="text">
                            <span class="price">$22.99</span>
                            <h3>Salted Fried Chicken</h3>
                            <p>Crab / Potatoes / Rice</p>
                        </div>
                    </li>
                    <li>
                        <figure class="image"><img src="img/img_square_3.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
                        <div class="text">
                            <span class="price">$22.99</span>
                            <h3>Tuna Roast Source</h3>
                            <p>Crab / Potatoes / Rice</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
-->
<section class="probootstrap-section-bg overlay" style="background-image: url(assets/img/reservasi1.jpeg);" data-stellar-background-ratio="0.5" data-section="reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center probootstrap-animate">
                <div class="probootstrap-heading">
                    <h2 class="primary-heading">Booking</h2>
                    <h3 class="secondary-heading">Reserve A Table</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section probootstrap-bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 probootstrap-animate">
                <form method="post" class="probootstrap-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="people">How Many People</label>
                                <div class="form-field">
                                    <i class="icon icon-chevron-down"></i>
                                    <select name="people" id="people" class="form-control">
                                        <option value="#">1 people</option>
                                        <option value="#">2 people</option>
                                        <option value="#">3 people</option>
                                        <option value="#">4+ people</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <div class="form-field">
                                    <i class="icon icon-calendar"></i>
                                    <input type="text" id="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="time">Time</label>
                                <div class="form-field">
                                    <i class="icon icon-clock"></i>
                                    <input type="text" id="time" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <div class="form-field">
                                    <i class="icon icon-user2"></i>
                                    <input type="text" id="name" class="form-control" placeholder="Your full name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="form-field">
                                    <i class="icon icon-mail"></i>
                                    <input type="text" id="email" class="form-control" placeholder="Your email address">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <div class="form-field">
                                    <i class="icon icon-phone"></i>
                                    <input type="text" id="phone" class="form-control" placeholder="Your phone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-lg btn-primary btn-block">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section-bg overlay" style="background-image: url(assets/img/reservasi1.jpeg);" data-stellar-background-ratio="0.5" data-section="events">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center probootstrap-animate">
                <div class="probootstrap-heading">
                    <h2 class="primary-heading">Upcoming</h2>
                    <h3 class="secondary-heading">Our Events</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 probootstrap-animate">
                <div class="probootstrap-block-image">
                    <figure><img src="assets/img/event1.jpg" alt="event"></figure>
                    <div class="text">
                        <span class="date">June 29, 2017</span>
                        <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                        <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 probootstrap-animate">
                <div class="probootstrap-block-image">
                    <figure><img src="assets/img/event1.jpg" alt="event"></figure>
                    <div class="text">
                        <span class="date">June 29, 2017</span>
                        <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                        <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 probootstrap-animate">
                <div class="probootstrap-block-image">
                    <figure><img src="assets/img/event1.jpg" alt="event"></figure>
                    <div class="text">
                        <span class="date">June 29, 2017</span>
                        <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                        <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="probootstrap-section probootstrap-bg-white" data-section="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-center probootstrap-animate">
                <div class="probootstrap-heading dark">
                    <h1 class="primary-heading">Contact</h1>
                    <h3 class="secondary-heading">Let's Chat</h3>
                </div>
                <p>Voluptatibus quaerat laboriosam fugit non Ut consequatur animi est molestiae enim a voluptate totam natus modi debitis dicta impedit voluptatum quod sapiente illo saepe explicabo quisquam perferendis labore et illum suscipit</p>
            </div>
            <div class="col-md-6 col-md-push-1 probootstrap-animate">
                <form method="post" class="probootstrap-form">
                    <div class="form-group">
                        <label for="c_name">Your Name</label>
                        <div class="form-field">
                            <input type="text" id="c_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c_email">Your Email</label>
                        <div class="form-field">
                            <input type="text" id="c_email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c_message">Your Message</label>
                        <div class="form-field">
                            <textarea name="c_message" id="c_message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="c_submit" id="c_submit" value="Send Message" class="btn btn-primary btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>-->

<section class="probootstrap-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 probootstrap-animate">
                <div class="probootstrap-footer-widget">
                    <h3>Locations</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="https://goo.gl/maps/sXsMjNvzS1aUeNU17">
                                <p> Jl. Batu Hulung, RT.02/RW.02, Balungbangjaya Kec. Bogor Bar., Kota Bogor, Jawa Barat 16116</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 probootstrap-animate">
                <div class="probootstrap-footer-widget">
                    <h3>Open Hours</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Weekday <br> 15.00 - 10.00 pm</p>
                        </div>
                        <div class="col-md-4">
                            <p>Weekend <br> 15.00 - 00.00 am</p>
                        </div>
                        <div class="col-md-4">
                            <p>Available Call Us <br> 0822-9983-6153 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="probootstrap-copyright" data-section="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="copyright-text">&copy; 2021 Sisi Barat. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>