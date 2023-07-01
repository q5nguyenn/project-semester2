function deleteProfile() {
    var confirmed = false;  // Khởi tạo biến confirmed với giá trị ban đầu là false

    if (confirm('Bạn có chắc chắn muốn xoá thông tin không?')) {
        // Nếu người dùng xác nhận xoá thông tin, thiết lập biến confirmed thành true
        confirmed = true;
    }

    if (confirmed) {
        // Gửi yêu cầu xoá thông tin đến máy chủ
        $.ajax({
            url: 'delete_profile.php', // Đường dẫn tới tập tin xử lý xoá thông tin trên máy chủ
            type: 'POST',
            success: function(response) {
                // Xoá thành công, chuyển hướng về trang khác (ví dụ: trang chủ)
                window.location.href = '../../views/index.php';
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi nếu có
                console.log(error);
            }
        });
    } else {
        // Nếu người dùng không xác nhận xoá thông tin, không gửi yêu cầu xoá thông tin đến máy chủ
        event.stopPropagation();
        event.preventDefault();
        return false;
    }
}
