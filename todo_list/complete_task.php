<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $task_id = $_POST['id'];

    $stmt = $conn->prepare("UPDATE tasks SET is_completed = 1 WHERE id = ?");
    $stmt->execute([$task_id]);

    header("Location: index.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>