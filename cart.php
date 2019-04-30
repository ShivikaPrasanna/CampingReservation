<!DOCTYPE html>
<?php
include 'logincheck.php';

$username = $_SESSION["username"];
?>
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

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        .topleft, body {
            
        }
        .black {
            color: black;
        }
        #res-cart {
            width: 900px;
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
                <a class="navbar-brand" href="index.php">Camper | Home Page</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav topleft">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome<?php echo " ".$username;?><b class="caret"></b></a>
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
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="search.php"><i class="fa fa-fw fa-search"></i> Search</a>
                    </li>
                    <li>
                        <a href="view.php">View All Camps</a>
                    </li>
                    <li class="active">
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
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cart
                            <small>Review and checkout </small>
                        </h1>
                        <div>
                        <h2>My Cart</h2>
                            <div class="table-responsive">
                            <table id ='res-cart' class="table table-bordered table-hover table-striped">

                            </table>

                    </div>
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
    <script>
        $(document).ready(function(){

            $('#res-cart').hide();
            $.ajax({
                url:"get_cart.php",
                dataType: "json",
                type:"GET",
                success:function(cart){

                    $('#res-cart').empty();
                    $('#res-cart').html('<tr><th>Camp ID</th><th>Camp Name</th><th>Start Date</th><th>End Date</th><th>Remove</th></tr>');

                    for(var i = 0; i < cart.length; i++){

                        $('#res-cart').append('<tr><td>'+cart[i]['camp_id']+'</td><td>'+cart[i]['camp_name']+'</td><td>'+cart[i]['start_date']+'</td><td>'+cart[i]['end_date']+'</td><td><button class="btn btn-primary">Remove</button></td></tr>');
                    }
                    $('#res-cart').append('<tr><td><button class="btn btn-success">Checkout</button></td></tr>');
                    $('#res-cart').show();
                },
                error:function(){
                    //alert("Error loading file");
                    $(location).attr("href", 'login.html');
                    }
                });

            /*
            * Ajax call for delete from Cart
            */
            $('#res-cart').on('click', '.btn-primary', function(){
                var camp_id = $(this).closest('tr').find('td:eq(0)').text();
                $.ajax({
                    url: 'delete_from_cart.php',
                    type:'GET',
                    dataType: 'text',
                    data: {camp_id},
                    success: function(result){
                        window.alert(result);
                    }
                });

                location.reload();
            });

            /*
            * Ajax call for checkout
            */
            $('#res-cart').on('click', '.btn-success', function(){
                var camp_id = $(this).closest('tr').find('td:eq(0)').text();
                var camp_name = $(this).closest('tr').find('td:eq(1)').text();
                //console.log("Item ID: " + item_id + " Quantity: " + quantity);
                $.ajax({
                    url: 'item_loan.php',
                    type:'GET',
                    dataType: 'text',
                    //data: {item_id},
                    data: {camp_id:camp_id, camp_name:camp_name},
                    success: function(result){
                        window.alert(result);
                    }
                });
                //return false;
                location.reload();
            });

            });
    </script>
</body>

</html>
