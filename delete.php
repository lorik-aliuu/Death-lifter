<?php

require_once 'DatabaseConfig.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'delete' && isset($_POST['username'])) {

        $username = $_POST['username'];

        try {
            $databaseConfig = new DatabaseConfig();
            $connection = $databaseConfig->getConnection();

            $sql = "DELETE FROM users WHERE username = :username";
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();

            header("Location: delete_success.php");
            exit;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit;
        }
    }
}

?>