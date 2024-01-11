<?php
    session_start();
    $premium = "premium";
    $email = $_SESSION['email'];
    
    // echo "$email";

        // var_dump($firstName, $lastName, $email. $phoneNumber, $DoB, $pass, $pass2)
        $host = "localhost";
        $dbname = "gigconnect";
        $username = "root";
        $password = "";

        $conn = mysqli_connect(hostname: $host, 
                            username: $username, 
                            password: $password, 
                            database: $dbname);

        if (mysqli_connect_errno()){
            die("Connection error: " .mysqli_connect_error());
        }
        // $stmt = $conn->prepare("select * from userdata where email = ?");
        // $stmt->bind_param("s", $email);
        // $stmt->execute();
        // $stmt_result = $stmt->get_result();

        $sql = "UPDATE userdata SET userstatus = '$premium' WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        // $stmt = mysqli_stmt_init($conn);

        // if(!mysqli_stmt_prepare($stmt, $sql)) {
        //     die(mysqli_connect_error($conn));
        // }

        // mysqli_stmt_bind_param($stmt, "s",
        //                     $premium);
        // mysqli_stmt_execute($stmt);

        header("Location: Payment.html");
        // echo "Record Saved.";



    
?>