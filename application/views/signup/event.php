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
                        Welcome to the event log
                    </h5>

                    <form name="eventForm" method="POST">

                    <input type="text" placeholder="Enter your name" name="fname" required><div id="fname_event"></div>

                    <input type="text" placeholder="Enter last name" name="lname" required><div id="lname_event"></div>

                    <input type="text" placeholder="Enter email" name="email" required><div id="email_event"></div>

                    <input type="text" placeholder="Enter password" name="password" required><div id="password_event"></div>
    
                    <?php echo validation_errors(); ?>

                    <button type="submit" class="gradient pull-right btn" name="SubmitButton" onclick=validateEvent()>send</button>

                    </form>
                    
                </div>
            </div>
        </section>
    </main>