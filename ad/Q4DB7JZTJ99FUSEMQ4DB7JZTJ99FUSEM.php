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
Post list START -->
<section class="py-4">
	<div class="container">
    <div class="row pb-4">
			<div class="col-12">
        <!-- Title -->
				<div class="d-sm-flex justify-content-sm-between align-items-center">
					<h1 class="mb-2 mb-sm-0 h2">MANAGE USERS </h1>
					<!-- <a href="create_post" class="btn btn-sm btn-primary mb-1"><i class="fas fa-plus me-5"></i>Add a post</a> -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
          <div class="row g-4 mb-4">
            <div class="col-sm-4 col-lg-4">
              <!-- Card START -->
              <div class="card card-body border h-100">
                <!-- Icon -->
                <div class="fs-3 text-start text-success">
                  <i class="bi bi-file-earmark-post"></i>
                </div>
                <!-- Content -->
                <div class="ms-0">
									<?php

 $query="SELECT * from users where role !='admin'";
 $result=mysqli_query($connection,$query);
 $count=mysqli_num_rows($result);
									 ?>
                  <h3 class="mb-0" style="font-weight:bold;color:blue;"><?php echo $count; ?></h3>
                  <h6 class="mb-0" >BLOGGERS</h6>
                </div>
              </div>
              <!-- Card END -->
            </div>



          </div>
          <!-- Post list table START -->
          <div class="card border bg-transparent rounded-3">

            <!-- Card body START -->
            <div class="card-body p-3">

              <!-- Search and select START -->
              <div class="row g-3 align-items-center justify-content-between mb-3">
                <!-- Search -->

                <!-- <div class="col-md-8">
                  <form class="rounded position-relative">
                    <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                  </form>
                </div> -->

                <!-- Select option -->

              </div>
              <!-- Search and select END -->

              <!-- Post list table START -->
              <div class="table-responsive border-0">
                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                  <!-- Table head -->
                  <thead class="table-dark">
                    <tr>
                      <th scope="col" class="border-0 rounded-start">full name</th>
                      <!-- <th scope="col" class="border-0">Author Name</th> -->
                      <th scope="col" class="border-0">username</th>
                      <th scope="col" class="border-0">role</th>
											<th scope="col" class="border-0">promote/demote</th>
                      <!-- <th scope="col" class="border-0">Status</th> -->
                      <th scope="col" class="border-0 rounded-end">Action</th>
                    </tr>
                  </thead>

                  <!-- Table body START -->
                  <tbody class="border-top-0">
                    <!-- Table item -->
<?php

$query="SELECT * from users ";
$result=mysqli_query($connection,$query);
while ($row=mysqli_fetch_assoc($result)) {
	$id=$row['id'];
$name=$row['name'];
$username=$row['username'];
$role=$row['role'];





 ?>

                    <tr>
                      <!-- Table data -->
                      <td>
                        <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#"><?php echo $name; ?></a></h6>
                      </td>
                      <!-- Table data -->
                      <!-- <td>
                        <h6 class="mb-0"><a href="#">Lori Stevens</a></h6>
                      </td> -->
                      <!-- Table data -->
                      <td><?php echo $username; ?></td>
                      <!-- Table data -->
                      <td>
												<?php if($role=='user'){ ?>
                        <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i><?php echo $role; ?></a>
											<?php }else{ ?>
												  <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i><?php echo $role; ?></a><?php } ?>
                      </td>
											<td><a href="includes/promotion?user=<?php echo $id; ?>" onClick="return confirm(' are you sure?')"  class="btn btn-outline-danger btn-sm">USER

											<a href="includes/promotion?admin=<?php echo $id; ?>" onClick="return confirm(' are you sure?')" class="btn btn-outline-success btn-sm" >ADMIN</td>
                      <!-- Table data -->
                      <!-- <td>
                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Live</span>
                      </td> -->
                      <!-- Table data -->
                      <td>
                        <div class="d-flex gap-2">
                          <a href="includes/delete.php?udelete=<?php echo $id; ?>" onClick="return confirm(' are you sure?')" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                          <!-- <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a> -->
                        </div>
                      </td>
                    </tr>
<?php } ?>

                    <!-- Table item -->
                  </tbody>
                  <!-- Table body END -->
                </table>
              </div>
              <!-- Post list table END -->

              <!-- Pagination START -->
              <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                <!-- Content -->
                <!-- <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p> -->
                <!-- Pagination -->
                <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                  <ul class="pagination pagination-sm pagination-bordered mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- Pagination END -->
            </div>
          </div>
          <!-- Post list table END -->
      </div>
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
<script src="../assets/vendor/quill/js/quill.min.js"></script>

<!-- Template Functions -->
<script src="../assets/js/functions.js"></script>

</body>

<!-- Mirrored from blogzine.webestica.com/dashboard-post-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 10:52:44 GMT -->
</html>
<?php
}
else {
	header("location:../dashboard/post");
}

 ?>
