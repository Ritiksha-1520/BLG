<?php
include "connection.php";
// ----------send mail----------//
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require 'autoload.php';

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// ----------send mail----------//

// code to send email

 $unique_filename = '';

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $first_name = $_POST['first_name'];
    
    if(isset($_FILES['myfile']) && ($_FILES['myfile']['error']) ==0);
    {
        $filename = $_FILES['myfile']['name'];
        $tmp_file_name = $_FILES['myfile']['tmp_name'];
        $file_dic = "file_upload/";
        $file_ext = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        $unique_filename = $first_name ."_rsm." .$file_ext;
        $uploadPath = $file_dic . $unique_filename;

        if(move_uploaded_file($tmp_file_name,$uploadPath)){
            echo "file uploaded successfully";
        }else{
            //echo "error upload file1";
        }
    }   $unique_filename="";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    // $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $linkedin_url	 = $_POST['linkedin_url'];
    $current_location	 = $_POST['current_location'];
    $total_experience = $_POST['total_experience'];
    $job_id = $_POST['job_id'];
    $myfile = $unique_filename;
}

$date = date('Y-m-d H:i:s');
$sql = "INSERT INTO `registration-data`
(`first_name` ,`last_name`, `email`,`mobile_no`,`linkedin_url`, `current_location`,`total_experience`,`resume`,`date`,`job_id`)
 value('$first_name','$last_name','$email','$mobile_no','$linkedin_url',' $current_location',' $total_experience',
'$myfile','$date','$job_id')";

if (mysqli_query($conn,$sql)){

    // $to = "gaursandhya173@gmail.com";
    // $subject = "My subject";
    // $txt = "Hello world!";
    // $headers = "From: kunalmakwana8184@gmail.com" . "\r\n" ;
    // // "CC: somebodyelse@example.com";

    // echo $mail = mail($to,$subject,$txt,$headers);


    $mail = new PHPMailer(true);
        
        $mail->SMTPDebug = 0;									     // Enable verbose to debug out
        $mail->isSMTP();		                                     // Set mailer to use SMTP
        $mail->Host	 = 'smtp.gmail.com';                             // Specify main SMTP Server
        $mail->Port	 = 587;					                         // TCP port to connect to
        $mail->SMTPAuth = true;	                                     // Enable SMTP Authentication
        $mail->SMTPSecure = 'tls';						             // Enable TLS encryption, 'ssl' also accepted
        $mail->Username = 'gaursandhya173@gmail.com';			     // SMTP Username	
        $mail->Password = 'Sandhya@123';						     // SMTP Password
        // $mail->Username = 'noreply.blgindia@gmail.com';			     // SMTP Username	
        // $mail->Password = 'rs45=1$$';						         // SMTP Password
                                                              
                                    
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('gaursandhya173@gmail.com');                  // Set Sender of mail
        $mail->addAddress('kunalmakwana8184@gmail.com');             // Add a recipient , Name is optional(demo)
        // $mail->addReplyTo($_POST['email'], $_POST['name']);   

        // Add cc or bcc  
        // $mail->addCC($cc_email); 
        // $mail->addBCC($bcc_email);    
        
        $mail->isHTML(true);								
        $mail->Subject = 'testing';
        $mail->Body = 'Hello';

    try{        
        $mail->send();
        echo "Mail sent successfully.";
        // exit();

    }catch(Exception $e) {

        // echo $e->getMessage(); //Boring error messages from anything else!
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }       
    die;

    echo "<script>alert('Submit Successfully')</script>";
    
    echo "<script> window.location.href = 'career.php'; </script>";


}else{
    echo "<script>alert('Something Went Wrong, Please Try Again')</script>";

    echo "<script>\n
     window.location.href = 'career.php';\n
 </script>";
}


?>