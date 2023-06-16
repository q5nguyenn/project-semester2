<?php
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];

?>
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
        <div class="start-classes classes-item active fs-2 text-white">
            <p>Gio hang (khoa hoc)</p>
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
          <div class="col-md-6" style="height: 10.5em">
            <div class="card mb-3 h-100">
              <div class="card-body d-flex justify-content-between">
                <div class="flex-grow-1">
                  <div class="d-flex mt-5 align-items-between ">
                      <img src="https://i.pinimg.com/564x/46/2d/ae/462dae0eef67d3ff0307550f2019e7f1.jpg" alt="" class="mr-2" style="width: 140px; height: 70px;">

                      <div class="align-items-start">
                          <div class="d-flex align-items-center justify-content-between" >
                              <div class="ms-2 mt-4 me-auto">
                                  <span class="fw-bold">Sach ngoai ngu </span>
                                  <p class="text-muted">Tác giả</p>
                              </div>
                          </div>
                          <div class="mt-0">
                              <div class="d-flex flex-column align-items-center " style="padding-left: 33em ;margin: -8em">
                                  <button type="submit" class="btn btn-danger mb-3">Xoá tất cả</button>
                                  <div class="d-flex align-items-center">
                                      <h5 class="pf me-2 mb-0">399,000<sup>đ</sup></h5>
                                      <button class="border-0 bg-white text-danger fs-3"><i class="bi bi-x"></i></button>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="col-md-4" >
            <div class="card border-0" style="background-color: #e8e8e8">
              <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title fs-3 text-danger">399.000<sup>đ</sup></h5>
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
                  <div class=" border-secondary mx-auto ">
                    <img src="../public/images/center-thaibinh.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                  </div>
                  <div class="card-body d-flex flex-column align-items-center " style="height: 160px;">
                    <a href="" class="text-decoration-none text-black fw-bold " style="color: #273167;font-size: 20px;">Ngoại Ngữ Cho Bé</a>
                    <p class="card-text text-center mt-2 mb-3">Causality Investing Speaker</p>
                     <div class="text-warning">
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-fill"></i>
                         <i class="bi bi-star-half"></i>
                     </div>
                  </div>
                </div>
              </swiper-slide>

                <swiper-slide>
                    <div class="card shadow mb-5 bg-body " >
                        <div class=" border-secondary mx-auto ">
                            <img src="../public/images/center-thaibinh.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center " style="height: 160px;">
                            <a href="" class="text-decoration-none text-black fw-bold " style="color: #273167;font-size: 20px;">Ngoại Ngữ Cho Bé</a>
                            <p class="card-text text-center mt-2 mb-3">Causality Investing Speaker</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card shadow mb-5 bg-body " >
                        <div class=" border-secondary mx-auto ">
                            <img src="../public/images/center-thaibinh.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center " style="height: 160px;">
                            <a href="" class="text-decoration-none text-black fw-bold " style="color: #273167;font-size: 20px;">Ngoại Ngữ Cho Bé</a>
                            <p class="card-text text-center mt-2 mb-3">Causality Investing Speaker</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card shadow mb-5 bg-body " >
                        <div class=" border-secondary mx-auto ">
                            <img src="../public/images/center-thaibinh.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center " style="height: 160px;">
                            <a href="" class="text-decoration-none text-black fw-bold " style="color: #273167;font-size: 20px;">Ngoại Ngữ Cho Bé</a>
                            <p class="card-text text-center mt-2 mb-3">Causality Investing Speaker</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card shadow mb-5 bg-body " >
                        <div class=" border-secondary mx-auto ">
                            <img src="../public/images/center-thaibinh.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center " style="height: 160px;">
                            <a href="" class="text-decoration-none text-black fw-bold " style="color: #273167;font-size: 20px;">Ngoại Ngữ Cho Bé</a>
                            <p class="card-text text-center mt-2 mb-3">Causality Investing Speaker</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card shadow mb-5 bg-body " >
                        <div class=" border-secondary mx-auto ">
                            <img src="../public/images/center-thaibinh.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center " style="height: 160px;">
                            <a href="" class="text-decoration-none text-black fw-bold " style="color: #273167;font-size: 20px;">Ngoại Ngữ Cho Bé</a>
                            <p class="card-text text-center mt-2 mb-3">Causality Investing Speaker</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card shadow mb-5 bg-body " >
                        <div class=" border-secondary mx-auto ">
                            <img src="../public/images/center-thaibinh.jpg" class="card-img-top p-1 border" alt="nguyen-phung-phong_thumb.jpeg" style="width: 100%; height: 100%;">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center " style="height: 160px;">
                            <a href="" class="text-decoration-none text-black fw-bold " style="color: #273167;font-size: 20px;">Ngoại Ngữ Cho Bé</a>
                            <p class="card-text text-center mt-2 mb-3">Causality Investing Speaker</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
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