<?php
// التأكد من وجود معرف السطر المراد حذفه
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  try {
    // اتصال بقاعدة البيانات SQLite باستخدام PDO
    $db = new PDO('sqlite:watches.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // استعلام SQL لحذف السطر المحدد
    $stmt = $db->prepare('DELETE FROM watches WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // إعادة توجيه المستخدم إلى صفحة الفورم بعد الحذف
    header('Location: form.php');
    exit;
  } catch (PDOException $e) {
    echo 'Failed to delete record: ' . $e->getMessage();
  }
} else {
  echo 'Record ID is missing.';
}
?>