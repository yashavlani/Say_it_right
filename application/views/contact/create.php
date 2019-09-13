<main>
    <section class="top-section">
        <div class="wrapper">
            <ul class="breadcrumb">
                <li>Home</li>
                <li><i class="fas fa-arrow-right"></i></li>
                <li>CONTACT</li>
            </ul>
            <h2>
                CONTACT US
            </h2>
        </div>
    </section>

    <section class="contact-section">
        <form name="myForm" method="POST">
            <div class="wrapper">
                <div class="row">
                    <div class="col-50">
                        <input type="text" name="fname" placeholder="Enter your name" required>
                        <span id="fname"></span>
                        <input type="text" name="lname" placeholder="Enter last name">
                        <span id="lname"></span>
                        <input type="text" name="telephone" placeholder="telephone" >
                        <span id="telephone"></span>

                        <!-- pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Phone number should be in ###-###-####" -->
                    </div>
    
                    <div class="col-50">
                        <textarea name="message" id="" cols="30" rows="7" placeholder="Enter message"></textarea>
                        <span id="message"></span>
                    </div>
                </div>
                <?php echo validation_errors(); ?>
                <button type="submit" name="SubmitButton" class="gradient pull-right btn" onclick="validateForm()">send message</button>
            </div>
        </form>
        </section>
</main>