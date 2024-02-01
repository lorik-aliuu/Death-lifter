<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 1) {
    header("Location: home.php");
    exit();
}

require_once "DatabaseConfig.php";

if (isset($_GET['userId'])) {
    $userIdToEdit = $_GET['userId'];
} else {
    echo "error";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["userId"])) {
    $userIdToEdit = $_GET["userId"];

    $dbConfig = new DatabaseConfig();
    $conn = $dbConfig->getConnection();

    if (!$conn) {
        die("Database connection failed");
    }

    $sql = "SELECT * FROM users WHERE user_id = :userId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':userId', $userIdToEdit);
    $stmt->execute();
    $userToEdit = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .logo {
            background-color: black;
            height: 95px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: black;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: black;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <div class="logo">
        <img src="logo.jpg" alt="" width="95px">
    </div>

    <div class="container">
        <div class="main">
            <h2>Edit User</h2>
            <form method="post" action="update.php">
                <input type="hidden" name="userId"
                    value="<?= isset($userToEdit['user_id']) ? $userToEdit['user_id'] : '' ?>">

                <label for="newUsername">New Username:</label>
                <input type="text" name="newUsername"
                    value="<?= isset($userToEdit['username']) ? $userToEdit['username'] : '' ?>"><br>

                <label for="newEmail">New Email:</label>
                <input type="text" name="newEmail"
                    value="<?= isset($userToEdit['email']) ? $userToEdit['email'] : '' ?>"><br>

                <label for="newRole">New Role:</label>
                <input type="text" name="newRole"
                    value="<?= isset($userToEdit['role']) ? $userToEdit['role'] : '' ?>"><br>

                <button type="submit" name="action" value="update">Update</button>
            </form>
        </div>
    </div>
</body>

</html>