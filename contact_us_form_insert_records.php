<?php
include "connection.php";
$first_name=$last_name=$email=$mobile_no=$organization=$reason=$message="";





if( isset($_POST['first_name'])  &&
    isset($_POST['email']) && 
    isset($_POST['mobile_no']) &&
    isset($_POST['last_name']) &&  
    isset($_POST['organization']) &&
    isset($_POST['reason']) && 
    isset($_POST['message']) )
{ 
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $contact_no= $_POST['mobile_no'];
    $organization= $_POST['organization'];
    $reason= $_POST['reason'];
    $message = $_POST['message'];
    $date = date('Y-m-d H:i:s');

    $tableName = 'contact_us';

    
     $sql = "INSERT INTO $tableName (`first_name`,`last_name`,`email`,`contact_no`,`organization`,`reason`, `message`,`date`) 
                 VALUES ('$first_name','$last_name','$email',$contact_no,'$organization','$reason','$message','$date')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        
    $to = "hr@blgindia.in";
    $subject = "Web-Site Enquiry - Contact Us";
    // $txt = "Hello world!";
    // "CC: somebodyelse@example.com";
    
    $headers2 = "MIME-Version: 1.0" . "\r\n";
    $headers2 .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers2 .= "From: info@blgindia.com";

    $link = !empty($linkedin_url) ? $linkedin_url : '-' ;
    $resume = !empty($myfile) ? $myfile : '-';
    
    @$message2 .= '<!DOCTYPE html>
                    <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
                    <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width,initial-scale=1">
                    <meta name="x-apple-disable-message-reformatting">
                    <title></title>                    
                    <style>
                        table, td, div, h1, p {font-family: Arial, sans-serif;}
                    </style>
                    </head>
                    <body style="margin:0;padding:0;">
                    <table role="presentation" style="width:500px; border-collapse:collapse; border:0; border-spacing:0; background:#ffffff;">
                        <tr>
                        <td>Name : </td>
                        <td>'.$first_name.' '.$last_name.'</td>
                        </tr>
                        <tr>
                        <td>Email : </td>
                        <td>'.$email.'</td>
                        </tr>
                        <tr>
                        <td>Mobile No. : </td>
                        <td>'.$contact_no.'</td>
                        </tr>
                        <tr>
                        <td> Organization : </td>
                        <td>'.$organization.'</td>
                        </tr>
                        <tr>
                        <td> Reason : </td>
                        <td>'.$reason.'</td>
                        </tr>
                        <tr>
                        <td> Message : </td>
                        <td>'.$message.'</td>
                        </tr>
                        <tr>
                        <td>Date : </td>
                        <td>'.$date.'</td>
                        </tr>
                      
                    </table>
                    </body>
                    </html> ';
    

     $mail = mail($to,$subject,$message2,$headers2);
                    



        echo '<script> alert("Your Enquiry successfully Submitted.")</script>';
    echo '<script> window.location.href = "contact.php";</script>';
    exit();     
    }
    else {
        echo "Invalid Request-1";
    return false;
    }   
}
else{
    echo "Invalid Request-2";
    return false;
}