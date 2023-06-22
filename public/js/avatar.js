$(document).ready(function() {
    // Lắng nghe sự kiện click vào biểu tượng máy ảnh
    $('#avatar-edit').click(function() {
        // Hiển thị hộp thoại chọn tệp để người dùng tải lên
        var fileInput = $('<input type="file">');
        fileInput.trigger('click');

        // Xử lý sự kiện khi người dùng chọn một tệp ảnh
        fileInput.change(function() {
            var file = this.files[0];
            if (file) {
                // Hiển thị ảnh mới trong khung Avatar
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('#avatar').attr('src', event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });
});