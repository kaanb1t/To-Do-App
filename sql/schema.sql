-- Maak de database aan als deze nog niet bestaat
CREATE DATABASE IF NOT EXISTS todo_app;

-- Gebruik de todo_app-database
USE todo_app;

-- Maak de tasks-tabel aan
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL,
    completed BOOLEAN NOT NULL DEFAULT 0
);
