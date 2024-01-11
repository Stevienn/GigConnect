<?php
    session_start();
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $DoB = $_POST['DoB'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $_SESSION['email'] = $email;

    $url = "register2.php?firstName=".urlencode($firstName)."&lastName=".urlencode($lastName);

    if($pass !== $pass2){
        header("Location: Register11fail.html");
    }else{
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

        $sql = "INSERT INTO userdata (firstName, lastName, email, phoneNumber, DoB, pass)
                VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            die(mysqli_connect_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "ssssss",
                            $firstName,
                            $lastName,
                            $email,
                            $phoneNumber,
                            $DoB,
                            $pass);
        mysqli_stmt_execute($stmt);

        header("Location: Register21.html");
        // echo "Record Saved.";


    };

    
?>