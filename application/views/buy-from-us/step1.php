<main>
        <section class="products-section wrapper">
            <h2>
                <span>Buy From Us</span>
                Buy From Us
            </h2>
            <div class="products-container">
                <?php foreach ($products as $key => $product) { ?>
                <div class="product-card">
                    <div class="img-box">
                        <img src="<?php echo base_url("assets/images/" . $product["image"] . ".png") ?>" alt="">
                    </div>
                    <div class="text-box">
                        <span><?php echo $product["price"]; ?></span>
                        <p>
                            <?php echo $product["description"]; ?>
                        </p>
                        <a href="<?php echo base_url("buy-from-us/step2/" . $key); ?>" class="gradient btn">add to cart</a>
                    </div>

                </div>
                <?php } ?>

                <!-- <div class="product-card">
                    <div class="img-box">
                        <img src="<?php echo base_url("assets/images/taza2.png") ?>" alt="">
                    </div>
                    <div class="text-box">
                        <span>$24.99</span>
                        <p>
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="buy_from_us_2.html" class="gradient btn">add to cart</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="img-box">
                        <img src="<?php echo base_url("assets/images/taza3.png") ?>" alt="">
                    </div>
                    <div class="text-box">
                        <span>$24.99</span>
                        <p>
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="buy_from_us_2.html" class="gradient btn">add to cart</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="img-box">
                        <img src="<?php echo base_url("assets/images/franela1.jpg") ?>" alt="">
                    </div>
                    <div class="text-box">
                        <span>$24.99</span>
                        <p>
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="buy_from_us_2.html" class="gradient btn">add to cart</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="img-box">
                        <img src="<?php echo base_url("assets/images/franela2.jpg") ?>" alt="">
                    </div>
                    <div class="text-box">
                        <span>$24.99</span>
                        <p>
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="buy_from_us_2.html" class="gradient btn">add to cart</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="img-box">
                        <img src="<?php echo base_url("assets/images/franela3.jpg") ?>" alt="">
                    </div>
                    <div class="text-box">
                        <span>$24.99</span>
                        <p>
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="buy_from_us_2.html" class="gradient btn">add to cart</a>
                    </div>
                </div> -->
            </div>
        </section>
        <section class="subscribe-section view-cart-section">
            <div class="wrapper">
                <div class="text-box">
                    <h2>
                        View Shopping Cart
                    </h2>
                    <p>
                        You can see the products that you added to the cart
                    </p>
                </div>

                <div class="input-box pull-right">
                    <button type="submit" class="gradient">Submit</button>
                </div>
            </div>
        </section>
    </main>