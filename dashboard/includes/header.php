<?php include "../includes/db.php";
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
  header("location:../signin");
}

 ?>
 <!DOCTYPE html>
 <html lang="en">

 <!-- Mirrored from blogzine.webestica.com/dashboard-post-create.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 10:52:44 GMT -->
 <head>
 	<title>Blogzine - Blog and Magazine Bootstrap 5 Theme</title>

 	<!-- Meta Tags -->
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<meta name="author" content="Webestica.com">
 	<meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

 	<!-- Dark mode -->
 	<script>
 		const storedTheme = localStorage.getItem('theme')

 		const getPreferredTheme = () => {
 			if (storedTheme) {
 				return storedTheme
 			}
 			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
 		}

 		const setTheme = function (theme) {
 			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
 				document.documentElement.setAttribute('data-bs-theme', 'dark')
 			} else {
 				document.documentElement.setAttribute('data-bs-theme', theme)
 			}
 		}

 		setTheme(getPreferredTheme())

 		window.addEventListener('DOMContentLoaded', () => {
 		    var el = document.querySelector('.theme-icon-active');
 			if(el != 'undefined' && el != null) {
 				const showActiveTheme = theme => {
 				const activeThemeIcon = document.querySelector('.theme-icon-active use')
 				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
 				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

 				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
 					element.classList.remove('active')
 				})

 				btnToActive.classList.add('active')
 				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
 			}

 			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
 				if (storedTheme !== 'light' || storedTheme !== 'dark') {
 					setTheme(getPreferredTheme())
 				}
 			})

 			showActiveTheme(getPreferredTheme())

 			document.querySelectorAll('[data-bs-theme-value]')
 				.forEach(toggle => {
 					toggle.addEventListener('click', () => {
 						const theme = toggle.getAttribute('data-bs-theme-value')
 						localStorage.setItem('theme', theme)
 						setTheme(theme)
 						showActiveTheme(theme)
 					})
 				})

 			}
 		})

 	</script>

 	<!-- Favicon -->
 	<link rel="shortcut icon" href="../assets/images/favicon.ico">

 	<!-- Google Font -->
 	<link rel="preconnect" href="https://fonts.gstatic.com/">
 	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet">

 	<!-- Plugins CSS -->
 	<link rel="stylesheet" type="text/css" href="../assets/vendor/font-awesome/css/all.min.css">
 	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
 	<link rel="stylesheet" type="text/css" href="../assets/vendor/apexcharts/css/apexcharts.css">
   <link rel="stylesheet" type="text/css" href="../assets/vendor/quill/css/quill.snow.css">

 	<!-- Theme CSS -->
 	<link id="style-switch" rel="stylesheet" type="text/css" href="../assets/css/style.css">

 </head>

 <body>

 <!-- =======================
 Header START -->
 <header class="navbar-light navbar-sticky header-static border-bottom navbar-dashboard">
 	<!-- Logo Nav START -->
 	<nav class="navbar navbar-expand-xl">
 		<div class="container">
 			<!-- Logo START -->
 			<a class="navbar-brand me-3" href="index">
 			<h1>NoahSploit</h1>
 			</a>
 			<!-- Logo END -->

 			<!-- Responsive navbar toggler -->
 			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
 				<span class="text-body h6 d-none d-sm-inline-block">Menu</span>
 				<span class="navbar-toggler-icon"></span>
 			</button>

 			<!-- Main navbar START -->
 			<div class="collapse navbar-collapse" id="navbarCollapse">
 				<ul class="navbar-nav navbar-nav-scroll mx-auto">

 					<!-- Nav item 1 Demos -->
 					<li class="nav-item"><a class="nav-link" href="post"><i class="bi bi-house-door me-1"></i>Dashboard</a></li>
					<li class="nav-item"><a class="nav-link" href="create_post"><i class="bi bi-post me-1"></i>Create a Blog</a></li>

 					<!-- Nav item 2 Post -->


 					<!-- Nav item 3 Pages -->

 				</ul>

 				<!-- Search dropdown START -->
 				<!-- <div class="nav my-3 my-xl-0 px-4 px-lg-1 flex-nowrap align-items-center">
 					<div class="nav-item w-100">
 						<form class="position-relative">
 							<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
 							<button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
 						</form>
 					</div>
 				</div> -->
 				<!-- Search dropdown END -->
 			</div>
 		  <!-- Main navbar END -->

 			<!-- Nav right START -->
 			<div class="nav flex-nowrap align-items-center">

 				<!-- Notification dropdown START -->

 				<!-- Notification dropdown END -->

 				<!-- Profile dropdown START -->
 				<div class="nav-item ms-2 ms-md-3 dropdown">
 					<!-- Avatar -->
 					<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
 						<img class="avatar-img rounded-circle" src="../assets/images/avatar/03.jpg" alt="avatar">
 					</a>

 					<!-- Profile dropdown START -->
 					<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
 						<!-- Profile info -->
 						<li class="px-3">
 							<div class="d-flex align-items-center">
 								<!-- Avatar -->
 								<div class="avatar me-3">
 									<img class="avatar-img rounded-circle shadow" src="../assets/images/avatar/03.jpg" alt="avatar">
 								</div>
 								<div>
<?php
$user=$_SESSION['username'];
$query="SELECT * FROM users where username='$user'";
$result=mysqli_query($connection,$query);

$row=mysqli_fetch_assoc($result);
$name=$row['name'];

 ?>

 									<a class="h6 mt-2 mt-sm-0" href="#"> <?php echo $name; ?></a>
 									<p class="small m-0">username : <?php echo $user; ?></p>
 								</div>
 							</div>
 							<hr>
 						</li>
 						<!-- Links -->
 						<!-- <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
 						<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
 						<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li> -->
 						<li><a class="dropdown-item" href="logout"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
 						<li class="dropdown-divider mb-3"></li>
 						<li>
 							<div class="align-items-center text-center py-0">
 								<span class="me-3">mode:</span>
 								<div class="btn-group theme-icon-active" role="group" aria-label="Default button group">
 									<button type="button" class="btn btn-light btn-sm mb-0" data-bs-theme-value="light">
 										<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch" viewBox="0 0 16 16">
 											<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
 											<use href="#"></use>
 										</svg>
 									</button>
 									<button type="button" class="btn btn-light btn-sm mb-0" data-bs-theme-value="dark">
 										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch" viewBox="0 0 16 16">
 											<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
 											<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
 											<use href="#"></use>
 										</svg>
 									</button>
 									<button type="button" class="btn btn-light btn-sm mb-0 active" data-bs-theme-value="auto">
 										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
 											<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
 											<use href="#"></use>
 										</svg>
 									</button>
 								</div>
 							</div>
 						</li>
 					</ul>
 					<!-- Profile dropdown END -->
 				</div>
 				<!-- Profile dropdown END -->

 			<!-- Nav right END -->
 			</div>
 		</div>
 	</nav>
 	<!-- Logo Nav END -->
 </header>
