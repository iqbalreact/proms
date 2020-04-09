<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>



    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure>
                            <img src="<?php echo base_url();?>assets/img/untan.png" align="center" style="height: 50px;" alt="sing up image"> 
                            <h4>Universitas Tanjungpura</h4>
                            <img src="<?php echo base_url();?>assets/img/work.svg" alt="sing up image">
                        </figure>
                        <!-- <a href="register.html" class="signup-image-link">Register Akun</a> -->
                    </div>
                    
                    <?php if(isset($heading_for_dialog) || isset($title_for_layout)) : ?>
                        <h4 class="login-box-msg"><?php echo (isset($heading_for_dialog) ? $heading_for_dialog : $title_for_layout); ?></h4>
                    <?php endif; ?>

                    <?php $gl_success = isset($success) ? $success : $this->session->flashdata('success'); ?>
                    <?php if(!empty($gl_success)) :?>
                        <div class="alert alert-success"><?php echo $gl_success; ?></div>
                    <?php endif; ?>

                    <?php $gl_error = isset($error) ? $error : $this->session->flashdata('error'); ?>

                    <?php if(!empty($gl_error)) :?>
                        <div class="alert alert-danger"><?php echo $gl_error; ?></div>
                    <?php endif; ?>

                    <?php echo (isset($content_for_layout) ? $content_for_layout : ''); ?>


                    <div class="signin-form">
                        <h3 align="center">Sistem Monitoring dan Pelaporan Pekerjaan UPT.TIK</h3> <br>
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
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url();?>public/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>public/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
            $(".copy-login").click(function () {
                $("#email").val($(this).data("email"));
                $("#password").val($(this).data("password"));
            });
    </script>
</body>
</html>
