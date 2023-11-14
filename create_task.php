<?php
include('includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $taskName = $_POST['task_name'];

    try {
        $stmt = $conn->prepare("INSERT INTO tasks (task_name) VALUES (:taskName)");
        $stmt->bindParam(':taskName', $taskName);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error bij het uitvoeren van de query";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
