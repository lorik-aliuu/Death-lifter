<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 1) {
    header("Location: home.php");
    exit();
}

require_once "DatabaseConfig.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];

        $dbConfig = new DatabaseConfig();
        $conn = $dbConfig->getConnection();

        switch ($action) {
            case "delete":
                if (isset($_POST["userId"])) {
                    $userIdToDelete = $_POST["userId"];

                    $sql = "DELETE FROM users WHERE user_id = :userId";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':userId', $userIdToDelete);
                    $stmt->execute();
                    header("Location: admin.php");
                    exit();
                }
                break;

            case "edit":
                if (isset($_POST["userId"])) {
                    $userIdToEdit = $_POST["userId"];
                    header("Location: edit.php?userId=" . urlencode($userIdToEdit));
                    exit();
                } else {
                    echo "Error";
                    exit();
                }

            default:
                break;
        }
    }
}

$dbConfig = new DatabaseConfig();
$conn = $dbConfig->getConnection();
$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$contactSql = "SELECT * FROM contactpage";
$contactStmt = $conn->prepare($contactSql);
$contactStmt->execute();
$contactMessages = $contactStmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="logo-removebg-preview.png" type="image/x-icon" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Pacifico&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: black;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main h1 {
            text-align: center;
            font-family: 'Black Ops One', system-ui;
            margin-top: 15px;
            font-size: 45px;
        }

        .tableDiv {
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid white;
        }

        th {
            background-color: black;
            color: white;
        }

        td {
            background-color: #333;
            color: white;
        }

        form {
            display: inline;
            text-align: center;
        }

        button {
            background-color: #555;
            color: white;
            padding: 8px 15px;
            border: none;
            cursor: pointer;
            margin-right: 5px;
            border-radius: 10px;
            margin-left: 10px;
        }

        button:hover {
            background-color: #777;
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        @media only screen and (max-width: 768px) {
            .tableDiv {
                overflow-x: auto;
            }

            table {
                border-collapse: collapse;
            }

            th,
            td {
                padding: 10px;
                text-align: left;
            }

            form {
                display: flex;
                flex-direction: column;
                margin-bottom: 3px;
            }

            button {
                margin-bottom: 5px;
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="logo.jpg" alt="Logo" width="100px">
            </div>
        </div>

        <div class="main">
            <h1>Welcome Admin</h1>
        </div>

        <h2>All Users</h2>
        <div class="tableDiv">
            <table border="1">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td>
                            <?= isset($user['username']) ? $user['username'] : 'Null' ?>
                        </td>
                        <td>
                            <?= isset($user['email']) ? $user['email'] : 'Null' ?>
                        </td>
                        <td>
                            <?= isset($user['role']) ? $user['role'] : 'Null' ?>
                        </td>
                        <td>
                            <form method="post" action="admin.php">
                                <input type="hidden" name="userId"
                                    value="<?= isset($user['user_id']) ? $user['user_id'] : '' ?>">
                                <button type="submit" name="action" value="edit">Edit</button>
                            </form>

                            <form method="post" action="delete.php">
                                <input type="hidden" name="userId"
                                    value="<?= isset($user['user_id']) ? $user['user_id'] : '' ?>">
                                <input type="hidden" name="username"
                                    value="<?= isset($user['username']) ? $user['username'] : '' ?>">
                                <button type="submit" name="action" value="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <h2>Contact Messages</h2>
    <div class="tableDiv">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php foreach ($contactMessages as $message): ?>
                <tr>
                    <td>
                        <?= $message['id'] ?>
                    </td>
                    <td>
                        <?= $message['emri'] ?>
                    </td>
                    <td>
                        <?= $message['email'] ?>
                    </td>
                    <td>
                        <?= $message['message'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>