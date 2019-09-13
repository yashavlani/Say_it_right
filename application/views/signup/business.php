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
                    <a href="signup_individual.php" class="gradient btn">individual</a>
                    <a href="signup_event.php" class="gradient btn">event</a>
                    <a href="signup_business.php" class="gradient btn">business</a>
                </div>

                <hr>

                <div class="content-box">
                    <h5>
                        Welcome to business records
                    </h5>

                    <form name="businessForm" method="POST">

                        <div class="radio-wrap">

                            <h5>type of Business:</h5>
                            <input type="radio" name="type_of_business" id="university" required value="1">
                            <label for="university">University</label>
        
                            <input type="radio" name="type_of_business" id="company" value="2">
                            <label for="company">Company</label>

                        </div>

                        <input type="text" placeholder="Enter last name" name="lname" required><div id="lname_business"> </div>

                        <input type="text" placeholder="Enter email" name="email" required><div id="email_business"> </div>

                        <input type="text" placeholder="Enter password" name="password" required><div id="password_business"> </div>

                        <button type="submit" class="gradient pull-right btn" onclick=validateBusiness() name="SubmitButton">send</button>

                    </form>
                    
                </div>
            </div>
        </section>
    </main>