<?php
   session_start();
    include('config.php');

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $select = "SELECT * FROM member WHERE email = '$email' AND password = '$password";
        $result = mysqli_query($conn,$select);

        $row = mysqli_fetch_array($result);

        if(is_array($row)){
           $SESSION['email'] = $row['email'];
           $SESSION['password'] = $row['password'];
        }else{
            ?>
            <script>
                window.alert("Invalid username or password");
                window.location.href = "../index.php";
            </script>
            <?php
        }
    }
    if(isset($SESSION['email'])){
        header("Location:user/index.php");
    }
     
?>