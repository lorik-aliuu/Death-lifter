<?php

require_once "databaseConfig.php";

class ContactDatabase
{

    private $db;

    public function __construct()
    {
        $this->db = new DatabaseConfig();
    }

    public function insertContactData($emri, $email, $message)
    {
        $conn = $this->db->getConnection();

        $emri = $conn->quote($emri);
        $email = $conn->quote($email);
        $message = $conn->quote($message);

        $sql = "INSERT INTO contactPage (emri, email, message) VALUES ($emri, $email, $message)";

        try {
            $conn->exec($sql);
            echo "Record inserted successfully";
            header('Location: contact.php');
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactDatabase = new ContactDatabase();

    $emri = $_POST["emri"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $contactDatabase->insertContactData($emri, $email, $message);
}
?>