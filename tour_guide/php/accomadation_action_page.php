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
$a5=$_POST["days5"];
$a6=$_POST["Members6"];
$a7=$_POST["country7"];
$a8=$_POST["email8"];
$a9=$_POST["comment9"];

if($Connection){
	/*echo "Database connection successfully completed.";
	echo ("<br>");*/
	}

else{
	/*echo "Database connection Faild.";
	echo ("<br>");*/
}

$Result = mysqli_query($Connection,"INSERT INTO accomadation_details (nic,accomadation_name,customer_name,contact,No_of_days,No_of_members,country,email,comment) VALUES ('$a3','$a1','$a2','$a4','$a5','$a6','$a7','$a8','$a9')");

if($Result){
	echo "<script type='text/javascript'>
                
	swal({ title: 'SUCCESSFUL',text: 'THANK YOU! Your details succesfully saved.',icon: 'success'}).then(okay => {
	if (okay) {
    window.location.href = '../html/accomadation.html';}
	});
    </script>";
	/*echo "Data added successfully.";
	echo ("<br>");*/
	}

else{
	echo "<script type='text/javascript'>
                
	swal({ title: 'Opps!',text: 'An error occured!',icon: 'error'}).then(okay => {
	if (okay) {
    window.location.href = '../html/accomadation.html';}
	});
    </script>";
	/*echo "Data added Faild.";
	echo ("<br>");*/
}

?>