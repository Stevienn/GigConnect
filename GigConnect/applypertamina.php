<?php
    session_start();
    $companyName = "PT Pertamina";
    $status = "Applied";
    $email = $_SESSION['email'];
    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
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

        $sql = "INSERT INTO userfreelancestatus (firstName, lastName, email, companyName, applyStatus)
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            die(mysqli_connect_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "sssss",
                            $firstName,
                            $lastName,
                            $email,
                            $companyName,
                            $status);
        mysqli_stmt_execute($stmt);

        header("Location: Profile1.php");
        // echo "Record Saved.";



    
?>