<!-- === action student === -->
<!-- == Latest blog == -->
<div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
	<div class="container">
		<div class="section-head text-center">
			<h2 class="title">សកម្មភាព​​ទូទៅ</h2>
			<p>ការសិក្សារបស់សមណៈសិស្ស និង​ ក្នុងកម្មវិធីផ្សេងៗ</p>
		</div>
		<?php
		define( 'DB_HOST', 'localhost');
		define( 'DB_USER', 'root' );         
		define( 'DB_PASSWORD', '' );  	
		define ( 'DB_NAME', 'schooldb'); 

		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		// Query to retrieve recent posts
		$postQuery = "SELECT * FROM post ORDER BY date DESC LIMIT 5"; // Fetching 5 most recent posts
		$result = mysqli_query($conn, $postQuery);
		?>
		<div class="blog-carousel owl-none owl-carousel">
			<?php
			// Check if there are any results
			if ($result) {
				// Loop through each row of the result set
				if (mysqli_num_rows($result) > 0) {
					foreach ($result as $row) {
			?>
						<div class="item">
							<div class="blog-post blog-grid blog-rounded blog-effect1 post-style-1">
								<div class="dlab-post-media dlab-img-effect">
									<?php if ($row['image'] != '') : ?>
										<img src="<?= $row['image']; ?>" alt="Img">
									<?php else : ?>
										<img src="./admin/uploads/Monk.jpg" alt="Img">
									<?php endif; ?>
								</div>
								<div class="dlab-info p-a20">
									<div class="dlab-post-meta">
										<ul>
											<li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);"><?= $row['author'] ?></a> </li>
											<li class="post-tag"> <a href="javascript:void(0);"><?= $row['tag'] ?></a> </li>
										</ul>
									</div>
									<div class="dlab-post-title">
										<h4 class="post-title"><a href="#"><?= $row['title'] ?></a></h4>
									</div>
									<div class="dlab-post-text">
										<p><?= $row['text_body'] ?></p>
									</div>
									<div class="post-footer">
										<div class="dlab-post-meta">
											<ul>
												<li class="post-date"> <i class="la la-clock"></i> <strong><?= $row['date'] ?></strong> </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
			<?php
					}
				}
			} else {
				echo "<h4>No Record Found</h4>";
			}
			// Close the database connection
			mysqli_close($conn);
			?>
		</div>
	</div>
</div>
<!-- End Lastest blog -->