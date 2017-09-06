<!DOCTYPE html>
<html lang="en">
<head>

    <title>pwp-project</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <link type="text/css" href="css/style.css" rel="stylesheet" />
    <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Form, Additional Methods, Validate -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

    <!-- Your JavaScript Form Validator -->
    <script src="js/form-validate.js"></script>

    <!-- Google reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!--empty area for form error/success output-->
    <div class="row">
        <div class="col-xs-12">
            <div id="output-area"></div>
        </div>
    </div>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#myPage">HOME</a></li>
                <li><a href="#about us">ABOUT US</a></li>
                <li><a href="#contact us">CONTACT US</a></li>


            <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
        </div>
    </div>
</nav>


<div id="home" class="container text-center">
    <h2>D&M Development</h2>
    <p><em>We love our clients</em></p>
    <p>We want to help you create the best website ever.</p>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/pexels-photo-443356.jpeg" alt="Explore">
                <div class="carousel-caption">
                    <h3>Explore</h3>
                    <p>Explore beyond your horizons.</p>
                </div>
            </div>

            <div class="item">
                <img src="img/pexels-photo-414564.jpeg" alt="Inspire">
                <div class="carousel-caption">
                    <h3>Inspire</h3>
                    <p>Inspire the people around you.</p>
                </div>
            </div>

            <div class="item">
                <img src="img/pexels-photo-398532.jpeg" alt="Discover">
                <div class="carousel-caption">
                    <h3>Discover</h3>
                    <p>Discover your best.</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid bg-3 text-center">
        <h3>About us</h3><br>
        <div id="ABOUT US" class="row">
            <div class="col-sm-4">
                <p> WE are Skilled in mySQL & Data Design, PHP, HTML, CSS, UI/UX, JavaScript, Angular & Node
                </p>
                <img src="img/twitter-facebook-together-exchange-of-information-147413.jpeg" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>We practice active listening, empathy, and patience. We believe in consistency, adaptability, and clear communication.</p>
                <img src="img/sunset-hands-love-woman.jpg" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>We help you be Creative,and unique.
                    We believe in positivity, and can help you grow your business to the best.
                    </p>
                <img src="img/pexels-photo-355948.jpeg" class="img-responsive" style="width:100%" alt="Image">
            </div>
        </>
    </div>
    <form id="contact-form" action="php/mailer.php" method="post">
        <div class="form-group">
        <div id="CONTACT US" class="container">
        <h3 class="text-center">Contact Us</h3>
        <p class="text-center"><em>We love our clients!</em></p>
        <div class="row test">
            <div class="col-md-4">
                <p> Drop us a note.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>Albuquerque, NM</p>
                <p><span class="glyphicon glyphicon-phone"></span>Phone:5053121330</p>
                <p><span class="glyphicon glyphicon-envelope"></span>Email: mbojorquez2007@gmail.com</p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                        <!-- reCAPTCHA -->
                        <div class="g-recaptcha" data-sitekey="6Lelqy8UAAAAAFHKJqIl3yLd1bSki2bMFNMQ1rNJ"></div>

                        <button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
                        <button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
    </form>

    <!--empty area for form error/success output-->
    <div class="row">
        <div class="col-xs-12">
            <div id="output-area"></div>
        </div>
    </div>
</div>
</div>




    <footer class="container-fluid bg-4 text-center">
        <p>D&M Deveploment <a href="https://">www.mbojorquez.net</a></p>
    </footer>

</body>
</html>