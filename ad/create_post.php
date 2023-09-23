<?php include "includes/header.php"; ?>
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
					<h1 class="mb-0 h2">Create a Blog</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<!-- Chart START -->
				<div class="card border">
					<!-- Card body -->
					<div class="card-body">
<?php
if (isset($_POST['submit'])) {
	$title=$_POST['title'];
	$content=$_POST['content'];

	$post_image=$_FILES['image']['name'];
	$post_image_temp=$_FILES['image']['tmp_name'];

	$tag=$_POST['tag'];
	$category=$_POST['category'];
	 $user=$_SESSION['username'];

$title=mysqli_real_escape_string($connection,$title);
$content=mysqli_real_escape_string($connection,$content);
$tag=mysqli_real_escape_string($connection,$tag);
$category=mysqli_real_escape_string($connection,$category);


 move_uploaded_file($post_image_temp, "../img/$post_image" );
 $date=date("Y-m-d H:i:s");

$query="INSERT INTO blogs(title,content,name,img,post_time,tags,category) ";
$query .="VALUES ('$title','$content','$user','$post_image','$date','$tag','$category')";

$result=mysqli_query($connection,$query);

if ($result) {
	echo "<h1> your BLOG is uploaded sucessfully</h1>";
}

}




 ?>



            <!-- Form START -->
            <form method="post"  enctype="multipart/form-data">
              <!-- Main form -->
              <div class="row">
                <div class="col-12">
                  <!-- Post name -->
                  <div class="mb-3">
                    <label class="form-label">Blog Title</label>
                    <input required id="con-name" name="title" type="text" class="form-control" placeholder="Post name" required>
                    <!-- <small>Moving heaven divide two sea female great midst spirit</small> -->
                  </div>
                </div>
                <!-- Post type START -->

              <!-- Post type END -->

              <!-- Short description -->
              <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Blog content </label>
                    <textarea class="form-control" name="content" rows="8" placeholder="Add description" required></textarea>
                </div>
              </div>

                <div class="col-12">
                  <div class="mb-3">
                  <!-- Image -->
                  <div class="position-relative">
                    <h6 class="my-2">Upload post image here, or<a href="#!" class="text-primary"> Browse</a></h6>
                    <label class="w-100" style="cursor:pointer;">
                      <span>
                        <input class="form-control stretched-link" type="file" name="image" id="image" >
                      </span>
                    </label>
                  </div>
                  <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
                  </div>
                </div>
                <div class="col-lg-7">
                  <!-- Tags -->
                  <div class="mb-3">
                    <label class="form-label">Tags</label>
                    <textarea class="form-control" name="tag"  rows="1" placeholder="optional"></textarea>
                    <small>Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g. javascript, react, marketing.</small>
                  </div>
                </div>
                <div class="col-lg-5">
                  <!-- Message -->
                  <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="category" aria-label="Default select example" required>
                      <option value="">choose</option>
											<?php
$query="SELECT * FROM category";
$result=mysqli_query($connection,$query);
while ($row=mysqli_fetch_assoc($result)) {
	$name=$row['name'];
	$tag=$row['tag'];

											 ?>
				<option value = '<?php echo $tag; ?>'> <?php echo $name; ?> </option>
			<?php } ?>
                    </select>
                  </div>
                </div>
                <!-- <div class="col-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="postCheck">
                    <label class="form-check-label" for="postCheck">
                      Make this post featured?
                    </label>
                  </div>
                </div> -->
                <!-- Create post button -->
                <div class="col-md-12 text-start">
                  <button class="btn btn-primary w-100" name="submit" type="submit">Create BLOG</button>
                </div>
              </div>
            </form>
            <!-- Form END -->
					</div>
				</div>
				<!-- Chart END -->
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

<!-- Mirrored from blogzine.webestica.com/dashboard-post-create.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 10:52:44 GMT -->
</html>
