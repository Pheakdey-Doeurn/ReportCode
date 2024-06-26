<?php
$page = 'home';
include 'homeheader.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title> TKBSS </title>

</head>

<body id="bg">

	<?php include 'slider.php' ?>
	<!-- actionstudent -->
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
						<h5 class="title-small" style="font-family: 'Moul';">អភិវឌ្ឍន៍ និងការបណ្ដុះបណ្ដាល</h5>
						<div class="dlab-separator bg-primary"></div>
					</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
						been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
						galley of type and scrambled it to make a type specimen book.</p>

					<ul class="list-check circle primary text-black">
						<li style="font-family: 'Hanuman';">អភិវឌ្ឍន៍</li>
						<li style="font-family: 'Hanuman';">បណ្ដុះបណ្ដាល</li>
						<li style="font-family: 'Hanuman';">ឆ្ពោះទៅកាន់អនាគត​ សម្រាប់កម្ពុជានិង សាសនា</li>
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
									<h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family: 'Moul';">ប្រវត្ដិសាលាពុទ្ធិក</h1>
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
				<h2 class="title" style="font-family: 'Moul';"> រចនាសម្ព័ន្ធសាលា</h2>
				<p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's
					standard dummy text ever since the been when an unknown printer.</p>
			</div>
			<?php
			// Execute SQL query to fetch data from the database
			$sql = "SELECT * FROM imagestructure";
			$result = $conn->query($sql);

			// Check if there are any rows returned
			if ($result->num_rows > 0) {
			?>
				<div class="row justify-content-center">
					<?php
					// Loop through fetched data
					while ($row = $result->fetch_assoc()) {
					?>
						<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="dlab-box m-b30 dlab-team1">
								<div class="dlab-media">
									<a href="#">
										<img width="358" height="460" alt="" src="./admin/imagesstructure/<?php echo $row['image']; ?>" class="lazy" data-src="<?php echo $row['image']; ?>">
									</a>
								</div>
								<div class="dlab-info">
									<h4 class="dlab-title"><a href="#" style="font-family: 'Moul';"><?php echo $row['name']; ?></a></h4>
									<span class="dlab-position" style="font-family: 'Moul'; color: #FEFCFC;"><?php echo $row['position']; ?></span>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			<?php
			} else {
				// No results found
				echo "No results found";
			}

			// Close the database connection
			$conn->close();
			?>




			<div class="row justify-content-evenly">
				<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp rounded float-left" data-wow-duration="2s" data-wow-delay="0.4s">
					<div class="dlab-box m-b30 dlab-team1">
						<div class="dlab-media">
							<a href="#">
								<img width="358" height="460" alt="" src="images/our-team/teacher3.png" class="lazy" data-src="images/our-team/teacher3.png">
							</a>
						</div>
						<div class="dlab-info">
							<h4 class="dlab-title"><a href="#" style="font-family: 'Moul';">លោក សេង សំណាង</a></h4>
							<span class="dlab-position" style="font-family: 'Moul';">នាយករង</span>
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
							<h4 class="dlab-title"><a href="#" style="font-family: 'Moul';">ព្រះតេជព្រះគុណ <br />លត់ ប៊ុនចន</a></h4>
							<span class="dlab-position" style="font-family: 'Moul';">នាយករង</span>

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
							<h4 class="dlab-title"><a href="teachers-profile.html" style="font-family: 'Moul';">លោកគ្រូ ជា សាយឿន</a></h4>
							<span class="dlab-position" style="font-family: 'Moul';">គ្រូបន្ទុកថ្នាក់​ ឆ្នាំទី១</span>

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
							<h4 class="dlab-title" style="font-family: 'Moul';">លោកគ្រូ រស់ រតនៈ</a></h4>
							<span class="dlab-position" style="font-family: 'Moul';">គ្រូបន្ទុកថ្នាក់​ ឆ្នាំទី២</span>

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
							<h4 class="dlab-title" style="font-family: 'Moul';">លោកគ្រូ សួង តារា</a></h4>
							<span class="dlab-position" style="font-family: 'Moul';">គ្រូបន្ទុកថ្នាក់​ ឆ្នាំទី៣</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team member End -->

	<!-- === Team Dev === -->

	<h5 class="text-center text-bg-danger justify-content-center " style="padding: 5px; font-size: 2rem;">Developer Team</h5>
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
	<div class="section-full content-inner contact-style-1">
		<div class="container">
			<div class="row">
				<!-- Left part start -->
				<div class="col-lg-6 m-b30">
					<div class="p-a30 bg-white clearfix border-1 radius-sm">
						<h3>Send Message Us</h3>
						<div class="dzFormMsg"></div>
						<form action="#">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group ">
										<div class="input-group">

											<input name="name" type="text" class="form-control" placeholder="Your Name">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										<div class="input-group">
											<input name="email" type="email" class="form-control" placeholder="Your Email">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<div class="input-group ">
											<input name="sub" type="text" class="form-control" placeholder="Subject">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<div class="input-group">
											<textarea name="message" rows="4" class="form-control" placeholder="Your Message..."></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group form-recaptcha">
										<div class="input-group">
											<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
											<input class="form-control d-none" style="display:none;" data-recaptcha="true" data-error="Please complete the Captcha">
										</div>
									</div>
								</div>
								<div class="col-md-12 button-area">
									<span class="text-center "></span>
									<button type="submit" class="site-button ">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- Left part END -->
				<!-- right part start -->
				<div class="col-lg-6 m-b30 d-flex">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3883.2705867517!2d103.09890569999999!3d13.2710238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311acb9357a7ead7%3A0xf55873dbb6c7075c!2sWat%20Kork%20Kdouch!5e0!3m2!1sen!2skh!4v1707232387025!5m2!1sen!2skh" class="align-self-stretch radius-sm" style="border:0; width:100%;  min-height:100%;" allowfullscreen></iframe>
				</div>
				<!-- right part END -->
			</div>
		</div>
	</div>
	<!-- contact area  END -->
	<!-- Content -->
	<script src="js/script.js"></script>
	<scrip src="js/jquery.min.js">
		</script>
		<!-- Content END-->
		<?php include 'homefooter.php' ?>

</body>

</html>