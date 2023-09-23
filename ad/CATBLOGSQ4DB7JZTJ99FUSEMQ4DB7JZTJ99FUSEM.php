<?php
include "includes/header.php";
$user=$_SESSION['username'];
$query="SELECT * FROM users where username='$user'";
$result = mysqli_query($connection,$query);

$row = mysqli_fetch_assoc($result);
$role=$row['role'];

if ($role == 'admin') {
 // code...



 ?>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

  <!-- =======================
Main contain START -->
<section class="py-4">
	<div class="container">
    <div class="row pb-4">
			<div class="col-12">
        <!-- Title -->
				<div class="d-sm-flex justify-content-sm-between align-items-center">
<?php

$query="SELECT * from category";
$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);
 ?>

					<h1 class="mb-2 mb-sm-0 h2">Categories <span class="badge bg-primary bg-opacity-10 text-primary"><?php echo $count; ?></span></h1>
					<a href="ECATBLOGSQ4DB7JZTJ99FUSEMQ4DB7JZTJ99FUSEME" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>Add new category</a>
				</div>
			</div>
		</div>
		<div class="row g-4">
<?php
$query="SELECT * FROM category";
$result=mysqli_query($connection,$query);

 while ($row=mysqli_fetch_assoc($result)) {
	$id=$row['id'];
	$name=$row['name'];
  $img=$row['img'];

 ?>


			<div class="col-md-6 col-xl-4">
				<!-- Category item START -->
				<div class="card border h-100">
					<!-- Card header -->
					<div class="card-header border-bottom p-3">
						<div class="d-flex align-items-center">
							<div class="icon-lg shadow bg-body rounded-circle">⛰️</div>
							<h3 class="mb-0 ms-3"><?php echo $name; ?></h3>
						</div>
					</div>

					<!-- Card body START -->
					<div class="card-body p-3">
						<!-- <p>Departure defective arranging rapturous did believe him all had supported.</p> -->

						<!-- Followers and Post -->
						<div class="d-flex justify-content-between">
							<!-- Total post -->
							<div>
								<img src="../img/category/<?php echo $img; ?>"  alt="" width="150">
							</div>

							<!-- Avatar group -->

						</div>

					</div>
					<!-- Card body END -->

					<!-- Card footer -->
					<div class="card-footer border-top text-center p-3">
            <a href="#" class="btn btn-primary-soft w-100 mb-0">View posts</a><br>
						<a href="includes/delete.php?cdelete=<?php echo $id ?>" onclick="return confirm('are you sure?')" class="btn btn-danger-soft w-100 mb-0">delete</a>
					</div>
				</div>
				<!-- Category item END -->
			</div>

<?php } ?>




		</div>
	</div>
</section>
<!-- =======================
Main contain END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->

<footer class="mb-3">
  <div class="container">
    <div class="card card-body bg-light">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6">
          <!-- Copyright -->
          <div class="text-center text-lg-start">©2023 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
          </div>
        </div>
        <div class="col-lg-6 d-sm-flex align-items-center justify-content-center justify-content-lg-end">
          <!-- Language switcher -->
          <div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
            <a class="dropdown-toggle text-body" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
              English Edition
            </a>
            <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
              <li><a class="dropdown-item" href="#">English</a></li>
              <li><a class="dropdown-item" href="#">German </a></li>
              <li><a class="dropdown-item" href="#">French</a></li>
            </ul>
          </div>
          <!-- Links -->
          <ul class="nav text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
            <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
            <li class="nav-item"><a class="nav-link pe-0" href="#">Cookies</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="../assets/vendor/apexcharts/js/apexcharts.min.js"></script>
<script src="../assets/vendor/overlay-scrollbar/js/OverlayScrollbars.min.js"></script>

<!-- Template Functions -->
<script src="../assets/js/functions.js"></script>

</body>

<!-- Mirrored from blogzine.webestica.com/dashboard-post-categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 10:52:44 GMT -->
</html>
<?php
}
else {
	header("location:../dashboard/post");
}
?>
