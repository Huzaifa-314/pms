<?php
include '../include/connection.php';

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // email and password sent from form 
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']); 
    
    $sql = "SELECT id, password FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if($row) {
        // Verify password
        if(password_verify($password, $row['password'])) {
            $_SESSION['login_user'] = $email;
            header("location: ../admin");
            exit();
        } else {
            $error = "invalid_login";
        }
    } else {
        $error = "Your Login Email is invalid";
    }
    
    header("location: ../signinup.php?error=" . urlencode($error));
}
?>
