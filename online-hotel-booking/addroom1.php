<?php
require 'connection.php';
		$room_no = mysqli_real_escape_string($con, $_POST['room_no']); 
        $roomtype = mysqli_real_escape_string($con, $_POST['roomtype']);  
       
	    $image=base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
       
        $maxadult = mysqli_real_escape_string($con, $_POST['maxadult']);
        $maxchild = mysqli_real_escape_string($con, $_POST['maxchild']);
        $wifi = mysqli_real_escape_string($con, $_POST['wifi']);
        $breakfast = mysqli_real_escape_string($con, $_POST['breakfast']);
        $parking = mysqli_real_escape_string($con, $_POST['parking']);
        $price = mysqli_real_escape_string($con, $_POST['price']);

 
    
         $sql = "INSERT INTO room_details (Room_no,Room_Type,image,Max_Adult,Max_Child,WiFi,Breakfast,Parking,Price)   
			   VALUES ('$room_no',' $roomtype','$image', '$maxadult', '$maxchild', '$wifi', '$breakfast', '$parking', '$price')";  
               	if (mysqli_query($con,$sql)) 
						{     
							echo "<script language='javascript'>
									alert('Room successfully Added');
									window.location = 'addroom.php';
									</script>"; 
						} 
						else
						{
								echo "<script language='javascript'>
									alert('Error,while Adding room');
									window.location = 'addroom.php';
									</script>";
						} 
	   mysqli_close($con);
?>


