<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $email = $_POST['email'];

    // Đường dẫn đến tệp văn bản
    $file = 'email.txt';

    // Mở tệp và ghi dữ liệu vào
    $handle = fopen($file, 'a'); // 'a' để ghi vào cuối tệp
    if ($handle) {
        fwrite($handle, $email . "\n");
        fclose($handle);
        echo "Email đã được lưu!";
    } else {
        echo "Không thể mở tệp để ghi dữ liệu.";
    }
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
