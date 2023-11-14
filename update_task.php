<?php
include('includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $taskId = $_POST['task_id'];
    $completed = $_POST['completed'];

    try {
        $stmt = $conn->prepare("UPDATE tasks SET completed = :completed WHERE id = :taskId");
        $stmt->bindParam(':completed', $completed);
        $stmt->bindParam(':taskId', $taskId);

        if ($stmt->execute()) {
            header("Location: index.php");
        } else {
            echo "Error bij het bijwerken van de gegevens";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
