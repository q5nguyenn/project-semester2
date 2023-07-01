<?php
require_once($base_url . '../database/database.php');
require_once($base_url . '../database/utility.php');

$faculties = excuteResult("SELECT * FROM `faculties`");
$departments = excuteResult("SELECT * FROM `departments`");
if (!empty(checkLogin())) {
	$user = checkLogin();
	$sql = "SELECT * FROM carts where user_id = '" . $user['id'] . "'";
	$carts = excuteResult("SELECT * FROM carts where user_id = '" . $user['id'] . "'");

	if(empty($carts)) {

	if (empty($carts)) {

		$carts = [];
	}
} else {
	$carts = [];
}
?>
<header>
	<div class="container-fluid shadow-sm fixed-top bg-white borer border-5" id="nav-bar">
		<div class="container d-flex py-1 align-items-center">
			<div>
				<a class="btn fw-bold fs-5" href="<?= asset('views/index.php') ?>">STAR CLASSES</a>
			</div>
			<div class="dropdown pe-2" id="category">
				<button class="btn dropdown-toggle" id="category-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					Categories
				</button>
				<ul class="dropdown-menu" id="category-menu" aria-labelledby="category-toggle">
					<?php
					foreach ($faculties as $faculty) {
						echo '<li data-id="' . $faculty['id'] . '">
										<a class="dropdown-item"  href="' . asset('views/faculty.php?id=' . $faculty['id']) . '">
										' . $faculty['icon'] . ' ' . $faculty['name'] . '
										</a>
									</li>';
					}
					?>
					<?php
					foreach ($faculties as $faculty) {
						echo '<div data-parent="' . $faculty['id'] . '" class="position-absolute start-100 top-0 bg-white rounded shadow-sm department-item h-100" 
						style="display:none;">';
						foreach ($departments as $department) {
							if ($faculty['id'] == $department['faculty_id']) {
								echo '<a class="" href="' . asset('views/department.php?id=' . $department['id']) . '">
											' . $department['name'] . '
											</a>';
							}
						}
						echo '</div>';
					}
					?>
				</ul>
			</div>
			<div class="flex-fill">
				<form class="d-flex rounded-circle position-relative" action="<?= asset('database/searchController.php') ?>">
					<input class="form-control me-2" type="text" placeholder="Search" name="keyword">
					<i class="bi bi-search position-absolute top-50 end-0 translate-middle btn p-0 pe-2"></i>
				</form>


			</div>
			<div class="position-relative">
				<a href="<?= !empty(checkLogin()) ? asset('views/cart.php') : asset('views/auth/signin.php') ?>" class="btn btn-light"><i class="bi bi-bag"></i></a>
				<?php if (!empty(checkLogin())) {
					echo '<span class="position-absolute translate-middle badge rounded-pill bg-danger" style="top:5px; right: -15px">
									' . count($carts) . '
								</span>';
				} ?>

			</div>
			<div class="ms-2">
				<a class="btn btn-secondary" href="<?= !empty(checkLogin()) ? asset('views/dash-board/active-code.php') : asset('views/auth/signin.php') ?>"><i class="bi bi-unlock me-2"></i><span>Kích hoạt khoá học</span></a>
			</div>
			<?php
			if (!empty(checkLogin())) {
<<<<<<< HEAD
				echo '<div class="ms-2 position-relative" id="user">
									<div class="user-toogle bg-primary  btn rounded-circle text-white fw-bold" id="user-toggle">Q</div>
									<div class="position-absolute bg-white p-1 rounded menu-links shadow-sm" id="user-menu" style="display: none;">
										<a class="p-2 btn d-block text-start" href="#">Vào học</a>
										<a class="p-2 btn d-block text-start">Kích hoạt khoá học</a>
										<a class="p-2 btn d-block text-start" href="./auth/profile.php">Cập nhật hồ sơ</a>
										<a class="p-2 btn d-block text-start" href="./cart.php">Giỏ hàng</a>
										<a class="p-2 btn d-block text-start border-top" href="../database/auth/logoutController.php">Đăng xuất</a>
									</div>
								</div>';
=======
				echo '<div class="dropdown ms-2" id="user">
								<div class="user-toogle bg-primary  btn rounded-circle text-white fw-bold" id="user-toggle" 
								data-bs-toggle="dropdown" aria-expanded="false">Q</div>
								<ul class="dropdown-menu dropdown-menu-en" id="user-menu">
									<li><a class="dropdown-item" href="' . asset('views/dash-board/dashboard.php') . '">Vào học</a></li>
									<li><a class="dropdown-item" href="' . asset('views/dash-board/active-code.php') . '">Kích hoạt khoá học</a></li>
									<li><a class="dropdown-item" href="' . asset('views/auth/profile.php') . '">Cập nhật hồ sơ</a></li>
									<li><a class="dropdown-item" href="' . asset('views/cart.php') . '">Giỏ hàng</a></li>
									<li><a class="dropdown-item border-top" href="' . asset('database/auth/logoutController.php') . '">Đăng xuất</a></li>
								</ul>
				</div>';
>>>>>>> 78fb69b1ea3b12b0c8c69fe11c34f1c04666abec
			} else {
				echo '<div>
				<a href="' . asset('views/auth/signin.php') . '" class="btn btn-light ms-2">Đăng nhập</a>
				<a href="' . asset('views/auth/signup.php') . '" class="btn btn-warning text-white ms-2">Đăng ký</a>
				</div>';
			}
			?>
		</div>
	</div>
</header>