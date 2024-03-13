<!-- === action student === -->
<!-- == Latest blog == -->
<div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
	<div class="container">
		<div class="section-head text-center">
			<h2 class="title">សកម្មភាព​​ទូទៅ</h2>
			<p>ការសិក្សារបស់សមណៈសិស្ស និង​ ក្នុងកម្មវិធីផ្សេងៗ</p>
		</div>

		<?php
		$postQuery = "SELECT * FROM post ORDER BY id DESC LIMIT 6"; // Fetching 5 most recent posts
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
										<!-- Display the post image if available -->
										<img src="<?= $row['image']; ?>" class="w-100 rounded" alt="Img">
									<?php else : ?>
										<!-- Display a placeholder image if no image is available -->
										<img src="admin/uploads/no_pictures.png" class="w-100 rounded" alt="Img">
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
										<h4 class="post-title"><a href="view_post.php"><?= $row['title'] ?></a></h4>
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
			?>
		</div>
	</div>
</div>
<!-- End Lastest blog -->