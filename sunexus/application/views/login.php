<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SUnexus-Login</title>
        <link rel="icon" href="<?php echo base_url() ?>sunexus/assets/img/favicon.ico">
        <link href="<?php echo base_url() ?>sunexus/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>sunexus/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>sunexus/assets/css/login.css" rel="stylesheet"> -->  
    </head>
    <body>
        <form action="#" id="login_form" method="post">
            <div class="group">
                <input type="text" name="user_name" id="user_name"><span class="highlight"></span><span class="bar"></span>
                <label>Username</label>
            </div>
            <div class="group">
                <input type="password" name="passwd" id="passwd"><span class="highlight"></span><span class="bar"></span>
                <label>Password</label>
            </div>
            <button id="login_submit" type="button">Login</button>
            <p style="text-align:center"><a href="#"><u>Forgot Password</u></a></p>
        </form>
         <footer>
            <a href="#"><img src="<?php echo base_url() ?>sunexus/assets/img/sunexus.svg"></a>
            <p>SUnexus</p>
        </footer>
    </body>
    <script src="<?php echo base_url() ?>sunexus/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>sunexus/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>sunexus/assets/js/login.js"></script>
</html>