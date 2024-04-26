<?php require_once('header-login.php'); ?>
<!-- login -->
<div class="--login">
    <img src="./assets/images/bg_login_top.png" class="bg bg-top" alt="bg" />
    <img src="./assets/images/bg_login_bottom.png" class="bg bg-bottom" alt="bg" />
    <form class="login-form" action="" method="POST" enctype="multiple/form-data">
        <div class="d-flex justify-content-center mb-5">
            <img src="./assets/images/logo_dr.png" class="logo" alt="logo" />
        </div>
        <div class="form-group">
            <label>Account</label>
            <input type="email" name="" placeholder="example@mail.com" class="form-control mb-4">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="" placeholder="password" class="form-control mb-4">
        </div>
        <div class="d-flex justify-content-end">
            <a href="" class="--forgot-p">Forgot Password ?</a>
        </div>
        <button type="submit" class="btn-login">Sign In</button>
    </form>
    <div class="box-term">
        <h3 class="t-dr">*DR = Diagnostic Radiology</h3>
        <p class="t-term">By continuing, you agree to Clicknext <a href="#">Terms of Service</a> and <br>
            acknowledge you've read our <a href="#">Privacy Policy</a></p>
    </div>
</div>