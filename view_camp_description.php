<!DOCTYPE html>
<html lang="en">
<?php
 session_start();
 include 'logincheck.php';
 $username = $_SESSION["username"];
 $camp_name = $_SESSION["camp_name"];
 $image = $_SESSION["image"];
 $description = $_SESSION["description"];
 $address = $_SESSION["address"];
 $phone_number = $_SESSION["phone_number"];
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Camp Rock</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .topleft, body {
            
        }
        .black {
            color: black;
        }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top topleft" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index_login.php">Camper | Home Page</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav topleft">
                        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome <?php echo " ".$username;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav topleft">
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="search.php"><i class="fa fa-fw fa-search"></i> Search</a>
                    </li>
                    <li>
                        <a href="view.php"> View All Camps</a>
                    </li>
                    <li>
                        <a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <h1>Camp Name: <?php
                                echo "".$camp_name."";
                                echo "<br>";
                    ?>  </h1>

                </div>
                <div class="row">

                    <?php
                                echo '<img src = "Images/'.$image.'" height ="350px" width="700px" ';
                                echo "<br>";
                    ?>
                </div>
                <div class="row">
                    <h3>Description: </h3>
                    <?php
                                echo "".$description."";
                                echo "<br>";
                    ?>
                </div>
                <div class="row">
                    <h3>Address: </h3>
                    <?php
                                echo "".$address."";
                                echo "<br>";
                    ?>
                </div>
                <div class="row">
                    <h3>Phone Number: </h3> <?php
                                echo "".$phone_number."";
                    ?>

                </div>


            </div>


                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
