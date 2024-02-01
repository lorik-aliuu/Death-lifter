<?php
require_once "DatabaseConfig.php";

class LoginValidation
{
    private $dbConfig;

    public function __construct(DatabaseConfig $dbConfig)
    {
        $this->dbConfig = $dbConfig;
    }

    public function validateCredentials($username, $password)
    {

        if (!preg_match('/^[^0-9][\w\d]*$/', $username)) {
            return "Invalid username";
        }

        if (strlen($password) < 8) {
            return "Invalid password";
        }


        $conn = $this->dbConfig->getConnection();

        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user["password"])) {
            session_start();
            $_SESSION['user'] = [
                'username' => $user["username"],
                'email' => $user["email"],
                'role' => $user["role"]

            ];

            return true;
        } else {
            return "Invalid credentials";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["usernameLogin"];
    $password = $_POST["passwordLogin"];

    $dbConfig = new DatabaseConfig();
    $loginValidation = new LoginValidation($dbConfig);

    $result = $loginValidation->validateCredentials($username, $password);

    if (is_array($result) && $result['role'] == 1) {
        header("Location: Admin.php");
        exit();
    } elseif ($result === true) {

        header("Location: home.php");
        exit();
    } else {

        header("Location: ErrorLogin.php");
        exit();
    }
} else {

    header("Location: ErrorLogin.php");
    exit();
}
?>