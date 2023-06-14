<?php
include '../../../database/database.php';
include '../../../database/utility.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Lấy giá trị của biến từ phương thức POST của form gửi đi.
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kiểm tra xem mật khẩu và xác nhận mật khẩu có khớp nhau hay không
    if ($password !== $confirm_password) {
        echo "Mật khẩu và nhập lại mật khẩu không khớp";
    } else {
        // Tạo kết nối tới cơ sở dữ liệu
        $conn = openConnection();

        // Kiểm tra xem người dùng đã tồn tại trong cơ sở dữ liệu hay chưa
        $check_sql = "SELECT * FROM users WHERE email = ?";

        $stmt = $conn->prepare($check_sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Email đã tồn tại";
        } else {
            // Thêm người dùng mới vào cơ sở dữ liệu
            $query = "INSERT INTO users (name, email, phone_number, password, description, address, thumbnail) VALUES (?, ?, ?, ?, '', '', '')";

            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssss", $fullname, $email, $phone, $password);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // Người dùng đã được thêm vào cơ sở dữ liệu
                echo "Người dùng đã được thêm vào cơ sở dữ liệu: " . $fullname;
            } else {
                // Người dùng không được thêm vào cơ sở dữ liệu
                echo "Không tìm thấy người dùng trong cơ sở dữ liệu";
            }
        }

        // Đóng kết nối với cơ sở dữ liệu
        closeConnection($conn);
    }
}
?>
