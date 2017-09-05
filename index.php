<!DOCTYPE html>
<html lang="en">
<head>

    <title>pwp-project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container {
            padding: 80px 120px;
        }
        .person {
            border: 10px solid transparent;
            margin-bottom: 25px;
            width: 80%;
            height: 80%;
            opacity: 0.7;
        }
        .person:hover {
            border-color: #f1f1f1;
        }
         div.gallery {
             border: 1px solid #ccc;
         }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px){
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px){
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">D&M Development</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </div>
</nav>
<div class="container text-center">
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
                <img src="" alt="Explore">
                <div class="carousel-caption">
                    <h3>Explore</h3>
                    <p>Explore beyond your horizons.</p>
                </div>
            </div>

            <div class="item">
                <img src="img/twitter-facebook-together-exchange-of-information-147413.jpeg" alt="Inspire">
                <div class="carousel-caption">
                    <h3>Inspire</h3>
                    <p>Inspire the people around you.</p>
                </div>
            </div>

            <div class="item">
                <img src="img/" alt="Discover">
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
        <div class="row">
            <div class="col-sm-4">
                <p>mySQL & Data Design, PHP, HTML, CSS, UI/UX, JavaScript, Angular & Node
                </p>
                <img src="" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Practice active listening, empathy, patience and consistency, adaptability, clear communication.</p>
                <img src="" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Creative, unique, positive.</p>
                <img src="" class="img-responsive" style="width:100%" alt="Image">
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center">Contact</h3>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid bg-4 text-center">
        <p>D&M Deveploment <a href="https://">www.mbojorquez.net</a></p>
    </footer>

</body>
</html>