<?php
$url = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$path = parse_url($url, PHP_URL_PATH);
$file= basename($path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bonsaisolutionsinc</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/logo1.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i> 9999999999</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
<!--                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form> --->
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo1.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <?php if($file=='index.php') { ?>class="active" <?php } ?>><a href="index.php">Home</a></li>
                        <li <?php if($file == 'about-us.php') { ?>class="active dropdown" <?php } else { ?> class="dropdown" <?php } ?>>
							<a href="#"  class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
                                <li><a href="about-us.php">Who is Bonsai</a></li>
                                <li><a href="#">Our Background</a></li>
							</ul>
						</li>
                        <li <?php if($file=='services.php' || $file=='php-service.php' || $file=='mobile-app.php' || $file=='web-app.php') { ?>class="active dropdown" <?php } else { ?> class="dropdown" <?php } ?>>
                            <a href="javascript:void(0);" onclick="window.location.href='services.php'" class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="php-service.php">PHP Services</a></li>
                                <li><a href="mobile-app.php">Mobile App Development</a></li>
                                <li><a href="web-app.php">Web Development</a></li>
                                <li><a href="app-dev.php">Application Development</a></li>
                                <li><a href="seo.php">SEO Services</a></li>
                                <li><a href="uiux.php">UI/UX</a></li>
                                <li><a href="staffing.php">Staffing</a></li>
								<li><a href="cloud.php">Cloud Management</a></li>
                            </ul>
                        </li>
						<li <?php if($file=='career.php') { ?>class="active" <?php } ?> ><a href="career.php">careers</a></li>
                        <li <?php if($file=='portfolio.php') { ?>class="active" <?php } ?> ><a href="portfolio.php">Portfolio</a></li>
                       <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.php">Blog Single</a></li>
                                <li><a href="pricing.php">Pricing</a></li>
                                <li><a href="404.php">404</a></li>
                                <li><a href="shortcodes.php">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.php">Blog</a></li>   -->
                        <li <?php if($file=='contact-us.php') { ?>class="active" <?php } ?> ><a href="contact-us.php">Contact Us</a></li>
<!--						<li>
							<form id="search-form_3">
								<input type="text" class="search_3"/>
								<input type="submit" class="submit_3" value="Search" />
							</form>
						</li> --->
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->