<?php
require_once(($base_url ?? '') . '../database/database.php');

$faculties = excuteResult("SELECT * FROM `faculties`");
$departments = excuteResult("SELECT * FROM `departments`");
if (!empty(checkLogin())) {
	$user = checkLogin();
	$sql = "SELECT * FROM carts where user_id = '" . $user['id'] . "'";
	$carts = excuteResult("SELECT * FROM carts where user_id = '" . $user['id'] . "'");
} else {
	$carts = [];
}
?>
<header>
	<div class="container-fluid shadow-sm fixed-top bg-white borer border-5" id="nav-bar">
		<div class="container d-flex py-1 align-items-center">
			<div>
				<a class="btn fw-bold fs-5" href="index.html">STAR CLASSES</a>
			</div>
			<div class="mx-3 position-relative" id="category">
				<button class="btn" id="category-toggle">
					Categories <i class="bi bi-chevron-down"></i>
				</button>
				<div class="position-absolute bg-white p-1 department-links rounded shadow-sm" id="category-menu" style="display: none; min-width: 230px">
					<?php
					foreach ($faculties as $faculty) {
						echo '<a class="p-2 btn w-100 text-start" data-id="' . $faculty['id'] . '" >' . $faculty['icon'] . ' ' . $faculty['name'] . '</a>';
					}
					?>
					<?php
					foreach ($faculties as $faculty) {
						echo '<div data-parent="' . $faculty['id'] . '" class="position-absolute start-100 top-0 bg-white rounded shadow-sm department-item h-100" 
						style="display:none; width:200px">';
						foreach ($departments as $department) {
							if ($faculty['id'] == $department['faculty_id']) {
								echo '<div class="p-2 btn w-100 text-start">' . $department['name'] . '</div>';
							}
						}
						echo '</div>';
					}
					?>
				</div>
			</div>
			<div class="flex-fill">
				<form class="d-flex rounded-circle position-relative" action="../database/searchController.php">
					<input class="form-control me-2" type="text" placeholder="Search" name="keyword">
					<i class="bi bi-search position-absolute top-50 end-0 translate-middle btn p-0 pe-2"></i>
				</form>
			</div>
			<div class="position-relative">
				<a href="<?= !empty(checkLogin()) ? 'cart.php' : 'auth/signin.php' ?>" class="btn btn-light"><i class="bi bi-bag"></i></a>
				<?php if (!empty(checkLogin())) {
					echo '<span class="position-absolute translate-middle badge rounded-pill bg-danger" style="top:5px; right: -15px">
									' . count($carts) . '
								</span>';
				} ?>

			</div>
			<div class="ms-2">
				<a class="btn btn-secondary"><i class="bi bi-unlock me-2"></i><span>Kích hoạt khoá học</span></a>
			</div>
			<?php
			if (!empty(checkLogin())) {
				echo '<div class="ms-2 position-relative" id="user">
									<div class="user-toogle bg-primary  btn rounded-circle text-white fw-bold" id="user-toggle">Q</div>
									<div class="position-absolute bg-white p-1 rounded menu-links shadow-sm" id="user-menu" style="display: none;">
										<a class="p-2 btn d-block text-start" href="#">Vào học</a>
										<a class="p-2 btn d-block text-start">Kích hoạt khoá học</a>
										<a class="p-2 btn d-block text-start">Cập nhật hồ sơ</a>
										<a class="p-2 btn d-block text-start" href="./cart.php">Giỏ hàng</a>
										<a class="p-2 btn d-block text-start border-top" href="../database/auth/logoutController.php">Đăng xuất</a>
									</div>
								</div>';
			} else {
				echo '<div>
									<a href="./auth/signin.php" class="btn btn-light ms-2">Đăng nhập</a>
									<a href="./auth/signup.php" class="btn btn-warning text-white ms-2">Đăng ký</a>
								</div>';
			}
			?>
		</div>
	</div>
</header>