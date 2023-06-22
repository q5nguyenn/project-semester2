<div class="row pt-3">

					<?php
					$discount = 0;
					while ($arrayListRound = mysqli_fetch_array($query_mergeCourseRound)) {

						$discount = (($arrayListRound['price'] - $arrayListRound['discount']) / $arrayListRound['price']) * 100;
						$round_discount = round($discount);
						?>
						<div class="col-lg-3 mb-4">
							<a class="text-decoration-none text-black position-relative" href="#">
								<div class="card shadow bg-body rounded">
									<img src="../public/<?php echo $arrayListRound['thumbnail'] ?>" style="width: 100%;"
										class="card-img-top" alt="...">

									<div class="content-course">
										<h3 class="cart-course__title">
											<p>
												<?php echo $arrayListRound['name'] ?>
											</p>
										</h3>
										<div class="namegv">
											<span style="float: left;">
												<?php $arrayListRound['teacher_name'] ?>
											</span>
											<span class="price-principal">
												<?php echo $arrayListRound['price'] ?>
											</span>
										</div>
									</div>
									<div class="price-count" style="clear: both;">
										<div class="rate-combo">
                                        <span class="star">
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
										</span>
										</div>
										<span class="price-discount">
											<?php echo $arrayListRound['discount'] ?>
										</span>
									</div>

								</div>
								<div class="position-absolute top-0 start-0 text-center sale-price rounded">
									<p>-
										<?php echo $round_discount . '%' ?>
									</p>
								</div>
							</a>

						</div>
						<?php
					}
					?>



				</div>