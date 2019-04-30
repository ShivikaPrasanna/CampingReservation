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
    <link href="css/bootstrap.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.php">Camper</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav topleft">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome <?php echo " ".$username;?><b class="caret"></b></a>
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
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-search"></i>View All Camps</a>
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
                    <div class="col-lg-12">

                        <div id="danger-zone" class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <h3>View All Camps</h3>
                                <div>
                                    <table id ='res-gen-search' class="table table-bordered table-hover table-striped">
                                    </table>
                                </div>

                            </div>
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


        $.ajax({
            url:"view_camps.php",
            dataType: "json",
            type:"GET",
            success:function(campList){

                $('#res-gen-search').empty();
                $('#res-gen-search').html('<tr><th>camp_id</th><th>camp_name</th><th>cost</th><th>start_date</th><th>end_date</th><th>View Camp</th><th>Register</th></tr>');
                for(var i = 0; i < campList.length; i++){
                    $('#res-gen-search').append('<tr><td>'+campList[i]['camp_id']+'</td><td>'+campList[i]['camp_name']+'</td><td>'+campList[i]['cost']+'</td><td>'+campList[i]['start_date']+'</td><td>'+campList[i]['end_date']+'</td><td>'+ '<button style="background-color:#0BBA36; color:white;" class="btn btn-view btn-sm"><span>View Description</span></button></td>' +'<td><button class="btn btn-success btn-sm"><span>Register</span></button>'+'</td></tr>');
                }
                $('#res-gen-search').show();
            },
            error:function(){
                alert("Error loading file");
                }
            });

         /*
        * Ajax call for cart
        */

        $('#danger-zone').on('click', '.btn-success', function(){
        var camp_id = $('td:first', $(this).parents('tr')).text();
        var camp_name = $('td:nth-child(2)',$(this).parents('tr')).text();
        var start_date = $('td:nth-child(4)',$(this).parents('tr')).text();
        var end_date = $('td:nth-child(5)',$(this).parents('tr')).text();
        //console.log("Add to cart was clicked"+ item_id);
        $.ajax({
            url: 'add_to_cart.php',
            type:'GET',
            dataType: 'text',
            data: {camp_id:camp_id, camp_name:camp_name,start_date:start_date,end_date:end_date},
            success: function(message){
                alert(message);

            },
            error:function(){
                alert("Error loading file");
            }
        });
        //return false;
        });

        /*
        View Description Ajax call
        */
        $('#danger-zone').on('click', '.btn-view', function(){
        var camp_id = $('td:first', $(this).parents('tr')).text();
        var camp_name = $('td:nth-last-child(3)',$(this).parents('tr')).text();

        //console.log("Add to cart was clicked"+ item_id);
        $.ajax({
            url: 'view_description.php',
            type:'GET',
            dataType: 'text',
            data: {camp_id:camp_id,camp_name:camp_name},
            success: function(message){
                document.location.href='view_camp_description.php';
            },
            error:function(){
                alert("Error loading file");
            }
        });
        //return false;
        });


 });






    </script>

</body>

</html>
