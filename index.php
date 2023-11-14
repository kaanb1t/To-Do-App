<?php
    include('./includes/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>To-Do App</title>
</head>
<body>
    <div class="title">
        <h1>To-Do App</h1>
    </div>
    <div class="form-container">
        <form action="create_task.php" method="POST">
            <label for="task_name">Nieuwe taak:</label>
            <input type="text" name="task_name" required>
            <button type="submit">Toevoegen</button>
        </form>
    </div>
    <div class="tasks-container">
        <h2>Te doen</h2>
        <div class="tasks">
            <?php
                $pdo = new PDO("mysql:host=localhost;dbname=todo_app", "root", "");
                $sql = "SELECT * FROM tasks";
                $statement = $pdo->prepare($sql);
                $statement->execute(); 
                $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($tasks as $task) {
                    $statusIcon = ($task['completed'] == 1) ? '✔' : '✖';
                
                    echo '<div class="task-item' . ($task['completed'] == 1 ? ' completed' : '') . '">';
                    echo '<div class="task-info">';
                    echo $task['task_name'] . ' ' . $statusIcon;
                    echo '</div>';
                
                    // Formulier voor het bijwerken van de taak binnen elk task-item
                    echo '<form action="update_task.php" method="POST">';
                    echo '<input type="hidden" name="task_id" value="' . $task['id'] . '">';
                
                    // Voegt de checkbox toe als de taak niet is voltooid
                    if ($task['completed'] != 1) {
                        echo '<div class="task-actions">';
                        echo '<label for="task_' . $task['id'] . '"></label>';
                        echo '<input type="checkbox" id="task_' . $task['id'] . '" name="completed" value="1" onchange="this.form.submit()">';
                        echo '</div>';
                    } else {
                        echo '<input type="hidden" name="completed" value="0">';
                    }
                
                    echo '</form>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</body>
</html>