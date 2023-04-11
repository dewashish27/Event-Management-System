<?php

session_start();

$usn = $_POST['usn_id'];

$_SESSION['myGlobalVar'] = $usn;



    // establish database connection
    $conn = mysqli_connect("localhost", "root", "", "sanchalana2k20");

    

    // check for errors in connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        
    }

    // retrieve user input
    $usn = mysqli_real_escape_string($conn, $_POST['usn_id']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass_id']);


    // query the database to check if user credentials are valid
    $sql = "SELECT * FROM user WHERE usn = '$usn' AND pass = '$pass'";
    $result = mysqli_query($conn, $sql);

    // check if query returned any results
    if (mysqli_num_rows($result) == 1) {
        // login success
        echo "<script>
        alert('Login Successfull');
        window.location.href='userpage.php';
        </script>";
    } else {
        // invalid credentials
        echo "<script>
        alert('Invalid credentials');
        window.location.href='usn.php';
        </script>";
    }

    // close database connection
    mysqli_close($conn);

?>
