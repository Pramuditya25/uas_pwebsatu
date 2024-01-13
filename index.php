<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klayunan Sport</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="#" class="logo">KLAYUNAN SPORT </a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#products">products</a>
            <a href="#featured">featured</a>
            <a href="#review">review</a>
        </nav>
        <div class="icons">
            <a href="order.php" class="fas fa-shopping-cart"></a>
            <a href="login.php" class="fas fa-user"></a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="slide-container active">
            <div class="slide">
                <div class="content">
                    <span>nike red shoes</span>
                    <h3>nike metcon shoes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis
                        aut laboriosam earum dolorem iste atque.</p>
                    <a href="#products" class="btn">Cek Barang Mase</a>
                </div>
                <div class="image">
                    <img src="images/home-shoe-1.png" class="shoe" alt="">
                    <img src="images/home-text-1.png" class="text" alt="">
                </div>
            </div>
        </div>

        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <span>nike blue shoes</span>
                    <h3>nike metcon shoes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis
                        aut laboriosam earum dolorem iste atque.</p>
                    <a href="#products" class="btn">Cek Barang Mase</a>
                </div>
                <div class="image">
                    <img src="images/home-shoe-2.png" class="shoe" alt="">
                    <img src="images/home-text-2.png" class="text" alt="">
                </div>
            </div>
        </div>

        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <span>nike yellow shoes</span>
                    <h3>nike metcon shoes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis
                        aut laboriosam earum dolorem iste atque.</p>
                    <a href="#products" class="btn">Cek Barang Mase</a>
                </div>
                <div class="image">
                    <img src="images/home-shoe-3.png" class="shoe" alt="">
                    <img src="images/home-text-3.png" class="text" alt="">
                </div>
            </div>
        </div>
        <div id="prev" class="fas fa-chevron-left" onclick="prev()"></div>
        <div id="next" class="fas fa-chevron-right" onclick="next()"></div>
    </section>

    <!-- home section ends -->

    <!-- service section starts  -->

    <section class="service">

        <div class="box-container">

            <div class="box">
                <i class="fas fa-shipping-fast"></i>
                <h3>fast delivery</h3>
            </div>

            <div class="box">
                <i class="fas fa-undo"></i>
                <h3>10 days replacements</h3>
            </div>

            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24 x 7 support</h3>
            </div>

        </div>

    </section>

    <!-- service section ends -->

    <!-- products section starts  -->

    <section class="products" id="products">

        <h1 class="heading"> latest <span>products</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/product-1.png" alt="">
                <div class="content">
                    <h3>nike daybreak gray green</h3>
                    <div class="price">Rp 1.200.999 <span>Rp 1.500.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href= "order.php"
                        class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <img src="images/product-2.png" alt="">
                <div class="content">
                    <h3>nike experience run 9</h3>
                    <div class="price">Rp 1.300.999 <span>Rp 1.600.999</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href= "order.php"
                        class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <img src="images/product-3.png" alt="">
                <div class="content">
                    <h3>nike flex control TR04</h3>
                    <div class="price">Rp 1.200.999 <span>Rp 1.800.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href= "order.php"
                        class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <img src="images/product-4.png" alt="">
                <div class="content">
                    <h3>nike air zoom pegasus 37</h3>
                    <div class="price">Rp 1.500.000 <span>Rp 1.700.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href= "order.php"
                        class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <img src="images/product-5.png" alt="">
                <div class="content">
                    <h3>nike quest 3 mens</h3>
                    <div class="price">Rp 1.200.000 <span>Rp 1.500.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href= "order.php"
                        class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <img src="images/product-6.png" alt="">
                <div class="content">
                    <h3>nike hyperdunk</h3>
                    <div class="price">Rp 1.300.000 <span>Rp 1.700.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href= "order.php"
                        class="btn">add to cart</a>
                </div>
            </div>

        </div>

    </section>

    <!-- products section ends -->

    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> products </h1>

        <div class="row">
            <div class="image-container">
                <div class="small-image">
                    <img src="images/f-img-1.1.png" class="featured-image-1" alt="">
                    <img src="images/f-img-1.2.png" class="featured-image-1" alt="">
                    <img src="images/f-img-1.3.png" class="featured-image-1" alt="">
                    <img src="images/f-img-1.4.png" class="featured-image-1" alt="">
                </div>
                <div class="big-image">
                    <img src="images/f-img-1.1.png" class="big-image-1" alt="">
                </div>
            </div>
            <div class="content">
                <h3>new nike airmax shoes black pink</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas
                    illum iure libero quis fuga commodi. Autem.</p>
                <div class="price">Rp 1.599.999 <span>Rp 1.799.999</span></div>
                <a href= "order.php"
                    class="btn">add to cart</a>
            </div>
        </div>

        <div class="row">
            <div class="image-container">
                <div class="small-image">
                    <img src="images/f-img-2.1.png" class="featured-image-2" alt="">
                    <img src="images/f-img-2.2.png" class="featured-image-2" alt="">
                    <img src="images/f-img-2.3.png" class="featured-image-2" alt="">
                    <img src="images/f-img-2.4.png" class="featured-image-2" alt="">
                </div>
                <div class="big-image">
                    <img src="images/f-img-2.1.png" class="big-image-2" alt="">
                </div>
            </div>
            <div class="content">
                <h3>new nike airmax shoes white blue</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas
                    illum iure libero quis fuga commodi. Autem.</p>
                <div class="price">Rp 1.599.999 <span>Rp 1.799.999</span></div>
                <a href= "order.php"
                    class="btn">add to cart</a>
            </div>
        </div>

        <div class="row">
            <div class="image-container">
                <div class="small-image">
                    <img src="images/f-img-3.1.png" class="featured-image-3" alt="">
                    <img src="images/f-img-3.2.png" class="featured-image-3" alt="">
                    <img src="images/f-img-3.3.png" class="featured-image-3" alt="">
                    <img src="images/f-img-3.4.png" class="featured-image-3" alt="">
                </div>
                <div class="big-image">
                    <img src="images/f-img-3.1.png" class="big-image-3" alt="">
                </div>
            </div>
            <div class="content">
                <h3>new nike airmax shoes black yellow</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas
                    illum iure libero quis fuga commodi. Autem.</p>
                <div class="price">Rp 1.599.999 <span>Rp 1.799.999</span></div>
                <a href= "order.php"
                    class="btn">add to cart</a>
            </div>
        </div>

    </section>

    <!-- featured section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic1.png" alt="">
                <h3>Adelia</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur
                    ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores?
                    Exercitationem, unde rem.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/pic2.png" alt="">
                <h3>Sutarman</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur
                    ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores?
                    Exercitationem, unde rem.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/pic3.png" alt="">
                <h3>Sutijan</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur
                    ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores?
                    Exercitationem, unde rem.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- newsletter section ends -->

    <!-- footer section  -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#products">products</a>
                <a href="#featured">featured</a>
                <a href="#review">review</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/PrAmdtya">Facebook</a>
                <a href="https://www.instagram.com/pramdtya.25/">Instagram</a>
                <a href="https://api.whatsapp.com/send?phone=62895360596776">Whatsapp</a>
                </p>
                <a href="https://github.com/Pramuditya25">Github</a>
            </div>
            <div class="credit">created by <span> Pramuditya </span> | all rights reserved</div>
        </div>
    </section>

    <!-- custom js file link  -->
    <script src="script.js"></script>

</body>
</html>