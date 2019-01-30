<?php
require_once 'dbh.php';

if(isset($_POST['submit']) && $_POST['email'] && $_POST['username'])
{

  if(empty($_POST['username']) || empty($_POST['email'])){
  
    header("Location: ./reset.php?empty");
    exit();

  }else{

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);




    $code = rand(10000, 1000000);
    $to = $email;
    $subject = "Password Reset";
    $link="http://localhost/project%20components/register/reset_pass.php?key=".$email."&reset=".$code."<a>Click To Reset password</a>";
    $mailheader =  "info@southnet.lk \r\n";
    

    mail($to, $subject, $link, $mailheader)

    /*if($mail->Send())
    {
      header("Location: ../reset.php?success");
      exit();
    }
    else
    {
      header("Location: ../reset.php?error");
      exit();
     // echo "Mail Error - >".$mail->ErrorInfo;
    }*/
  }	else{
    
    header("Location: ./reset.php?incorrect");
    exit();
  }
  }
}
?>