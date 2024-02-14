<?php 
include '../include/connection.php';

if($_SERVER["REQUEST_METHOD"] == "POST") { 
    $email = $_POST["email"];  
    $password = $_POST["password"];  
    $cpassword = $_POST["password_confirmation"];  

    $sql_check_email = "SELECT * FROM user WHERE email=?";
    $stmt = $conn->prepare($sql_check_email);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $num = $result->num_rows;

    if($num == 0) { 
        if($password == $cpassword) { 
            $hash = password_hash($password, PASSWORD_DEFAULT); 
            $full_name = $_POST["full_name"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];

            $sql_insert_user = "INSERT INTO `user` (`u_name`, `email`, `password`, `phone`, `address`, `u_role`, `status`) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql_insert_user);
            $role = "user"; // Set default role
            $status = 1; // Set default status
            $stmt->bind_param("ssssssi", $full_name, $email, $hash, $phone, $address, $role, $status);
            $stmt->execute();

            if ($stmt->affected_rows > 0) { 
                echo "User inserted successfully.";
            } else {
                echo "Error: Unable to insert user.";
            }
        } else {  
            echo "Passwords do not match.";
        }       
    } else { 
        echo "Email already exists.";
    }
}
?>
