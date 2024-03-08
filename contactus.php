<?php include 'homeheader.php'; include 'sendmail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TKBSS | Contact Us </title>
</head>
<body id="contact">
<div class="contact-us">
    <!--alert messages start-->
			<?php echo $alert; ?>
   		    <!--alert messages end-->
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="section-title">
						<h2 class="mt-2 text-center">ទាក់ទងតាមរយៈ</h2>
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