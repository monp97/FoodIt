//validation of login page.
<?php

  include 'connection.php';

   if(!empty($_POST['Username']))
   {
     if(!empty($_POST['password']))
     {
       $name=$_POST['Username'];
       $passw=$_POST['password'];
       $res=$con->query("SELECT * FROM login_table WHERE username='$name' AND password='$passw'");
      //  $result=$con->query("SELECT * from login_table where username = '$name'  AND date='$birthdate'");
        $row=mysqli_fetch_array($res);
       if($row >= 1)
         {
             $user = $row['username'];
            $pass = $row['password'];
            if ($passw!=$pass)
                {
                  header("Location:signup.html");
                  echo"Please Register your details:";


                }
                else
                {
                    $_SESSION['username'] = $user;
                    header("Location:divIt.html");
                }
        }
        else {
          header("Location:signup.html");
          echo "please try again!!!";
        }
    }
    else {
      echo "please fill in the password";
    }
  }
  else {
    echo "please fill in the username";
  }
?>
