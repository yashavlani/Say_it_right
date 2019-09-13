<main>
        <section class="products-section checkout-section wrapper">
            <h2>
                <span>Buy From Us</span>
                Buy From Us
            </h2>
            <div class="login-card">
            <?php echo form_open('buyFromUs/submit'); ?>
                <div class="row">
                    <div class="col-50">
                        <h3>Contact Information</h3>
                        <input type="text" name="email" id="" placeholder="Enter Email">
                        <h3>Shiping Address</h3>
    
                        <div class="row">
                            <div class="col-50">
                                <input type="text" name="fname" id="" placeholder="Enter your name">
                            </div>
                            <div class="col-50">
                                <input type="text" name="lname" id="" placeholder="Enter Last name">
                            </div>
                        </div>
                        <input type="text" name="address1" id="" placeholder="Enter Address">
                        <input type="text" name="address2" id="" placeholder="Enter Apartment, suite, etc">
                        <input type="text" name="address3" id="" placeholder="Enter City">
    
                        <div class="row">
                            <div class="col-50">
                                <div class="select-wrapper">
                                    <select name="" id="">
                                        <option value="English" selected>English</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="English">English</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-50">
                                <input type="text" name="address4" id="" placeholder="Enter Postal Code">
                            </div>
                        </div>
    
                        <button class="btn gradient pull-right">Send message</button>
    
                    </div>
                    <div class="col-50">
                        <?php
                        // All values of cart store in "$cart".
                        if ($cart = $this->cart->contents()): ?>
                        <table>
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Units</th>
                                <th>Price</th>
                            </thead>
                            <tbody>
                                <?php 
                                    $grand_total = 0;
                                    foreach ($cart as $item): 
                                ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url("assets/images/" . $item["name"] . ".png"); ?>" alt="">
                                    </td>
                                    <td>
                                        <?php echo $item["name"] ?>
                                        <input type="hidden" name="product" value="<?php echo $item["name"]; ?>" />                                        
                                    </td>
                                    <td>
                                        <?php echo $item["qty"] ?>
                                        <input type="hidden" name="quantity" value="<?php echo $item["qty"]; ?>" />                                        
                                    </td>
                                    <td>
                                        $ <?php echo $item["price"] ?>
                                        <input type="hidden" name="price" value="<?php echo $item["price"]; ?>" />
                                    </td>
                                    <?php $grand_total += ($item["qty"] * $item["price"]); ?>
                                </tr>
                                <?php endforeach; ?>
    
                                <!-- <tr>
                                    <td>
                                        <img src="img/franela1.jpg" alt="">
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        flannel
                                    </td>
                                    <td>
                                        $51.99
                                    </td>
                                </tr> -->
                                <tr class="total-row">
                                    <td>
                                        Total
                                    </td>
                                    <td></td>
                                    <td>
                                        USD
                                    </td>
                                    <td>
                                        $ <?php echo $grand_total; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
            </div>
        </section>
    </main>