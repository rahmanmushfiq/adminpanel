<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Cubo Software Solution</title>
        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- js validation  -->
        <script type="text/javascript">
            var fname,email,phn = false;
            function check_firstname(e){
                if (e.value.length > 0){
                    fname = true;
                    firstname_msg.innerHTML = "First Name is OK";
                }
                else{
                    fname = false;
                    firstname_msg.innerHTML = "First Name MUST BE filled out";
                }
            }
            function check_email(e) {
                    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(e.value)) {
                    email = true;
                    email_msg.innerHTML = "E-mail is OK";
                    }
                    else {
                    email = false;
                    email_msg.innerHTML = "Email Address format is Invalid!";
                    }
                }
                function check_phone(e) {
                var numbers = /^[0-9]{11}$/;
                    if (e.value.match(numbers)) {
                        phn = true;
                        phone_msg.innerHTML = "Phone number is OK!";
                    }
                    else {
                    phn = false;
                    phone_msg.innerHTML = 'ONLY numeric and 11 digit is allowed';
                    }
                }
        </script>
    </head>
    <body>
        <script src="/js/validation.js"></script>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="dashboard.php">Cubo Software Solution</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Tushar <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="change_password.php"><i class="fa fa-fw fa-user"></i> Change Password</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="log_out.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>