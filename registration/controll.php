<?php
///connection 
  include('../config.php');
///pull values from the form
   if(isset($_POST['submit'])){
    //get values
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $bank = $_POST['bank'];
    //end get values
    //insert values
    $query = "INSERT INTO member (surname, first_name,address,phone_no,email,bank_details,password)
              VALUES ('$surname','$name','$address','$phone','$email','$bank','$password')";
    mysqli_query($conn, $query);
    ?>
    <script>
        window.alert("Successfully registered, you can login in now.");
        window.location.href = "../index.php";
    </script>
    <?php
   }

?>