<?php
session_unset();
session_destroy();?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Camp Rock</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link href="css/stylish-portfolio.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <style>
            footer.footsie {
                background-color: black;
                color: white;
                padding: 20px;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <!-- Navigation -->
        <!-- Header -->
        <div width="100%">
            <h1 style="font-style: italic; font-weight: 800; color: green; text-align: center; font-size: 50px; background-color: darkseagreen; margin: 0; padding: 30px 0px;">  Camp Rock Reservations </h1> <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
            <nav id="sidebar-wrapper">
                <ul class="sidebar-nav"> <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                    <li class="sidebar-brand"> <a href="login.html" onclick=$( "#menu-close").click();> Login </a> </li>
                    <li> <a href="#top" onclick=$( "#menu-close").click();>Home</a> </li>
                    <li> <a href="#about" onclick=$( "#menu-close").click();>About</a> </li>
                    <li> <a href="#contact" onclick=$( "#menu-close").click();>Contact</a> </li>
                </ul>
            </nav>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"> <img class="d-block w-100" src="Images/camp1.jpg" alt="First slide"> </div>
                    <div class="carousel-item"> <img class="d-block w-100" src="Images/hiking.jpg" alt="Second slide"> </div>
                    <div class="carousel-item"> <img class="d-block w-100" src="Images/biking.jpg" alt="Third slide"> </div>
                    <div class="carousel-item"> <img class="d-block w-100" src="Images/frontpage3.jpg" alt="Fourth slide"> </div>
                    <div class="carousel-item"> <img class="d-block w-100" src="Images/canoe.jpg" alt="Fifth slide"> </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>
        </div>

        <!-- About -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Whether you want to glamp on a cliff above the ocean or sleep in a tent deep in the forest, camping season is upon us. But one of the hardest parts of camping— wherever you like to be— is finding that perfect campground. The most popular campsites near metro areas or in picturesque national parks can book up months in advance, and there’s nothing worse than pulling up to your destination only to find the campground full. </br>

                    <br>So without any further ado, Lets get you a camp ground through Camp Rock Reservation</h2> </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Footer -->
        <footer class="footsie">
            <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1 text-center">
                            <p>Contact Camp Rock Reservations</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-phone fa-fw"></i> (111)-222-3333</li>
                                <li><i class="fa fa-envelope-o fa-fw"></i>camprockreservation@utdallas.edu</li>
                                <li>Note: Reservations need to be done prior to camp day. On-the-spot reservations cannot be done.</li>
                            </ul>
                            <hr class="small">
                            <p class="text-muted">Indhu Pathmanathan | Shivika Prasanna | Vaishnavi Bhosale </p>
                        </div>
                    </div>
                </div>
            </section> <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
        </footer>



        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script>
            // Closes the sidebar menu
            $("#menu-close").click(function (e) {
                e.preventDefault();
                $("#sidebar-wrapper").toggleClass("active");
            });
            // Opens the sidebar menu
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#sidebar-wrapper").toggleClass("active");
            });
            // Scrolls to the selected menu item on the page
            $(function () {
                $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
            //#to-top button appears after scrolling
            var fixed = false;
            $(document).scroll(function () {
                if ($(this).scrollTop() > 250) {
                    if (!fixed) {
                        fixed = true;
                        // $('#to-top').css({position:'fixed', display:'block'});
                        $('#to-top').show("slow", function () {
                            $('#to-top').css({
                                position: 'fixed'
                                , display: 'block'
                            });
                        });
                    }
                }
                else {
                    if (fixed) {
                        fixed = false;
                        $('#to-top').hide("slow", function () {
                            $('#to-top').css({
                                display: 'none'
                            });
                        });
                    }
                }
            });
        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

    </html>
