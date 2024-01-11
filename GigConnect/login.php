<?php
    session_start();

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
   

    $host = "localhost";
    $dbname = "gigconnect";
    $username = "root";
    $password = "";

    $con = mysqli_connect(hostname: $host, 
                        username: $username, 
                        password: $password, 
                        database: $dbname);
                
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    }
    else{
        $stmt = $con->prepare("select * from userdata where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            $firstName = $data["firstName"];
            $lastName = $data["lastName"];
            $email2 = $data["email"];
            if($data['pass'] === $pass){
                $_SESSION['firstName'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['email'] = $email2;
                header("Location: Profile1.php");;
            }
            else{
                header("Location: loginfail.html");
            }
        }
        else{
            header("Location: loginfail.html");
        }
        // echo "$firstName $lastName";
        }
      


?>

