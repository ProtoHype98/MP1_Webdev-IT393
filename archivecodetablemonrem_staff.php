<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
?>
<html>
<head>
<title> Archived Money Remit Records </title>
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
#panel{
    position: absolute;
    background: #429bf4;
    width: 1320px;
    height: 470px;
    border-radius: 15px 15px 15px 15px;
    float: center;
    margin: 190px 6px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
#panel1{
    position: absolute;
    background: rgba(128,128,128,1.0);
    width: 1290px;
    height: 445px;
    border-radius: 15px 15px 15px 15px;
    float: center;
    margin: 202px 20px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
.table1{
	position: absolute;
	top:220px;
	left:35px;
}
table{
	border-collapse: collapse;
	background-color: gray;
	font-weight: bold;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 7.5px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.btnCancel{
	position: absolute;
	top: 600px;
	left: 1220px;
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
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel">
</div>
<div id="panel1">
</div>
<div class="logo">
<a href="loginstaffcode.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
<div class = "table1">
	<table>
	<tr>
	<th> Track No </th>
	<th> Consignor </th>
	<th> Consignor No </th>
	<th> Consignee No </th>
	<th> Consignee </th>
	<th> Amount </th>
	<th> Fee </th>
	<th> Total Amount </th>
	<th> Date Remitted </th>
	<th> Date Delivered </th>
	<th> Branch	</th>
	<th> Status </th>
	<th> Unarchive </th>
	<th> Remit Status </th></tr>

	<?php
	$sql = mysql_query("select * from tblmoney_remit where Status = 'Inactive'");
	while( $rows=mysql_fetch_array($sql)){
			$id = $rows['ID'];
			$trackid = $rows['TrackNo'];
			$consignor = $rows['Consignor'];
			$consignorno = $rows['ConsignorNo'];
			$consigneeno = $rows['ConsigneeNo'];
			$consignee = $rows['Consignee'];
			$amount = $rows['Amount'];
			$fee = $rows['Fee'];
			$total = $rows['TotalAmount'];
			$daterem = $rows['DateRemitted'];
			$datedev = $rows['DateDelivered'];
			$branch = $rows['Branch'];
			$status = $rows['Status'];
			$remstatus = $rows['RemitStatus'];

	echo "<tr><td align = 'center'> $trackid </td>";
	echo "<td align = 'center'> $consignor </td>";
	echo "<td align = 'center'> $consignorno </td>";
	echo "<td align = 'center'> $consigneeno </td>";
	echo "<td align = 'center'> $consignee </td>";
	echo "<td align = 'center'> $amount </td>";
	echo "<td align = 'center'> $fee </td>";
	echo "<td align = 'center'> $total </td>";
	echo "<td align = 'center'> $daterem </td>";
	echo "<td align = 'center'> $datedev </td>";
	echo "<td align = 'center'> $branch </td>";
	echo "<td align = 'center'> $status </td>";
	echo "<td align = 'center'> <a href= 'unarchivemoneyremit_staff.php?id=$id'> Unarchive </a> </td>";
	echo "<td align = 'center'> $remstatus </td></tr>";
	}
	?>

</table>
</div>
<div class="btnCancel">
<form method="POST" action="loginstaffcode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
</body>
</html>