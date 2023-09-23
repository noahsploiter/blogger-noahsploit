<?php include "includes/header.php"; ?>
<!-- =======================
header.php END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Trending START -->
<section class="py-2">
	<div class="container">
		<div class="row g-0">
			<div class="col-12 bg-primary bg-opacity-10 p-2 rounded">
				<div class="d-sm-flex align-items-center text-center text-sm-start">
					<!-- Title -->
					<div class="me-3">
						<span class="badge bg-primary p-2 px-3">Trending:</span>
					</div>
					<!-- Slider -->
					<div class="tiny-slider arrow-end arrow-xs arrow-white arrow-round arrow-md-none">
						<div class="tiny-slider-inner"
							data-autoplay="true"
							data-hoverpause="true"
							data-gutter="0"
							data-arrow="true"
							data-dots="false"
							data-items="1">
							<!-- Slider items -->
							<div> <a href="#" class="text-reset btn-link">The most common business debate isn't as black and white as you might think</a></div>
							<div> <a href="#" class="text-reset btn-link">How the 10 worst business fails of all time could have been prevented </a></div>
							<div> <a href="#" class="text-reset btn-link">The most common business debate isn't as black and white as you might think </a></div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Trending END -->

<!-- =======================
Main hero START -->

<!-- =======================
Main hero END -->

<!-- =======================
Main content START -->
<section class="position-relative">
	<div class="container" data-sticky-container>
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-9">
				<!-- Title -->
				<div class="mb-4">
					<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
					<p>Latest breaking news, pictures, videos, and special reports</p>
				</div>
				<div class="row gy-4">
					<!-- Card item START -->
					<?php
          if (isset($_GET['category'])) {
            $the_news_feed_id=$_GET['category'];
          }
					$query="SELECT * from blogs where category='$the_news_feed_id'";
					$result=mysqli_query($connection,$query);
					while ($row=mysqli_fetch_assoc($result)) {

						$id=$row['id'];
					  $title=$row['title'];
						$content=$row['content'];
						$name=$row['name'];
						$img=$row['img'];
						$date=$row['post_time'];
						$category=$row['category'];


					 ?>
					<div class="col-sm-6">


						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="img/<?php echo $img; ?>" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i><?php echo $category; ?></a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<!-- Sponsored Post -->
								<a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="You're seeing this ad because your activity meets the intended audience of our site.">
									<!-- <i class="bi bi-info-circle ps-1"></i> Sponsored -->
								</a>
								<h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset fw-bold"><?php echo $title; ?></a></h4>
								<p class="card-text"><?php echo $content; ?></p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link"><?php echo $name; ?></a></span>
											</div>
										</div>
									</li>
									<li class="nav-item"><?php echo $date; ?></li>
								</ul>
							</div>
						</div>
					</div>
<?php } ?>
					<!-- Card item END -->
					<!-- Load more START -->
					<div class="col-12 text-center mt-5">
						<button type="button" class="btn btn-primary-soft">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
					</div>
					<!-- Load more END -->
				</div>
			</div>
			<!-- Main Post END -->
			<!-- Sidebar START -->
			<div class="col-lg-3 mt-5 mt-lg-0">
				<div data-sticky data-margin-top="80" data-sticky-for="767">

					<!-- Social widget START -->
					<div class="row g-2">

						<div class="col-13">
							<a href="signup" class="bg-instagram-gradient rounded text-center text-white-force p-3 d-block">
								<!-- <i class="fab fa-instagram fs-5 mb-2"></i> -->
								<h6 class="m-0">START BLOGGING TODAY</h6>
<span>  </span>
							</a>
						</div>

					</div>
					<!-- Social widget END -->

					<!-- Trending topics widget START -->
					<div>
						<h4 class="mt-4 mb-3">Trending topics</h4>
						<!-- Category item -->
						<?php
$query="SELECT * from category";
$result=mysqli_query($connection,$query);

while ($row=mysqli_fetch_assoc($result)) {
	$id=$row['id'];
	$name=$row['name'];
	$img=$row['img'];

						 ?>
						<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 " style="background-image:url(img/category/<?php echo $img; ?>); background-position: center left; background-size: cover;">
							<div class="p-3">
								<a href="Q4DB7JZTJ99FUSEM?category=<?php echo $name; ?>" class="stretched-link btn-link fw-bold text-white h5"><?php echo $name; ?></a>

							</div>
						</div> <?php } ?>
						<!-- Category item -->

						<!-- View All Category button -->
						<!-- <div class="text-center mt-3">
							<a href="#" class="fw-bold text-body text-primary-hover"><u>View all categories</u></a>
						</div> -->
					</div>
					<!-- Trending topics widget END -->

					<div class="row">
						<!-- Recent post widget START -->



	<!-- Recent post place samiiiiiii -->



						<!-- Recent post widget END -->

						<!-- ADV widget START -->


						<!-- ADV widget END -->
					</div>
				</div>
			</div>
			<!-- Sidebar END -->
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->

