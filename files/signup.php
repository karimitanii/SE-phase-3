<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $fullName = $_POST['full-name'];
    $dob = $_POST['date-of-birth']; 
    $sex = $_POST['sex'];
    $displayName = $_POST['display-name'];
    $email = $_POST['user-email'];
    $pass = $_POST['password'];

    $userData = array($fullName, $dob, $sex, $displayName, $email, $pass);

    $file = 'users.csv';
   
   $handle1 = fopen($file, "r");
$userExists = false;
        while (($data = fgetcsv($handle1)) !== FALSE){
            if ($data[4]==$email){
                $userExists= true;
                break;
            }
        }


        
        fclose($handle1);
        if (!$userExists){
            $handle = fopen($file, 'a');
            fputcsv($handle, $userData);
            fclose($handle);
            echo '<script>
            alert("Account created successfully");
            window.location.href = "login.php";</script>';

        }
        else{
            echo '<script>
        alert("This email already exists. Please choose another or log in.");
        window.location.href="login.php";
      </script>';

        
        }
   


}
else{
    echo"Invalid Request";
}

?>