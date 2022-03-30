<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

include('db.php');
				
$qe = "SELECT * FROM `newsletterlog`";
				$rewe = mysqli_query($con,$qe);
                                while($rows = mysqli_fetch_array($rewe))
                                {
                                    $subject = $rows['subject'];
                                    $news = $rows['news'];
                                }

$q = "SELECT email FROM `contact`";
				$rew = mysqli_query($con,$q);
                                while($rows = mysqli_fetch_array($rew))
				{		
								
                                                 $email = $rows['email']; 
                                                 
                                }
                                
                                
                                                               
                                                             
							
				
	$conn= mysqli_connect("localhost", 
                "root", "", "hotel");			
	
        
        include ('db.php');

			
			$id =$_GET['pid'];		
			$newsql ="UPDATE payment SET payment_status = 'confirm' WHERE id='$id' ";
			if(mysqli_query($con,$newsql))
				{
				
					$email = $rows['email'];		
						
				}
			
		header("Location: payment.php");


    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hotel.gujarat00@gmail.com';                     //SMTP username
    $mail->Password   = 'Ict@@456';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('hotel.gujarat00@gmail.com', 'Gujarat Hotel');
        //Add a recipient
              

    $sql = "select * from contact where approval='Allowed'";
    
    $res = mysqli_query($conn, $sql);
  
if(mysqli_num_rows($res) > 0) {
    while($x = mysqli_fetch_assoc($res)) {
        $mail->addAddress($x['email']);
    }
    
    $mail->isHTML(true);
    $mail->Subject = 
        "Payment Details of the room reservation.";
          
    $mail->Body = include('print.php');
       
    if($mail->send())
    {
       echo "Message has been sent check mailbox"; 
    }
    else{
        echo "failure due to the google security";
    }
} 
    
                                               