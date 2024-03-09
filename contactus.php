<?php include 'homeheader.php';
include 'sendmail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> TKBSS | Contact Us </title>
</head>

<body id="bg" id="contact">
	<div class="page-content bg-gray">
		<!-- inner page banner -->
		<div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/contact.jpg);">
			<div class="container">
				<div class="dlab-bnr-inr-entry">
					<h1 class="text-white">Contact Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="home.php">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner contact-style-1">
			<div class="container">
				<!--alert messages start-->
				<?php echo $alert; ?>
   		   	    <!--alert messages end-->
                <div class="row dzseth d-flex justify-content-center">
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 bg-white p-lr20 p-tb30 center seth radius-sm">
							<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Address</h5>
								<p>Kouk Kdouch, Taphoung, Thmor koul,Battambang, Cambodia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 bg-white p-lr20 p-tb30 center seth radius-sm">
							<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Email</h5>
								<p>info@example.com <br> info@example.com</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 bg-white p-lr20 p-tb30 center seth radius-sm">
							<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Phone</h5>
								<p>+61 3 8376 6284 <br> +23 123 456 7890</p>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
					<!-- Left part start -->
                    <div class="col-lg-6 m-b30">
                        <div class="p-a30 bg-white clearfix border-1 radius-sm">
							<h3>Send Message Us</h3>
							<div class="dzFormMsg"></div>
							<form method="POST" class="dzForm" action="">
								<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" type="text" required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="email" type="email" class="form-control" required  placeholder="Your Email" >
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="subject" type="text" required class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-12">
										<div class="form-group form-recaptcha">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
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
		<script type=" text/javascript">
			if (window.history.replaceState) {
				window.history.replaceState(null, null, window.location.href);
			}
		</script>
		<!-- Content END-->
		<?php include 'homefooter.php' ?>
</body>
</html>