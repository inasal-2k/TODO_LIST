<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id']; 

$stmt = $conn->prepare("SELECT * FROM tasks WHERE user_id = :user_id AND is_completed = 0");
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt_completed = $conn->prepare("SELECT * FROM tasks WHERE user_id = :user_id AND is_completed = 1");
$stmt_completed->bindParam(':user_id', $user_id);
$stmt_completed->execute();
$completed_tasks = $stmt_completed->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="container">
  <aside class="sidebar">
      <h2 class="sidebar-title">To Do List</h2>
      <input type="text" class="search-bar" placeholder="Search..." 
         onfocus="this.placeholder=''" 
         onblur="this.placeholder='Search...'">

         <button id="darkModeToggle">🌙 Dark Mode</button>

         <div class="portfolio_section">
      <h5 class="portfolio-title">See developer portfolio</h5>
      <ul class="sidebar-list">
          <li><div class="menu-item"><a href="portfolio.php">Portfolio</a></div></li>
          <li><div class="logout-item"><a href="logout.php">Logout</a></div></li>
      </ul>
      </div>
      
  </aside>
</div>

<div class="main-content">
    <h2>New Task</h2>
    <form action="add_task.php" method="POST">
        <input type="text" name="task_name" placeholder="Task" required>
        <button type="submit" class="add-btn">Add Task</button>
    </form>

    <h3>Task List</h3>
    <div>
        <?php foreach ($tasks as $task): ?>
            <div class="task-container">
                <span><?php echo htmlspecialchars($task['task_name']); ?></span>
                <div>
                    <a href="edit_task.php?id=<?php echo $task['id']; ?>">
                        <button class="edit-btn">Edit</button>
                    </a>

                    <form action="complete_task.php" method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                        <button type="submit" class="complete-btn">Complete</button>
                    </form>

                    <a href="delete_task.php?id=<?php echo $task['id']; ?>">
                        <button class="delete-btn">Delete</button>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <h3>Completed Tasks</h3>
    <div class="completed-tasks">
        <?php foreach ($completed_tasks as $task): ?>
            <div class="task-container completed">
                <span><?php echo htmlspecialchars($task['task_name']); ?></span>
                <a href="delete_task.php?id=<?php echo $task['id']; ?>">
                    <button class="delete-btn">Delete</button>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>