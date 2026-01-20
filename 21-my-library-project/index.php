<?php
    
    require 'db.php';
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$title = $_POST['title'];
		$author = $_POST['author'];
		$year = $_POST['year'];
		$genre = $_POST['genre'];
		$description = $_POST['description'];
		$status = 'wishlist';
        
        $sql = "INSERT INTO books (title, author, year, genre, status, description) VALUES (:title, :author, :year, :genre, :status, :description)";
		
		$stmt = $pdo->prepare($sql);
        $stmt->execute([
            'title' => $title, 'author' => $author, 'year' => $year,
            'genre' => $genre, 'status' => $status, 'description' => $description
        ]);
        
        header("Location: index.php");
        exit;
    }
    
    $stmt = $pdo->query("SELECT * FROM books");
?>

<h1>📚 Моя Библиотека</h1>
<div style="background: #f4f4f4; padding: 20px; border-radius: 8px; margin-bottom: 30px; font-family: sans-serif;">
	<h3>Добавить новую книгу</h3>
	<form action="" method="POST">
		<input type="text" name="title" placeholder="Название" required style="padding: 8px; margin-bottom: 5px;">
		<input type="text" name="author" placeholder="Автор" required style="padding: 8px; margin-bottom: 5px;">
		<input type="number" name="year" placeholder="Год" style="width: 80px; padding: 8px;">

		<select name="genre" style="padding: 8px;">
			<option value="Mindset">Mindset</option>
			<option value="Fiction">Fiction</option>
			<option value="Programming">Programming</option>
			<option value="Psychology">Psychology</option>
		</select>

		<input type="text" name="description" placeholder="Краткое описание" style="padding: 8px; width: 300px;">

		<button type="submit" style="padding: 8px 15px; background: #27ae60; color: white; border: none; border-radius: 4px; cursor: pointer;">
			Сохранить
		</button>
	</form>
</div>

<?php
    while ($row = $stmt->fetch()) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; border-radius: 5px;'>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p>Автор: " . $row['author'] . " | Жанр: <b>" . $row['genre'] . "</b> | Год: " . $row['year'] . "</p>";
        echo "<p>Описание: <i>" . $row['description'] . "</i></p>";
        echo "<b>Статус: " . $row['status'] . "</b>";
        echo "</div>";
    }
?>