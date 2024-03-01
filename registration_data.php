<?php
include "connection.php";

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
    }   
    // $unique_filename="";
    
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
    
    $query_get_job = mysqli_query($conn,"SELECT * FROM `entry_table` WHERE `id`='$job_id'");
    $get_job = mysqli_fetch_assoc($query_get_job);
    $job_role = $get_job['job_title'];

    
    // $to = "gaursandhya173@gmail.com";
    $to = "hr@blgindia.in";
    $subject = "New Registeration";
    // $txt = "Hello world!";
    // "CC: somebodyelse@example.com";
    
    $headers2 = "MIME-Version: 1.0" . "\r\n";
    $headers2 .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers2 .= "From: info@blgindia.com";
    
    $link = !empty($linkedin_url) ? $linkedin_url : '-' ;
    $resume = !empty($myfile) ? $myfile : '-';
    
    $txt .= '<!DOCTYPE html>
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
                        <td>'.$mobile_no.'</td>
                        </tr>
                        <tr>
                        <td> Applied For : </td>
                        <td>'.$job_role.'</td>
                        </tr>
                        <tr>
                        <td>Linkedin : </td>
                        <td>'.$link.'</td>
                        </tr>
                        <tr>
                        <td>Current Location : </td>
                        <td>'.$current_location.'</td>
                        </tr>
                        <tr>
                        <td>Experience : </td>
                        <td>'.$total_experience.' years</td>
                        </tr>
                        <tr>
                        <td>Resume : </td>
                        <td><a href="https://www.blgindia.com/blgnewweb/file_upload/'.$resume.'">'.$resume.'</a></td>
                        </tr>
                    </table>
                    </body>
                    </html> ';
    

    $mail = mail($to,$subject,$txt,$headers2);

    echo "<script>alert('Submit Successfully')</script>";

   echo "<script>\n
    window.location.href = 'career.php';\n
</script>";

}else{
    echo "<script>alert('Something Went Wrong, Please Try Again')</script>";

    echo "<script>\n
     window.location.href = 'career.php';\n
 </script>";
}


?>