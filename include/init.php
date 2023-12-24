<?php
/// lấy các biến, data
require_once("config.php");
// Kết nối database
require_once("database.php");

//IMPORT thư viện
require_once ('Session.php');
require_once ('Functions.php');
require_once ('Pagination.php');

// kết nối mới đến database
$db = new DB();
$db->connect();
$db->set_char('utf8mb4');

// Khởi tạo session
$session = new Session();
$session->start();

// Kim tra session
if ($session->get() != '') {
    $user = $session->get();
} else {
    $user = '';
}
$data_user = false;
/// Get info User 
$sqlu = "SELECT * FROM tbl_user where username = '$user' limit 1";
if ($db->num_rows($sqlu)) {
    $data_user = $db->fetch_assoc($sqlu, 1);
}



// echo "<script>console.log('Import Init !!')</script>";

?>