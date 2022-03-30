
<?php


include ('db.php');

			
			$id =$_GET['eid'];		
			$newsql ="UPDATE payment SET payment_status = 'confirm' WHERE id='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Payment is confirmed.") </script>';
							
						
				}
			
		header("Location: payment.php");
?>