<!-- Divider -->
<div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>

<!-- =======================
Section START -->
<!-- =======================
Section END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark pt-5">
	<div class="container">
		<!-- About and Newsletter START -->
		<div class="row pt-3 pb-4">
			<div class="col-md-3">
				<img src="assets/images/logo-footer.svg" alt="footer logo">
			</div>
			<div class="col-md-5">
				<p class="text-muted">The next-generation blog, news, and magazine theme for you to start sharing your stories today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the news.</p>
			</div>
			<div class="col-md-4">
				<!-- Form -->
				<form class="row row-cols-lg-auto g-2 align-items-center justify-content-end">
					<div class="col-12">
						<input type="email" class="form-control" placeholder="Enter your email address">
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-primary m-0">Subscribe</button>
					</div>
					<div class="form-text mt-2">By subscribing you agree to our
						<a href="#" class="text-decoration-underline text-reset">Privacy Policy</a>
					</div>
				</form>
			</div>
		</div>
		<!-- About and Newsletter END -->

		<!-- Divider -->
		<hr>

		<!-- Widgets START -->
		<div class="row pt-5">
			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Recent post</h5>
				<!-- Item -->
				<div class="mb-4 position-relative">
					<div><a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a></div>
					<a href="post-single-3.html" class="btn-link text-white fw-normal">Up-coming business bloggers, you need to watch</a>
					<ul class="nav nav-divider align-items-center small mt-2 text-muted">
						<li class="nav-item position-relative">
							<div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a>
							</div>
						</li>
						<li class="nav-item">Apr 06, 2022</li>
					</ul>
				</div>
				<!-- Item -->
				<div class="mb-4 position-relative">
					<div><a href="#" class="badge text-bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a></div>
					<a href="post-single-3.html" class="btn-link text-white fw-normal">How did we get here? The history of the business told through tweets</a>
					<ul class="nav nav-divider align-items-center small mt-2 text-muted">
						<li class="nav-item position-relative">
							<div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Larry</a>
							</div>
						</li>
						<li class="nav-item">May 29, 2022</li>
					</ul>
				</div>
			</div>

			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Navigation</h5>
				<div class="row">
					<div class="col-6">
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link pt-0" href="#">Features</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Style Guide</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Get Theme</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Support</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Newsletter</a></li>
						</ul>
					</div>
 					<div class="col-6">
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link pt-0" href="#">News</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Career <span class="badge text-bg-danger ms-2">2 Job</span></a></li>
							<li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Startups</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Gadgets</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Inspiration</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-3 mb-4">
				<h5 class="mb-4 text-white">Get Regular Updates</h5>
				<ul class="nav flex-column text-primary-hover">
					<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-whatsapp fa-fw me-2"></i>WhatsApp</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube fa-fw me-2"></i>YouTube</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="far fa-bell fa-fw me-2"></i>Website Notifications</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="far fa-envelope fa-fw me-2"></i>Newsletters</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-headphones-alt fa-fw me-2"></i>Podcasts</a></li>
				</ul>
			</div>

			<!-- Footer Widget -->

		</div>
		<!-- Widgets END -->

		<!-- Hot topics START -->

		<!-- Hot topics END -->
	</div>

	<!-- Footer copyright START -->
	<div class="bg-dark-overlay-3 mt-5">
		<div class="container">
			<div class="row align-items-center justify-content-md-between py-4">
				<div class="col-md-6">
					<!-- Copyright -->
					<div class="text-center text-md-start text-primary-hover text-muted">©2023 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
					</div>
				</div>
				<div class="col-md-6 d-sm-flex align-items-center justify-content-center justify-content-md-end">
					<!-- Language switcher -->
					<div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
						<a class="dropdown-toggle text-primary-hover" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
							English Edition
						</a>
						<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
							<li><a class="dropdown-item" href="#">English</a></li>
							<li><a class="dropdown-item" href="#">German </a></li>
							<li><a class="dropdown-item" href="#">French</a></li>
						</ul>
					</div>
					<!-- Links -->
					<ul class="nav text-primary-hover text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
						<li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
						<li class="nav-item"><a class="nav-link pe-0" href="#">Cookies</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer copyright END -->
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/sticky-js/sticky.min.js"></script>
<script src="assets/vendor/plyr/plyr.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
</body>

<!-- Mirrored from blogzine.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 10:35:53 GMT -->
</html>
