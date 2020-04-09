<form method="POST" class="register-form" id="login-form">
    <div class="form-group">
        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
        <input class="form-control" placeholder="<?php echo lang('c_1'); ?>" name="email" id="email" type="text" maxlength="100" value="<?php echo clean_field($email); ?>" autofocus>
    </div>
    <div class="form-group">
        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
        <input class="form-control" placeholder="<?php echo lang('c_2'); ?>" name="password" id="password" type="password" value="demo1234">
    </div>
    <div class="form-group">
        
        <input name="remember" id="remember-me" class="agree-term" type="checkbox"<?php echo ($remember ? ' checked="checked"' : ''); ?>> &nbsp;<?php echo lang('c_3'); ?>
        <label for="remember" class="label-agree-term"><span><span></span></span>Remember me</label>
    </div>
    <div class="form-group form-button">
        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/><br><br>
        <!-- <figure><img src="images/ristekdikti.png" alt="" style="height: 100px;"> <img src="images/logo-baru.jpg" alt="" style="height: 100px;"></figure> -->
    </div>
</form>