<?php
     $username= $_POST['username'];
     $phone = $_POST['phone'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];

   
    $conn = new mysqli ('localhost', 'root', '','ashwani' );
    if($conn -> connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn -> prepare("insert into new_tabel(username,phone,lastname,email)values(?,?,?,?)");
        $stmt -> bind_param('siss', $username,$phone,$lastname, $email);
        $stmt -> execute();
        echo "successfully data sent";
        echo $username;
         echo $phone;
          echo  $lastname;
           echo $email;
           
        $stmt -> close();
        $conn ->close();
    }
?>