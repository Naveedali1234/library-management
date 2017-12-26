<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>@yield('title')</title>
        
        <!-- favicon -->
        <!-- <link rel="icon" type="img/jpeg" href="assets/img/favicon.jpeg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <link rel="stylesheet" type="text/css" href="assets/custom.css">
        <!-- <link rel="stylesheet" href="assets/css/font-awesome.css">
        
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css"> -->
        <!-- favicon -->
        <link rel="icon" type="img/jpeg" href="assets/img/favicon.jpeg">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/custom.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <!-- jQuery library -->
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap -->
        <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/js/bootstrap.js" rel="stylesheet">
        <link href="assets/js/jquery-3.1.1.min.js" rel="stylesheet"> -->
        <link rel="stylesheet" href="assets/css/styles.css" type="text/css">
        <!-- <link rel="stylesheet" href="assets/css/animated.css" type="text/css"> -->
        <link href="assets/js/main.js" >
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        
        <![endif]-->
        <script>
        $(function(){
        $(".preload").fadeOut(700,function(){
        $(".content").fadeIn(350);
        });
        });
        </script>
        <!-- nave bar -->
        <nav class="navbar navbar-inverse" style="background-color:#293a4a;">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Admin Panel</a>
                    <a class="navbar-brand" href="/" style="margin-top:-7px;"><input type="button" class="btn btn-primary" value="Home Page"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <!-- nav bar end -->
                
            </head>
            <body>
                <div class="container">
                    @yield('content')
                </div>
                
            </body>
        </html>