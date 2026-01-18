<?php
    
    require 'db.php';
    
    $stmt = $pdo->query("SELECT * FROM books");
    
    echo "<h1>📚 Моя Mindset Библиотека</h1>";
    
    while ($row = $stmt->fetch()) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; border-radius: 5px;'>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p>Автор: " . $row['author'] . " | Год: " . $row['year'] . "</p>";
        echo "<p>Описание: <i>" . $row['description'] . "</i></p>";
        echo "<b>Статус: " . $row['status'] . "</b>";
        echo "</div>";
    }