<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
	<title>Eventbox</title>
    <meta charset="utf-8">
    <link href="css\bootstrap.css" rel="stylesheet">
    <link href="css\bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="txt/css" href="bootstrap/css/bootstrap.css"></link>
    <link rel="stylesheet" type="txt/css" href="bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" type="txt/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/eventbox-logo.png" width="150px"/></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">                    
                    <li class="text-center">
                        <p class="navbar-text"><a href="scripts/php/login_form.php" class="navbar-link" >Sign In</a> </p>
                    </li>
                    <li align="center"> 
                        <p class="navbar-text"><a href="scripts/php/register_form.php" class="navbar-link">Sign Up For Free!</a></p>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    
    
    <section role="content">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
          <!-- Overlay -->
            <div class="overlay"></div>

          <!-- Indicators   -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>
        
          <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="hero">
                    <h3>Welcome to EventBox</h3>
                    <hgroup>
                        <h1>Fuel up your passion</h1>        
                        <h4> & let it burn within </h4>
                    </hgroup>
                    <a href="scripts/php/home.php" class="btn btn-hero btn-lg" role="button">Search Events!</a>
                </div>
                <div class="item slides active">
                    <div class="slide-1">

                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2">

                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3">

                    </div>
                </div>
           </div> 
        </div>
    </section>
</body>
</html>