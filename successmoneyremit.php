<?php
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	session_start();

	$track = $_SESSION['POST']['txtTrack'];
	$expected = $_SESSION['date'];
	unset($_SESSION['POST']);
	$result = mysql_query("select * from tblmoney_remit");
	while($rows = mysql_fetch_array($result)){
		$trackno = $rows['TrackNo'];
	}
?>
<html>
<head>
<title> Success! </title>
<style>
body{
	background-image:url("Assets/wallpaper1.png");
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#header{
	position: absolute;
	background:rgba(128,128,128,0.5);
	width: 1360px;
	height: 180px;
	border-radius: 0 0 15px 15px;
	float: left;
	margin: -5px -5px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
#panel1{
	position:absolute;
	background:#429bf4;
	width: 500px;
	height: 390px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 190px 455px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.button {
	background-color: white;
    color: black;
    border: 2px solid #4CAF50;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 20px;
}
.p1{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 35px;
    top: 250px;
	left: 530px;
}
.trackno1{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 360px;
	left: 540px;
}
.trackno2{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 360px;
	left: 690px;
}
.deldate1{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 410px;
	left: 540px;
}
.deldate2{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 410px;
	left: 765px;
}
.btnBack{
	position: absolute;
	top: 490px;
	left: 640px;
}
.back{
	background-color: darkgray;
    border: none;
	border-color: darkgray;
    color: white;
    padding: 15px 30px;
	border-radius: 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
	cursor: pointer;
}
.back:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>
</head>
<body>
<div id="header">
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
<div id="panel1">
</div>
<div class="p1">
<p> Transaction Successful! </p>
</div>
<div class="trackno1">
<p> Your Track No. : </p>
</div>
<div class="trackno2">
<p> <?php echo"$track"?> </p>
</div>
<div class="deldate1">
<p> Expected Delivery Date: </p>
</div>
<div class="deldate2">
<p> <?php echo"$expected"?> </p>
</div>
<div class= "btnBack">
<form method="POST" action="index.php">
<input type= "submit" value="Back to Home" class="back">
</form>
</div>
</body>
</html>