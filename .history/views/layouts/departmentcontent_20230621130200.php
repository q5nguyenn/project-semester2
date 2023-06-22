<div class="row list-filter-course">
	<div class="col-4">
		<div class="filter-detail border-top">
			<h4 class="pt-2 pb-2">Đánh giá khoá học</h4>
			<!-- star -->
			<form action="" method="get">
			<div>
				
					<label class="mb-3">
						<input type="radio" name="star_vote" class="star-rate mt-1" checked value='5'>
						<span class="star">
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
							<i class="bi bi-star-fill"></i>
						</span>
						<span>5</span>
					</label>

			</div>

			<div>
				<label class="mb-3">
					<input type="radio" name="star_vote" class="star-rate mt-1" value="4">
					<span class="star">
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star"></i>
					</span>
					<span>4</span>
				</label>
			</div>

			<div>
				<label class="mb-3">
					<input type="radio" name="star_vote" class="star-rate mt-1" value="3">
					<span class="star">
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star"></i>
						<i class="bi bi-star"></i>
					</span>
					<span>3</span>
				</label>
			</div>

			</form>
			
		</div>
	</div>
	<div class="col-8">
		<div class="col-12 list-product">
			<!-- list cousre -->
			<?php
			while ($arrayListRound = mysqli_fetch_array($query_mergeCourseRound)) {
			?>
				<a href="" class="d-flex text-decoration-none text-black">
					<div class="detail-course d-flex">
						<img class="img-responsive" src="../public<?php echo $arrayListRound['thumbnail'] ?>" alt="">

						<div class="detain-course__content d-flex">
							<div style="width: 80%;">
								<p class="name-course fw-bold m-0"><?php echo $arrayListRound['name'] ?></p>
								<div class="description-course" style="padding: 10px 0px;">
									<p class="m-0"><?php echo $arrayListRound['description'] ?></p>
								</div>
								<div class="namegv"><span>Bùi Đức Tiến</span></div>
								<span class="star-rate">
									<?php echo showStarRate($arrayListRound['star'])?>
									(51,718)
								</span>
								<p class="total-times m-0">Thời gian: 26.3 giờ, <span> Giáo trình: 51 bài
										giảng </span></p>
							</div>
							<div class="price-count-course-filter" style="text-align: right; width: 20%">
								<div class="price_sale fw-bold"><?php echo $arrayListRound['discount'] ?></div>
								<div class="price_sale text-decoration-line-through" style="color: #888; font-size: 14px;"><?php echo $arrayListRound['price'] ?></div>
							</div>
						</div>
					</div>

				</a>
			<?php
			}
			?>

		</div>
		<div class="col-12 pagination-course">
			<ul class="pagination">
				<li class="prev disabled"> <span><i class="bi bi-caret-left-fill"></i></span></li>
				<li class="active"><a href="#" data-page="">0</a></li>
				<li class=""><a href="#" data-page="">1</a></li>
				<li class=""><a href="#" data-page="">2</a></li>
				<li class="disabled"><span>...</span></li>
				<li class=""><a href="#" data-page="">15</a></li>
				<li class="prev disabled"> <span><i class="bi bi-caret-right-fill"></i></span></li>
			</ul>
		</div>

	</div>
</div>