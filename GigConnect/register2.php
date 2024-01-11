<?php
    session_start();
    $descriptionn = $_POST['desc'];
    $email = $_SESSION['email'];

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
    //     $stmt->bind_param("s", $email);
    //     $stmt->execute();
    //     $stmt_result = $stmt->get_result();

        $sql = "UPDATE userdata SET description = '$descriptionn' WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
    
    // $stmt = mysqli_stmt_init($conn);

    // if(!mysqli_stmt_prepare($stmt, $sql)) {
    //     die(mysqli_connect_error($conn));
    // }

    // mysqli_stmt_bind_param($stmt, "s",
    //                     $descriptionn);
    // mysqli_stmt_execute($stmt);

    header("Location: login2.html");
  

    
?>