<?php
	session_start();
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	
	$username = $_SESSION['user'];
	$password = $_SESSION['password'];
	
	$show = mysql_query("Select Lname,Fname from tblstaff where Username ='$username'");
	$rows = mysql_fetch_array($show);
	$lname1 = $rows['Lname'];
	$fname = $rows['Fname'];
	echo "<p class=welcome> Welcome: $fname $lname1 </p>";
	
?>
<html>
<head>
<title> Create Package Delivery </title>
<style>
body{
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
}
.panel3{
	position: absolute;
	top: 10px;
    left: 0px;
    background: #edeff1;
    width: 1358px;
    height: 950px;
	margin: 130px -10px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel{
	position: absolute;
	background:#429bf4;
	width: 510px;
	height: 865px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 60px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background:lightgray;
	width: 710px;
	height: 300px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 570px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel11{
	position: absolute;
	background:lightgray;
	width: 710px;
	height: 370px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 500px 570px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.fields{
	position:absolute;
	top:230px;
	left:100px;
}
.table1{
	position: absolute;
	top:240px;
	left:600px;
}
.table2{
	position: absolute;
	top:535px;
	left:600px;
	width: 305px;
}
table{
	border-collapse: collapse;
	background-color: lightgray;
	font-weight: bold;
    width: 220%;
}
th, td {
    text-align: left;
    padding: 8px;
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
	top: -40px;
	left: 10px;
}
.fields2{
	position:absolute;
	top:567px;
	left:300px;
}
.house{
	width: 60px;
}
.street{
	width: 70px;
}
.barangay{
	width: 80px;
}
.city{
	width: 80px;
}
.province{
	width: 90px;
}
.create{
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
.create:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.reset{
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
.reset:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btnCancel{
	position: absolute;
	top: 1015px;
	left: 460px;
}
.cancel{
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
.cancel:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text] {
    width: 25%;
    padding: 12px 10px;
    margin: 2px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    height: 30px;
    outline: none;
}
input[type=text]:focus {
    border: 3px solid #555;
}
.viewinc{
	position: absolute;
	top: 21%;
	left: 8%;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: #429bf4;
    font-size: 30px;
    line-height: 30px;
}
.menubar{
  position: absolute;
  top: 2px;
  left: 350px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background:rgba(66,155,244,0.8);
}

li {
    float: left;
}


li a, .dropbtn_remits {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown_remits:hover .dropbtn_remits {
    background-color: rgba(128,128,128,0.9);
}

li.dropdown_remits {
    display: inline-block;
}

.dropdown-content_remits {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content_remits a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content_remits a:hover {background-color: rgba(128,128,128,0.5);}

.dropdown_remits:hover .dropdown-content_remits {
    display: block;
}
li a, .dropbtn_packages {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown_packages:hover .dropbtn_packages {
    background-color: rgba(128,128,128,0.9);
}

li.dropdown_packages {
    display: inline-block;
}

.dropdown-content_packages {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content_packages a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content_packages a:hover {background-color: rgba(128,128,128,0.5);}

.dropdown_packages:hover .dropdown-content_packages {
    display: block;
}
.welcome{
	position: absolute;
	top: 80px;
	left: 1100px;
	font-size: 14px;
	font-family: Verdana;
	font-weight: bold;
	color: #429bf4;
}
</style>
</head>
<body>
<div id="header">
</div>
<div class="panel3">
</div>
<div id="panel">
</div>
<div id="panel1">
</div>
<div id="panel11">
</div>
<div class = "fields">
<form name = "form" method = "post" action = "createpackagereceipt_staff.php">
<tr>
<td><font face="Helvetica" color="white">Consignor:</font><br>
<td><input type = "text" name = "txtConsignor" id = "txtConsignor"><p>
<p><font face="Helvetica" color="white">Consignor Address:</font><br> 
<td><input type = "text" name = "txtConsignorHouse" id = "txtConsignorHouse" placeholder="House" class="house">
<input type = "text" name = "txtConsignorStreet" id = "txtConsignorStreet" placeholder="Street" class="street">
<input type = "text" name = "txtConsignorBarangay" id = "txtConsignorBarangay" placeholder="Barangay" class="barangay"><br>
<input type = "text" name = "txtConsignorCity" id = "txtConsignorCity" placeholder="City" class="city">
<input type = "text" name = "txtConsignorProvince" id = "txtConsignorProvince" placeholder="Province" class="province"><p>
<p><font face="Helvetica" color="white">Consignor Email:</font><br> 
<td><input type = "text" name = "txtConsignorEmail" id = "txtConsignorEmail"><p>
<p><font face="Helvetica" color="white">Consignor Contact No.:</font><br> 
<td><input type = "text" name = "txtConsignorNo" id = "txtConsignorNo"><p>
<p><font face="Helvetica" color="white">Consignee:</font><br>
<td><input type = "text" name = "txtConsignee" id = "txtConsignee"><p>
<p><font face="Helvetica" color="white">Consignee Address:</font><br> 
<td><input type = "text" name = "txtConsigneeHouse" id = "txtConsigneeHouse" placeholder="House" class="house">
<input type = "text" name = "txtConsigneeStreet" id = "txtConsignorStreet" placeholder="Street" class="street">
<input type = "text" name = "txtConsigneeBarangay" id = "txtConsigneeBarangay" placeholder="Barangay" class="barangay"><br>
<input type = "text" name = "txtConsigneeCity" id = "txtConsigneeCity" placeholder="City" class="city">
<input type = "text" name = "txtConsigneeProvince" id = "txtConsigneeProvince" placeholder="Province" class="province"><p>
<p><font face="Helvetica" color="white">Consignee Email:</font><br>
<td><input type = "text" name = "txtConsigneeEmail" id = "txtConsigneeEmail"><p>
<p><font face="Helvetica" color="white">Consignee Contact No.:</font><br>
<td><input type = "text" name = "txtConsigneeNo" id = "txtConsigneeNo"><p>
<p><font face="Helvetica" color="white">Branch:</font><br>
<td><select type = "choice" name = "txtBranch" id = "txtBranch"><p>
<option> NCR </option>
<option> N. LUZON </option>
<option> S. LUZON </option>
<option> VISAYAS </option>
<option> MINDANAO </option></select><p>
<p><font face="Helvetica" color="white">Size:</font><br>
<td><select type = "choice" name = "txtKilo" id = "txtKilo"><p>
<option> KB Small </option>
<option> KB Medium </option>
<option> KB Large </option>
<option> KB Extra Large </option></select><p>
<p><font face="Helvetica" color="white">Declared Value:</font><br>
<td><input type = "text" name = "txtDeclaredValue" id = "txtDeclaredValue"><p>
<input type = "submit" value = "Submit Transaction" class="create">
<input type = "reset" value = "Reset" class="reset"></tr>
</form>
</div>
<div class = "table1">
	<table>
	<tr>
	<th> Product </th>
	<th> KBs </th>
	<th> KBm </th>
	<th> KBl </th>
	<th> KBxl </th></tr>
	
	<tr><td align = "center"> Origin: NCR </td>
	<tr><td align = "center"> NCR </td>
	<td align = "center"> 200 </td>
	<td align = "center"> 325 </td>
	<td align = "center"> 600 </td>
	<td align = "center"> 1235 </td></tr>
	<tr><td align = "center"> N.LUZON </td>
	<td align = "center"> 255 </td>
	<td align = "center"> 400 </td>
	<td align = "center"> 800 </td>
	<td align = "center"> 1425 </td></tr>
	<tr><td align = "center"> S.LUZON </td>
	<td align = "center"> 255 </td>
	<td align = "center"> 400 </td>
	<td align = "center"> 800 </td>
	<td align = "center"> 1425 </td></tr>
	<tr><td align = "center"> VISAYAS </td>
	<td align = "center"> 265 </td>
	<td align = "center"> 435 </td>
	<td align = "center"> 870 </td>
	<td align = "center"> 1558 </td></tr>
	<tr><td align = "center"> MINDANAO </td>
	<td align = "center"> 265 </td>
	<td align = "center"> 435 </td>
	<td align = "center"> 870 </td>
	<td align = "center"> 1558 </td></tr>
	</table>
</div>
<div class = "table2">
	<table>
	<tr>
	<th> Principal Amount </th>
	<th> Money Remittance Fee </th>
	<th> Principal Amount </th>
	<th> Money Remittance Fee </th></tr>
	
	<tr><td align = "center"> 100 </td>
	<td align = "center"> Php 6.00 </td>
	<td align = "center"> 801 - 900 </td>
	<td rowspan = '2' align = "center"> Php 50.00 </td></tr>
	<tr><td align = "center"> 101 - 200 </td>
	<td align = "center"> Php 15.00 </td>
	<td align = "center"> 901 - 1,000 </td></tr>
	<tr><td align = "center"> 201 - 300 </td>
	<td align = "center"> Php 20.00 </td>
	<td align = "center"> 1,001 - 1,500 </td>
	<td align = "center"> Php 75.00 </td></tr>
	<tr><td align = "center"> 301 - 400 </td>
	<td align = "center"> Php 25.00 </td>
	<td align = "center"> 1,501 - 2,000 </td>
	<td align = "center"> Php 100.00 </td></tr>
	<tr><td align = "center"> 401 - 500 </td>
	<td align = "center"> Php 30.00 </td>
	<td align = "center"> 2,001 - 2,500 </td>
	<td align = "center"> Php 100.00 </td></tr>
	<tr><td align = "center"> 501 - 600 </td>
	<td align = "center"> Php 35.00 </td>
	<td align = "center"> 2,501 - 3,000 </td>
	<td align = "center"> Php 150.00 </td></tr>
	<tr><td align = "center"> 601 - 700 </td>
	<td align = "center"> Php 40.00 </td>
	<td align = "center"> 3,001 - 4,000 </td>
	<td align = "center"> Php 180.00 </td></tr>
	<tr><td align = "center"> 701 - 800 </td>
	<td align = "center"> Php 45.00 </td>
	<td align = "center"> 4,001 - 5,000 </td>
	<td align = "center"> Php 220.00 </td></tr>
	</table>
</div>
<div class="logo">
<a href="loginstaffcode.php">
<img src="Assets/indexlogo.png" width="180" height="180"/>
</a>
</div>
<div class="btnCancel">
<form method="POST" action="loginstaffcode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Create Package Delivery</h1></strong>
</div>
<div class="menubar">
<ul>
  <li class="dropdown_remits">
  <a href="#" class="dropbtn_remits"><img src="Assets/moneyrem.png" height="24" width="24"/>&nbsp;&nbsp;Manage Remittances</a>
    <div class="dropdown-content_remits">
      <a href="createremitform_staff.php">Create Remittance</a>
      <a href="updatemoneyremitcode_staff.php">Update Remittance Informations</a>
      <a href="archivecodetablemonrem_staff.php">Archive/Unarchive Remittances</a>
    </div>
  </li>
  <li class="dropdown_packages">
  <a href="#" class="dropbtn_packages"><img src="Assets/package.png" height="24" width="24"/>&nbsp;&nbsp;Manage Packages</a>
  <div class="dropdown-content_packages">
      <a href="createpackageform_staff.php">Create Package Delivery</a>
      <a href="updatepackagecode_staff.php">Update Package Informations</a>
      <a href="archivecodetablepackage_staff.php">Archive/Unarchive Packages</a>
    </div>
  </li>
  <li><a href="viewallratesstaff.php"><img src="Assets/rates.png" height="24" width="24"/>&nbsp;&nbsp;View Rates</a></li>
  <li><a href="logoutsessioncode.php"><img src="Assets/logout.png" height="24" width="24"/>&nbsp;&nbsp;Logout</a></li>
</ul>
</div>
</body>
</html>