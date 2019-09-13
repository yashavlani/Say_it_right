<main>
        <section class="top-section">
            <div class="wrapper">
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li><i class="fas fa-arrow-right"></i></li>
                    <li>Sign Up</li>
                </ul>
                <h2>
                    SIGN UP
                </h2>
            </div>
        </section>

        <section class="signup-section">
            <div class="login-card clearfix">
                <h2>Select the type of user</h2>
                <div class="text-center">
                    <a href="<?php echo base_url('signup/individual'); ?>" class="gradient btn">individual</a>
                    <a href="<?php echo base_url('signup/event'); ?>" class="gradient btn">event</a>
                    <a href="<?php echo base_url('signup/business'); ?>" class="gradient btn">business</a>
                </div>

                <hr>

                <div class="content-box">
                    <h5>
                        Welcome to the individual registration
                    </h5>

                    <form name="individualForm" method="POST">

                        <input type="text" placeholder="Enter your name" name="fname"><div id="fname_individual"></div>

                        <input type="text" placeholder="Enter last name" name="lname"><div id="lname_individual"></div>

                        <input type="text" placeholder="Enter place work" name="place_work">

                        <input type="text" placeholder="Enter school" name="school">

                        <input type="text" placeholder="Enter email" name="email"><div id="email_individual"></div>

                        <input type="text" placeholder="Enter password" name="password"><div id="password_individual"></div>
    
                        <?php echo validation_errors(); ?>

                        <button type="submit" name="submitSignup" class="gradient pull-right btn" onclick=validateIndividual()>send</button>

                    </form>
                    
                </div>
            </div>
        </section>
    </main>