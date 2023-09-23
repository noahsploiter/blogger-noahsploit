<?php include "includes/header.php"; ?>

<main>

<section>
	<div class="container">
		<div class="row">
      <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
        <div class="p-4 p-sm-5 bg-primary bg-opacity-10 rounded">
					<h2>Log in to your account</h2>
					<!-- Form START -->

<?php

if (isset($_POST['submit'])) {
 $username=$_POST['username'];
 $password=$_POST['password'];

 $username=mysqli_real_escape_string($connection,$username);
 $password=mysqli_real_escape_string($connection,$password);

 $query="SELECT * FROM users where username = '$username'";
 $admin_query=mysqli_query($connection,$query);
 if (mysqli_num_rows($admin_query) > 0) {
	 while ($row = mysqli_fetch_assoc($admin_query)) {
	 	if (password_verify($password,$row["password"])) {

			$_SESSION['username']=$username;
	 		header("location:ad/Q4DB7JZTJ99FUSEMQ4DB7JZTJ99FUSEM");
	 	}
		else {
			echo "<div class='alert alert-success' role='alert'>
				<h3 style='color:red;'>wrong username or password</h3><br> </div><br>";
		}
	 }

 }
 else {
	 echo "<div class='alert alert-success' role='alert'>
 		 <h3 style='color:red;'>wrong username or password</h3><br> </div><br>";
 }
}


 ?>



					<form class="mt-4" method="post">
						<!-- Email -->
						<div class="mb-3">
							<label class="form-label" for="exampleInputEmail1">username</label>
							<input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="username">
						</div>
						<!-- Password -->
						<div class="mb-3">
							<label class="form-label" for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
						</div>
						<!-- Checkbox -->
						<!-- <div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">keep me signed in</label>
						</div> -->
						<!-- Button -->
						<div class="row align-items-center">
							<div class="col-sm-4">
								<button type="submit" name="submit" class="btn btn-success">Sign me in</button>
							</div>
							<div class="col-sm-8 text-sm-end">
								<span>Don't have an account? <a href="signup"><u>Sign up</u></a></span>
							</div>
						</div>
					</form>
					<!-- Form END -->
					<hr>
					<!-- Social-media btn -->
					<!-- <div class="text-center">
						<p>Sign in with your social network for quick access</p>
						<ul class="list-unstyled d-sm-flex mt-3 justify-content-center">
							<li class="mx-2">
								<a href="#" class="btn bg-facebook d-inline-block"><i class="fab fa-facebook-f me-2"></i> Sign in with Facebook</a>
							</li>
							<li class="mx-2">
								<a href="#" class="btn bg-google d-inline-block"><i class="fab fa-google me-2"></i> Sign in with google</a>
							</li>
						</ul>
					</div> -->
        </div>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="pb-0">
	<div class="container">
		<hr>
		<!-- Widgets START -->
		<div class="row pt-5">
			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-4 mb-4">
				<img class="light-mode-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item" src="assets/images/logo-light.svg" alt="logo">
				<p class="mt-3">The next-generation blog, news, and magazine theme for you to start sharing your stories today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the news.</p>
				<div class="mt-4">©2023 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
				</div>
			</div>

			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-3 mb-4">
				<h5 class="mb-4">Navigation</h5>
				<div class="row">
					<div class="col-6">
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link pt-0" href="#">Features</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Style Guide</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Get Theme</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Support</a></li>
						</ul>
					</div>
 					<div class="col-6">
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link pt-0" href="#">News</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Career <span class="badge text-bg-danger ms-2">2 Job</span></a></li>
							<li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Startups</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Gadgets</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-3 mb-4">
				<h5 class="mb-4">Browse by Tag</h5>
				<ul class="list-inline">
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Marketing</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
				</ul>
			</div>

			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-2 mb-4">
				<h5 class="mb-4">Our Social handles</h5>
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-facebook-square fa-fw me-2 text-facebook"></i>Facebook</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter-square fa-fw me-2 text-twitter"></i>Twitter</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin fa-fw me-2 text-linkedin"></i>Linkedin</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube-square fa-fw me-2 text-youtube"></i>YouTube</a></li>
				</ul>
			</div>
		</div>
		<!-- Widgets END -->
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from blogzine.webestica.com/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 10:36:05 GMT -->
</html>
