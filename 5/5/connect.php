<?php

$host = "sql206.infinityfree.com";
$username = "if0_42881913";
$password = "234123567gus";
$dbname = "if0_42881913_workshop";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

// แสดงข้อความเฉพาะตอนเปิด connect.php โดยตรง
if (basename($_SERVER['SCRIPT_FILENAME']) === 'connect.php') {
    echo "เชื่อมต่อสำเร็จ นายภคินธ์ ไชยเดช";
}

?>