<?php
                @session_start(); 
			    $con = mysqli_connect("localhost","root","","hotel"); 
				$user = $_SESSION['user']  ;
                $roomno =  $_SESSION['id'];
                $fromdate = $_SESSION['fromdate'];
			    $todate = $_SESSION['todate'];
			    $person = $_SESSION['person'];
		        $child = $_SESSION['child'];
				$namequery = mysqli_query($con,"SELECT Name FROM user_details WHERE Username = '$user'");
				while ($row = mysqli_fetch_array($namequery)) 
				{
					$name = $row['Name'];
				}
				$roomquery = mysqli_query($con,"SELECT Room_Type FROM room_details WHERE Room_no = '$roomno'");
				while ($row = mysqli_fetch_array($roomquery)) 
				{
					$roomtype = $row['Room_Type'];
				}
             $sql = "INSERT INTO guest_details (Name,room_type,room_no,checkin_date,checkout_date,adult,child)   
			   VALUES ('$name', '$roomtype', '$roomno', '$fromdate', '$todate', '$person', '$child')";
			 if (mysqli_query($con,$sql)) 
						{     
							echo "<script language='javascript'>
									alert('Room Successfully Book!!!');
									window.location = 'userroom.php';
									</script>"; 
						} 
						else
						{
								echo "<script language='javascript'>
									alert('Error,while booking room');
									window.location = 'payment.php';
									</script>";
						} 
                  
	   mysqli_close($con);
?>