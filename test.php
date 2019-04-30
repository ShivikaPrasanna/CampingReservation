<html>
<head>
<style type="text/css">

#content
{
width: 900px;
margin: 0 auto;
font-family:Arial, Helvetica, sans-serif;
}
.page
{
float: right;
margin: 0;
padding: 0;
}
.page li
{
list-style: none;
display:inline-block;
}
.page li a, .current
{
display: block;
padding: 5px;
text-decoration: none;
color: #8A8A8A;
}
.current
{
font-weight:bold;
color: #000;
}
.button
{
padding: 5px 15px;
text-decoration: none;
background: #333;
color: #F3F3F3;
font-size: 13PX;
border-radius: 2PX;
margin: 0 4PX;
display: block;
float: left;
}
</style>
</head>
<body>
<div id="content">
<?php
include 'get_db_con.php';

$start=0;
$limit=10;

if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}

$query=$conn ->query("select * from item LIMIT $start, $limit");
echo "<ul>";
while($query2=$query->fetch_assoc())
{
echo "<li>".$query2["title"]."</li>";
}
echo "</ul>";
$rows=$conn->query("select * from item")->num_rows;
echo $rows;
$total=ceil($rows/$limit);
echo $total;
if($id>1)
{
echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
}
if($id!=$total)
{
echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
}

echo "<ul class='page'>";
for($i=1;$i<=$total;$i++)
{
if($i==$id) { echo "<li class='current'>".$i."</li>"; }

else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
}
echo "</ul>";
?>
</div>
</body>
</html>
