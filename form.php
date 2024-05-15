<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة ساعة جديدة</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./src/bootstrap.min.css">
    <style>
        img {
            width: 10%;
            margin: auto;
            display: flex;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>إضافة ساعة جديدة</h2>
        <form action="process.php" method="post" enctype="multipart/form-data" class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">اسم الساعة</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="اسم الساعة">
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">صورة الساعة</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">السعر</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="السعر">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">إضافة الساعة</button>
            </div>
        </form>

        <h2 class="mt-5">قائمة الساعات</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">اسم الساعة</th>
                    <th scope="col">الصورة</th>
                    <th scope="col">السعر</th>
                    <th scope="col">حذف</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // اتصال بقاعدة البيانات SQLite
                $db = new PDO('sqlite:watches.db');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // استعلام SQL لاسترجاع بيانات الساعات
                $stmt = $db->query('SELECT * FROM watches');

                // عرض البيانات على الصفحة
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td><img src="uploads/' . $row['image'] . '" alt="' . $row['name'] . '" class="img-thumbnail"></td>';
                    echo '<td>' . $row['price'] . '</td>';
                    echo '<td><a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger">حذف</a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="./src/bootstrap.min.js"></script>
    <script src="./src/bootstrap.bundle.min.js"></script>
</body>

</html>