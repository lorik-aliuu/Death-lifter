<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 1) {
    header("Location: home.php");
    exit();
}

require_once "DatabaseConfig.php";


if (!isset($_POST["userId"])) {
    echo "Error:";
    exit();
}


$userId_to_update = $_POST["userId"];


if (!empty($userId_to_update)) {

    $newUsername = $_POST["newUsername"];
    $newEmail = $_POST["newEmail"];
    $newRole = $_POST["newRole"];

    $dbConfig = new DatabaseConfig();
    $conn = $dbConfig->getConnection();

    if (!$conn) {
        die("Database connection failed");
    }

    try {
        $conn->beginTransaction();


        $sql = "UPDATE users SET username = :newUsername, email = :newEmail, role = :newRole WHERE user_id = :userId";


        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':newUsername', $newUsername);
        $stmt->bindParam(':newEmail', $newEmail);
        $stmt->bindParam(':newRole', $newRole);
        $stmt->bindParam(':userId', $userId_to_update);

        $result = $stmt->execute();

        if ($result !== false) {
            $conn->commit();
            header("Location: admin.php");
            exit();
        } else {
            $conn->rollBack();
            echo "Execute failed";
            $errorInfo = $stmt->errorInfo();
            var_dump($errorInfo);
            exit();
        }
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Error: " . $e->getMessage();
        echo "<br>";
        echo "Error code: " . $e->getCode();
        exit();
    }
} else {
    echo "Error: userId is empty";
    exit();
}
?>