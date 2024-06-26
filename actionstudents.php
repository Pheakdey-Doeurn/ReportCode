<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta property="og:image" content="error-404.html">

	<meta name="twitter:image" content="error-404.html">
	<meta name="twitter:card" content="summary_large_image">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<!-- Google Font -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap');
	</style>
</head>

<body id="bg">

	<div class="dlab-divider bg-gray-dark tb10"></div>
	<div class="section-full bg-white content-inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="sort-title clearfix text-center">
						<h4 style="font-family: 'Moul';">សកម្មភាពទូទៅរបស់សមណៈសិស្ស</h4>
					</div>

					<!-- Portfolio Carousel with no margin -->
					<div class="section-content box-sort-in m-b30 button-example">
						<div class="portfolio-carousel-nogap owl-loaded owl-theme owl-carousel mfp-gallery gallery owl-btn-center-lr owl-btn-1">
							<?php
							$sqlimageaction = "SELECT * FROM pageaction ORDER BY id DESC";
							$result = $conn->query($sqlimageaction);

							if ($result->num_rows > 0) {
								// Loop through fetched image data
								while ($row = $result->fetch_assoc()) {
									// Change image source to point to image_zoom.php with image ID as a query parameter
									$image_src = "image_zoom.php?image_id=" . $row['id'];
							?>
									<div class="item">
										<div class="ow-portfolio">
											<div class="ow-portfolio-img dlab-img-overlay1 dlab-img-effect zoom-slow">
												<img src="admin/uploads/<?= $row['file_name'] ?>" alt="<?= $row['file_name'] ?>">
												<div class="overlay-bx">
													<div class="overlay-icon">
														<span data-exthumbimage="admin/uploads/<?= $row['file_name'] ?>" data-src="admin/uploads/<?= $row['file_name'] ?>" class="check-km" title="admin/uploads/<?= $row['file_name'] ?>">
															<i class="fas fa-search-plus icon-bx-xs zoom-in"></i>
														</span>
														<a href="javascript:void(0);" class="copy-link">
															<i class="fas fa-link icon-bx-xs"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
							<?php
								}
							} else {
								// No images found
								echo "No images found.";
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Portfolio Carousel with no margin END -->
	</div>
	<!-- JavaScript for Zoom, Copy Link, Zoom In, Zoom Out, and Close -->
	<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const zoomInIcons = document.querySelectorAll('.zoom-in');
        const zoomOutIcons = document.querySelectorAll('.zoom-out');
        const closeIcons = document.querySelectorAll('.close-icon');

        // Function to zoom in the image
        function zoomInImage(image) {
            // You can adjust the scale factor as needed
            const scaleFactor = 1.2;
            // Get the current dimensions of the image
            const width = image.clientWidth;
            const height = image.clientHeight;
            // Calculate new dimensions after zooming in
            const newWidth = width * scaleFactor;
            const newHeight = height * scaleFactor;
            // Apply the new dimensions
            image.style.width = newWidth + 'px';
            image.style.height = newHeight + 'px';
        }

        // Function to zoom out the image
        function zoomOutImage(image) {
            // You can adjust the scale factor as needed
            const scaleFactor = 0.8; // Zoom out by reducing size to 80% of the current size
            // Get the current dimensions of the image
            const width = image.clientWidth;
            const height = image.clientHeight;
            // Calculate new dimensions after zooming out
            const newWidth = width * scaleFactor;
            const newHeight = height * scaleFactor;
            // Apply the new dimensions
            image.style.width = newWidth + 'px';
            image.style.height = newHeight + 'px';
        }

        zoomInIcons.forEach(function (icon) {
            icon.addEventListener('click', function () {
                // Find the image associated with the clicked icon
                const image = icon.closest('.ow-portfolio-img').querySelector('img');
                // Call the zoomInImage function
                zoomInImage(image);
            });
        });

        zoomOutIcons.forEach(function (icon) {
            icon.addEventListener('click', function () {
                // Find the image associated with the clicked icon
                const image = icon.closest('.ow-portfolio-img').querySelector('img');
                // Call the zoomOutImage function
                zoomOutImage(image);
            });
        });

        closeIcons.forEach(function (icon) {
            icon.addEventListener('click', function () {
                // Find the image associated with the clicked icon
                const image = icon.closest('.ow-portfolio-img').querySelector('img');
                // Reset the image size
                image.style.width = '';
                image.style.height = '';
            });
        });

        const copyLinkButtons = document.querySelectorAll('.copy-link');
        copyLinkButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const imageUrl = button.parentElement.previousElementSibling.getAttribute('data-src');
                // Copy image URL to clipboard
                navigator.clipboard.writeText(imageUrl).then(function () {
                    console.log('Image URL copied to clipboard: ' + imageUrl);
                    // You can also show a success message to the user
                }).catch(function (error) {
                    console.error('Failed to copy image URL: ', error);
                    // Handle error, if any
                });
            });
        });
    });
​​​​​    </script> -->

	<!-- JAVASCRIPT FILES ========================================= -->
	<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
	<script src="plugins/wow/wow.js"></script><!-- WOW JS -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
	<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
	<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
	<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
	<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
	<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
	<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
	<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
	<script src="plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- Lightgallery -->
	<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
	<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
	<script src="plugins/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
	<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->

</body>

</html>