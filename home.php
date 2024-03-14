<?php
	$page = 'home';
	include 'homeheader.php';
    include 'sendmail.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title> TKBSS </title>

</head>

<body id="bg">

	<?php include 'slider.php' ?>
	<?php include 'actionstudents.php' ?>

	<!-- Content Section -->
	<div class="section-full content-inner bg-white">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12 m-b30 about-two align-self-start">
					<div class="row sp10">
						<div class="col-md-12 m-b10">
							<img src="images/about/about2/tkbss.jpg" class="img-cover" alt="">
						</div>
						<div class="col-md-7 m-b10">
							<img src="images/about/about2/photo1.jpg" class="img-cover" alt="">
						</div>
						<div class="col-md-5 m-b10">
							<div class="about-year bg-primary">
								<div>
									<h2 class="no-title">8+</h2>
									<h4 class="title">Years Experience Working</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 m-b30 about-two">
					<div class="section-head m-b20">
						<h2 class="title">About our School
							<a href="about.php"></a>
						</h2>
						<h5 class="title-small">អភិវឌ្ឍន៍ និងការបណ្ដុះបណ្ដាល</h5>
						<div class="dlab-separator bg-primary"></div>
					</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
						been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>

					<ul class="list-check circle primary text-black">
						<li>អភិវឌ្ឍន៍</li>
						<li>បណ្ដុះបណ្ដាល</li>
						<li>ឆ្ពោះទៅកាន់អនាគត​ សម្រាប់កម្ពុជានិង សាសនា</li>
					</ul>
					<!-- == Modal == -->
					<!-- <a href="about.php" class="site-button btnhover6">Read More</a> -->
					<!-- Vertically centered scrollable modal -->
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
						Read More
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">ប្រវត្ដិសាលាពុទ្ធិក</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<img src="images/about/about2/tkbss.jpg" alt="" />
									<p class="mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
										been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
										galley of type and scrambled it to make a type specimen book.</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Content Section -->
	<!-- Team member -->
	<div class="section-full bg-gray content-inner">
		<div class="container">
			<div class="section-head text-center ">
				<h2 class="title"> រចនាសម្ព័ន្ធសាលា</h2>
				<p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's
					standard dummy text ever since the been when an unknown printer.</p>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
					<div class="dlab-box m-b30 dlab-team1">
						<div class="dlab-media">
							<a href="#">
								<img width="358" height="460" alt="" src="images/our-team/monk.png" class="lazy" data-src="images/our-team/monk.png">
							</a>
						</div>
						<div class="dlab-info">
							<h4 class="dlab-title"><a href="#">លោកគ្រូសិរីសត្ថា<span>ហេង សុខន</span></a></h4>
							<span class="dlab-position">ព្រះនាយក</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-evenly">
				<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp rounded float-left" data-wow-duration="2s" data-wow-delay="0.4s">
					<div class="dlab-box m-b30 dlab-team1">
						<div class="dlab-media">
							<a href="#">
								<img width="358" height="460" alt="" src="images/our-team/teacher3.png" class="lazy" data-src="images/our-team/teacher3.png">
							</a>
						</div>
						<div class="dlab-info">
							<h4 class="dlab-title"><a href="#">លោក សេង សំណាង</a></h4>
							<span class="dlab-position">នាយករង</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
					<div class="dlab-box m-b30 dlab-team1 ">
						<div class="dlab-media ">
							<a href="#">
								<img width="358" height="460" alt="" src="images/our-team/monk1.png" class="lazy" data-src="images/our-team/monk1.png">
							</a>
						</div>
						<div class="dlab-info">
							<h4 class="dlab-title"><a href="#">ព្រះតេជគុណ លត់ ប៊ុនចន</a></h4>
							<span class="dlab-position">នាយករង</span>

						</div>
					</div>
				</div>
			</div>


			<div class="row justify-content-evenly">
				<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
					<div class="dlab-box m-b30 dlab-team1">
						<div class="dlab-media">
							<a href="#">
								<img width="358" height="460" alt="" src="images/our-team/teacher2.png" class="lazy" data-src="images/our-team/teacher2.png">
							</a>
						</div>
						<div class="dlab-info">
							<h4 class="dlab-title"><a href="teachers-profile.html">លោកគ្រូ ជា សាយឿន</a></h4>
							<span class="dlab-position">គ្រូបន្ទុកថ្នាក់​ ឆ្នាំទី១</span>

						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
					<div class="dlab-box m-b30 dlab-team1">
						<div class="dlab-media">
							<a href="#">
								<img width="358" height="460" alt="" src="images/our-team/teacher.png" class="lazy" data-src="images/our-team/teacher.png">
							</a>
						</div>
						<div class="dlab-info">
							<h4 class="dlab-title">លោកគ្រូ រស់ រតនៈ</a></h4>
							<span class="dlab-position">គ្រូបន្ទុកថ្នាក់​ ឆ្នាំទី២</span>

						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
					<div class="dlab-box m-b30 dlab-team1">
						<div class="dlab-media">
							<a href="#">
								<img width="358" height="460" alt="" src="images/our-team/teacher1.png" class="lazy" data-src="images/our-team/teacher1.png">
							</a>
						</div>
						<div class="dlab-info">
							<h4 class="dlab-title">លោកគ្រូ សួង តារា</a></h4>
							<span class="dlab-position">គ្រូបន្ទុកថ្នាក់​ ឆ្នាំទី៣</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team member End -->

	<!-- === Team Dev === -->

	<h5 class="text-center text-bg-danger justify-content-center " style="padding: 5px;">Developer Team</h5>
	<div class="dev-body">
		<div class="dev-container">
			<input type="radio" name="dot" id="one">
			<input type="radio" name="dot" id="two">
			<div class="main-card">
				<div class="cards">
					<div class="card">
						<div class="content">
							<div class="img">
								<img src="assets/img/img3.jpg" alt="">
							</div>
							<div class="details">
								<div class="name">Oern Kimeng</div>
								<div class="job">Web Designer</div>
							</div>
							<div class="media-icons">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="content">
							<div class="img">
								<img src="assets/img/img4.jpg" alt="">
							</div>
							<div class="details">
								<div class="name">Doeurn Pheakdey</div>
								<div class="job">Web Designer</div>
							</div>
							<div class="media-icons">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="content">
							<div class="img">
								<img src="assets/img/img6.jpg" alt="">
							</div>
							<div class="details">
								<div class="name">Phoert Ratana</div>
								<div class="job">Web Designer</div>
							</div>
							<div class="media-icons">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="cards">
					<div class="card">
						<div class="content">
							<div class="img">
								<img src="assets/img/img1.jpg" alt="">
							</div>
							<div class="details">
								<div class="name">Touch Saven</div>
								<div class="job">Web Designer</div>
							</div>
							<div class="media-icons">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="content">
							<div class="img">
								<img src="assets/img/img2.jpg" alt="tra">
							</div>
							<div class="details">
								<div class="name">Soeurn Sophorn</div>
								<div class="job">UX/UI Designer</div>
							</div>
							<div class="media-icons">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="content">
							<div class="img">
								<img src="assets/img/img5.jpg" alt="tra">
							</div>
							<div class="details">
								<div class="name">Chomrouen Sopheaktra</div>
								<div class="job">UX/UI Designer</div>
							</div>
							<div class="media-icons">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="button">
				<label for="one" class=" active one"></label>
				<label for="two" class="two"></label>
			</div>
		</div>
	</div>
	<!-- End Team Dev -->
	<!-- Contact Us Section -->
	<div class="contact-us">
		<div class="container">
			<!--alert messages start-->
			<?php echo $alert; ?>
   		    <!--alert messages end-->
			<div class="row">
				<div class="col-md-7">
					<div class="section-title">
						<h2 class="mt-2 text-md-center">ទាក់ទងតាមរយៈ</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7">
						<form class="mb-4 mb-lg-0" action="" method="POST">
							<div class="form-row">
								<div class="col-md-13 form-group">
									<input type="text" name="name" class="txtname form-control" id="name" required placeholder="Name" />
								</div>
								<div class="col-md-13 form-group">
									<input type="email" class="txtmessage form-control" name="email" required id="email" placeholder="Email" />
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" required placeholder="Message" cols="7" rows="7"></textarea>
							</div>
							<button type="submit" name="send" class="btn btn-primary w-100">SEND</button>
						</form>
					</div>

					<div class="col-lg-5">
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3883.2705867517!2d103.09890569999999!3d13.2710238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311acb9357a7ead7%3A0xf55873dbb6c7075c!2sWat%20Kork%20Kdouch!5e0!3m2!1sen!2skh!4v1707232387025!5m2!1sen!2skh" width="100%" height="350" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0""></iframe>
							</div>
						</div>
					</div>
				</div>
			  </div>
			  <!-- == End Contact Us == -->
		<!-- Content -->
		<script type="text/javascript">
			if(window.history.replaceState){
				window.history.replaceState(null, null, window.location.href);
			}
		</script>
		<!-- Content END-->
		<?php include 'homefooter.php' ?>

</body>

</html>