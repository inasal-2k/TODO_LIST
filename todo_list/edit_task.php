<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $task = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $task_name = $_POST['task_name'];

    $stmt = $conn->prepare("UPDATE tasks SET task_name = :task_name WHERE id = :id");
    $stmt->bindParam(':task_name', $task_name, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="edit-container">
        <h2>Edit Task</h2>
        <form action="edit_task.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($task['id']); ?>">
            <input type="text" name="task_name" value="<?php echo htmlspecialchars($task['task_name']); ?>" required>
            <button type="submit" name="update" class="update-btn">Update Task</button>
            <a href="index.php" class="cancel-btn">Cancel</a>
        </form>
    </div>
</body>
</html>