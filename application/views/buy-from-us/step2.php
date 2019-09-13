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

                        <a href="buy-from-us/step2" class="gradient btn">add to cart</a>
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

    <div class="modal fade show cart-modal" style="padding-right: 15px; display: block;">
        <div class="modal-dialog modal-dialog-centered">
        <?php echo form_open('buyFromUs/add'); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add to Cart</h5>
                    <button class="close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-left">
                            <img src="<?php echo base_url("assets/images/" . $item["image"] . ".png"); ?>" alt="">
                        </div>
                        <div class="col-right">
                            <span>Product quantity</span>
                            <?php 
                            echo form_hidden('id', $item["id"]);
                            echo form_hidden('name', $item["image"]);
                            echo form_hidden('price', $item["price"]);
                            ?>
                            <input type="text" name="quantity" id="">
                            <span class="red-note">Note: Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Add to cart </button>
                </div>
            </div>
        <?php echo form_close(); ?>
        </div>
    </div>