<!DOCTYPE html>
<html>
<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>

</body>
</html>
<?php

//database connection
include_once("../db_connection/dbconnection.php");

$a1=$_POST["pname1"];
$a2=$_POST["name2"];
$a3=$_POST["nic3"];
$a4=$_POST["contact4"];
$a5=$_POST["country5"];
$a6=$_POST["email6"];
$a7=$_POST["comment7"];

if($Connection){
	/*echo "Database connection successfully completed.";
	echo ("<br>");*/
	}

else{
	/*echo "Database connection Faild.";
	echo ("<br>");*/
}

$Result = mysqli_query($Connection,"INSERT INTO packages (nic,package_name,customer_name,contact,country,email,comment) VALUES ('$a3','$a1','$a2','$a4','$a5','$a6','$a7')");

if($Result){
	echo "<script type='text/javascript'>
                
	swal({ title: 'SUCCESSFUL',text: 'THANK YOU! Your details succesfully saved.',icon: 'success'}).then(okay => {
	if (okay) {
    window.location.href = '../html/packages.html';}
	});
    </script>";
	/*echo "Data added successfully.";
	echo ("<br>");*/
	}

else{
	echo "<script type='text/javascript'>
                
	swal({ title: 'Opps!',text: 'An error occured!',icon: 'error'}).then(okay => {
	if (okay) {
    window.location.href = '../html/beach.html';}
	});
    </script>";
	/*echo "Data added Faild.";
	echo ("<br>");*/
}

?>