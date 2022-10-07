<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tour_guide";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$a1=$_POST['Fname1'];
$a2=$_POST['Lname2'];
$a3=$_POST['Password3'];
$a4=$_POST['address4'];
$a5=$_POST['staddress5'];
$a6=$_POST['city6'];
$a7=$_POST['state7'];
$a8=$_POST['poscode8'];
$a9=$_POST['counrty9'];
$a10=$_POST['choldname10'];
$a11=$_POST['cnumber11'];
$a12=$_POST['exdate12'];

$sql="INSERT INTO payment_details (FName,LName,address,StrAddress,city,state,PostalCode,country,CHolderName,CNumber,ExpireDate,password) VALUES ('$a1','$a2','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a3')";
	if (mysqli_query($conn, $sql)) 
	{
    echo "New record created successfully";
	} else 
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);


		header("refresh:2;url=../html/payment.html");
		
		
	
?>