<?php

require_once "DatabaseConfig.php";

class UserRegistration
{
    private $dbConfig;

    public function __construct(DatabaseConfig $dbConfig)
    {
        $this->dbConfig = $dbConfig;
    }

    public function registerUser($username, $email, $password)
    {
        $conn = $this->dbConfig->getConnection();


        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $role = 0;

        $sql = "INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $role);

        try {
            $stmt->execute();
            echo "Registration successful!";
            session_start();
            $_SESSION['user'] = [
                'username' => $username,
                'email' => $email,
                'role' => $role
            ];

            header("Location: success.php");
        } catch (PDOException $e) {

            error_log("Error: " . $e->getMessage());
            echo "Registration failed. Please try again later.";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dbConfig = new DatabaseConfig();
    $registration = new UserRegistration($dbConfig);


    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $registration->registerUser($username, $email, $password);
}
?>