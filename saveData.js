const express = require('express');
const fs = require('fs');
const multer = require('multer');

const app = express();
const port = 3000;

// تكوين Multer للتعامل مع ملفات الصور
const upload = multer({ dest: 'uploads/' });

// عرض الصفحة الرئيسية
app.get('/', (req, res) => {
  res.sendFile(__dirname + '/dashboard.html');
});

// نقطة نهاية لإضافة العناصر
app.post('/addItem', upload.single('itemImage'), (req, res) => {
  const itemName = req.body.itemName;
  const itemPrice = req.body.itemPrice;
  const itemImage = req.file.filename; // اسم الملف المؤقت

  // قراءة البيانات الموجودة في الملف JSON
  fs.readFile('clocks.json', 'utf8', (err, data) => {
    if (err) {
      console.error('Error reading file:', err);
      return res.status(500).send('Internal Server Error');
    }

    let clocksData = JSON.parse(data);
    clocksData.push({ name: itemName, price: itemPrice, image: itemImage });

    // حفظ التغييرات في ملف JSON
    fs.writeFile('clocks.json', JSON.stringify(clocksData), err => {
      if (err) {
        console.error('Error writing file:', err);
        return res.status(500).send('Internal Server Error');
      }
      res.status(200).send('Data saved successfully.');
    });
  });
});

app.listen(port, () => {
  console.log(`Server is listening at http://localhost:${port}`);
});
