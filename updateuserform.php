<?php
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
?>
<html>
<head>
<title> Update Staff Information </title>
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
#panel{
	position: absolute;
	background:#429bf4;
	width: 300px;
	height: 520px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 10px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background:rgba(128,128,128,1.0);
	width: 1050px;
	height: 520px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 310px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.fields{
	position:absolute;
	top:230px;
	left:40px;
}
.table1{
	position: absolute;
	top:240px;
	left:330px;
}
table{
	border-collapse: collapse;
	background-color: gray;
	font-weight: bold;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 5px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel">
</div>
<div id="panel1">
</div>
<div class = "fields">
<form name = "form" method = "post" action = "updateusercode.php">
<tr>
<td><font face="Helvetica" color="white">ID:</font><br>
<td><input type = "text" name = "txtID" id = "txtID"><p>
<td><font face="Helvetica" color="white">Last Name:</font><br>
<td><input type = "text" name = "txtLname" id = "txtLname"><p>
<p><font face="Helvetica" color="white">First Name:</font><br> 
<td><input type = "text" name = "txtFname" id = "txtFname"><p>
<p><font face="Helvetica" color="white">Middle Initial:</font><br>
<td><input type = "text" name = "txtMname" id = "txtMname"><p>
<p><font face="Helvetica" color="white">Contact No.:</font><br>
<td><input type = "text" name = "txtContactNo" id = "txtContactNo"><p>
<p><font face="Helvetica" color="white">Address:</font><br>
<td><input type = "text" name = "txtAddress" id = "txtAddress"><p>
<p><font face="Helvetica" color="white">Email:</font><br>
<td><input type = "text" name = "txtEmail" id = "txtEmail"><p>
<p><font face="Helvetica" color="white">Username:</font><br>
<td><input type = "text" name = "txtUsername" id = "txtUsername"><p>
<p><font face="Helvetica" color="white">Password:</font>
<td><input type = "password" name = "txtPassword" id = "txtPassword"><p>
<p><font face="Helvetica" color="white">Status:</font>
<td><input type = "text" name = "txtStatus" id = "txtStatus"><p>
<input type = "submit" value = "Update Staff">
<input type = "reset" value = "Clear All Fields">
</form>
</div>
<div class = "table1">
	<table>
	<tr>
	<th> ID </th>
	<th> Last Name </th>
	<th> First Name </th>
	<th> Middle Initial </th>
	<th> Contact No </th>
	<th> Address </th>
	<th> Email </th>
	<th> Username </th>
	<th> Password </th>
	<th> Status </th></tr>

	<?php
	$sql = mysql_query("select * from tblstaff");
	while( $rows=mysql_fetch_array($sql)){
			$id = $rows['ID'];
			$lname = $rows['Lname'];
			$name = $rows['Fname'];
			$mname = $rows['MI'];
			$contact = $rows['ContactNo'];
			$address = $rows['Address'];
			$email = $rows['Email'];
			$username = $rows['Username'];
			$passw = $rows['Password'];
			$status = $rows['Status'];
	
	
	echo "<tr><td align = 'center'> $id </td>";
	echo "<td align = 'center'> $lname </td>";
	echo "<td align = 'center'> $name </td>";
	echo "<td align = 'center'> $mname </td>";
	echo "<td align = 'center'> $contact </td>";
	echo "<td align = 'center'> $address </td>";
	echo "<td align = 'center'> $email </td>";
	echo "<td align = 'center'> $username </td>";
	echo "<td align = 'center'> $passw </td>";
	echo "<td align = 'center'> $status </td></tr>";
	
	}
	?>
</table>
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
</body>
</html>