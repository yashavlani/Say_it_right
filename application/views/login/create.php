<main>
        <section class="top-section">
            <div class="wrapper">
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li><i class="fas fa-arrow-right"></i></li>
                    <li>Login</li>
                </ul>
                <h2>
                    LOGIN
                </h2>
            </div>
        </section>

        <section class="login-section">
            <?php echo form_open('login/process'); ?>
            <div class="login-card clearfix">
                <input type="text" name="email" id="" placeholder="Enter Email">
                <input type="text" name="password" id="" placeholder="Enter Password">
                <?php echo validation_errors(); ?>
                <button type="submit" class="gradient pull-right btn">send</button>
            </div>
            </form>
        </section>
    </main>