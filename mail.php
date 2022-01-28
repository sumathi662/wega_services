<?php 
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $to = "admissions.wegaservices@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $mobileno = $_POST['phone'];  
	  $selectType = $_POST['selectType'];
	  $country = $_POST['country'];
	  $message = $_POST['message'];
      $subject = 'Enquiry_WEGA SERVICES';
      $subject2 = 'Enquiry_WEGA SERVICES';
	
	echo "mail sent"; 

// message
$message2 = "Dear Sales, Please respond to the query below:" . "\n\n" ."Name :" .$name . "\n\n" ."Mobile Number :" .$mobileno ."\n\n" ."Email :" .$from ."\n\n" ."select Type :" .$selectType . "\n\n" ."country :" .$country. "\n\n" ."Subject :" .$message;
 
$message = '<strong>Dear '.$name.',</strong>
  <p>Thank you for contacting WEGA Services. Our representative will contact you shortly.</p> 
<br><br><br>
 
<strong>Thank you</strong>
  <p>Regards,</p>
  <p>Sales Team</b></p>
  <p>WEGA SERVICES</p>
  <p>Email: admissions.wegaservices@gmail.com</p>  
  <p>Phone No: +91 8341 701 032</p>		
  <img src="http://www.wegaservices.com/img/output-onlinepngtools%20(1).png" height="100px" />';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers = "From:" . $from;
    $headers2 .= "From:" . $to;
       $m1= mail($to,$subject,$message2,$headers);
    $m2=mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender
    if($m1==$m2){
		echo "mail sent"; 
	}
	else{
		echo "some thing went wrong";
	}
	

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>