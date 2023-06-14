<?php
include '../database/database.php';
include '../database/utility.php';
$id = getGET('id');

$sql = "SELECT courses.*, users.name as teacher_name, users.thumbnail as teacher_thumbnail, departments.name as department_name,faculties.name as faculty_name FROM `courses`
JOIN users ON courses.teacher_id = users.id 
JOIN departments ON courses.department_id = departments.id 
JOIN faculties ON departments.faculty_id = faculties.id
-- JOIN reviews ON reviews.content = users.id
WHERE courses.id = " . $id . "";
// echo $sql;
// die();
$courses = excuteResult($sql, true);

$sql_reviews = 'SELECT users.name as name, reviews.content as content, rate, users.thumbnail as avatar FROM `reviews` 
join courses on reviews.course_id = courses.id
JOIN users on reviews.user_id = users.id
where courses.id = ' . $id . '
';
$reviews = excuteResult($sql_reviews);
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
  <header>
    <div class="container-fluid shadow-sm">
      <div class="container d-flex py-1 align-items-center">
        <div>
          <a class="btn fw-bold fs-5" href="index.html">STAR CLASSES</a>
        </div>
        <div class="mx-3 position-relative" id="categories">
          <button class="btn">
            Categories <i class="bi bi-chevron-down"></i>
          </button>
          <div class="position-absolute bg-white p-1 department-links rounded" id="department">
            <div class="p-2 btn">
              <i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp
            </div>
            <div class="p-2 btn">
              <i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp
            </div>
            <div class="p-2 btn">
              <i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp
            </div>
            <div class="p-2 btn">
              <i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp
            </div>
            <div class="p-2 btn">
              <i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp
            </div>
            <div class="p-2 btn">
              <i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp
            </div>
            <div class="p-2 btn">
              <i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp
            </div>
            <div class="p-2 btn">
              <i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp
            </div>
            <div class="p-2 btn">
              <i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp
            </div>
          </div>
        </div>
        <div class="flex-fill">
          <form class="d-flex rounded-circle position-relative">
            <input class="form-control me-2" type="text" placeholder="Search" />
            <i class="bi bi-search position-absolute btn"></i>
          </form>
        </div>
        <div class="pe-auto">
          <a href="#" class="btn btn-light"><i class="bi bi-bag"></i></a>
        </div>
        <div class="ms-2">
          <a class="btn btn-secondary"><i class="bi bi-unlock me-2"></i><span>Kích hoạt khoá học</span></a>
        </div>
        <div>
          <a href="#" class="btn btn-light ms-2">Đăng nhập</a>
          <a href="#" class="btn btn-warning text-white ms-2">Đăng ký</a>
        </div>
        <div class="rounded-circle d-flex bg-primary ms-2 btn text-white fw-bold position-relative" id="user">
          Q
          <div class="position-absolute bg-white p-1 department-links rounded" id="menu">
            <a class="p-2 btn d-block text-start"><i class="bi bi-translate me-2"></i>Vào học</a>
            <a class="p-2 btn d-block text-start"><i class="bi bi-translate me-2"></i>Kích hoạt khoá học</a>
            <a class="p-2 btn d-block text-start"><i class="bi bi-translate me-2"></i>Cập nhật hồ sơ</a>
            <a class="p-2 btn d-block text-start"><i class="bi bi-translate me-2"></i>Giỏ hàng</a>
            <a class="p-2 btn d-block text-start border-top"><i class="bi bi-translate me-2"></i>Đăng xuất</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main class="min-vh-100 bg-light">
    <div class="container-fluid bg-secondary text-white">
      <div class="container">
        <div class="py-3 row">
          <div class="col-8">
            <div class="wrapper">
              <a class="link-light fs-6 text-decoration-none" href="#">Star classes</a>
              <i class="bi bi-chevron-double-right fs-6"></i>
              <a class="link-light fs-6 text-decoration-none" href="#"><?= $courses['faculty_name'] ?></a>
              <i class="bi bi-chevron-double-right fs-6"></i>
              <a class="link-light fs-6 text-decoration-none" href="#">
                <?= $courses['department_name'] ?>
              </a>
            </div>
            <div class="py-3">
              <h1><?php
                  echo $courses['name']
                  ?></h1>
              <p>
                <?php
                echo $courses['description']
                ?>

              </p>
            </div>
            <div class="row">
              <div class="col">
                <img class="rounded-circle" src="../public/<?php
                                                            echo $courses['teacher_thumbnail']
                                                            ?>" alt="" style="width: 30px" />
                <a class="text-decoration-none text-white" href="#"><?php
                                                                    echo $courses['teacher_name']
                                                                    ?></a>
              </div>
              <div class="col text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <span class="text-white">117 đánh giá</span>
              </div>
              <div class="col">
                <i class="bi bi-people-fill"></i>
                <span>8081 hoc vien</span>
              </div>
              <div class="d-flex align-items-center col rounded-circle bg-light flex-grow-0" style="width: 40px; height: 40px">
                <i class="bi bi-heart-fill text-danger"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container position-relative">
      <div class="row">
        <div class="col-8 my-3">
          <div>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/H_HohejPRGM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="d-flex justify-content-start">
            <div class="p-3">
              <a href="#" class="text-decoration-none text-dark fw-bold">Giới thiệu</a>
            </div>
            <div class="p-3">
              <a href="#" class="text-decoration-none text-dark fw-bold">Nội dung khóa học</a>
            </div>
            <div class="p-3">
              <a href="#" class="text-decoration-none text-dark fw-bold">Thông tin giảng viên</a>
            </div>
            <div class="p-3">
              <a href="#" class="text-decoration-none text-dark fw-bold">Đánh giá</a>
            </div>
          </div>
          <div class="shadow-sm p-3">
            <div class="fs-4 fw-bold">Bạn sẽ học được gì</div>
            <div class="row">
              <div class="col">
                <div>
                  <i class="bi bi-check-lg text-success fs-4"></i>
                  <span>Kiến thức nhạc lý và các hợp âm guitar cơ bản nhất</span>
                </div>
                <div>
                  <i class="bi bi-check-lg text-success fs-4"></i>
                  <span>Kiến thức nhạc lý và các hợp âm guitar cơ bản nhất</span>
                </div>
                <div>
                  <i class="bi bi-check-lg text-success fs-4"></i>
                  <span>Kiến thức nhạc lý và các hợp âm guitar cơ bản nhất</span>
                </div>
                <div>
                  <i class="bi bi-check-lg text-success fs-4"></i>
                  <span>Kiến thức nhạc lý và các hợp âm guitar cơ bản nhất</span>
                </div>
              </div>
              <div class="col">
                <div>
                  <i class="bi bi-check-lg text-success fs-4"></i>
                  <span>Kiến thức nhạc lý và các hợp âm guitar cơ bản nhất</span>
                </div>
                <div>
                  <i class="bi bi-check-lg text-success fs-4"></i>
                  <span>Kiến thức nhạc lý và các hợp âm guitar cơ bản nhất</span>
                </div>
                <div>
                  <i class="bi bi-check-lg text-success fs-4"></i>
                  <span>Kiến thức nhạc lý và các hợp âm guitar cơ bản nhất</span>
                </div>
              </div>
            </div>
          </div>
          <div class="shadow-sm p-3 my-3">
            <div class="fs-4 fw-bold border-bottom pb-2">
              Giới thiệu khóa học
            </div>
            <div>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
              ex distinctio libero iste, veritatis, repellat mollitia
              provident ratione fuga eligendi iure non tenetur, omnis tempora
              recusandae placeat repudiandae corporis dolores!
            </div>
            <div>
              <i class="bi bi-check-lg text-secondary fs-4"></i>
              <span>Kiến thức nhạc lý và các hợp âm guitar cơ bản nhất</span>
            </div>
            <div>
              <i class="bi bi-check-lg text-secondary fs-4"></i>
              <span>Kiến thức nhạc lý và các hợp âm guitar cơ bản nhất</span>
            </div>
            <div>
              <i class="bi bi-check-lg text-secondary fs-4"></i>
              <span>Kiến thức nhạc lý và các hợp âm guitar cơ bản nhất</span>
            </div>
          </div>
          <div class="shadow-sm p-3 my-3">
            <div class="fs-4 fw-bold border-bottom pb-2 mb-3">
              Nội dung khóa học
            </div>
            <div>
              <i class="bi bi-dash-square"></i>
              <span class="fw-bold">Phần 1: Khởi động</span>
            </div>
            <div class="row border-bottom py-2" style="cursor: pointer">
              <div class="col-9">
                <i class="bi bi-play-circle-fill text-secondary"></i>
                <span>Bài 1: Giới thiệu chung về khóa học</span>
              </div>
              <div class="col-2 text-primary">Học thử</div>
              <div class="col-1">02:55</div>
            </div>
            <div class="row border-bottom py-2">
              <div class="col-9">
                <i class="bi bi-play-circle-fill text-secondary"></i>
                <span>Bài 1: Giới thiệu chung về khóa học</span>
              </div>
              <div class="col-2 text-primary">Học thử</div>
              <div class="col-1">02:55</div>
            </div>
            <div class="row border-bottom py-2">
              <div class="col-9">
                <i class="bi bi-play-circle-fill text-secondary"></i>
                <span>Bài 1: Giới thiệu chung về khóa học</span>
              </div>
              <div class="col-2 text-primary">Học thử</div>
              <div class="col-1">02:55</div>
            </div>
            <div class="mt-3">
              <i class="bi bi-dash-square"></i>
              <span class="fw-bold">Phần 2: Thực hành</span>
            </div>
            <div class="row border-bottom py-2">
              <div class="col-9">
                <i class="bi bi-play-circle-fill text-secondary"></i>
                <span>Bài 1: Giới thiệu chung về khóa học</span>
              </div>
              <div class="col-2 text-primary">Học thử</div>
              <div class="col-1">02:55</div>
            </div>
            <div class="row border-bottom py-2">
              <div class="col-9">
                <i class="bi bi-play-circle-fill text-secondary"></i>
                <span>Bài 1: Giới thiệu chung về khóa học</span>
              </div>
              <div class="col-2 text-primary">Học thử</div>
              <div class="col-1">02:55</div>
            </div>
            <div class="row border-bottom py-2">
              <div class="col-9">
                <i class="bi bi-play-circle-fill text-secondary"></i>
                <span>Bài 1: Giới thiệu chung về khóa học</span>
              </div>
              <div class="col-2 text-primary">Học thử</div>
              <div class="col-1">02:55</div>
            </div>
          </div>
          <div>
            Tags:
            <span class="badge bg-secondary me-2 btn">Guitar</span>
            <span class="badge bg-secondary btn">Nhac cụ</span>
          </div>
          <div class="shadow-sm p-3 my-3">
            <div class="fs-4 fw-bold border-bottom pb-2">
              Khóa học liên quan
            </div>
            <div class="my-2 d-flex border-bottom">
              <div class="p-2 d-flex">
                <img class="img-fluid my-2" src="../public/images/dem-hat-guitar-tieng-anh-voi-bai-hat-bat-hu_m_1557993929.jpg" alt="" style="height: 70px; width: 70px; cursor: pointer" />
                <div class="p-2">
                  <div style="cursor: pointer">
                    Guitar đệm hát nâng cao cùng Haketu
                  </div>
                  <div class="text-success fs-6">05 giờ 15 phút</div>
                </div>
              </div>
              <div class="p-3 d-flex">
                <span>4.5</span>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="p-3 text-secondary d-flex">
                <i class="bi bi-people-fill"></i>
                <span>5800</span>
              </div>
              <div class="p-3">
                <div class="fw-bold float-end" style="font-size: 17px">
                  <span>399,000</span><sup>đ</sup>
                </div>
                <div class="text-secondary float-end" style="font-size: 14px; text-decoration: line-through">
                  <span>880,000</span><sup>đ</sup>
                </div>
              </div>
              <div class="d-flex justify-content-center align-items-center col-1 my-3 rounded-circle flex-grow-0 flex-shrink-0 border border-info" style="width: 40px; height: 40px">
                <i class="bi bi-heart text-info" style="cursor: pointer"></i>
              </div>
            </div>
            <div class="my-2 d-flex border-bottom">
              <div class="p-2 d-flex">
                <img class="img-fluid my-2" src="../public/images/dem-hat-guitar-tieng-anh-voi-bai-hat-bat-hu_m_1557993929.jpg" alt="" style="height: 70px; width: 70px; cursor: pointer" />
                <div class="p-2">
                  <div style="cursor: pointer">
                    Guitar đệm hát nâng cao cùng Haketu
                  </div>
                  <div class="text-success fs-6">05 giờ 15 phút</div>
                </div>
              </div>
              <div class="p-3 d-flex">
                <span>4.5</span>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="p-3 text-secondary d-flex">
                <i class="bi bi-people-fill"></i>
                <span>5800</span>
              </div>
              <div class="p-3">
                <div class="fw-bold float-end" style="font-size: 17px">
                  <span>399,000</span><sup>đ</sup>
                </div>
                <div class="text-secondary float-end" style="font-size: 14px; text-decoration: line-through">
                  <span>880,000</span><sup>đ</sup>
                </div>
              </div>
              <div class="d-flex justify-content-center align-items-center col-1 my-3 rounded-circle flex-grow-0 flex-shrink-0 border border-info" style="width: 40px; height: 40px">
                <i class="bi bi-heart text-info" style="cursor: pointer"></i>
              </div>
            </div>
            <div class="my-2 d-flex border-bottom">
              <div class="p-2 d-flex">
                <img class="img-fluid my-2" src="../public/images/dem-hat-guitar-tieng-anh-voi-bai-hat-bat-hu_m_1557993929.jpg" alt="" style="height: 70px; width: 70px; cursor: pointer" />
                <div class="p-2">
                  <div style="cursor: pointer">
                    Guitar đệm hát nâng cao cùng Haketu
                  </div>
                  <div class="text-success fs-6">05 giờ 15 phút</div>
                </div>
              </div>
              <div class="p-3 d-flex">
                <span>4.5</span>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="p-3 text-secondary d-flex">
                <i class="bi bi-people-fill"></i>
                <span>5800</span>
              </div>
              <div class="p-3">
                <div class="fw-bold float-end" style="font-size: 17px">
                  <span>399,000</span><sup>đ</sup>
                </div>
                <div class="text-secondary float-end" style="font-size: 14px; text-decoration: line-through">
                  <span>880,000</span><sup>đ</sup>
                </div>
              </div>
              <div class="d-flex justify-content-center align-items-center col-1 my-3 rounded-circle flex-grow-0 flex-shrink-0 border border-info" style="width: 40px; height: 40px">
                <i class="bi bi-heart text-info" style="cursor: pointer"></i>
              </div>
            </div>

            <button class="w-100 btn btn-outline-info p-2 fs-6">
              Xem thêm
            </button>
          </div>
          <div class="shadow-sm p-3 my-3">
            <div class="fs-4 fw-bold border-bottom pb-2">
              Thông tin giảng viên
            </div>
            <div class="row d-flex">
              <div class="col-4">
                <div>
                  <img src="../public/images/December620171133am_ha-ke-tu_thumb.jpg" alt="" class="rounded-circle p-2" style="width: 120px" />
                </div>
                <div>
                  <i class="bi bi-people-fill p-2"></i><span class="fw-bold">11060</span><span> học viên</span>
                </div>
                <div>
                  <i class="bi bi-play-circle-fill p-2"></i><span class="fw-bold">4</span><span> khóa học</span>
                </div>
              </div>
              <div class="col-8">
                <div class="fw-bold my-2">Hà Kế Tú</div>
                <div>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Pariatur corporis magni voluptates fugiat ipsum quod enim
                  sunt ad, tempora aspernatur ex animi corrupti provident
                  aliquid cumque illo minima iure molestiae.
                </div>
                <button class="w-100 btn btn-outline-info p-2 fs-6">
                  Xem thêm
                </button>
              </div>
            </div>
          </div>
          <div class="shadow-sm p-3 my-3">
            <div class="fs-4 fw-bold border-bottom pb-2">
              Nhận xét của học viên
            </div>

            <?php
            foreach ($reviews as $review) {
              echo '<div class="row border-bottom">
                        <div class="col-2">
                          <img src="../public/' . $review['avatar'] . '" alt="" class="rounded-circle my-2" style="width: 80px" />
                        </div>
                        <div class="col-10">
                          <div class="my-2 d-flex">
                            <div class="text-warning">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                            </div>
                            <span style="margin-left: 20px" class="fw-bold">' . $review['name'] . '</span>
                          </div>
                          <div class="my-3">
                          ' . $review['content'] . '
                          </div>
                        </div>
                      </div>';
            }
            ?>
            <!-- <div class="row">
              <div class="col-2">
                <img src="../public/images/70e565ff687043e10e150e23d0ae5ea2.avif" alt="" class="rounded-circle my-2" style="width: 80px" />
              </div>
              <div class="col-10">
                <div class="my-2 d-flex">
                  <div class="text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <span style="margin-left: 20px">Nguyễn Quang Thành</span>
                </div>
                <div class="my-3">
                  Anh Tú dạy rất dễ hiểu, tương tác rồi nha anh :)
                </div>
              </div>
            </div> -->
            <button class="d-flex justify-content-between fw-bold border border-0 p-2 mx-auto mt-2">
              Xem thêm
            </button>
          </div>
        </div>
        <div class="col-4" style="z-index: 1">
          <div class="container bg-white shadow-sm py-3">
            <div class="border-bottom">
              <div class="row d-flex">
                <div class="col-4 fw-bold fs-4 my-1"><?= $courses['discount'] ?>$</div>
                <div class="col-3 text-secondary my-2">
                  <del><?= $courses['price'] ?>$</del>
                </div>
                <div class="col-5 p-2 d-flex justify-content-end mt-1">
                  Tiết kiệm:<span class="text-danger"><?= percent($courses['discount'], $courses['price']) ?>%</span>
                </div>
              </div>
              <div class="d-flex text-success fw-bold">
                <i class="bi bi-speedometer2"></i>
                <div style="padding-left: 20px">
                  Thời gian ưu đãi còn 1 ngày
                </div>
              </div>
              <div>
                <a href="#"><button class="w-100 p-3 fw-bold my-2 btn btn-danger">
                    ĐĂNG KÍ NGAY
                  </button></a>
                <a href="#"><button class="w-100 p-3 fw-bold my-1 btn btn-success">
                    <i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng
                  </button></a>
                <div class="text-center my-3">
                  <i class="bi bi-person-plus-fill"></i><span>Bui Levu vừa đăng ký</span>
                </div>
              </div>
              <div class="my-3">
                <div>
                  <i class="bi bi-stopwatch"></i>
                  <span>Thời lượng:
                    <span class="fw-bold">04 giờ 01 phút</span></span>
                </div>
                <div class="mt-2">
                  <i class="bi bi-play-circle-fill"></i>
                  <span>Giáo trình:
                    <span class="fw-bold">45 bài giảng</span></span>
                </div>
                <div class="mt-2">
                  <i class="bi bi-alarm"></i>
                  <span> Sở hữu khóa học trọn đời</span>
                </div>
                <div class="mt-2">
                  <i class="bi bi-brightness-low-fill"></i>
                  <span>Cấp chứng nhận hoàn thành</span>
                </div>
                <div class="row my-3">
                  <div class="col-8">
                    <form class="w-100">
                      <div class="form-group">
                        <input type="" class="form-control" id="vourcher" aria-describedby="emailHelp" placeholder="Nhập mã giảm giá..." />
                      </div>
                    </form>
                  </div>
                  <div class="col-4">
                    <button class="btn btn-outline-secondary text-dark">
                      Áp dụng
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="my-2">
              <span class="fw-bold">Bạn cần đào tạo trên 5 người ?</span>
            </div>
            <div class="my-2" style="font-size: 15px">
              Giúp đội nhóm của bạn truy cập hơn 2000+ khóa học trên Star
              Classes bất ký lúc nào, bất kỳ đâu
            </div>
            <div class="my-2">
              <button type="button" class="w-100 btn btn-light btn btn-outline-secondary fw-bold text-dark" style="border-radius: 15px">
                Đăng ký tư vấn
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- <footer></footer> -->
  <footer>
    <div class="container-fluid bg-secondary text-white">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="py-2">
              <a class="btn text-white fw-bold fs-5" href="index.html">STAR CLASSES</a>
            </div>
            <div class="my-1">
              <i class="bi bi-geo-alt text-warning"></i>
              <span>Số 8, Tôn Thất Thuyết, Mỹ Đình, Từ Liêm, Hà Nội</span>
            </div>
            <div class="my-1">
              <i class="bi bi-telephone text-warning"></i>
              <span>+ 84 986295956</span>
            </div>
            <div class="my-1">
              <a href="mailto:q5nguyenn@gmail.com" class="text-decoration-none text-white"><i class="bi bi-envelope-paper text-warning"></i>
                <span>q5nguyenn@gmail.com</span></a>
            </div>
            <div class="my-1">
              <i class="bi bi-clock text-warning"></i>
              <span> 8:00 - 22:00</span>
            </div>
          </div>
          <div class="col">
            <div class="fw-bold fs-5 p-2">Về Starclasses</div>
            <div class="my-1">
              <a href="#" class="text-decoration-none text-white">Giới thiệu về Starclasses</a>
            </div>
            <div class="my-1">
              <a href="#" class="text-decoration-none text-white">Câu hỏi thường gặp</a>
            </div>
            <div class="my-1">
              <a href="#" class="text-decoration-none text-white">Điều khoản dịch vụ</a>
            </div>
            <div class="my-1">
              <a href="#" class="text-decoration-none text-white">Hướng dẫn thanh toán</a>
            </div>
            <div class="my-1">
              <a href="#" class="text-decoration-none text-white">Chính sách bảo mật</a>
            </div>
          </div>
          <div class="col">
            <div class="fw-bold fs-5 py-2">Hợp tác liên kết</div>
            <div class="my-1">
              <a href="#" class="text-decoration-none text-white">Đăng kí giảng viên</a>
            </div>
            <div class="my-1">
              <a href="#" class="text-decoration-none text-white">Giải pháp e-learning</a>
            </div>
            <div class="my-1">
              <a href="#" class="text-decoration-none text-white">Đào tạo doanh nghiệp</a>
            </div>
            <div class="my-1">
              <a href="#" class="text-decoration-none text-white">Quay dựng video</a>
            </div>
            <div class="my-1">
              <a href="#" class="link-success text-decoration-none text-white">Đào tạo Inhouse</a>
            </div>
          </div>
          <div class="col">
            <div class="fw-bold fs-5 py-2">Kết nối với Starclass</div>
            <div class="my-1">
              <a class="btn bg-primary" href="https://vi-vn.facebook.com/">
                <i class="bi bi-facebook text-white fs-2"></i>
              </a>
              <a class="btn bg-danger ms-2" href="https://www.youtube.com/">
                <i class="bi bi-youtube text-white fs-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark text-white">
      <div class="container py-3 d-flex align-items-center">
        <div class="me-5">
          © Công ty cổ phần đào tạo trực tuyến Starclasses - ĐKKD: 0107695756
          - Khóa học trực tuyến dành cho người đi làm
        </div>
        <div>
          <img src="https://unica.vn/media/images_v2017/bct.png" alt="" />
        </div>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="public/js/header.js"></script>
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