<?php
	$trackid =rand(12345678,999999999);
	$consignor = $_POST['txtConsignor'];
	$house = $_POST['txtConsignorHouse'];
	$street = $_POST['txtConsignorStreet'];
	$barangay = $_POST['txtConsignorBarangay'];
	$city = $_POST['txtConsignorCity'];
	$province = $_POST['txtConsignorProvince'];
	$consignoremail = $_POST['txtConsignorEmail'];
	$consignorno = $_POST['txtConsignorNo'];
	$chouse = $_POST['txtConsigneeHouse'];
	$cstreet = $_POST['txtConsigneeStreet'];
	$cbarangay = $_POST['txtConsigneeBarangay'];
	$ccity = $_POST['txtConsigneeCity'];
	$cprovince = $_POST['txtConsigneeProvince'];
	$consignee = $_POST['txtConsignee'];
	$consigneemail = $_POST['txtConsigneeEmail'];
	$consigneeno = $_POST['txtConsigneeNo'];
	$kilo = $_POST['txtKilo'];
	$branch = $_POST['txtBranch'];
	$declaredval = $_POST['txtDeclaredValue'];
	$date=getdate();
	$today = "$date[year]-$date[mon]-$date[mday]";
	$day = "$date[mday]";
switch($kilo){
		case "KB Small":
			if($branch == "NCR"){
				$amount=200;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=255;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=255;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=265;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=265;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
		case "KB Medium":
			if($branch == "NCR"){
				$amount=325;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=400;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=400;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=435;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=435;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
		case "KB Large":
			if($branch == "NCR"){
				$amount=600;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=800;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=800;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=870;$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=870;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
		case "KB Extra Large":
			if($branch == "NCR"){
				$amount=1235;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=1425;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=1425;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=1558;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=1558;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
	}
	$insurance = $declaredval /500*50;
	

?>



<html>
<head>
<title> Package Receipt </title>
<style>
body{
	background-image:url("Assets/wallpaper1.png");
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#header{
	position: absolute;
	background:rgba(128,128,128,0.5);
	width: 1340px;
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
	width: 780px;
	height: 680px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 190px 270px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.fields{
	position:absolute;
	top:210px;
	left:320px;
}
.fields2{
	position: absolute;
	top: -10px;
	left: 480px;
	width: 700px;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
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
.chouse{
	width: 60px;
}
.cstreet{
	width: 70px;
}
.cbarangay{
	width: 80px;
}
.ccity{
	width: 80px;
}
.cprovince{
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
.btnCancel{
	position: absolute;
	top: 821px;
	left: 500px;
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
    padding: 12px 5px;
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
input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    height: 30px;
    outline: none;
}
input[type=password]:focus {
    border: 3px solid #555;
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
<form name = "form" method = "POST" action = "createpackagecode_staff.php">
<tr>
<td><font face="Helvetica" color="white">Track No: </font><br>
<td><input type = "text" value="<?php echo "$trackid"?>" name="txtTrack" id="txtTrack" readonly><p>
<td><font face="Helvetica" color="white">Consignor:</font><br>
<td><input type = "text" value="<?php echo "$consignor"?>" name = "txtConsignor" id = "txtConsignor" readonly><p>
<p><font face="Helvetica" color="white">Consignor Address:</font><br> 
<td><input type = "text" value="<?php echo "$house" ?>" name = "txtConsignorHouse" id = "txtConsignorHouse" class="house" readonly>
<input type = "text" value="<?php echo "$street" ?>" name = "txtConsignorStreet" id = "txtConsignorStreet" class="street" readonly>
<input type = "text" value="<?php echo "$barangay" ?>" name = "txtConsignorBarangay" id = "txtConsignorBarangay" class="barangay" readonly><br>
<input type = "text" value="<?php echo "$city" ?>" name = "txtConsignorCity" id = "txtConsignorCity" class="city" readonly>
<input type = "text" value="<?php echo "$province" ?>" name = "txtConsignorProvince" id = "txtConsignorProvince" class="province" readonly><p>
<p><font face="Helvetica" color="white">Consignor Email:</font><br> 
<td><input type = "text" value="<?php echo "$consignoremail"?>" name = "txtConsignorEmail" id = "txtConsignorEmail" readonly><p>
<p><font face="Helvetica" color="white">Consignor Contact No.:</font><br> 
<td><input type = "text" value="<?php echo "$consignorno"?>" name = "txtConsignorNo" id = "txtConsignorNo" readonly><p>
<p><font face="Helvetica" color="white">Consignee:</font><br>
<td><input type = "text" value="<?php echo "$consignee"?>" name = "txtConsignee" id = "txtConsignee" readonly><p>
<p><font face="Helvetica" color="white">Consignor Address:</font><br> 
<td><input type = "text" value="<?php echo "$chouse" ?>" name = "txtConsigneeHouse" id = "txtConsigneeHouse" class="chouse" readonly>
<input type = "text" value="<?php echo "$cstreet" ?>" name = "txtConsigneeStreet" id = "txtConsigneeStreet" class="cstreet" readonly>
<input type = "text" value="<?php echo "$cbarangay" ?>" name = "txtConsigneeBarangay" id = "txtConsigneeBarangay" class="cbarangay" readonly><br>
<input type = "text" value="<?php echo "$ccity" ?>" name = "txtConsigneeCity" id = "txtConsigneeCity" class="ccity" readonly>
<input type = "text" value="<?php echo "$cprovince" ?>" name = "txtConsigneeProvince" id = "txtConsigneeProvince" class="cprovince" readonly><p>
<p><font face="Helvetica" color="white">Consignee Email:</font><br>
<td><input type = "text" value="<?php echo "$consigneemail"?>" name = "txtConsigneeEmail" id = "txtConsigneeEmail" readonly><p>
<div class="fields2">
<p><font face="Helvetica" color="white">Consignee Contact No.:</font><br>
<td><input type = "text" value="<?php echo "$consigneeno"?>" name = "txtConsigneeNo" id = "txtConsigneeNo" readonly><p>
<p><font face="Helvetica" color="white">Size:</font><br>
<td><input type = "text" value="<?php echo "$kilo"?>" name = "txtSize" id = "txtSize" readonly><p>
<p><font face="Helvetica" color="white">Payment:</font><br>
<td><input type = "text" value="<?php echo "$amount"?>" name = "txtPayment" id = "txtPayment" readonly><p>
<p><font face="Helvetica" color="white">Declared Value:</font><br>
<td><input type = "text" value="<?php echo "$declaredval"?>" name = "txtDeclaredValue" id = "txtDeclaredValue" readonly><p>
<p><font face="Helvetica" color="white">Date Dispatched:</font><br>
<td><input type = "text" value="<?php echo "$today"?>" name = "txtDispatched" id = "txtDispatched" readonly><p>
<p><font face="Helvetica" color="white">Expected Delivery Date:</font><br>
<td><input type = "text" value="<?php echo "$delivered"?>" name = "txtExpected" id = "txtExpected" readonly><p>
<p><font face="Helvetica" color="white">Branch:</font><br>
<td><input type = "text" value="<?php echo "$branch"?>" name = "txtBranch" id = "txtBranch" readonly><p>
<p><font face="Helvetica" color="white">Insurance:</font><br>
<td><input type = "text" value="<?php echo "$insurance"?>" name = "txtInsurance" id = "txtInsurance" readonly><p>
</div>
<input type = "submit" value = "Submit Transaction" class="create">
</form>
</div>
<div class="logo">
<a href="loginstaffcode.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
<div class="btnCancel">
<form method="POST" action="createpackageform_staff.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
</body>
</html>