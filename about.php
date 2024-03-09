<?php include 'homeheader.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> TKBSS | About Us</title>
</head>

<body id="about">
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/tkbss1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">About Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="home.php">Home</a></li>
							<li>About Us </li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
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



	<?php include 'homefooter.php' ?>
</body>

</html>