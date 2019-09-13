<main>
        <section class="settings-section">
            <div class="login-card">
                <div class="header">
                    Welcome to your profile

                </div>
                <form name="settingsForm" method="post" action="settings/update" enctype="multipart/form-data">
                    <div class="content clearfix">
                        <div class="row">
                            <div class="col-left">
                                <div class="img-wrap">
                                    <img src="<?php if ($bio['profile_img']) echo base_url("assets/images/". $bio['profile_img']); else echo base_url("assets/images/user.jpg"); ?>" alt="">
                                </div>
                                <input class="btn gradient" placeholder="change image" name="profile_img" type="file" id="image_picker" value="<?php echo $bio['profile_img']; ?>" style="visibility:hidden">
                                <label for="image_picker" class="btn gradient">Choose Image</label>
                            </div>
                            <div class="col-right">
                                <div class="row">
                                    <div class="col-50">
                                        <input type="text" name="fname_settings" id="" placeholder="Enter your name" required value="<?php echo $bio['fname']; ?>"><div id="fname_settings"></div>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" name="lname_settings" id="" placeholder="Enter Last name" required value="<?php echo $bio['lname']; ?>"><div id="lname_settings"></div>
                                    </div>
                                </div>
                                <input type="text" name="place_work" id="" placeholder="Enter place work" value="<?php echo $bio['place_work']; ?>">
                                <input type="text" name="school" id="" placeholder="Enter School" value="<?php echo $bio['school']; ?>">
                                <input type="text" name="email_settings" id="" placeholder="Enter email" required value="<?php echo $bio['email']; ?>"><div id="email_settings"></div>
                                <input type="password" readonly name="password_settings" id="" placeholder="Enter password" required value="<?php echo $bio['password']; ?>"><div id="password_settings"></div>
                                <span>Change password</span>
                            </div>
                        </div>
                        <button type="submit" name="setting_submit" class="btn gradient pull-right" onclick=validateSettings()>save changes</button>
                    </div>
                </form>
            </div>
        </section>
    </main>