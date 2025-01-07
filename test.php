<?php
$password = 'admin'; // Password asli
$hash = '$2y$10$Jp7FlbB1XJKZx2NhPX5DcuWvzh4Jpo475iYRCR0ObZ4ndFuHzCHIS'; // Hash dari database

if (password_verify($password, $hash)) {
    echo "Password benar!";
} else {
    echo "Password salah!";
}
?>