<?php
	$username = filter_input(INPUT_POST, 'username');
	$email = filter_input(INPUT_POST, 'email');
	$feedback = filter_input(INPUT_POST, 'feedback');
	
	if(!empty($username)){
		if(!empty($email)){
			#if(!empty($feedback)){
				$host = "localhost";
				$dbusername = "root";
				$dbpassword = "";
				$dbname = "tour_guide";
				
				//creat connection
				
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
				if(mysqli_connect_error()){
					die('Connect_Error('.mysqli_connect_errno().')' .mysqli_connect_error());
				}else{
					$sql = "INSERT INTO feedback_details (username,email,feedback) values('$username','$email','$feedback')";
					if ($conn->query($sql)){
						echo "New rocord is inserted successfully";
					}
					else{
						echo "Error: " .$sql. "<br>" .$conn->error;
					}
					$conn->close();
				}
			}
			else{
				echo "Password should not be empty";
				die();
			}
		}
		else{
				echo "username should not be empty";
				die();
		}
	#}	
?>