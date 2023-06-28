<?php
session_start();
$base_url = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Starclasses</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="../public/css/header.css" />
</head>

<body>
	<!-- <header></header> -->
	<?php
	require_once 'layouts/header.php';
	?>
	<main class="min-vh-100 bg-light">
		<div class="container my-3 shadow-sm">
			<h2>ĐIỀU KHOẢN DỊCH VỤ</h2>
			<p class="fw-bold"></p>
			Dưới đây là những điều khoản được áp dụng cho học viên và đối tác của
			Star Classes. Xin hãy đọc kỹ toàn bộ thỏa thuận trước khi tham gia.
			</p>
			<p>Một khi bạn đã đăng ký tham gia trên Star Classes (bao gồm việc đăng ký là Affiliate, Affiliate Manager, Giảng viên), chúng tôi sẽ hiểu rằng bạn đã đọc và đồng ý toàn bộ điều khoản được đưa ra trong bản thỏa thuận này.</p>
			<p>Bản cập nhật mới nhất (nếu có) sẽ được đăng tại tại đây và Unica sẽ không thông báo đến từng đối tác, vì vậy bạn hãy quay lại trang này thường xuyên để cập nhật chính sách mới nhất.</p>
			<div>
				<h2>ĐIỀU KHOẢN CHUNG</h2>
				<h6 class="my-2">Điều 1: Thông tin tài khoản cá nhân</h6>
				<div>
					<i class="bi bi-dot"></i><span>Khi đăng ký tài khoản, để được hỗ trợ nhanh chóng, bạn cần cung cấp đầy đủ và chính xác các thông tin: </span><span class="fw-bold">Họ tên, Email, Phone, Giới tính, Ngày sinh, Thành phố,..</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Chúng tôi sử dụng thông tin liên lạc của bạn để </span><span class="fw-bold">gửi mã kích hoạt khóa học</span><span>,thông báo chương trình khuyến mãi, xác nhận đổi mật khẩu, các thảo luận trong lớp học,..</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Thông tin ngày sinh và giới tính dùng để gợi ý đến bạn những khóa học phù hợp, cũng như gửi quà tặng đến bạn trong ngày sinh nhật.</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Bạn có thể đăng nhập bằng tài khoản (email + mật khẩu) hoặc đăng nhập bằng Google, Facebook.</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Bạn có thể cập nhật thông tin cá nhân hoặc hủy (xóa) tài khoản bất kỳ lúc nào khi không còn nhu cầu sử dụng</span>
				</div>
				<h6 class="my-2">Điều 2: Việc bảo mật thông tin</h6>
				<div>
					<i class="bi bi-dot"></i><span>Bạn có trách nhiệm tự mình bảo quản mật khẩu, nếu mật khẩu bị lộ ra ngoài dưới bất kỳ hình thức nào, Unica sẽ không chịu trách nhiệm về mọi tổn thất phát sinh</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Mọi thông tin cá nhân của bạn sẽ được chúng tôi bảo mật, không tiết lộ ra ngoài. Chúng tôi không bán hay trao đổi những thông tin này với bất kỳ một bên thứ ba nào khác. Tuy nhiên, trong trường hợp cơ quan chức năng yêu cầu, Star Classes buộc phải cung cấp những thông tin này theo quy định pháp luật.</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Bạn có quyền sở hữu trọn đời các khóa học đã đăng ký: không giới hạn số lần tham gia học và thời gian học.</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Bạn không được download video, không được chia sẻ video lên Internet với bất kỳ hình thức nào. Nếu vi phạm, tài khoản của bạn sẽ bị khoá và bạn phải chịu trách nhiệm trước pháp luật về hành vi xâm phạm sở hữu trí tuệ.</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Star Classes có thể gửi thông báo tình hình học tập, chương trình khuyến mãi (nếu có), thông báo khóa học mới sắp ra mắt để học viên quan tâm có thể đăng ký ngay để được ưu đãi. Nếu bạn không muốn nhận email có thể bấm vào link "Ngừng nhận email" ở cuối email.</span>
				</div>
				<h6 class="my-2">Điều 3: Đánh giá khóa học và thảo luận</h6>
				<div>
					<i class="bi bi-dot"></i><span>Học viên khi tham gia khóa học trên Unica có quyền đánh giá về chất lượng khóa học.</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Trong quá trình học, học viên có bất kỳ thắc mắc hay góp ý nào có thể đăng bình luận của mình lên phần Thảo luận - ngay trong giao diện bài học để được chuyên viên Star Classes và Giảng viên hỗ trợ giải đáp.</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Bên cạnh đó, mỗi khóa học trên Star Classes đều có 1 Group Thảo luận riêng cho các học viên và giảng viên để trao đổi các vấn đề chuyên môn</span>
				</div>
				<h6 class="my-2">Điều 4: Nghiêm cấm sử dụng dịch vụ với các hành vi dưới đây</h6>
				<div>
					<i class="bi bi-dot"></i><span>Sử dụng bất kỳ công cụ hay hình thức nào để can thiệp vào các dịch vụ, khóa học trong hệ thống </span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Phát tán hoặc tuyên truyền cổ vũ các hoạt động phát tán, can thiệp và phá hoại nội dung các bài học trên hệ thống của Unica ra bên ngoài. Mọi vi phạm khi bị phát hiện sẽ bị xóa tài khoản và có thể xử lý theo quy định của pháp luật về việc vi phạm bản quyền.</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Xúc phạm, nhạo báng người khác dưới bất kỳ hình thức nào: chê bai, kỳ thị tôn giáo, giới tính, sắc tộc..</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Hành vi, thái độ làm tổn hại đến uy tín của các sản phẩm, dịch vụ, khóa học trong hệ thống Unica dưới bất kỳ hình thức nào, phương thức nào.</span>
				</div>
				<h6 class="my-2">Điều 5: Trường hợp thanh toán tiền thừa</h6>
				<div>
					<i class="bi bi-dot"></i><span>Tiền thanh toán thừa cho khóa học được chuyển vào ví điện tử trong tài khoản Unica của khách hàng để thanh toán cho các đơn hàng tiếp theo.</span>
				</div>
				<div class="mt-2">
					<i class="bi bi-dot"></i><span>Trường hợp thanh toán thừa do lỗi hệ thống của Unica, chúng tôi sẽ trả lại tiền thừa hoặc chuyển sang ví điện tử Unica để thanh toán vào đơn hàng tiếp theo (tuỳ theo nguyện vọng của bạn).</span>
				</div>
				<h6 class="my-2">Điều 6: Chính sách hoàn trả học phí</h6>
				Học viện Online Unica luôn mong muốn tạo điều kiện thuận lợi nhất cho bạn để học hỏi và cập nhật những kiến thức hữu ích cho công việc cũng như đời sống thông qua các khóa học chất lượng trên Unica.

				Tuy nhiên, nếu bạn không hài lòng hoặc nội dung khóa học không như bạn mong đợi, bạn có thể yêu cầu hoàn lại học phí qua email của chúng tôi
				<h6 class="my-2">Điều 7: Chính sách đổi trả đối với thẻ học Unica</h6>
				<h6>Chính sách hoàn trả học phí và đổi thẻ học:</h6>
				<span>Đối với các thẻ đã giao nhưng học viên chưa học, thẻ sẽ được đổi trả nếu:</span>
				<div class="">
					<i class="bi bi-dot"></i><span>Trong vòng 90 ngày kể từ ngày thanh toán</span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>Giao sai loại thẻ.</span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>Học chưa quá 30% số bài học. </span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>Thẻ bị lỗi kỹ thuật, hư hỏng không sử dụng và kích hoạt được.</span>
				</div>
				<h2 class="my-2">ĐIỀU KHOẢN ĐỐI VỚI AFFILIATE VÀ ĐẠI LÝ</h2>
				<h6>Điều 8: Quy định về việc phân phối khóa học với Affiliate</h6>
				<div class="">
					<i class="bi bi-dot"></i><span>Đối tác không được chạy quảng cáo nói xấu các đơn vị kinh doanh khác nhằm lôi kéo người dùng</span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>Không được lôi kéo khách hàng mua khóa học bằng cách tặng tiền hoặc các vật phẩm có giá trị khác như thẻ cào, sản phẩm vật chất.</span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>Trong 6 tháng kể từ ngày đăng ký,Affiliate không phát sinh doanh thu sẽ bị tạm dừng quyền hoạt động.</span>
				</div>
				<h6 class="mt-2">Điều 9: Quy định về việc phân phối khóa học với Đại lý</h6>
				<div class="">
					<i class="bi bi-dot"></i><span>Đại lý không được quyền bán / cho / tặng tài khoản tạo sẵn cho học viên, chỉ được bán mã kích hoạt khóa học.</span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>Các website của đại lý cần có dấu chứng nhận xác thực được cấp bởi Unica, đặt ở chân trang website</span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>Đại lý cần khi tạo website bán hàng cần thông báo cho Unica biết qua email</span>
				</div>
				<h2 class="my-2">ĐIỀU KHOẢN ĐỐI VỚI GIẢNG VIÊN</h2>
				<h6>Điều 10: Về chương trình khuyến mại, trao tặng khóa học</h6>
				<div class="">
					<i class="bi bi-dot"></i><span>Star Classes được chủ động thực hiện các chương trình khuyến mại, combo nhằm mục tiêu gia tăng doanh thu cho đối tác và Star Classes mà không cần báo trước cho đối tác</span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>Star Classes được chủ động trao tặng khóa học như học bổng trong các chương trình, hoạt động online hay offline nhằm mục đích đẩy mạnh thương hiệu của đối tác và Star Classes</span>
				</div>
				<h6 class="mt-2">Điều 11: Về việc tự bán khóa học và hoàn tiền cho học viên.</h6>
				<div class="">
					<i class="bi bi-dot"></i><span>Giảng viên có quyền tự bán và phân phối khóa học, thu tiền từ học viên</span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>Giảng viên có trách nhiệm hoàn tiền cho học viên trong trường hợp học viên yêu cầu hoàn tiền và đáp ứng đủ điều kiện trong Điều 6 nếu Giảng viên là người bán và tự thu tiền học viên.</span>
				</div>
				<h6 class="mt-2">Điều 12: Về việc phân phối khoá học trên các nền tảng khác </h6>
				<div class="">
					<i class="bi bi-dot"></i><span>Star Classes có quyền bán khoá học của Giảng viên trên nền tảng khác,Giảng viên có quyền quyết định việc tham gia các nền tảng này tại phần cài đặt trong menu Giảng viên. Tỷ lệ chia sẻ của Giảng viên được ghi rõ trong phần Cài đặt.</span>
				</div>
				<h2 class="my-2">THANH TOÁN</h2>
				<h6 class="mt-2">Điều 13: Thanh toán hoa hồng, thưởng và thuế thu nhập</h6>
				<span>Đối Tác của Star Classes sẽ được chia sẻ doanh thu theo thỏa thuận của Star Classes với Đối Tác. Có thể tham khảo thêm ở phần giới thiệu chương trình Affiliate và Hợp tác giảng viên .</span>
				<div class="">
					<i class="bi bi-dot"></i><span>Affiliate cần hoàn tất hợp đồng điện tử (làm duy nhất một lần) trước khi nhận khoản hoa hồng đầu tiên.</span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>ĐUA TOP AFFILIATE: Nhằm khuyến khích các đối tác hoạt động tích cực, Star Classes có các cuộc đua Top Affiliate nhằm trao giải cho những người có kết quả tốt nhất.</span>
				</div>
				<div class="">
					<i class="bi bi-dot"></i><span>Star Classes sẽ khấu trừ thuế thu nhập cá nhân 10% đối với doanh thu đối tác đạt trên 2,000,000đ theo quy định của nhà nước (bao gồm cả thu nhập từ thưởng đua TOP).</span>
				</div>
				<h2 class="my-2">HỦY THỎA THUẬN VÀ CẬP NHẬT ĐIỀU KHOẢN </h2>
				<h6 class="mt-2">Điều 14: Huỷ thoả thuận hợp tác </h6>
				<span>Bất kỳ hoạt động gian lận hay các hành vi vi phạm một trong các điều khoản nói trên sẽ dẫn đến việc dừng thoả thuận hợp tác, hoặc cao hơn là khóa tài khoản và hủy mọi kết quả đạt được mà không cần thông báo trước.</span>
				<h6 class="mt-2">Điều 15. Về việc cập nhật điều khoảnều 14: Huỷ thoả thuận hợp tác </h6>
				<span>Star Classes có thể thay đổi, bổ sung hoặc sửa chữa thỏa thuận này bất cứ lúc nào nhằm cập nhật những chính sách mới nhất. Các cập nhật mới, quan trọng sẽ được thông báo và gửi email tới các đối tác liên quan. </span>
			</div>
		</div>

	</main>
	<!-- <footer></footer> -->
	<!--Footer Start-->
	<?php
	require_once 'layouts/footer.php';
	?>
	<!-- Footer End -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../public/js/header.js"></script>
	<script>
		$("#department").hide();
		$("#menu").hide();
		$("#categories").click(function(e) {
			e.preventDefault();
			$("#department").toggle(300);
		});

		$("#user").click(function(e) {
			e.preventDefault();
			$("#menu").toggle(300);
		});
	</script>
</body>

</html>