<!DOCTYPE html>
<html lang="en">
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
</head>

<body>
<?php include "admin_check.php"?>
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
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav topleft">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo"ADMIN". $_SESSION["username"];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav topleft">
                    <li>
                        <a href="login_admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Camps <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li>
                            <a href="view_item.php"> View Camps</a>
                        </li>
                        <li class="active">
                            <a href="#"> Add Camp</a>
                        </li>
                        <li>
                            <a href="update_item.php"> Update Camp</a>
                        </li>
                        <li>
                            <a href="delete_item.php"> Delete Camp</a>
                        </li>
                    </ul>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Add Camp
                        </h1>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <div class="table-responsive">
                            <form action="add_item_check.php" method="GET">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                       		<tr>
                                       		<td><label>Camp_ID: </label></td>
                        					<td><input type="text" name="camp_id" id="camp_id"/></td>
                        					<tr>
                        						<td><label>Camp Name: </label></td>
                        						<td><input type="text" name="camp_name" id="camp_name"/></td>
                        					</tr>
                        					<tr>
                        						<td><label>Cost: </label></td>
                       							<td> <input type="text" name="cost" id="cost"/></td>
                                            </tr>
                                            <tr>
                        						<td><label>Address: </label></td>
                       							<td> <input type="text" name="address" id="address"/></td>
                                            </tr>
                                            <tr>
                        						<td><label>Phone Number: </label></td>
                       							<td> <input type="text" name="phone_number" id="phone_number"/></td>
                                            </tr>
                                            <tr>
                        						<td><label>Description: </label></td>
                       							<td> <input type="text" name="description" id="description"/></td>
                                            </tr>
                                            <tr>
                                                <td><label>Start_date: </label></td>
                                                <td> <input type="text" name="start_date" id="start_date"/></td>
                                            </tr>
                                            <tr>
                                                <td><label>End_date: </label></td>
                                                <td> <input type="text" name="end_date" id="end_date"/></td>
                                            </tr>
                        						<td><label>Image: </label></td>
                       							<td> <input type="text" name="image" id="image"/></td>
                                            </tr>
                                            <tr><td align="right"><input type="submit" value="Add Camp"/></td>
                                            <td align="left"><input type="reset" value="Reset"/></td></tr>
                                        </tbody>
                                    </table>
							 </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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
