<?php
session_start();
include '../../database/database.php';
include '../../database/utility.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

$user_id = 2; // ID người dùng
if(!empty(checkLogin())) {
    $user_id = checkLogin()['id'];
}

// Lấy thông tin của người dùng từ cơ sở dữ liệu
$sql_check = "SELECT * FROM users WHERE id = '" . $user_id . "'";
$user = excuteResult($sql_check, true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = getPOST('name');
    $email = getPOST('email');
    $phone_number = getPOST('phone');
    $address = getPOST('address');
    $birth_day = getPOST('birthday');
   

    $sql = "UPDATE users SET name='$name', email='$email', phone_number='$phone_number', address='$address', birth_day='$birth_day' WHERE id = $user_id";
//    execute($sql);
    excuteResult($sql,true);

    // Chuyển hướng về trang xem thông tin người dùng sau khi cập nhật thành công
    header('Location: /profile.php');

    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Cá Nhân</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="public/css/header.css" />
</head>

<body>
<!-- <header></header> -->
<header></header>
<main>
  <div class="bg-image-container" style="background-image: url(https://id.unica.vn/images/bg-01.jpg); background-size: cover; background-position: center center; min-height: 100vh;">
    <div class="container-fluid">
      <div class="row justify-content-around">
        <h2 class="text-center text-white pt-5">STAR CLASSES</h2>
              <div class="col-md-4 bg-light p-3 py-3 my-3 rounded-3" >
                  <!--Form-->
                  <form action="../../database/auth/updateProfile.php" method="post">
                  <div class="position-relative">
                      <div class="position-absolute top-0 start-0" style="top: -15px; transform: translate(-50%, -50%);">
                          <a href="../../database/auth/deleteProfile.php" onclick="deleteProfile()"><i class="bi bi-trash text-danger fs-5"></i></a>
                      </div>
                      <div class="position-absolute top-0 end-0" style="top: -15px; transform: translate(-50%, -50%);">
                          <a href="signin.php"><i class="bi bi-box-arrow-in-right text-dark fs-4"></i></a>
                      </div>
                      <!-- Avatar -->
                      <div class="d-flex justify-content-center align-items-center" style="width: 100px; height: 100px; border-radius: 50%;margin-left: 42%;">
                          <input type="hidden" name="thumbnail">
                          <img  id="avatar" src="../../public<?=$user['thumbnail']?>" alt="Avatar"  style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                          <i id="avatar-edit" class="bi bi-camera fs-4 position-absolute bg-white rounded-5 mt-5" style="
    border-radius: 100%;
    padding: 0;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    cursor: pointer;
"></i>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="fullname" class="fw-bold pt-5" style="font-size: 12px">HỌ TÊN</label>
                      <input placeholder="" type="text" name="name" id="fullname" class="form-control border-primary" value="<?php echo $user['name']; ?>">
                  </div>
                  <div class="form-group my-3">
                      <label for="email" class="fw-bold" style="font-size: 12px">EMAIL</label>
                      <div class="col-sm-12">
                          <input placeholder="Email" type="email" name="email" id="email" class="form-control border-primary" value="<?php echo $user['email']; ?>">
                      </div>
                  </div>
                  <!-- Example split danger button DROPDOWN-->
                  <label  class="fw-bold" style="font-size: 12px">SỐ ĐIỆN THOẠI</label>
                  <div class="input-group">
                      <div class="dropdown bg-white">
                          <select name="cars" class="form-select">
                              <option value="vietnam">🇻🇳<span class="opacity-25">84+</span></option>
                              <option value="japan">🇯🇵<p class="opacity-50 ">+81</p></option>
                              <option value="korea">🇰🇷<p class="opacity-50 ">+82</p></option>
                              <option value="audi">🇫🇷<p class="opacity-50 ">+262</p></option>
                          </select>
                      </div>
                      <input placeholder="012 345 6789" type="text" name="phone" id="" class="form-control border-primary" required value="<?= $user['phone_number']; ?>">
                  </div>


                  <!--  Tinh Thanh-->
                  <div class="form-group row mb-3 mt-3">
                      <div class="col-sm-6">
                          <label for="date" class="fw-bold" style="font-size: 12px">NGÀY SINH</label>
                          <input  type="date" name="birthday" id="date" class="form-control border-primary" required value="<?= $user['birth_day']; ?>">
                      </div>
                      <div class="col-sm-6">
                          <label  class="fw-bold" style="font-size: 12px">TỈNH THÀNH</label>
                          <div class="dropdown bg-white ">
                              <input type="text" name="address" class="form-control border-primary" value="<?=$user['address']?>">
                          </div>
                      </div>
                  </div>

                  <div class="form-check my-3">
                      <input type="checkbox" class="form-check-input" id="remember">
                      <label class="form-check-label" for="remember">Thay đổi mật khẩu</label>
                  </div>
                  <div class="form-check my-3">
                      <input type="checkbox" class="form-check-input" id="remembers">
                      <label class="form-check-label" for="remember">Bỏ qua, tôi sẽ cập nhật sau</label>
                  </div>
                  <!---->
                  <div class="d-flex justify-content-between mt-3 mb-4">
                    <a href="#"><button type="submit" class="btn btn-danger" >CẬP NHẬT</button></a>
                      <div class="mx-2"></div>
                      <a href="../index.php" class="btn btn-primary" >TRUY CẬP</a>
                  </div>
                  </form>
              </div>
          <!---->
      </div>
    </div>
  </div>

</main>
<footer></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../../public/js/header.js"></script>
<script src="../../public/js/avatar.js"></script>
<script src="../../public/js/deleteProfile.js"></script>

</body>
</html>