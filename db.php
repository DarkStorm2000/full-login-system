<?php
// معلومات الاتصال بقاعدة البيانات
$host = "localhost"; // اسم الخادم المستضيف لقاعدة البيانات
$username = "root"; // اسم المستخدم الخاص بقاعدة البيانات
$password = ""; // كلمة المرور الخاصة بقاعدة البيانات
$dbname = "vidios"; // اسم قاعدة البيانات

// إنشاء اتصال بقاعدة البيانات
$conn = mysqli_connect($host, $username, $password, $dbname);

// التحقق من حدوث أي أخطاء في الاتصال
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}