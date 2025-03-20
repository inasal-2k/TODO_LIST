<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['user_id'])) {
        die("Error: User not logged in.");
    }

    $user_id = $_SESSION['user_id'];
    $task_name = $_POST['task_name'];

    try {
        $stmt = $conn->prepare("INSERT INTO tasks (task_name, user_id) VALUES (:task_name, :user_id)");
        $stmt->bindParam(':task_name', $task_name);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();

        header("Location: index.php");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>