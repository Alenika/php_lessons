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
?>
    
    <div style="background: #f4f4f4; padding: 20px; border-radius: 8px; margin-bottom: 30px;">
    <h3>Добавить новую книгу</h3>
        <form action="" method="POST">
            <input type="text" name="title" placeholder="Название книги" required style="padding: 8px; margin-right: 5px;">
            <input type="text" name="author" placeholder="Автор" required style="padding: 8px; margin-right: 5px;">
            <input type="number" name="year" placeholder="Год" style="width: 70px; padding: 8px; margin-right: 5px;">
            <button type="submit" style="padding: 8px 15px; background: #27ae60; color: white; border: none; border-radius: 4px; cursor: pointer;">
        Сохранить
            </button>
        </form>
    </div>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];
        $genre = 'Self-Help';
        $status = 'wishlist';
        $description = 'A counterintuitive approach to living a good life.';
        
        $sql = "INSERT INTO books (title, author, year, genre, status, description)
            VALUES (:title, :author, :year, :genre, :status, :description)";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            'title' => $title,
            'author' => $author,
            'year' => $year,
            'genre' => $genre, // <--- Важно!
            'status' => $status,
            'description' => $description
        ]);
        
        header("Location: index.php");
        exit;
    }