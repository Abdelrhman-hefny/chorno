<?php
// انشاء اتصال بقاعدة البيانات SQLite باستخدام PDO
try {
  $db = new PDO('sqlite:watches.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Failed to connect to the database: ' . $e->getMessage();
  exit;
}

// انشاء جدول لتخزين بيانات الساعات إذا لم يكن موجودًا بالفعل
try {
  $db->exec('CREATE TABLE IF NOT EXISTS watches (
                id INTEGER PRIMARY KEY,
                name TEXT,
                image TEXT,
                price REAL
            )');
} catch (PDOException $e) {
  echo 'Failed to create watches table: ' . $e->getMessage();
  exit;
}

// استقبال البيانات من النموذج
$name = $_POST['name'];
$image = $_FILES['image']['name'];
$price = $_POST['price'];

// رفع الصورة إلى المسار المطلوب
move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $image);

// إدخال البيانات في قاعدة البيانات
try {
  $stmt = $db->prepare('INSERT INTO watches (name, image, price) VALUES (:name, :image, :price)');
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':image', $image);
  $stmt->bindParam(':price', $price);
  $stmt->execute();
} catch (PDOException $e) {
  echo 'Failed to insert data into watches table: ' . $e->getMessage();
  exit;
}

// إعادة توجيه المستخدم إلى صفحة الإضافة مرة أخرى
header('Location: form.php');
exit;
?>