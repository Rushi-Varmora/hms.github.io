<?php


include ('db.php');

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `payment` WHERE id ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo "<script type='text/javascript'> alert('Room Booking deleted - Payment not done')</script>";
                                echo "<script type='text/javascript'> window.location='payment.php'</script>";
							
						
				}
			
		
?>
