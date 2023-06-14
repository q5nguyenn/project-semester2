<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giỏ hàng của tôi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="public/css/header.css" />
</head>

<body>
<!-- <header></header> -->
<header></header>
<main>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 bg-primary p-4">
        <div class="start-classes">
          <ol class="classes">
            <li class="classes-item active fs-2 text-white">
              <p>Gio hang (1 khoa hoc)</p>
            </li>
          </ol>
        </div>
      </div>
      <!-- -->

      <div class="form-group"></div>
      <div class="col-md-12">
        <div class="form-group"></div>
      </div>
      <!---->
      <div class="container " style="height: 19em; background-color: #e8e8e8">
        <div class="col-md-12 ">
          <div class="form-group">
            <p>Đang có ưu đãi
              <b>Mua 3 tặng 1</b>
              - Hãy chọn thêm chọn thêm 2 khoá học nữa để nhận 1 khoá học Miễn phí
            </p>
            <a href="/donggia" class="hidden"></a>
          </div>
        </div>
        <!--Phan hien thi khung -->
        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <div class="card mb-3 h-100">
              <div class="card-body d-flex justify-content-between">
                <div class="flex-grow-1">
                  <div class="d-flex mt-5 align-items-between">
                    <img src="https://i.pinimg.com/564x/46/2d/ae/462dae0eef67d3ff0307550f2019e7f1.jpg" alt="" class="mr-2" style="width: 140px; height: 70px;">
                    <div class="mt-3">
                      <h5 class="mb-0">Tên sách</h5>
                      <p class="text-muted">Tác giả</p>
<!--                        <h5 class="pf">399,000</h5>-->
<!--                        <button class="border-0 bg-white"><i class="bi bi-x"></i></button>-->
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-danger align-self-start">Xoá tất cả</button>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="col-md-4" >
            <div class="card border-0" style="background-color: #e8e8e8">
              <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title fs-3 text-danger">399.000</h5>
                <p class="product-price"><del>700,000đ</del></p>
                <a href="#" class="btn btn-warning w-50 text-white fw-bold">THANH TOÁN</a>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="col-sm-6 mt-3" style="margin-right: 30em">
            <label for="khoahoc" class="fw-bold text-primary" style="font-size: 12px">Chọn thêm khoá học</label>
            <input placeholder="Tìm kiếm khoá học" type="text" name="" id="khoahoc" class="form-control border-primary" required>
          </div>
        </div>
      </div>
<!-- Phần danh sách xem thêm-->
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="text-black">
              <h3>Thường được mua cùng</h3>
            </div>
            <swiper-container class="mySwiper" pagination="true" navigation="true" pagination-clickable="true" slides-per-view="5"
                              space-between="30" free-mode="true"   >
              <swiper-slide>
                <div class="card shadow mb-5 bg-body " >
                  <div class="mt-4 border-secondary mx-auto ">
                    <img src="/public/images/center-hanoi.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                  </div>
                  <div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
                    <a href="" class="text-decoration-none text-black fw-bold mb-3" style="color: #273167;font-size: 20px;">Đặng Trọng Khang</a>
                    <p class="card-text text-center mt-2 mb-5">Causality Investing Speaker</p>
                  </div>
                </div>
              </swiper-slide>

              <swiper-slide>
                <div class="card shadow mb-5 bg-body rounded">
                  <div class="mt-4 border-secondary mx-auto">
                    <img src="/public/images/center-hanoi.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                  </div>
                  <div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
                    <a href="" class="text-decoration-none text-black fw-bold mb-3" style="color: #273167;font-size: 20px;">Đặng Trọng Khang</a>
                    <p class="card-text text-center mt-2 mb-5">Causality Investing Speaker</p>
                  </div>
                </div>
              </swiper-slide>

              <swiper-slide>
                <div class="card shadow mb-5 bg-body rounded">
                  <div class="mt-4 border-secondary mx-auto">
                    <img src="/public/images/center-hanoi.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                  </div>
                  <div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
                    <a href="" class="text-decoration-none text-black fw-bold mb-3" style="color: #273167;font-size: 20px;">Đặng Trọng Khang</a>
                    <p class="card-text text-center mt-2 mb-5">Causality Investing Speaker</p>
                  </div>
                </div>
              </swiper-slide>

              <swiper-slide>
                <div class="card shadow mb-5 bg-body rounded">
                  <div class="mt-4 border-secondary mx-auto">
                    <img src="/public/images/center-hanoi.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                  </div>
                  <div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
                    <a href="" class="text-decoration-none text-black fw-bold mb-3" style="color: #273167;font-size: 20px;">Đặng Trọng Khang</a>
                    <p class="card-text text-center mt-2 mb-5">Causality Investing Speaker</p>
                  </div>
                </div>
              </swiper-slide>

              <swiper-slide>
                <div class="card shadow mb-5 bg-body rounded">
                  <div class="mt-4 border-secondary mx-auto">
                    <img src="/public/images/center-hanoi.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                  </div>
                  <div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
                    <a href="" class="text-decoration-none text-black fw-bold mb-3" style="color: #273167;font-size: 20px;">Đặng Trọng Khang</a>
                    <p class="card-text text-center mt-2 mb-5">Causality Investing Speaker</p>
                  </div>
                </div>
              </swiper-slide>

              <swiper-slide>
                <div class="card shadow mb-5 bg-body rounded">
                  <div class="mt-4 border-secondary mx-auto">
                    <img src="/public/images/center-hanoi.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                  </div>
                  <div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
                    <a href="" class="text-decoration-none text-black fw-bold mb-3" style="color: #273167;font-size: 20px;">Đặng Trọng Khang</a>
                    <p class="card-text text-center mt-2 mb-5">Causality Investing Speaker</p>
                  </div>
                </div>
              </swiper-slide>

              <swiper-slide>
                <div class="card shadow mb-5 bg-body rounded">
                  <div class="mt-4 border-secondary mx-auto">
                    <img src="/public/images/center-hanoi.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                  </div>
                  <div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
                    <a href="" class="text-decoration-none text-black fw-bold mb-3" style="color: #273167;font-size: 20px;">Đặng Trọng Khang</a>
                    <p class="card-text text-center mt-2 mb-5">Causality Investing Speaker</p>
                  </div>
                </div>
              </swiper-slide>
            </swiper-container>
          </div>
        </div>

      </div>

    </div>
    </div>
  </div>
</main>
<!--  -->
<footer></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

<script src="public/js/header.js"></script>

</body>
</html>